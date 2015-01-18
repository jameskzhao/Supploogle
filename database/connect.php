<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$db_host='localhost';
$db_user='root';
$db_pwd='';

$useradmin = mysql_pconnect($db_host, $db_user, $db_pwd) or trigger_error(mysql_error(),E_USER_ERROR);
mysql_query ("SET NAMES utf8",$useradmin);
$localconnect = $useradmin;