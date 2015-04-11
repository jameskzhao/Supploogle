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
    $selectSQL = "SELECT * FROM business WHERE business_id=$supplier_id";
    $get_supplier = mysql_query_or_die($selectSQL, $useradmin);
    $supplier_array = array();
    while($row_get_supplier=mysql_fetch_assoc($get_supplier)){
        array_push($supplier_array, $row_get_supplier);
    }
    //var_dump($supplier_array);
    ?>
<script type="text/javascript">
    var supplier_array = <?php echo json_encode($supplier_array);?>;
</script>
    <div class="form-group container-fluid">
    
    <div class="col-md-8 col-md-offset-2 panel panel-default main_form">
        <h3 class="text-center">Company Detail</h3>
        <table class="table table-striped">
            <tr>
                <td>
                    Company Name:
                </td>
                <td>
                    <?php echo $supplier_array[0]['business_name'];?>
                </td>
            </tr>
            <tr>
                <td>
                    Category:
                </td>
                <td>
                    <?php echo $supplier_array[0]['business_category'];?>
                </td>
            </tr>
            <tr>
                <td>
                    Payment Term:
                </td>
                <td>
                    <canvas id="payment_term" width="400px" height="250px"></canvas>
                </td>
            </tr>
            <tr>
                <td>
                    Lead Time:
                </td>
                <td>
                    <canvas id="lead_time" width="400px" height="250px"></canvas>
                </td>
            </tr>
            <tr>
                <td>
                    PPM:
                </td>
                <td>
                    <canvas id="ppm" width="400px" height="250px"></canvas>
                </td>
            </tr>
            <tr>
                <td>
                    OTTR:
                </td>
                <td>
                    <canvas id="ottr" width="400px" height="250px"></canvas>
                </td>
            </tr>
            <tr>
                <td>
                    PPV:
                </td>
                <td>
                    <canvas id="ppv" width="400px" height="250px"></canvas>
                </td>
            </tr>
            <tr>
                <td>
                    Part Variety:
                </td>
                <td>
                    <canvas id="part_variety" width="400px" height="250px"></canvas>
                </td>
            </tr>
            <tr>
                <td>
                    Part Quantity:
                </td>
                <td>
                    <canvas id="part_quantity" width="400px" height="250px"></canvas>
                </td>
            </tr>
            <tr>
                <td>
                    Spend:
                </td>
                <td>
                    <canvas id="spend" width="400px" height="250px"></canvas>
                </td>
            </tr>
            <tr>
                <td>
                    Shipment Frequency:
                </td>
                <td>
                    <canvas id="shipment_frequency" width="400px" height="250px"></canvas>
                </td>
            </tr>
            <tr>
                <td>
                    Score:
                </td>
                <td>
                    <canvas id="score" width="400px" height="250px"></canvas>
                </td>
            </tr>
        </table>
    </div>
        
        <?php
        get_footer('single');
}else{
    echo "No supplier id found";
}
