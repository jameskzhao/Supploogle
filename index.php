<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>

<!doctype html>


<html>

<head>


    <!-- META -->
    <meta charset="utf-8" /><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="" width="device-width">
    <meta name="google" value="notranslate" />

    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    
    <!-- TITLE -->
    <title>
	Supploogle: suppliers, China
    </title>
</head>
<body>
    <div id="main_wrapper">
        <div id="home_logo">
            <a href="index.php">Supploogle</a>
        </div>
        <nav id="top_nav_menu">
            <a href="" class="active">Home</a>
            <a href="#">About Us</a>
            <a href="#">Contact Us</a>
            <a href="#">Login</a>
        </nav>
        <div id="home_search_wrapper">
            
            <div id="home_search">
            <h1>Find your supplier. Quick and easy.</h1>
                <form class="form_wrapper">
                    <div id="search_bar">
                    <input type="text" placeholder="Try a keyword in company or city name..." required>
                    </div>
                    <div id="selector_bar">
                        <div class="styled-select slate">
                            <select id="category_selector">
                                <option value="">Choose Category</option>
                                <option value="">Test Category 1</option>
                                <option value="">Test Category 1</option>
                                <option value="">Test Category 1</option>
                            </select>
                        </div>
                        <div class="styled-select slate">
                            <select id="sub_category_selector">
                                <option value="">Choose Sub-Category</option>
                                <option value="">Test Category 1</option>
                                <option value="">Test Category 1</option>
                                <option value="">Test Category 1</option>
                                <option value="">Test Category 1</option>
                                <option value="">Test Category 1</option>
                                <option value="">Test Category 1</option>
                                <option value="">Test Category 1</option>
                                <option value="">Test Category 1</option>
                                <option value="">Test Category 1</option>
                            </select>
                        </div>
                        <div class="styled-select slate">
                            <select id="sub_sub_category_selector">
                                <option value="">Choose Sub-sub-Category</option>
                                <option value="">Test Category 1</option>
                                <option value="">Test Category 1</option>
                                <option value="">Test Category 1</option>
                                <option value="">Test Category 1</option>
                                <option value="">Test Category 1</option>
                                <option value="">Test Category 1</option>
                                <option value="">Test Category 1</option>
                                <option value="">Test Category 1</option>
                                <option value="">Test Category 1</option>
                                <option value="">Test Category 1</option>
                            </select>
                        </div>
                        <div class="styled-select slate">    
                            <select id="country_selector">
                                <option value="">Choose Country</option>
                                <option value="cn">China</option>
                                <option value="ca">Canada</option>
                                <option value="us">United States</option>
                            </select>
                        </div>
                    </div>
                    <div id="checkbox_bar">
                        <div class="single_checkbox">
                            <input type="checkbox" id="ts" class="home_checkbox">
                            <label for="ts">TS</label>
                        </div>
                        <div class="single_checkbox">
                            <input type="checkbox" id="iso" class="home_checkbox">
                            <label for="iso">ISO</label>
                        </div>
                        <div class="single_checkbox">
                            <input type="checkbox" id="as" class="home_checkbox">
                            <label for="as">AS</label>
                        </div>
                        <div class="single_checkbox">
                            <input type="checkbox" id="duns" class="home_checkbox">
                            <label for="duns">DUNS</label>
                        </div>
                    </div>
                    
                    <div id="right_corner_button">
                        <button class="disabled" type="submit">Search</button>
                    </div>
                    
                </form>
            </div>
        </div>
        <div id="home_map_wrapper">
            <img src="images/background_map.png"/>
        </div>                 
        <div id="home_footer">
            <div id="supploogle_intro">
                One sentence introduction about Supploogle. <a href="">More info...</a>
            </div>
            <div id="social_buttons">
                <a href=""><div class="social_icon facebook_button" ></div></a>
                <a href=""><div class="social_icon twitter_button" ></div></a>
                <a href=""><div class="social_icon linkedin_button" ></div></a>
            </div>
        </div>
    </div>
    
</body>
</html>