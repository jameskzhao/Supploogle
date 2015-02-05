
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

if(!isset($useradmin)){
    require_once('./load.php');
}
$selectSQL = "SELECT DISTINCT category FROM suppliers WHERE suppliers.ID >18700000";
$get_category = mysql_query_or_die($selectSQL, $useradmin);
$category_array = array();
while($row_get_category = mysql_fetch_assoc($get_category)){
    $subcategory_array = get_subcategories($row_get_category['category']);
    $temp_array = array($row_get_category['category']=>$subcategory_array);
    array_push($category_array, $temp_array);
}

function get_subcategories($category){
    global $useradmin;
    $selectSQL = "SELECT DISTINCT sub_category FROM suppliers WHERE category='$category' AND suppliers.ID >18700000 ORDER BY sub_category ASC";
    $get_subcategories = mysql_query_or_die($selectSQL, $useradmin);
    $subcategory_array = array();
    while ($row_get_subcategory = mysql_fetch_assoc($get_subcategories)){
        array_push($subcategory_array, $row_get_subcategory['sub_category']);
    }
    return $subcategory_array;
}