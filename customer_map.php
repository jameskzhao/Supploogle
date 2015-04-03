<?php 
    require_once('load.php');    
    require_once('php/get_category.php');
    get_header('Customer Map');
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
        
        <div id="home_menu" class="home_menu">
            <div id="home_menu_search"class="home_menu_item" >
                <a href="javascript:void(0)" onclick="show_menu('search')">
                    <i class="fa fa-search fa-2x"></i>
                    <!--<img src="images/search1_icon.png" >-->
                    <!--<img src="images/3.jpg" >-->
                    
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
                <a href="javascript:void(0)" onclick="show_menu('layers')">
                    <i class="fa fa-usd fa-2x"></i>
                    <!--<img src="images/6.png" >-->
                </a>
            </div>
            <div id="home_menu_layers"class="home_menu_item" > 
                <a href="javascript:void(0)" onclick="show_menu('layers')">
                    <i class="fa fa-line-chart fa-2x"></i>
                    <!--<img src="images/6.png" >-->
                </a>
            </div>
            <div id="home_menu_layers"class="home_menu_item" > 
                <a href="javascript:void(0)" onclick="show_menu('layers')">
                    <i class="fa fa-truck fa-2x"></i>
                    <!--<img src="images/6.png" >-->
                </a>
            </div>
            <div id="home_menu_layers"class="home_menu_item" > 
                <a href="javascript:void(0)" onclick="show_menu('layers')">
                    <i class="fa fa-flag fa-2x"></i>
                    <!--<img src="images/6.png" >-->
                </a>
            </div>
            <div id="home_menu_layers"class="home_menu_item"> 
                <a style="cursor: pointer"data-toggle="modal" data-target="#myModal" onclick="initialize_supplier_map()">
                    <i class="fa fa-user-plus fa-2x"></i>
                    <!--<img src="images/6.png" >-->
                </a>
            </div>
            
            

        </div>
        <div>
            <div id="home_menu_layers" class="search_results" > 
                <span class="label label-info"> <span id="supplier_count"></span> &nbsp; Results</span>
            </div>
        </div>
        <div id="map_canvas" class = "col-lg-12 left_map"></div>
        <div class = "right_side_bar"></div>
        
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
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </div>
</div>

  <script type="text/javascript">
        var raw_category_array = <?php echo json_encode($category_array);?>;
        var category_array = [];
        for(var index in raw_category_array){
            for(property in raw_category_array[index]){
                category_array.push(property);
            }
        }
        
  </script>
 
<?php  get_footer('customer_map');?>