<?php

if(!class_exists('SupploogleUser')){
    class SupploogleUser{
        
        function register($redirect){
            global $sdb;
            
            if(!empty($_POST)&&$this->check_referrer()){
                /* 
		 * Here we actually run the check to see if the form was submitted from our
		 * site. Since our registration from submits to itself, this is pretty easy. If
		 * the form submission didn't come from the register.php page on our server,
		 * we don't allow the data through.
		 */
		
                    //Set up the variables we'll need to pass to our insert method
                    //This is the name of the table we want to insert data into
                    $table = 'users';
                    //These are the fields in that table that we want to insert data into
                    $fields = array('user_name','user_pass','user_email','user_registered');
                    //These are the values from our registration form... cleaned using our clean method
                    $values = $sdb->clean($_POST);
                    //Now, we're breaking apart our $_POST array, so we can storely our password securely
                    $username = $_POST['username'];
                    $userpass = $_POST['password'];
                    $useremail = $_POST['email'];
                    $userreg = $_POST['date'];
                    if(!empty($username)&&!empty($userpass)&&!empty($useremail)&&filter_var($useremail, FILTER_VALIDATE_EMAIL)){
                        
                        $get_user_by_username = $sdb->select("SELECT * FROM users WHERE user_name='$username'");
                        $get_user_by_useremail = $sdb->select("SELECT * FROM users WHERE user_email='$useremail'");
                        $row_get_user = mysql_fetch_assoc($get_user_by_username);
                        $row_get_new_user = mysql_fetch_assoc($get_user_by_useremail);
                        if(!empty($row_get_user)||!empty($row_get_new_user)){
                            
                            if(!empty($row_get_user)&&!empty($row_get_new_user)){
                                $error_message = '<div class="alert alert-error">
                                            <a href="#" class="close" data-dismiss="alert">&times;</a>
                                            <strong>Error!</strong> Both username and email has been previously registered. Are you are member already?
                                            <a href="login.php">Login here!</a>
                                        </div>';
                            }elseif(!empty($row_get_user)){
                                $error_message = '<div class="alert alert-error">
                                            <a href="#" class="close" data-dismiss="alert">&times;</a>
                                            <strong>Error!</strong> Username you picked has been registered. Please pick a new one.
                                        </div>';
                            }else{
                                $error_message = '<div class="alert alert-error">
                                            <a href="#" class="close" data-dismiss="alert">&times;</a>
                                            <strong>Error!</strong> Email you picked has been registered. Please pick a new one.
                                        </div>';
                            }
                            
                        }else{
                            //We create a NONCE using the action, username, timestamp, and the NONCE SALT
                            $nonce = md5('registration-' . $username . $userreg . NONCE_SALT);
                            //We hash our password
                            $userpass = $sdb->hash_password($userpass, $nonce);

                            //Recompile our $value array to insert into the database
                            $values = array(
                                        'name' => $username,
                                        'password' => $userpass,
                                        'email' => $useremail,
                                        'date' => $userreg);
                            //And, we insert our data
                            $insert = $sdb->insert($table, $fields, $values);
                            
                            if ( $insert == TRUE ) {
                                $user_id = mysql_insert_id();
                                $_SESSION['USER_ID'] = $user_id;
                                $_SESSION['USER_NAME'] = $username;
                                $_SESSION['USER_EMAIL'] = $useremail;
                                $url = "http" . ((!empty($_SERVER['HTTPS'])) ? "s" : "") . "://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
                                $aredirect = str_replace('register.php', $redirect, $url);
                                //echo $redirect;
                                header("Location: $redirect?reg=true");
                                exit;
                            }
                        }
                    }else{
                        $error_message = '<div class="alert alert-error">
                                            <a href="#" class="close" data-dismiss="alert">&times;</a>
                                            <strong>Error!</strong> All fields are required. Please fill up all the fields.
                                        </div>';
                        if(!filter_var($useremail, FILTER_VALIDATE_EMAIL)){
                            $error_message = '<div class="alert alert-error">
                                            <a href="#" class="close" data-dismiss="alert">&times;</a>
                                            <strong>Error!</strong> Email address not valid!</a>
                                        </div>';
                        }
                    }
                    if(isset($error_message)){
                        echo $error_message;
                    }
                    
		
            }
        }
        function register_company($redirect){
            global $sdb;
            if(!empty($_POST)&&$this->check_referrer()){
                
                    
                    $business_name = $_POST['business_name'];
                    $business_address = $_POST['business_address'];
                    $business_country = $_POST['business_country'];
                    $lat = $_POST['lat'];
                    $lng = $_POST['lng'];
                    $business_postal_code = $_POST['business_postal_code'];
                    $company_type = $_POST['company_type'];
                    if(!empty($business_name)
                            &&!empty($business_address)
                            &&!empty($business_country)
                            &&!empty($lat)&&!empty($lng)
                            &&!empty($business_postal_code)&&!empty($company_type)){
                        $table = "business";
                        $fields = array('business_name', 'business_address', 'business_country', 'business_postal_code','lat','lng','business_type');
                        switch($company_type){
                            case 'customer':
                                $business_type = 'C';
                                break;
                            case 'supplier':
                                $business_type = 'S';
                                break;
                            case 'logistic':
                                $business_type = 'L';
                                break;
                        }
                        
                        $values = array(
                            'business_name'         =>$business_name,
                            'business_address'      =>$business_address,
                            'business_country'      =>$business_country,
                            'business_postal_code'  =>$business_postal_code,
                            'lat'                   =>$lat,
                            'lng'                   =>$lng,
                            'business_type'         =>$business_type
                        );
                        $insert = $sdb->insert($table, $fields, $values);
                        if ( $insert == TRUE ) {
                            $company_id = mysql_insert_id();
                            $table = "user_business";
                            $fields = array('user_id','business_id','business_type','admin_level');
                            $values = array(
                                'user_id'=>$_SESSION['USER_ID'],
                                'company_id'=>$company_id,
                                'business_type'=>$business_type,
                                'admin_level'=>9
                            );
                            $insert = $sdb->insert($table, $fields, $values);
                            if($insert == TRUE){
                                $_SESSION['COMPANY_ID'] = $company_id;
                                $_SESSION['COMPANY_NAME'] = $business_name;
                                $url = "http" . ((!empty($_SERVER['HTTPS'])) ? "s" : "") . "://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
                                $aredirect = str_replace('register.php', $redirect, $url);
                                header("Location: $redirect?reg=true");
                                exit;
                            }
                            
                        }
                    }else{
                        $error_message = '<div class="alert alert-error">
                                            <a href="#" class="close" data-dismiss="alert">&times;</a>
                                            <strong>Error!</strong> All fields are required. Please fill up all the fields.
                                        </div>';
                    }
                    if(isset($error_message)){
                        echo $error_message;
                    }
                
                
            }
        }
        function login($redirect){
            global $sdb;
            if (!empty($_POST)&&$this->check_referrer()){
                //Clean our form data
                $values = $sdb->clean($_POST);
                //The username and password submitted by the user
                $subname = $values['username'];
		$subpass = $values['password'];
                
                $table = 'users';
                /*
		 * Run our query to get all data from the users table where the user 
		 * login matches the submitted login.
		 */
		$sql = "SELECT * FROM $table WHERE user_name = '" . $subname . "'";
               
		$results = $sdb->select($sql);
                //Kill the script if the submitted username doesn't exit
                if (!$results) {
                    die('Sorry, that username does not exist!');
		}
                //Fetch our results into an associative array
		$results = mysql_fetch_assoc( $results );
                
		//The registration date of the stored matching user
		$storeg = $results['user_registered'];
		//The hashed password of the stored matching user
		$stopass = $results['user_pass'];
                
                //Recreate our NONCE used at registration
		$nonce = md5('registration-' . $subname . $storeg . NONCE_SALT);
                //Rehash the submitted password to see if it matches the stored hash
		$subpass = $sdb->hash_password($subpass, $nonce);
                
                //Check to see if the submitted password matches the stored password
		if ( $subpass == $stopass ) {
                    
                    //If there's a match, we rehash password to store in a cookie
                    $authnonce = md5('cookie-' . $subname . $storeg . AUTH_SALT);
                    $authID = $sdb->hash_password($subpass, $authnonce);
                    //Set our authorization cookie
                    setcookie('supploogleauth[user]', $subname, 0, '', '', '', true);
                    setcookie('supploogleauth[authID]', $authID, 0, '', '', '', true);
                    
                    //Set session variables
                    $_SESSION['USER_ID']=$results['ID'];
                    $_SESSION['USER_NAME']=$results['user_name'];
                    $sql = "SELECT user_business.* FROM users LEFT JOIN user_business ON users.ID = user_business.user_id WHERE users.ID=".$_SESSION['USER_ID'];
                    $results = $sdb->select($sql);
                    if (!$results) {
                        die('Sorry, no company info found.');//this should redirect to register company page
                    }
                    
                    $results = mysql_fetch_assoc($results);
                    if(empty($results['business_id'])){
                        $url = "http" . ((!empty($_SERVER['HTTPS'])) ? "s" : "") . "://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
                        $redirect = str_replace('login.php', 'sign_up_company.php', $url);
                        //echo $redirect;
                        header("Location: $redirect");
                    }else{
                        $_SESSION['COMPANY_ID']= $results['business_id'];
                        $_SESSION['COMPANY_TYPE']=$results['business_type'];
                    
                        //Build our redirect
                        $url = "http" . ((!empty($_SERVER['HTTPS'])) ? "s" : "") . "://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
                        $redirect = str_replace('login.php', $redirect, $url);

                        //Redirect to the home page
                        header("Location: $redirect");
                            //exit;	
                        } 
                }else{
                    return 'invalid';
                }
                    
            } else {
		return 'empty';
            }
            
        }
        function check_referrer(){
            //Check to make sure the form submission is coming from our script
            //The full URL of our registration page
            $current = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

            //The full URL of the page the form was submitted from
            $referrer = $_SERVER['HTTP_REFERER'];
            if($referrer==$current){
                return true;
            }else{
                return false;
            }
            
        }
        function log_out(){
            session_destroy();
            $url = "http" . ((!empty($_SERVER['HTTPS'])) ? "s" : "") . "://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
            $redirect = str_replace('logout.php', 'index.php', $url);
            header("Location: $redirect");
            exit;
        }
        /*
         * returns all user information
         */
        function get_user_info($user_id){
            global $sdb;
            
            $sql = "SELECT users.*, business.* FROM users".
                    " LEFT JOIN user_business ON users.ID=user_business.user_id".
                    " LEFT JOIN business ON user_business.business_id = business.business_id WHERE users.ID = '" . $user_id . "'";
            $results = $sdb->select($sql);
            $user_info = mysql_fetch_assoc($results);
            
            return $user_info;
        }
        
    }
}
$suser = new SupploogleUser;