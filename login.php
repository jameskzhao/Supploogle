<?php
require_once 'load.php';
$suser->login('index.php');

if(empty($_SESSION['USER_ID']) || empty($_SESSION['COMPANY_ID'])){
    if(!empty($_SESSION['USER_ID'])&&empty($_SESSION['COMPANY_ID'])){
        $url = "http" . ((!empty($_SERVER['HTTPS'])) ? "s" : "") . "://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
        $redirect = str_replace('login.php', 'sign_up_company.php', $url);
        header("Location: $redirect");
        exit;
    }
get_header('Login');
    ?>

    <!--<div class="form-group container-fluid ">
            <div class="col-md-4 col-md-offset-4 panel panel-default main_form">

                <h3 class="text-center">Login</h3>

                <form action="<?php //echo $_SERVER['PHP_SELF']; ?>" method="post">
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
                            <td><button class="btn btn-default btn-lg">Login</button><p>Not registered yet? <a href="sign_up.php">Sign Up!</a></p> </td>
                        </tr>
                        <tr><td></td><td></td></tr>
                    </table>
                </form>
            </div>
        </div>-->

        <div class="container" style="margin-top: 30px">
            <div class="col-md-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h1 class="panel-title">Log In</h1>
                    </div>
                    <div class="panel-body">
                        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                            <fieldset>
                                <div class="form-group">
                                    Username:
                                    <input class="form-control" placeholder="Username" name="username" type="text" required="required" autofocus="autofocus"/>
                                </div>
                                <div class="form-group">
                                    Password:
                                    <input class="form-control" placeholder="password" name="password" type="password" value="" required="required" />
                                </div>
                                
                                <button type="submit" class="btn btn-sm btn-success">Log in</button>
                                <p>Not registered yet? <a href="sign_up.php">Sign Up!</a></p>
                            </fieldset>
                        </form>
                    </div>
                </div>
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
