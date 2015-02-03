<?php 
        require_once 'common_header.php';
	$data = new Spreadsheet_Excel_Reader("database.xls");
	//echo $data->dump(true,true);
	// import biz categories
	$sheet_index=0;
	$rowcount = $data->rowcount($sheet_index);
        $colcount=$data->colcount($sheet_index);
	truncate_table('suppliers');
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
                $supplier_type = $data->val($rowindex, 11, $sheet_index);
                $country = $data->val($rowindex, 12, $sheet_index);
                $city = $data->val($rowindex, 13, $sheet_index);
                $street = $data->val($rowindex, 14, $sheet_index);
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
	
	
?>

