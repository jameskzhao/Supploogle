<?php 
    require_once('load.php');    
    require_once('php/get_category.php');
    get_header('Supploogle');
?>
    <div>

        <div id="hidden_home_menu_search" class="hidden_menu">
            <div class="container-fluid">
                <div class="form-group col-lg-12">
                    <label for="usr"><h4>Search Map</h4></label>
                    <input type="text" class="form-control form_input" id="google_address" placeholder="Enter an address...">
                    
                </div>
                <div class="form-group col-lg-12">
                    <div class="form-group">
                        <label for="usr"><h4>Search Company</h4></label>
                        <input type="text" class="form-control form_input" id="keyword" placeholder="Enter company name keyword...">
                    <input type="text" class="form-control form_input" id="country" placeholder="Enter country...">
                    
                    <button type="button" class="btn btn-default btn-lg" onclick="update_map(); show_menu('search')">Search</button>
                    <button type="button" class="btn btn-default btn-lg" onclick="reset_keywords(); show_menu('search')">Reset</button>
                        
                    </div>
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
                
                <!--<div id="sub_category_checkbox_area" class="col-lg-12 form_input">
                        <label class="checkbox-inline">
                            <input type="checkbox" value="1">Option 1
                                </label>
                </div>-->
                <div class="col-sm-8">
                    <button type="button" class="btn btn-default btn-lg" onclick="update_map(); show_menu('filter')">Filter</button>
                    <button type="button" class="btn btn-default btn-lg" onclick="reset_filters(); show_menu('filter')">Reset</button>
                </div>
            </div>
        </div>
        <div id="hidden_home_menu_layers" class="hidden_menu">
            <div class="form-group container-fluid">
                <div class="col-sm-8">
                    <label for="usr"><h4>Layers</h4></label>
                    <div id="layer_checkbox_area" class="col-lg-12 form_input">
                        <ul class="list-unstyled">
                            <li><label class="checkbox-inline"><input id="supplier_checkbox" type="checkbox" value="S" onchange="update_map()" checked>Supplier</label></li>
                            <li><label class="checkbox-inline"><input id="customer_checkbox" type="checkbox" value="C" onchange="update_map()" checked>Customer</label></li>
                            <li><label class="checkbox-inline"><input id="logistic_checkbox" type="checkbox" value="L" onchange="update_map()" checked>Logistic</label></li>
                            <li><label class="checkbox-inline"><input id="port_checkbox" type="checkbox" value="port" onchange="update_map()" checked>Port</label></li>
                            <li><label class="checkbox-inline"><input id="show_name_checkbox" type="checkbox" value="show_name" onchange="toggle_name()" checked>Show Name</label></li>
                        </ul>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <div class="home_content">
        
        <div id="home_menu" class="home_menu">
            <div id="home_menu_search"class="home_menu_item" >
                <a href="javascript:void(0)" onclick="show_menu('search')">
                    <i class="fa fa-search fa-2x"></i>
                    
                </a>
            </div>
            <div id="home_menu_filter"class="home_menu_item" >
                <a href="javascript:void(0)" onclick="show_menu('filter')">
                    <i class="fa fa-filter fa-2x"></i>
                    <!--<img src ="images/5.jpg" >-->
                    
                    
                </a>
            </div>
            <div id="home_menu_layers"class="home_menu_item" > 
                <a href="javascript:void(0)" onclick="show_menu('layers')">
                    <i class="fa fa-map-marker fa-2x"></i>
                    <!--<img src="images/6.png" >-->
                </a>
            </div>
            <div id="home_menu_layers"class="home_menu_item" > 
                <a href="customer_map.php" data-toggle="tooltip" data-placement="right" title="Spend $">
                    <i class="fa fa-usd fa-2x"></i>
                    <!--<img src="images/6.png" >-->
                </a>
            </div>
            <div id="home_menu_layers"class="home_menu_item" > 
                <a href="customer_map.php" data-toggle="tooltip" data-placement="right" title="Part #">
                    <i class="fa fa-list-ol fa-2x"></i>
                    <!--<img src="images/6.png" >-->
                </a>
            </div>
            <div id="home_menu_layers"class="home_menu_item" > 
                <a href="customer_map.php"  data-toggle="tooltip" data-placement="right" title="Scorecard">
                    <i class="fa fa-line-chart fa-2x"></i>
                    <!--<img src="images/6.png" >-->
                </a>
            </div>
            <div id="home_menu_layers"class="home_menu_item" > 
                <a href="customer_map.php"  data-toggle="tooltip" data-placement="right" title="Freight">
                    <i class="fa fa-truck fa-2x"></i>
                    <!--<img src="images/6.png" >-->
                </a>
            </div>
            <div id="home_menu_layers"class="home_menu_item" > 
                <a href="customer_map.php"  data-toggle="tooltip" data-placement="right" title="Strategy">
                    <i class="fa fa-flag fa-2x"></i>
                    <!--<img src="images/6.png" >-->
                </a>
            </div>
            <div id="home_menu_layers"class="home_menu_item"> 
                <a href="customer_map.php" data-target="#myModal" onclick="initialize_supplier_map(), show_default_phase()" data-toggle="tooltip" data-placement="right" title="Add Company">
                    <i class="fa fa-user-plus fa-2x"></i>
                    <!--<img src="images/6.png" >-->
                </a>
            </div>
            
            

        </div>
        <div class="text-right">
            <div id="home_menu_layers" class="search_results" > 
                <span class="label label-info"> <span id="supplier_count"></span> &nbsp; Results</span>
            </div>
        </div>
        <div id="map_canvas" class = "col-lg-12 left_map"></div>
        <div class = "right_side_bar"></div>
        
    </div>

  <script type="text/javascript">
        var raw_category_array = <?php echo json_encode($category_array);?>;
        //console.info(raw_category_array);
        var category_array = raw_category_array;
        /*for(var index in raw_category_array){
            for(property in raw_category_array[index]){
                category_array.push(property);
            }
        }*/
        
  </script>
 
<?php  get_footer('index');?>