<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once '../load.php';
error_reporting(0);
/*$keyword = isset($_POST['keyword'])?$_POST['keyword']:$_GET['keyword'];
$city = isset($_POST['city'])?$_POST['city']:$_GET['city'];
$category = isset($_POST['category'])?$_POST['category']:$_GET['category'];
$subcategories = isset($_POST['subcategories'])?$_POST['subcategories']:$_GET['subcategories'];
$filter = '';
if(!empty($keyword)){
    $filter.=" AND (duns_name LIKE '%$keyword%' OR supploogle_name LIKE '%$keyword%' OR country LIKE '%$keyword%' OR street LIKE '%$keyword%')";
}
if(!empty($city)){
    $filter.=" AND city LIKE '%$city%'";
}
if(!empty($category)&&$category!='Select Category'){
    $filter.=" AND category = '$category'";
}
if(!empty($subcategories)&&is_array($subcategories)){
    $filter .= " AND(";
    for($i=0; $i<count($subcategories);$i++){
        $filter .= ($i==0? ' ':' OR ')."sub_category = '$subcategories[$i]'";
    }
    $filter .=")";
}
*/
$selectSQL = "SELECT SQL_CALC_FOUND_ROWS business_id, business_name, lat, lng FROM business WHERE !ISNULL(lat) AND business_parent_id=".$_SESSION['COMPANY_ID'];
$get_supplier = mysql_query_or_die($selectSQL, $useradmin);
$row=mysql_fetch_row(mysql_query("SELECT FOUND_ROWS()",$useradmin));
$supplier_array = array();
while($row_get_supplier = mysql_fetch_assoc($get_supplier)){
    array_push($supplier_array, $row_get_supplier);
}
$return_array = array("count"=>$row[0],"supplier_array"=>$supplier_array);
echo json_encode($return_array);
//echo "There are ".$row[0]." records in database";