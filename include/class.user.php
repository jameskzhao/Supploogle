<?php

if(!class_exists('SupploogleUser')){
    class SupploogleUser{
        function register($redirect){
            global $sdb;
            //Check to make sure the form submission is coming from our script
            //The full URL of our registration page
            $current = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

            //The full URL of the page the form was submitted from
            $referrer = $_SERVER['HTTP_REFERER'];
            if(!empty($_POST)){
                /* 
		 * Here we actually run the check to see if the form was submitted from our
		 * site. Since our registration from submits to itself, this is pretty easy. If
		 * the form submission didn't come from the register.php page on our server,
		 * we don't allow the data through.
		 */
		if ( $referrer == $current ) {
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
                    if(!empty($username)&&!empty($userpass)&&!empty($useremail)){
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
                                $url = "http" . ((!empty($_SERVER['HTTPS'])) ? "s" : "") . "://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
                                $aredirect = str_replace('register.php', $redirect, $url);
                                echo $redirect;
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
        }
    }
}
$suser = new SupploogleUser;