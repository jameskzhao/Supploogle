<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
    require_once('load.php');
    
    $suser->register_company('login.php');
    get_header('Sign Up');
    
    if(!empty($_SESSION['USER_ID'])&&empty($_SESSION['COMPANY_ID'])){
        ?>
    <div class="form-group container-fluid ">
        <div class="col-md-4 col-md-offset-4 panel panel-default main_form">
            
            <h3 class="text-center">One More Step...</h3>
            <div class="alert alert-warning" role="alert">
                <strong>Notice:</strong> Please register your company. All fields are required.
            </div>
            
            <div id="forms_container">
                <div id="customer_form">
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                        <label for="company_type">Company type (select one):</label>
                        <select class="form-control" id="company_type" name="company_type">
                            <option value="">Select One</option>
                            <option value="customer">Customer</option>
                            <option value="supplier">Supplier</option>
                            <option value="logistic">Logistic</option>
                            
                        </select>
                        <table class="table table-striped">
                            <tr>
                                <td>Name:</td>
                                <td><input id="business_name" type="text" name="business_name" class="form-control" required="required"></td>
                            </tr>
                            <tr>
                                <td>Address:</td>
                                <td>
                                <div class="input-group">
                                    <input id="business_address" name="business_address" type="text" class="form-control" required="required" placeholder="Enter street, city, province and country to search...">
                                    <span class="input-group-btn">
                                        <button class="btn btn-success" type="button" onclick="codeAddress()">Update On Map!</button>
                                    </span>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Postal Code</td>
                                <td><input id="business_postal_code" name="business_postal_code" type="text" class="form-control" required="required"></td>
                            </tr>
                            <tr>
                                <td>Country:</td>
                                <td><input id="business_country" name="business_country" type="text" class="form-control" required="required"></td>
                            </tr>
                            <tr>
                                <td>Latitude:</td>
                                <td><input id="lat" name="lat" type="text" class="form-control" readonly required="required"></td>
                            </tr>
                            <tr>
                                <td>Longitude:</td>
                                <td><input id="lng" name="lng" type="text" class="form-control" readonly required="required"></td>
                            </tr>

                            <tr>
                                <td>Category:</td>
                                <td><input id="business_category" name="business_category" type="text" class="form-control" required="required"></td>
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

                            <tr>
                                <td></td>
                                <td><button class="btn btn-default btn-lg">Register!</button></td>
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
