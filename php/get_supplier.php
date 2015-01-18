<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once('../database/connect.php');
require_once('utilities.php');

$selectSQL = "SELECT SQL_CALC_FOUND_ROWS suppliers.ID, lat, lng FROM suppliers LEFT JOIN supplier_geoaddress ON suppliers.ID = supplier_geoaddress.supplier_id WHERE !ISNULL(lat)";
$get_supplier = mysql_query_or_die($selectSQL, $useradmin);
$row=mysql_fetch_row(mysql_query("SELECT FOUND_ROWS()",$useradmin));
$supplier_array = array();
while($row_get_supplier = mysql_fetch_assoc($get_supplier)){
    array_push($supplier_array, $row_get_supplier);
}
$return_array = array("count"=>$row[0],"supplier_array"=>$supplier_array);
echo json_encode($return_array);
//echo "There are ".$row[0]." records in database";