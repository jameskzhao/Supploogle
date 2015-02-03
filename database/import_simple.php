<?php 
    require_once('common_header.php');
    $data = new Spreadsheet_Excel_Reader("simple_database.xls");
    //echo $data->dump(true,true);
    
    $sheet_index=0;
    $rowcount = $data->rowcount($sheet_index);
    $colcount=$data->colcount($sheet_index);
    $insertSQL = "REPLACE INTO suppliers (ID, supploogle_name, category, sub_category, country, province, city, street, postal_code) VALUES ";
        $insertValues = '';
        $rowindex = 1;
        $recorded = 0;
        while($rowindex<=$rowcount){
            $supplier_id = $data->raw($rowindex, 1, $sheet_index);
            //echo $supplier_id."<br/>";
            if(!empty($supplier_id)){
                $supploogle_name = $data->val($rowindex, 2, $sheet_index);
                $category = $data->val($rowindex, 9, $sheet_index);
                $sub_category = $data->val($rowindex, 10, $sheet_index);
                $country = $data->val($rowindex, 8, $sheet_index);
                $postal_code = $data->val($rowindex, 7, $sheet_index);
                $province = $data->val($rowindex, 6, $sheet_index);
                $city = $data->val($rowindex, 5, $sheet_index);
                $street = $data->val($rowindex, 3, $sheet_index);
                $insertValues .= sprintf(',(%s,%s,%s,%s,%s,%s,%s,%s,%s)',
                        GetSQLValueString($supplier_id, 'int'),
                        GetSQLValueString($supploogle_name, 'text'),
                        GetSQLValueString($category, 'text'),
                        GetSQLValueString($sub_category, 'text'),
                        GetSQLValueString($country, 'text'),
                        GetSQLValueString($province, 'text'),
                        GetSQLValueString($city, 'text'),
                        GetSQLValueString($street, 'text'),
                        GetSQLValueString($postal_code, 'text'));
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