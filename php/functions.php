<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/*
 * Output the header html and set page title
 */
function get_header($title){
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo $title?></title>
        <link rel="icon" type="image/png" href="images/favicon.png">
        <?php load_scripts();?>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    </head>
    <body>
    <?php
        get_top_nav($title);
}

function get_footer(){?>
     </body>
    
        <script src="http://maps.googleapis.com/maps/api/js?v=3&amp;sensor=false"></script>
        <script type="text/javascript" src="js/markerclusterer.js"></script>
        <script type="text/javascript" src="js/index.js"></script>
</html>
<?php
}
/*
 * Output the top navigation
 */
function get_top_nav($title){
    
    ?>
<nav class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
            <div class="row">
                <div style=" text-aligh:center; padding-left: 2px; padding-right: 2px; font-size:36px;" class="col-sm-2">
                    <div class="navbar-header full-width">
                        <a class="block-elem full-width vertical-aligned text-left no-underline" style="height: 44px" href="index.php">
                            Supploogle</a>
                    </div>
                </div>
                <div>
                    <ul class="nav navbar-nav">
                        <li <?php echo ($title=='Supploogle'?'class="active"':'')?>><a href="index.php"><img src="./images/earth.png" width="20"> Map</a></li>
                        <li><a href="#">Page 1</a></li>
                        <li><a href="#">Page 2</a></li> 
                        <li><a href="#">Services</a></li> 
                    </ul>
                    <?php if(!empty($_SESSION['USER_ID'])&&!empty($_SESSION['COMPANY_ID'])){?>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Welcome <?php echo $_SESSION['USER_NAME']?>
                            <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Profile</a></li>
                                <li><a href="#">My Suppliers</a></li>
                                <li><a href="logout.php">Log Out</a></li>
                            </ul>
                        </li>
                          
                    </ul>
                    <?php }else{?>
                    <ul class="nav navbar-nav navbar-right">
                        <li <?php echo ($title=='Sign Up'?'class="active"':'')?>><a href="sign_up.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                        <li <?php echo ($title=='Login'?'class="active"':'')?>><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    </ul>
                    <?php }?>
                </div>
            </div>
            
        </div>
    </nav>
<?php
}

/*
 * Include all the scripts
 */
function load_scripts(){?>
    <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>-->
        <script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
        <script type="text/javascript" src="js/jquery-ui-1.11.2/jquery-ui.min.js"></script>
        <!-- Bootstrap -->
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/btstyle.css">
        <?php
}
?>

