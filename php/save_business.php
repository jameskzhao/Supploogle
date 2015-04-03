<?php
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

$business_id = $_POST['business_id'];
$business_name = $_POST['business_name'];
$business_address = $_POST['business_address'];
$business_country = $_POST['business_country'];
$business_category = $_POST['business_category'];
$lat = $_POST['lat'];
$lng = $_POST['lng'];


$sql = sprintf("UPDATE business SET business_name=%s, business_address=%s, business_country=%s, lat=%s, lng=%s, business_category=%s WHERE business_id=%s",
        GetSQLValueString($business_name, "text"),
        GetSQLValueString($business_address, "text"),
        GetSQLValueString($business_country, "text"),
        GetSQLValueString($lat, "double"),
        GetSQLValueString($lng, "double"),
        GetSQLValueString($business_category, "text"),
        GetSQLValueString($business_id, "int")
        );

$results = $sdb->select($sql);
if($results){
    $return_message = "Your change has been successfully saved.";
}else{
    $return_message = "Saving failed";
}
$return_array = array("return_message"=>$return_message);
echo json_encode($return_array);
