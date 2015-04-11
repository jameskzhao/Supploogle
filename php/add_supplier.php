<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
error_reporting(E_ALL);
require_once '../load.php';
if(empty($_SESSION['USER_ID']) || empty($_SESSION['COMPANY_ID'])){
    if(!empty($_SESSION['USER_ID'])&&empty($_SESSION['COMPANY_ID'])){
        $url = "http" . ((!empty($_SERVER['HTTPS'])) ? "s" : "") . "://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
        $redirect = str_replace('save_business.php', 'sign_up_company.php', $url);
        header("Location: $redirect");
        exit;
    }elseif(empty($_SESSION['USER_ID'])){
        $url = "http" . ((!empty($_SERVER['HTTPS'])) ? "s" : "") . "://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
        $redirect = str_replace('save_business.php', 'login.php', $url);
        header("Location: $redirect");
        exit;
    }
}

$post_data = $_POST;
$business_parent_id = $_SESSION['COMPANY_ID'];
$fields = array_keys($post_data);
array_push($fields, 'business_parent_id');
$values = array_values($post_data);
array_push($values, $business_parent_id);
$table = "business";

$results = $sdb->insert($table, $fields, $values);
if($results){
    $return_message = "Supplier added successfully.";
}else{
    $return_message = "Failed to add supplier.";
}
$return_array = array("return_message"=>$return_message);
echo json_encode($return_array);

