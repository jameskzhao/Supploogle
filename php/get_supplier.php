<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once '../load.php';
error_reporting(0);
$keyword = isset($_POST['keyword'])?$_POST['keyword']:$_GET['keyword'];
//$city = isset($_POST['city'])?$_POST['city']:$_GET['city'];
$category = isset($_POST['category'])?$_POST['category']:$_GET['category'];
$country = isset($_POST['country'])?$_POST['country']:$_GET['country'];
//$subcategories = isset($_POST['subcategories'])?$_POST['subcategories']:$_GET['subcategories'];
$checked_business_type_array = isset($_POST['checked_business_type_array'])?$_POST['checked_business_type_array']:$_GET['checked_business_type_array'];
$filter = '';
$supplier_array = array();
if(!empty($keyword)){
    $filter.=" AND LOWER(business_name) LIKE LOWER('%$keyword%')";
}
if(!empty($city)){
    $filter.=" AND city LIKE '%$city%'";
}
if(!empty($category)&&$category!='Select Category'){
    $filter.=" AND business_category = '$category'";
}
if(!empty($subcategories)&&is_array($subcategories)){
    $filter .= " AND(";
    for($i=0; $i<count($subcategories);$i++){
        $filter .= ($i==0? ' ':' OR ')."sub_category = '$subcategories[$i]'";
    }
    $filter .=")";
}
if(!empty($country)){
    $filter .=" AND LOWER(business_country) = LOWER('".$country."')";
}

if(!empty($checked_business_type_array)&&is_array($checked_business_type_array)){
    if(in_array('S',$checked_business_type_array)||in_array('C',$checked_business_type_array)||in_array('L',$checked_business_type_array)){
        $filter.=" AND(";
        $k=0;
        for($i=0;$i<count($checked_business_type_array);$i++){
            if($checked_business_type_array[$i]=='S'||$checked_business_type_array[$i]=='C'||$checked_business_type_array[$i]=='L'){
                $filter.=($k==0?"":"OR ")."business_type='".$checked_business_type_array[$i]."'";
                $k++;
            }
        }
        $filter.=")";
    }else{
        $filter.=" AND(business_type!='S' AND business_type!='C' AND business_type!='L')";
    }
    if(in_array('port',$checked_business_type_array)){
        get_ports();
    }
}else{
    $filter.=" AND(business_type!='S' AND business_type!='C' AND business_type!='L')";
}
$selectSQL = "SELECT SQL_CALC_FOUND_ROWS * FROM business WHERE !ISNULL(lat) AND (business_parent_id IS NULL OR business_parent_id=0)".$filter;
$get_supplier = mysql_query_or_die($selectSQL, $useradmin);
$row=mysql_fetch_row(mysql_query("SELECT FOUND_ROWS()",$useradmin));

while($row_get_supplier = mysql_fetch_assoc($get_supplier)){
    array_push($supplier_array, $row_get_supplier);
}

/*
 * 2nd step: get all ports
 */
function get_ports(){
    global $useradmin, $supplier_array;
    $selectSQL = "SELECT SQL_CALC_FOUND_ROWS * FROM ports WHERE !ISNULL(lat)";
    $get_ports = mysql_query_or_die($selectSQL, $useradmin);
    while($row_get_port = mysql_fetch_assoc($get_ports)){
        $row_get_port['business_type']='port';
        array_push($supplier_array, $row_get_port);
    }
}

$return_array = array("sql"=>$selectSQL,"count"=>$row[0],"supplier_array"=>$supplier_array);
echo json_encode($return_array);
//echo "There are ".$row[0]." records in database";