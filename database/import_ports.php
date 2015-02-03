<?php 
        require_once 'common_header.php';
	$data = new Spreadsheet_Excel_Reader("port_names.xls");
	//echo $data->dump(true,true);
	// import biz categories
	$sheet_index=0;
	$rowcount = $data->rowcount($sheet_index);
        $colcount=$data->colcount($sheet_index);
        $rowindex=1;
        truncate_table('ports');
        $insertSQL = "REPLACE INTO ports (ID, port_name, lat, lng) VALUES ";
        $insertValues = '';
        $rowindex = 1;
        $recorded = 0;
        while($rowindex<=$rowcount){
            $port_id = $data->raw($rowindex, 1, $sheet_index);
            $lat = $data->val($rowindex, 3, $sheet_index);
            $lng = $data->val($rowindex, 4, $sheet_index);
            //echo $supplier_id."<br/>";
            if(!empty($port_id)&&!empty($lat)&&!empty($lng)){
                $port_name = $data->val($rowindex, 2, $sheet_index);
                
                $insertValues .= sprintf(',(%s,%s,%s,%s)',
                        GetSQLValueString($port_id, 'int'),
                        GetSQLValueString($port_name, 'text'),
                        GetSQLValueString($lat, 'double'),
                        GetSQLValueString($lng, 'double')
                        );
                $recorded++;
            }
            $rowindex++;
        }
        // strip out the first comma of the values string
	$insertSQL .= substr($insertValues,1);
        
        $result = mysql_query_or_die($insertSQL, $useradmin);
        if($result){
            echo "$recorded ports information successfully imported!";
        }
	
	
?>

