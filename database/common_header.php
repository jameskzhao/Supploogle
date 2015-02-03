<?php 
    error_reporting(0);
    header("Content-type: text/html; charset=utf-8");
    $project_root = $_SERVER['DOCUMENT_ROOT'].'/Supploogle';
    
    require_once($project_root.'/php/excel_reader.php'); 
    require_once($project_root.'/php/utilities.php');
    require_once($project_root.'/database/connect.php');
    $current_timestamp = get_GMT(microtime(true));
    $current_time = date("Y-m-d H:i:s",$current_timestamp);
    mysql_select_db('supploogle', $useradmin) or die(mysql_error());
    /*
     * Database functions
     */
    function null_2_default($string,$default) {
        return (isset($string)&&$string!=''?$string:$default);        
    }
    
    function truncate_table($table_name){
        global $useradmin;
        $truncSQL = "TRUNCATE TABLE $table_name";
        $result = mysql_query_or_die($truncSQL, $useradmin);
        return $result;
    }
?>