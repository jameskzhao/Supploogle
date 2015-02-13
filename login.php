
<?php
require_once 'load.php';
$suser->login('index.php');
get_header('Login');
if(empty($_SESSION['USER_ID']) || empty($_SESSION['COMPANY_ID'])){
    if(!empty($_SESSION['USER_ID'])&&empty($_SESSION['COMPANY_ID'])){
        $url = "http" . ((!empty($_SERVER['HTTPS'])) ? "s" : "") . "://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
        $redirect = str_replace('login.php', 'sign_up_company.php', $url);
        header("Location: $redirect");
        exit;
    }
    
    ?>

    <div class="form-group container-fluid ">
            <div class="col-md-4 col-md-offset-4 panel panel-default main_form">

                <h3 class="text-center">Login</h3>

                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                    <table class="table table-striped">
                        <tr>
                            <td>Username:</td>
                            <td><input type="text" name="username" class="form-control form_input"/></td>
                        </tr>
                        <tr>
                            <td>Password:</td>
                            <td><input type="password" name="password" class="form-control form_input"/></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><button class="btn btn-default btn-lg">Login</button></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
<?php
}else{
    $url = "http" . ((!empty($_SERVER['HTTPS'])) ? "s" : "") . "://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
    $redirect = str_replace('login.php', 'index.php', $url);
    header("Location: $redirect");
    exit;
}


?>
