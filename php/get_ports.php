<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once('../database/connect.php');
require_once('utilities.php');
error_reporting(0);
mysql_select_db('supploogle', $useradmin) or die(mysql_error());
$selectSQL = "SELECT SQL_CALC_FOUND_ROWS * FROM ports WHERE !ISNULL(lat)";
$get_ports = mysql_query_or_die($selectSQL, $useradmin);
$row=mysql_fetch_row(mysql_query("SELECT FOUND_ROWS()",$useradmin));
$ports_array = array();
while($row_get_port = mysql_fetch_assoc($get_ports)){
    array_push($ports_array, $row_get_port);
}
$return_array = array("count"=>$row[0],"ports_array"=>$ports_array);
echo json_encode($return_array);
?>
