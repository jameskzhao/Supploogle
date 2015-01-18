<?php 
error_reporting(0);
        header("Content-type: text/html; charset=utf-8");
	//require_once('../Connections/initialiseSession.php');
	//require_once('../Connections/dbconfig.php');
	//require_once('../mobile/utilities.php');
	require_once('../php/excel_reader.php'); 
        require_once('../php/utilities.php');
        require_once('connect.php');
	
	function null_2_default($string,$default) {
		return (isset($string)&&$string!=''?$string:$default);
	}

	/*if ($_SESSION['LD_User'] && ($_SESSION['LD_User']['access_level']>=5)) {
	} else {
		header("Location: http://".$_SERVER["SERVER_NAME"]."/admin_login.php?url=".urlencode($_SERVER['PHP_SELF'])); 
	}*/
	
	$current_timestamp = get_GMT(microtime(true));
	$current_time = date("Y-m-d H:i:s",$current_timestamp);
	
	mysql_select_db('supploogle', $useradmin) or die(mysql_error());
	
	$data = new Spreadsheet_Excel_Reader("database.xls");
	//echo $data->dump(true,true);
	// import biz categories
	$sheet_index=0;
	$rowcount = $data->rowcount($sheet_index);
        $colcount=$data->colcount($sheet_index);
        
	
        $truncSQL = "TRUNCATE TABLE suppliers";
        $result = mysql_query_or_die($truncSQL, $useradmin);
        $insertSQL = "REPLACE INTO suppliers (ID, duns_number, duns_name, supploogle_name, customer_name, category, sub_category, supplier_type, country, city, street) VALUES ";
        $insertValues = '';
        $rowindex = 1;
        $recorded = 0;
        while($rowindex<=$rowcount){
            $supplier_id = $data->raw($rowindex, 1, $sheet_index);
            //echo $supplier_id."<br/>";
            if(!empty($supplier_id)){
                $duns_number = $data->val($rowindex, 2, $sheet_index);
                $duns_name = $data->val($rowindex, 3, $sheet_index);
                $supploogle_name = $data->val($rowindex, 4, $sheet_index);
                $customer_name = $data->val($rowindex, 5, $sheet_index);
                $category = $data->val($rowindex, 6, $sheet_index);
                $sub_category = $data->val($rowindex, 7, $sheet_index);
                $supplier_type = $data->val($rowindex, 8, $sheet_index);
                $country = $data->val($rowindex, 9, $sheet_index);
                $city = $data->val($rowindex, 10, $sheet_index);
                $street = $data->val($rowindex, 11, $sheet_index);
                $insertValues .= sprintf(',(%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s)',
                        GetSQLValueString($supplier_id, 'int'),
                        GetSQLValueString($duns_number, 'int'),
                        GetSQLValueString($duns_name, 'text'),
                        GetSQLValueString($supploogle_name, 'text'),
                        GetSQLValueString($customer_name, 'text'),
                        GetSQLValueString($category, 'text'),
                        GetSQLValueString($sub_category, 'text'),
                        GetSQLValueString($supplier_type, 'text'),
                        GetSQLValueString($country, 'text'),
                        GetSQLValueString($city, 'text'),
                        GetSQLValueString($street, 'text'));
                $recorded++;
            }
            $rowindex++;
        }
        // strip out the first comma of the values string
	$insertSQL .= substr($insertValues,1);
        $result = mysql_query_or_die($insertSQL, $useradmin);
        if($result){
            echo "$recorded Supplier information successfully imported!";
        }
	//$truncSQL = "TRUNCATE TABLE biz_categories";
	//$Result1 = mysql_query($truncSQL, $useradmin) or die(mysql_error());
	
	//$insertSQL = "REPLACE INTO biz_categories (category_id, url_name, cn, tw, en, cn_description, tw_description, en_description) VALUES ";
	//$insertSQLValues = '';
	/*while ($rowindex<=$rowcount) {
		$category_id = $data->raw($rowindex,1,$sheet_index);
		if (isset($category_id) && $category_id!='') {
			$url_name = $data->val($rowindex,2,$sheet_index);
			$cn = $data->val($rowindex,3,$sheet_index);
			$tw = null_2_default($data->val($rowindex,4,$sheet_index),$cn);
			$en = null_2_default($data->val($rowindex,5,$sheet_index),$cn);
			$cn_description = $data->val($rowindex,6,$sheet_index);
			$tw_description = null_2_default($data->val($rowindex,7,$sheet_index),$cn_description);
			$en_description = null_2_default($data->val($rowindex,8,$sheet_index),$cn_description);
			$insertSQLValues .= sprintf(',(%s,%s,%s,%s,%s,%s,%s,%s)',
									GetSQLValueString($category_id,'int'),
									GetSQLValueString($url_name,'text'),
									GetSQLValueString($cn,'text'),
									GetSQLValueString($tw,'text'),
									GetSQLValueString($en,'text'),
									GetSQLValueString($cn_description,'text'),
									GetSQLValueString($tw_description,'text'),
									GetSQLValueString($en_description,'text'));
		}
		$rowindex += 1;
	}
	// strip out the first comma of the values string
	$insertSQL .= substr($insertSQLValues,1);
	echo 'SQL:'.$insertSQL.'<br />';
	$Result1 = mysql_query($insertSQL, $useradmin) or die(mysql_error());
	echo 'Biz categories imported<br/>';
	
	// import blog info
	$sheet_index=1;
	$rowcount = $data->rowcount($sheet_index);$colcount=$data->colcount($sheet_index);
	$rowindex = 1;
	$truncSQL = "TRUNCATE TABLE tag_profile";
	$Result1 = mysql_query($truncSQL, $useradmin) or die(mysql_error());
	
	$insertSQL = "REPLACE INTO tag_profile (tag_id, category_id, cn, tw, en, cn_description, tw_description, en_description) VALUES ";
	$insertSQLValues = '';
	while ($rowindex<=$rowcount) {
		$tag_id = $data->raw($rowindex,1,$sheet_index);
		if (isset($tag_id) && $tag_id!='') {
			$category_id = $data->val($rowindex,2,$sheet_index);
			$cn = $data->val($rowindex,3,$sheet_index);
			$tw = null_2_default($data->val($rowindex,4,$sheet_index),$cn);
			$en = null_2_default($data->val($rowindex,5,$sheet_index),$cn);
			$cn_description = $data->val($rowindex,6,$sheet_index);
			$tw_description = null_2_default($data->val($rowindex,7,$sheet_index),$cn_description);
			$en_description = null_2_default($data->val($rowindex,8,$sheet_index),$cn_description);
			$insertSQLValues .= sprintf(',(%s,%s,%s,%s,%s,%s,%s,%s)',
									GetSQLValueString($blog_id,'int'),
									GetSQLValueString($category_id,'int'),
									GetSQLValueString($cn,'text'),
									GetSQLValueString($tw,'text'),
									GetSQLValueString($en,'text'),
									GetSQLValueString($cn_description,'text'),
									GetSQLValueString($tw_description,'text'),
									GetSQLValueString($en_description,'text'));
		}
		$rowindex += 1;
	}
	// strip out the first comma of the values string
	$insertSQL .= substr($insertSQLValues,1);
	echo 'SQL:'.$insertSQL.'<br />';
	$Result1 = mysql_query($insertSQL, $useradmin) or die(mysql_error());
	echo 'Tags imported<br/>';
         * 
         */
	
?>

