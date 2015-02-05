<?php 
    require_once('load.php');    
    require_once('php/get_category.php');
    get_header('Supploogle');
?>
    <div>

        <div id="hidden_home_menu_search" class="hidden_menu">
            <div class="form-group container-fluid">
                <div class="col-lg-12">
                    <label for="usr"><h4>Search Map</h4></label>
                    <input type="text" class="form-control form_input" id="keyword" placeholder="Street or company keyword...">
                    <input type="text" class="form-control form_input" id="location" placeholder="City name">
                    
                    
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
    </div>
    <div class="home_content">
        
        <div id="home_menu" class="home_menu">
            <div id="home_menu_search"class="home_menu_item" >
                <a href="javascript:void(0)" onclick="show_menu('search')">
                    <img src="images/search1_icon.png" >
                    
                </a>
            </div>
            <div id="home_menu_filter"class="home_menu_item" >
                <a href="javascript:void(0)" onclick="show_menu('filter')">
                    <img src="images/filter1_icon.png" >
                    
                </a>
            </div>
            <div id="home_menu_layers"class="home_menu_item" > 
                <a href="javascript:void(0)" onclick="show_menu('layers')">
                    <img src="images/layers1_icon.png" >
                    
                </a>
            </div>
            <div id="home_menu_layers"class="search_results" > 
                <span id="supplier_count"></span>
                Results
            </div>
            

        </div>
        <div id="map_canvas" class = "col-lg-12 left_map"></div>
        <div class = "right_side_bar"></div>
        
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
 
<?php  get_footer();?>