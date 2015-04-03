<?php
require_once 'load.php';

//first we check if user is logged on
if(empty($_SESSION['USER_ID']) || empty($_SESSION['COMPANY_ID'])){
    if(!empty($_SESSION['USER_ID'])&&empty($_SESSION['COMPANY_ID'])){
        $url = "http" . ((!empty($_SERVER['HTTPS'])) ? "s" : "") . "://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
        $redirect = str_replace('single.php', 'sign_up_company.php', $url);
        header("Location: $redirect");
        exit;
    }elseif(empty($_SESSION['USER_ID'])){
        $url = "http" . ((!empty($_SERVER['HTTPS'])) ? "s" : "") . "://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
        $redirect = str_replace('single.php', 'login.php', $url);
        header("Location: $redirect");
        exit;
    }
}else{
    $user_id = $_SESSION['USER_ID'];
    $company_id = $_SESSION['COMPANY_ID'];
    $user_info=$suser->get_user_info($user_id);
    get_header('Company');
}
$supplier_id = isset($_POST['id'])?$_POST['id']:$_GET['id'];
if(!empty($supplier_id)){
    $selectSQL = "SELECT * FROM suppliers LEFT JOIN supplier_geoaddress ON suppliers.ID = supplier_geoaddress.supplier_id WHERE ID=$supplier_id";
    $get_supplier = mysql_query_or_die($selectSQL, $useradmin);
    $supplier_array = array();
    while($row_get_supplier=mysql_fetch_assoc($get_supplier)){
        array_push($supplier_array, $row_get_supplier);
    }
    ?>
    <div class="form-group container-fluid">
    
    <div id="user_info" class="col-md-4 col-md-offset-4 panel panel-default main_form">
        <h3 class="text-center">Company Detail</h3>
        <table class="table table-striped">
            <tr>
                <td>
                    Company Name:
                </td>
                <td>
                    <?php echo $supplier_array[0]['supploogle_name'];?>
                </td>
            </tr>
            <tr>
                <td>
                    Category:
                </td>
                <td>
                    <?php echo $supplier_array[0]['category'];?>
                </td>
            </tr>
            <tr>
                <td>
                    Sub Category:
                </td>
                <td>
                    <?php echo $supplier_array[0]['sub_category'];?>
                </td>
            </tr>
        </table>
    </div>
        <?php
}else{
    echo "No supplier id found";
}
