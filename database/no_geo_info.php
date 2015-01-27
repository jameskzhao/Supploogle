<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

header("Content-type: text/html; charset=utf-8");
require_once('../php/utilities.php');
require_once('connect.php');
mysql_select_db('supploogle', $useradmin) or die(mysql_error());
$selectSQL = "SELECT SQL_CALC_FOUND_ROWS suppliers.ID, country, city, street FROM suppliers LEFT JOIN supplier_geoaddress ON suppliers.ID = supplier_geoaddress.supplier_id WHERE ISNULL(lat)";
$get_supplier = mysql_query_or_die($selectSQL, $useradmin);
echo "<table>";
while($row_get_supplier=  mysql_fetch_assoc($get_supplier)){
    echo '<tr>';
        foreach($row_get_supplier as $key=>$value){
            echo "<td>".$value."</td>";
        }
    echo '</tr>';
}
echo "</table>";