<?php
	//Load all the required files in order
    //require_once(dirname(__FILE__) . '/include/config.php');
    //require_once(dirname(__FILE__) . '/include/db.php');
    //require_once(dirname(__FILE__) . '/php/utilities.php');
    header("Content-type: text/html; charset=utf-8");
    $project_root = $_SERVER['DOCUMENT_ROOT'].'/Supploogle';
    require_once($project_root.'/php/utilities.php');
    require_once($project_root.'/php/functions.php');
    //require_once($project_root.'/database/connect.php');
    require_once($project_root.'/include/config.php');
    require_once($project_root.'/include/db.php');
    require_once($project_root.'/include/class.user.php');
    $current_timestamp = get_GMT(microtime(true));
    $current_time = date("Y-m-d H:i:s",$current_timestamp);
    
?>