<?php
require_once 'load.php';

//first we check if user is logged on
if(empty($_SESSION['USER_ID']) || empty($_SESSION['COMPANY_ID'])){
    if(!empty($_SESSION['USER_ID'])&&empty($_SESSION['COMPANY_ID'])){
        $url = "http" . ((!empty($_SERVER['HTTPS'])) ? "s" : "") . "://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
        $redirect = str_replace('profile.php', 'sign_up_company.php', $url);
        header("Location: $redirect");
        exit;
    }elseif(empty($_SESSION['USER_ID'])){
        $url = "http" . ((!empty($_SERVER['HTTPS'])) ? "s" : "") . "://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
        $redirect = str_replace('profile.php', 'login.php', $url);
        header("Location: $redirect");
        exit;
    }
}else{
    $user_id = $_SESSION['USER_ID'];
    $company_id = $_SESSION['COMPANY_ID'];
    $user_info=$suser->get_user_info($user_id);
    get_header('Profile');
    ?>
<div class="form-group container-fluid">
    
    <div id="user_info" class="col-md-6 col-md-offset-3 panel panel-default main_form">
        <h3 class="text-center">User Profile</h3>
        <table class="table table-striped">
            <tr>
                <td>
                    Username:
                </td>
                <td>
                    <?php echo $user_info['user_name'];?>
                </td>
            </tr>
            <tr>
                <td>
                    Email:
                </td>
                <td>
                    <?php echo $user_info['user_email'];?>
                </td>
            </tr>
            <tr>
                <td>
                    Member Since:
                </td>
                <td>
                    <?php echo $user_info['user_registered'];?>
                </td>
            </tr>
        </table>
        <h3 class="text-center">My Company Profile</h3>
        <table class="table table-striped">
            <tr>
                <td><input type="hidden" id="business_id" value="<?php echo $user_info['business_id']?>"></td>
            </tr>
            <tr>
                <td>Name:</td>
                <td><input id="business_name" type="text" class="form-control" value="<?php echo $user_info['business_name'];?>" required="required"></td>
            </tr>
            <tr>
                <td>Address:</td>
                <td>
                <div class="input-group">
                    
                    <input id="business_address" type="text" class="form-control" value="<?php echo $user_info['business_address'];?>" required="required" placeholder="Enter street, city, province and country to search...">
                    <span class="input-group-btn">
                        <button class="btn btn-success" type="button" onclick="codeAddress()">Update On Map!</button>
                    </span>
                </div>
                </td>
            </tr>
            <tr>
                <td>Country:</td>
                <td><input id="business_country" type="text" class="form-control" value="<?php echo $user_info['business_country']?>" required="required"></td>
            </tr>
            <tr>
                <td>Latitude:</td>
                <td><input id="lat" type="text" class="form-control" value="<?php echo $user_info['lat']?>" readonly required="required"></td>
            </tr>
            <tr>
                <td>Longitude:</td>
                <td><input id="lng" type="text" class="form-control" value="<?php echo $user_info['lng']?>" readonly required="required"></td>
            </tr>
            
            <tr>
                <td>Category:</td>
                <td><input id="business_category" type="text" class="form-control" value="<?php echo $user_info['business_category']?>" required="required"></td>
            </tr>
            
            <tr>
                <td>Map:</td>
                <td>
                    <div id="company_map" class="form-control">
                    
                    </div>
                    <div class="alert alert-warning" role="alert">
                        <strong>Notice:</strong>If address isn't displayed correctly in the map, you can drag the marker to update the latitude and longitude.
                    </div>
                </td>
            </tr>
            <tr><td colspan="2"><button class="btn btn-lg btn-success" onclick="save_profile()">Save</button></td></td></tr>
        </table>
    
    </div>
    
    
</div>


<?php
    get_footer('profile');
}