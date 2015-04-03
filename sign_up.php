<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
    require_once('load.php');
    $suser->register('sign_up_company.php');
    get_header('Sign Up');
    
 ?>
    <!--<div class="form-group container-fluid">
        <div class="col-md-4 col-md-offset-4 panel panel-default main_form">
            
            <h3 class="text-center">Sign Up</h3>
            <div class="alert alert-warning" role="alert">
                <strong>Notice:</strong> Only members of <strong>customer companies</strong> or <strong>suppliers</strong> can sign up.
            </div>
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
                        <td>Email:</td>
                        <td><input type="text" name="email" class="form-control form_input"/></td>
                    </tr>
                    
                    <tr>
                        <td></td>
                        <td><button class="btn btn-default btn-lg">Sign Up!</button><p>Already a member? <a href="login.php">Log in here</a></p></td>
                    </tr>
                </table>
            </form>
            
        </div>
	
    </div>-->
            <div class="container" style="margin-top: 30px">
                <div class="col-md-4">
                    <div class="login-panel panel panel-default">
                        <div class="panel-heading">
                            <h1 class="panel-title">Sign Up</h1>
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
                                    <div class="form-group">
                                        Email:
                                        <input class="form-control" placeholder="E-mail" name="email" type="email" value="" required="required" />
                                    </div>
                                    <input type="hidden" name="date" value="<?php echo $current_time; ?>" />

                                    <button type="submit" class="btn btn-sm btn-success">Sign Up</button>
                                    <p>Already a member? <a href="login.php">Log In!</a></p>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>



<?php get_footer('sign_up');?>
<!--<tr><td colspan="2">Company Info</td></tr>
		<tr>
                    <td>Name:</td>
                    <td><input type="text" name="name" /></td>
		</tr>
                <tr>
                    <td>Street:</td>
                    <td><input type="text" name="street" /></td>
		</tr>
                <tr>
                    <td>City:</td>
                    <td><input type="text" name="city" /></td>
		</tr>
                <tr>
                    <td>Province/State:</td>
                    <td><input type="text" name="province" /></td>
		</tr>
                <tr>
                    <td>Country:</td>
                    <td><input type="text" name="country" /></td>
		</tr>-->