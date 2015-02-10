<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
    require_once('load.php');
    get_header('Sign Up');
    $suser->register('login.php');
 ?>
    <div class="form-group container-fluid ">
        <div class="col-md-4 col-md-offset-4 panel panel-default">
            
            <h3 class="text-center">Sign Up</h3>
            <div class="alert alert-warning" role="alert">
                <strong>Notice:</strong> Only members of <strong>customer companies</strong> or <strong>suppliers</strong> can sign up.
            </div>
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
                        <td>Email:</td>
                        <td><input type="text" name="email" class="form-control form_input"/></td>
                    </tr>
                    <input type="hidden" name="date" value="<?php echo $current_time; ?>" />
                    <tr>
                        <td></td>
                        <td><button class="btn btn-default btn-lg">Sign Up!</button><p>Already a member? <a href="login.php">Log in here</a></p></td>
                    </tr>
                </table>
            </form>
        </div>
	
    </div>



<?php get_footer();?>
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