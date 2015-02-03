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
$selectSQL = "SELECT SQL_CALC_FOUND_ROWS suppliers.ID, country, city, street, postal_code FROM suppliers LEFT JOIN supplier_geoaddress ON suppliers.ID = supplier_geoaddress.supplier_id WHERE ISNULL(lat) ORDER BY RAND() LIMIT 0, 20";
$get_supplier = mysql_query_or_die($selectSQL, $useradmin);
$row=mysql_fetch_row(mysql_query("SELECT FOUND_ROWS()",$useradmin));
echo "There are ".$row[0]." records to be updated<br/>";
while($row_get_supplier = mysql_fetch_assoc($get_supplier)){
    $country = $row_get_supplier['country'];
    $city = $row_get_supplier['city'];
    $street = $row_get_supplier['street'];
    $postal_code = $row_get_supplier['postal_code'];
    $address_text = $street.' '.$city.' '.$country;
    $result = get_geocode($address_text, $postal_code ,$row_get_supplier['ID']);
    echo $result;
}
function get_geocode($address, $postal_code, $supplier_id){
	global $useradmin;
	$selectSQL = "SELECT * FROM supplier_geoaddress WHERE supplier_id=".$supplier_id;
	$get_geocode=mysql_query_or_die($selectSQL,$useradmin);
	if($row_get_geocode=mysql_fetch_assoc($get_geocode)){
		return $row_get_geocode;
	}else{
		echo "<br/>Entering google api<br/>";
		echo '<br/>'.urlencode($address).'<br/>';
		$url="http://maps.google.com/maps/api/geocode/json?sensor=false&address=".urlencode($address)."&components=postal_code:".urlencode($postal_code);
		echo '<br/>'.$url.'<br/>';
		$resp_json = file_get_contents($url);
		$resp = json_decode($resp_json, true);
		print_r($resp);
		echo '<br/>';
		if($resp['status']=='OK'){
			$lat=$resp['results'][0]['geometry']['location']['lat'];
			$lng=$resp['results'][0]['geometry']['location']['lng'];
			echo '<br/>'.$lat.'<br/>';
			echo '<br/>'.$lng.'<br/>';
			if(!empty($lat)&&!empty($lng)){
				$lat=trim($lat);
				$lng=trim($lng);
				$insertSQL = sprintf("INSERT INTO supplier_geoaddress(supplier_id, lat, lng)VALUES(%s,%s,%s) ON DUPLICATE KEY UPDATE lat=%s, lng=%s",
							GetSQLValueString($supplier_id,"int"),
							GetSQLValueString($lat,"double"),
							GetSQLValueString($lng,"double"),
							
							GetSQLValueString($lat,"double"),
							GetSQLValueString($lng,"double")
							);
				$result=mysql_query_or_die($insertSQL,$useradmin);
				return $resp['status'];
			}
			
		}elseif($resp['status']=='OVER_QUERY_LIMIT'){
			return $resp['status'];
		}else{
                    return $resp['status'];
		}
	}
}?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Supploogle</title>
        <link rel="icon" type="image/png" href="images/favicon.png">
        <!-- Goole font for logo -->
        <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
        
        <script type="text/javascript">
            setTimeout(function(){
                window.location.reload(1);
             }, 5000);
        </script>    
    </head>