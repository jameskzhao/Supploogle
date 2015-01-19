<?php 
    require_once('php/get_category.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Supploogle</title>
        <link rel="icon" type="image/png" href="images/favicon.png">
        <!-- Goole font for logo -->
        <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>-->
        <script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
        <script type="text/javascript" src="js/jquery-ui-1.11.2/jquery-ui.min.js"></script>
        <script src="http://maps.googleapis.com/maps/api/js?v=3&amp;sensor=false"></script>
        <script type="text/javascript" src="js/data.js"></script>
        <script type="text/javascript" src="js/markerclusterer.js"></script>
        <script type="text/javascript" src="js/index.js"></script>
        <!-- Bootstrap -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">

    <!-- Optional theme 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
-->

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/btstyle.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
<body>
    <script type="text/javascript">
        var raw_category_array = <?php echo json_encode($category_array);?>;
        var category_array = [];
        for(var index in raw_category_array){
            for(property in raw_category_array[index]){
                category_array.push(property);
            }
        }
        
    </script>
    <nav class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
            <div class="row">
                <div style=" text-aligh:center; padding-left: 2px; padding-right: 2px; font-size:36px;" class="col-sm-2">
                    <div class="navbar-header full-width">
                        <a class="block-elem full-width vertical-aligned text-left no-underline" style="height: 44px" href="/cn/">
                            Supploogle</a>
                    </div>
                </div>
                <div>
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Map</a></li>
                        <li><a href="#">Page 1</a></li>
                        <li><a href="#">Page 2</a></li> 
                        <li><a href="#">Page 3</a></li> 
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    </ul>
                </div>
            </div>
            
        </div>
    </nav>
    <div>

        <div id="hidden_home_menu_search" class="hidden_menu">
            <div class="form-group container-fluid">
                <div class="col-lg-12">
                    <label for="usr"><h4>Search Map</h4></label>
                    <input type="text" class="form-control" id="keyword" placeholder="Street, city, country or company keyword...">
                    
                    <select class="form-control" id="category_select">
                        <option>Select Category</option>
                        
                    </select>
                    
                </div>
                <div id="sub_category_checkbox_area" class="col-lg-12" style="text-align: center;">
                        <!--<label class="checkbox-inline">
                            <input type="checkbox" value="1">Option 1
                         </label>-->
                </div>
                <div class="col-sm-8">
                    <button type="button" class="btn btn-default btn-lg" onclick="update_map()">Search</button>
                </div>
            </div>

        </div>
        <div id="hidden_home_menu_filter" class="hidden_menu">
            <div class="form-group container-fluid">
                <div class="col-sm-8">
                    <label for="usr"><h4>Filters</h4></label>
                    <input type="text" class="form-control" id="usr">
                </div>
            </div>
        </div>
        <div id="hidden_home_menu_layers" class="hidden_menu">
            <div class="form-group container-fluid">
                <div class="col-sm-8">
                    <label for="usr"><h4>Layers</h4></label>
                    <input type="text" class="form-control" id="usr">
                </div>
            </div>
        </div>
    </div>
    <div class="home_content">
        <div id="map_canvas" class = "left_map"></div>
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

        </div>
        <div class = "right_side_bar"></div>
        
    </div>

  </body>
</html>