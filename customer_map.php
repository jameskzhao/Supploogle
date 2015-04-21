<?php 
    require_once('load.php');    
   
    if(empty($_SESSION['USER_ID']) || empty($_SESSION['COMPANY_ID'])){
        if(!empty($_SESSION['USER_ID'])&&empty($_SESSION['COMPANY_ID'])){
            $url = "http" . ((!empty($_SERVER['HTTPS'])) ? "s" : "") . "://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
            $redirect = str_replace('customer_map.php', 'sign_up_company.php', $url);
            header("Location: $redirect");
            exit;
        }elseif(empty($_SESSION['USER_ID'])){
            $url = "http" . ((!empty($_SERVER['HTTPS'])) ? "s" : "") . "://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
            $redirect = str_replace('customer_map.php', 'login.php?redirect=customer_map.php', $url);
            header("Location: $redirect");
            exit;
        }
    }
    get_header('Customer Map');
    require_once('php/get_customer_category.php');
    
?>
    <div>

        <div id="hidden_home_menu_search" class="hidden_menu">
            <div class="container-fluid">
                <div class="form-group has-feedback">
                    <label for="usr"><h4>Search Map</h4></label>
                    <input type="text" class="form-control form_input" id="keyword" placeholder="Enter an address...">
                    
                    
                    
                </div>
                
                <div class="col-sm-8">
                    <button type="button" class="btn btn-default btn-lg" onclick="update_map(); show_menu('search')">Search</button>
                    <button type="button" class="btn btn-default btn-lg" onclick="reset_keywords(); show_menu('search')">Reset</button>
                </div>
            </div>

        </div>
        <div id="hidden_home_menu_filter" class="hidden_menu">
            <div class="form-group container-fluid">
                <div class="col-lg-12">
                    
                        <label for="usr"><h4>Filters</h4></label>
                        <select class="form-control form_input" id="category_select">
                            <option value="Select Category">Select Category</option>
                        </select>

                    
                </div>
                
                <div id="sub_category_checkbox_area" class="col-lg-12 form_input">
                        <!--<label class="checkbox-inline">
                            <input type="checkbox" value="1">Option 1
                                </label>-->
                </div>
                <div class="col-sm-8">
                    <button type="button" class="btn btn-default btn-lg" onclick="update_map(); show_menu('filter')">Apply Filters</button>
                    <button type="button" class="btn btn-default btn-lg" onclick="reset_filters(); show_menu('filter')">Reset Filters</button>
                </div>
            </div>
        </div>
        <div id="hidden_home_menu_layers" class="hidden_menu">
            <div class="form-group container-fluid">
                <div class="col-sm-8">
                    <label for="usr"><h4>Layers</h4></label>
                    <div id="layer_checkbox_area" class="col-lg-12 form_input">
                        <label class="checkbox-inline"><input id="port_layer_checkbox" type="checkbox" value="ports" checked>Ports</label>
                    </div>
                    
                </div>
            </div>
        </div>
        <div id="hidden_home_menu_layers" class="hidden_menu">
            <div class="form-group container-fluid">
                <div class="col-sm-8">
                    <label for="usr"><h4>Layers</h4></label>
                    <div id="layer_checkbox_area" class="col-lg-12 form_input">
                        <label class="checkbox-inline"><input id="port_layer_checkbox" type="checkbox" value="ports" checked>Ports</label>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <div class="home_content">
        
        <div id="home_menu" class="home_menu home_menu_customer">
            <div id="home_menu_search"class="home_menu_item" >
                <a href="javascript:void(0)" onclick="show_menu('search')" data-toggle="tooltip" data-placement="right" title="Search">
                    <i class="fa fa-search fa-2x"></i>
                    <!--<img src="images/search1_icon.png" >-->
                    <!--<img src="images/3.jpg" >-->
                    
                    
                </a>
            </div>
            <div id="home_menu_filter"class="home_menu_item" >
                <a href="javascript:void(0)" onclick="show_menu('filter')" data-toggle="tooltip" data-placement="right" title="Filter">
                    <i class="fa fa-filter fa-2x"></i>
                    
                    <!--<img src ="images/5.jpg" >-->
                    
                    
                </a>
            </div>
            <div id="home_menu_layers"class="home_menu_item" > 
                <a href="javascript:void(0)" onclick="show_menu('layers')" data-toggle="tooltip" data-placement="right" title="Layer">
                    <i class="fa fa-map-marker fa-2x"></i>
                    <!--<img src="images/6.png" >-->
                </a>
            </div>
            <div id="home_menu_layers"class="home_menu_item" > 
                <a href="javascript:void(0)" onclick="show_menu('layers')" data-toggle="tooltip" data-placement="right" title="Spend $">
                    <i class="fa fa-usd fa-2x"></i>
                    <!--<img src="images/6.png" >-->
                </a>
            </div>
            <div id="home_menu_layers"class="home_menu_item" > 
                <a href="javascript:void(0)" onclick="show_menu('layers')" data-toggle="tooltip" data-placement="right" title="Part #">
                    <i class="fa fa-list-ol fa-2x"></i>
                    <!--<img src="images/6.png" >-->
                </a>
            </div>
            <div id="home_menu_layers"class="home_menu_item" > 
                <a href="javascript:void(0)" onclick="show_menu('layers')" data-toggle="tooltip" data-placement="right" title="Scorecard">
                    <i class="fa fa-line-chart fa-2x"></i>
                    <!--<img src="images/6.png" >-->
                </a>
            </div>
            <div id="home_menu_layers"class="home_menu_item" > 
                <a href="javascript:void(0)" onclick="show_menu('layers')" data-toggle="tooltip" data-placement="right" title="Freight">
                    <i class="fa fa-truck fa-2x"></i>
                    <!--<img src="images/6.png" >-->
                </a>
            </div>
            <div id="home_menu_layers"class="home_menu_item" > 
                <a href="javascript:void(0)" onclick="show_menu('layers')" data-toggle="tooltip" data-placement="right" title="Strategy">
                    <i class="fa fa-flag fa-2x"></i>
                    <!--<img src="images/6.png" >-->
                </a>
            </div>
            <div id="home_menu_layers"class="home_menu_item"> 
                <a style="cursor: pointer"data-toggle="modal" data-target="#myModal" onclick="initialize_supplier_map(), show_default_phase()" data-toggle="tooltip" data-placement="right" title="Add Company">
                    <i class="fa fa-user-plus fa-2x"></i>
                    <!--<img src="images/6.png" >-->
                </a>
            </div>
            
            

        </div>
        <h1 class="text-center">My Suppliers</h1>
        <div class="text-right">
            <div id="home_menu_layers" class="search_results" > 
                <span class="label label-info"> <span id="supplier_count"></span> &nbsp; Results</span>
            </div>
        </div>
        <div id="map_canvas" class = "col-lg-12 left_map"></div>
        <div class = "right_side_bar"></div>
        
    </div>

    <div id="box" class="jumbotron text-center" hidden="true">
        You haven't added any suppliers yet. Please click on the <i class="fa fa-user-plus fa-2x"></i> icon to add a supplier.<br><br>
        <button class="btn btn-lg btn-success">Got it</button>
    </div>
	
	
	
	<div id="screen">
	</div>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Add Supplier</h4>
            </div>
            <div class="modal-body">
                <div id="phase_1">
                    <h4 class="text-center">Step 1</h4>
                    <table class="table table-striped">
                        <tr>
                            <td>Name:</td>
                            <td><input id="business_name" type="text" class="form-control" required="required"></td>
                        </tr>
                        <tr>
                            <td>Address:</td>
                            <td>
                            <div class="input-group">
                                <input id="business_address" type="text" class="form-control" required="required" placeholder="Enter street, city, province and country to search...">
                                <span class="input-group-btn">
                                    <button class="btn btn-success" type="button" onclick="codeAddress()">Update On Map!</button>
                                </span>
                            </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Country:</td>
                            <td><input id="business_country" type="text" class="form-control" required="required"></td>
                        </tr>
                        <tr>
                            <td>Latitude:</td>
                            <td><input id="lat" type="text" class="form-control" readonly required="required"></td>
                        </tr>
                        <tr>
                            <td>Longitude:</td>
                            <td><input id="lng" type="text" class="form-control" readonly required="required"></td>
                        </tr>

                        <tr>
                            <td>Category:</td>
                            <td><input id="business_category" type="text" class="form-control" required="required"></td>
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
                    </table>
                    
                </div>
                <div id="phase_2" hidden="true">
                    <h4 class="text-center">Step 2</h4>
                    <table class="table table-striped">
                        <tr>
                            <th></th>
                            <th>YTD</th>
                            <th><?php echo date("Y")-1;?></th>
                            <th><?php echo date("Y")-2;?></th>
                            <th><?php echo date("Y")-3;?></th>
                            <th><?php echo date("Y")-4;?></th>
                        </tr>
                        <tr>
                            <td>Payment Term</td>
                            <td><input id="payment_term_ytd" type="text" class="form-control" required="required"></td>
                            <td><input id="payment_term_1_year_ago" type="text" class="form-control" required="required"></td>
                            <td><input id="payment_term_2_years_ago" type="text" class="form-control" required="required"></td>
                            <td><input id="payment_term_3_years_ago" type="text" class="form-control" required="required"></td>
                            <td><input id="payment_term_4_years_ago" type="text" class="form-control" required="required"></td>
                        </tr>
                        <tr>
                            <td>Lead Time</td>
                            <td><input id="lead_time_ytd" type="text" class="form-control" required="required"></td>
                            <td><input id="lead_time_1_year_ago" type="text" class="form-control" required="required"></td>
                            <td><input id="lead_time_2_years_ago" type="text" class="form-control" required="required"></td>
                            <td><input id="lead_time_3_years_ago" type="text" class="form-control" required="required"></td>
                            <td><input id="lead_time_4_years_ago" type="text" class="form-control" required="required"></td>
                        </tr>
                        <tr>
                            <td>PPM</td>
                            <td><input id="ppm_ytd" type="text" class="form-control" required="required"></td>
                            <td><input id="ppm_1_year_ago" type="text" class="form-control" required="required"></td>
                            <td><input id="ppm_2_years_ago" type="text" class="form-control" required="required"></td>
                            <td><input id="ppm_3_years_ago" type="text" class="form-control" required="required"></td>
                            <td><input id="ppm_4_years_ago" type="text" class="form-control" required="required"></td>
                        </tr>
                        <tr>
                            <td>OTTR(%)</td>
                            <td><input id="ottr_ytd" type="text" class="form-control" required="required"></td>
                            <td><input id="ottr_1_year_ago" type="text" class="form-control" required="required"></td>
                            <td><input id="ottr_2_years_ago" type="text" class="form-control" required="required"></td>
                            <td><input id="ottr_3_years_ago" type="text" class="form-control" required="required"></td>
                            <td><input id="ottr_4_years_ago" type="text" class="form-control" required="required"></td>
                        </tr>
                        <tr>
                            <td>PPV($)</td>
                            <td><input id="ppv_ytd" type="text" class="form-control" required="required"></td>
                            <td><input id="ppv_1_year_ago" type="text" class="form-control" required="required"></td>
                            <td><input id="ppv_2_years_ago" type="text" class="form-control" required="required"></td>
                            <td><input id="ppv_3_years_ago" type="text" class="form-control" required="required"></td>
                            <td><input id="ppv_4_years_ago" type="text" class="form-control" required="required"></td>
                        </tr>
                        <tr>
                            <td>Part Variety</td>
                            <td><input id="part_variety_ytd" type="text" class="form-control" required="required"></td>
                            <td><input id="part_variety_1_year_ago" type="text" class="form-control" required="required"></td>
                            <td><input id="part_variety_2_years_ago" type="text" class="form-control" required="required"></td>
                            <td><input id="part_variety_3_years_ago" type="text" class="form-control" required="required"></td>
                            <td><input id="part_variety_4_years_ago" type="text" class="form-control" required="required"></td>
                        </tr>
                        <tr>
                            <td>Part Quantity</td>
                            <td><input id="part_quantity_ytd" type="text" class="form-control" required="required"></td>
                            <td><input id="part_quantity_1_year_ago" type="text" class="form-control" required="required"></td>
                            <td><input id="part_quantity_2_years_ago" type="text" class="form-control" required="required"></td>
                            <td><input id="part_quantity_3_years_ago" type="text" class="form-control" required="required"></td>
                            <td><input id="part_quantity_4_years_ago" type="text" class="form-control" required="required"></td>
                        </tr>
                        <tr>
                            <td>Spend($)</td>
                            <td><input id="spend_ytd" type="text" class="form-control" required="required"></td>
                            <td><input id="spend_1_year_ago" type="text" class="form-control" required="required"></td>
                            <td><input id="spend_2_years_ago" type="text" class="form-control" required="required"></td>
                            <td><input id="spend_3_years_ago" type="text" class="form-control" required="required"></td>
                            <td><input id="spend_4_years_ago" type="text" class="form-control" required="required"></td>
                        </tr>
                        <tr>
                            <td>Shipment Frequency</td>
                            <td><input id="shipment_frequency_ytd" type="text" class="form-control" required="required"></td>
                            <td><input id="shipment_frequency_1_year_ago" type="text" class="form-control" required="required"></td>
                            <td><input id="shipment_frequency_2_years_ago" type="text" class="form-control" required="required"></td>
                            <td><input id="shipment_frequency_3_years_ago" type="text" class="form-control" required="required"></td>
                            <td><input id="shipment_frequency_4_years_ago" type="text" class="form-control" required="required"></td>
                        </tr>
                        <tr>
                            <td>Score</td>
                            <td><input id="score_ytd" type="text" class="form-control" required="required"></td>
                            <td><input id="score_1_year_ago" type="text" class="form-control" required="required"></td>
                            <td><input id="score_2_years_ago" type="text" class="form-control" required="required"></td>
                            <td><input id="score_3_years_ago" type="text" class="form-control" required="required"></td>
                            <td><input id="score_4_years_ago" type="text" class="form-control" required="required"></td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                Strategy by Product
                            </td>
                            <td colspan="4">
                                <select id="strategy_by_product" class="form-control">
                                    <option value="">Please choose...</option>
                                    <option value="partner">Partner</option>
                                    <option value="leverage">Leverage</option>
                                    <option value="manage risk">Manage Risk</option>
                                    <option value="shop">Shop</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                Strategy by Company
                            </td>
                            <td colspan="4">
                                <select id="strategy_by_company" class="form-control">
                                    <option value="">Please choose...</option>
                                    <option value="grow">Grow</option>
                                    <option value="maintain">Maintain</option>
                                    <option value="reduce">Reduce</option>
                                    <option value="walk away">Walk Away</option>
                                </select>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        <button type="button" id="save_supplier_button" class="btn btn-primary">Next Step</button>
      </div>
    </div>
  </div>
</div>

  <script type="text/javascript">
        var raw_category_array = <?php echo json_encode($category_array);?>;
        var category_array = raw_category_array;
        /*for(var index in raw_category_array){
            for(property in raw_category_array[index]){
                category_array.push(property);
            }
        }*/
        
  </script>
 
<?php  get_footer('customer_map');?>