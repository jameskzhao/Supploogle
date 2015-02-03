<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once 'common_header.php';
$selectSQL = "SELECT SQL_CALC_FOUND_ROWS suppliers.ID, country, city, street, postal_code FROM suppliers LEFT JOIN supplier_geoaddress ON suppliers.ID = supplier_geoaddress.supplier_id WHERE ISNULL(lat)";
$get_supplier = mysql_query_or_die($selectSQL, $useradmin);
echo "<table border>";
while($row_get_supplier=  mysql_fetch_assoc($get_supplier)){
    echo '<tr>';
        foreach($row_get_supplier as $key=>$value){
            echo "<td>".$value."</td>";
        }
    echo '</tr>';
}
echo "</table>";