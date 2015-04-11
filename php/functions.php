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
    
    $header_html='<!DOCTYPE html>';
    $header_html.='<html lang="en">';
    $header_html.='<head>';
        $header_html.='<meta charset="utf-8">';
        $header_html.='<meta http-equiv="X-UA-Compatible" content="IE=edge">';
        $header_html.='<meta name="viewport" content="width=device-width, initial-scale=1">';
        $header_html.='<title>'.$title.'</title>';
        $header_html.='<link rel="icon" type="image/png" href="images/favicon.png">';
        $header_html.='<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">';
        echo $header_html;
        load_scripts();
    echo '</head>';
    echo '<body>';
    include_once('analyticstracking.php');
    get_top_nav($title);
}

function get_footer($page){
    echo '</body>';
    if(isset($page)){
        switch($page){
            case 'index':
                //$script_html='<script src="http://maps.googleapis.com/maps/api/js?v=3&amp;sensor=false"></script>';
                $script_html ='<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true&libraries=places"></script>';
                
                $script_html.='<script type="text/javascript" src="js/markerclusterer.js"></script>';
                $script_html.='<script type="text/javascript" src="js/index.js"></script>';
            break;
            case 'sign_up_company':
                $script_html = '';
                $script_html.='<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true&libraries=places"></script>';
                $script_html.='<script type="text/javascript" src="js/sign_up_company.js"></script>';
            break;
            case 'profile':
                $script_html = '';
                $script_html.='<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true&libraries=places"></script>';
                $script_html.='<script type="text/javascript" src="js/profile.js"></script>';
            break;
            case 'customer_map':
                $script_html = '';
                $script_html.='<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true&libraries=places"></script>';
                
                $script_html.='<script type="text/javascript" src="js/customer_map.js"></script>';
            break;
            case 'single':
                $script_html = '';
                $script_html.='<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true&libraries=places"></script>';
                
                $script_html.='<script type="text/javascript" src="js/Chart.min.js"></script>';
                $script_html.='<script type="text/javascript" src="js/single.js"></script>';
            break;
        default :
            $script_html='';
        }
        echo $script_html;
    }
    echo '</html>';
}
/*
 * Output the top navigation
 */
function get_top_nav($title){
    $top_nav_html='<nav class="navbar navbar-default" role="navigation">';
            $top_nav_html.='<div class="container-fluid">';
            $top_nav_html.='<div class="row">';
                $top_nav_html.='<div style=" text-aligh:center; padding-left: 2px; padding-right: 2px; font-size:36px;" class="col-sm-2">';
                    $top_nav_html.='<div class="navbar-header full-width">';
                        $top_nav_html.='<a class="block-elem full-width vertical-aligned text-left no-underline" style="height: 44px" href="index.php">Supploogle</a>';
                    $top_nav_html.='</div>';
                $top_nav_html.='</div>';
                $top_nav_html.='<div>';
                    $top_nav_html.='<ul class="nav navbar-nav">';
                        $top_nav_html.='<li '.($title=='Supploogle'?'class="active"':'').'><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>';
                        
                        $top_nav_html.='<li '.($title=='Customer Map'?'class="active"':'').'><a href="customer_map.php"><span class="glyphicon glyphicon-globe"></span> My Suppliers</a></li>';
                        
                        
                    $top_nav_html.='</ul>';
                    if(!empty($_SESSION['USER_ID'])&&!empty($_SESSION['COMPANY_ID'])){
                    $top_nav_html.='<ul class="nav navbar-nav navbar-right">';
                        $top_nav_html.='<li class="dropdown">';
                            $top_nav_html.='<a class="dropdown-toggle" data-toggle="dropdown" href="#">Welcome '.$_SESSION['USER_NAME'];
                            $top_nav_html.='<span class="caret"></span></a>';
                            $top_nav_html.='<ul class="dropdown-menu">';
                                $top_nav_html.='<li><a href="profile.php"><span class="glyphicon glyphicon-user" style="padding-right:10px;"></span>MyProfile</a></li>';
                                $top_nav_html.='<li><a href="logout.php"><span class="glyphicon glyphicon-log-out" style="padding-right:10px;"></span>Log Out</a></li>';
                            $top_nav_html.='</ul>';
                        $top_nav_html.='</li>';
                    $top_nav_html.='</ul>';
                    }else{
                        $top_nav_html.='<ul class="nav navbar-nav navbar-right">';
                        $top_nav_html.='<li '.($title=='Sign Up'?'class="active"':'').'><a href="sign_up.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>';
                        $top_nav_html.='<li '.($title=='Login'?'class="active"':'').'><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>';
                    $top_nav_html.='</ul>';
                    }
                $top_nav_html.='</div>';
            $top_nav_html.='</div>';
            
        $top_nav_html.='</div>';
    $top_nav_html.='</nav>';
    echo $top_nav_html;
}

/*
 * Include all the scripts
 */
function load_scripts(){
        $scripts='<link href="http://fonts.googleapis.com/css?family=Lobster" rel="stylesheet" type="text/css">';
    
        //<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        //<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>-->
        $scripts.='<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>';
        $scripts.='<script type="text/javascript" src="js/jquery-ui-1.11.2/jquery-ui.min.js"></script>';
        //<!-- Bootstrap -->
        //<!-- Latest compiled and minified CSS -->
        $scripts.='<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">';
        //<!-- Latest compiled and minified JavaScript -->
        $scripts.='<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>';
        $scripts.='<link rel="stylesheet" href="css/btstyle.css">';
        //<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        //<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        //<!--[if lt IE 9]>
        $scripts.='<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>';
        $scripts.='<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>';
        //<![endif]-->
        echo $scripts;
}
?>