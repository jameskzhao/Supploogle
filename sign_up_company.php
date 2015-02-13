<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
    require_once('load.php');
    get_header('Sign Up');
    $suser->register_company('login.php');
    if(!empty($_SESSION['USER_ID'])&&empty($_SESSION['COMPANY_ID'])){
        ?>
    <div class="form-group container-fluid ">
        <div class="col-md-4 col-md-offset-4 panel panel-default main_form">
            
            <h3 class="text-center">One More Step...</h3>
            <div class="alert alert-warning" role="alert">
                <strong>Notice:</strong> Please register your company. All fields are required.
            </div>
            <label for="company_type">Company type (select one):</label>
            <select class="form-control" id="company_type">
                <option value="">Select One</option>
                <option value="customer">Customer</option>
                <option value="supplier">Supplier</option>
            </select>
            <div id="forms_container">
                <div id="customer_form" hidden>
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                        <table class="table table-striped">
                            <tr>
                                <td>Name:</td>
                                <td><input type="text" name="company_name" class="form-control form_input"/></td>
                            </tr>
                            <tr>
                                <td>Street:</td>
                                <td><input type="text" name="company_street" class="form-control form_input"/></td>
                            </tr>
                            <tr>
                                <td>City</td>
                                <td><input type="text" name="company_city" class="form-control form_input"/></td>
                            </tr>
                            <tr>
                                <td>Province/State</td>
                                <td><input type="text" name="company_province" class="form-control form_input"/></td>
                            </tr>
                            <tr>
                                <td>Country</td>
                                <td><input type="text" name="company_country" class="form-control form_input"/></td>
                            </tr>
                            <tr>
                                <td>Postal Code</td>
                                <td><input type="text" name="company_postalcode" class="form-control form_input"/></td>
                            </tr>

                            <tr>
                                <td></td>
                                <td><button class="btn btn-default btn-lg">Register Customer!</button></td>
                            </tr>
                        </table>
                    </form>
                </div>
                <div id="supplier_form" hidden>
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                        <table class="table table-striped">
                            <tr>
                                <td>Name:</td>
                                <td><input type="text" name="company_name" class="form-control form_input"/></td>
                            </tr>
                            <tr>
                                <td>Street:</td>
                                <td><input type="text" name="company_street" class="form-control form_input"/></td>
                            </tr>
                            <tr>
                                <td>City</td>
                                <td><input type="text" name="company_city" class="form-control form_input"/></td>
                            </tr>
                            <tr>
                                <td>Province/State</td>
                                <td><input type="text" name="company_province" class="form-control form_input"/></td>
                            </tr>
                            <tr>
                                <td>Country</td>
                                <td><input type="text" name="company_country" class="form-control form_input"/></td>
                            </tr>
                            <tr>
                                <td>Postal Code</td>
                                <td><input type="text" name="company_postalcode" class="form-control form_input"/></td>
                            </tr>

                            <tr>
                                <td></td>
                                <td><button class="btn btn-default btn-lg">Register Supplier!</button></td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
            
        </div>
	
    </div>
    <?php
    }
   
    if(!empty($_SESSION['USER_ID'])&&!empty($_SESSION['COMPANY_ID'])){
        ?>
        <div class="alert alert-warning main_form" role="alert">
                <strong>Notice:</strong> You already have registered a company.
            </div>
        <?php
    }
?>
    

<?php get_footer('sign_up_company');?>
