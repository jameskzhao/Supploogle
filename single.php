<?php
header('Content-Type: text/html; charset=utf-8');
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once('database/connect.php');
require_once('php/utilities.php');
error_reporting(0);
mysql_select_db('supploogle', $useradmin) or die(mysql_error());
$supplier_id = isset($_POST['id'])?$_POST['id']:$_GET['id'];
if(!empty($supplier_id)){
    $selectSQL = "SELECT * FROM suppliers LEFT JOIN supplier_geoaddress ON suppliers.ID = supplier_geoaddress.supplier_id WHERE ID=$supplier_id";
    $get_supplier = mysql_query_or_die($selectSQL, $useradmin);
    $supplier_array = array();
    while($row_get_supplier=mysql_fetch_assoc($get_supplier)){
        array_push($supplier_array, $row_get_supplier);
    }
    echo json_encode($supplier_array);
}else{
    echo "No supplier id found";
}
