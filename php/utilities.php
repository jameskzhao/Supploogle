<?php
define('UNICODE_MULTIBYTE', 1); // Indicates that full unicode support with the PHP mbstring extension is being used.

define('PREG_CLASS_UNICODE_WORD_BOUNDARY', 
  '\x{0}-\x{2F}\x{3A}-\x{40}\x{5B}-\x{60}\x{7B}-\x{A9}\x{AB}-\x{B1}\x{B4}' .
  '\x{B6}-\x{B8}\x{BB}\x{BF}\x{D7}\x{F7}\x{2C2}-\x{2C5}\x{2D2}-\x{2DF}' .
  '\x{2E5}-\x{2EB}\x{2ED}\x{2EF}-\x{2FF}\x{375}\x{37E}-\x{385}\x{387}\x{3F6}' .
  '\x{482}\x{55A}-\x{55F}\x{589}-\x{58A}\x{5BE}\x{5C0}\x{5C3}\x{5C6}' .
  '\x{5F3}-\x{60F}\x{61B}-\x{61F}\x{66A}-\x{66D}\x{6D4}\x{6DD}\x{6E9}' .
  '\x{6FD}-\x{6FE}\x{700}-\x{70F}\x{7F6}-\x{7F9}\x{830}-\x{83E}' .
  '\x{964}-\x{965}\x{970}\x{9F2}-\x{9F3}\x{9FA}-\x{9FB}\x{AF1}\x{B70}' .
  '\x{BF3}-\x{BFA}\x{C7F}\x{CF1}-\x{CF2}\x{D79}\x{DF4}\x{E3F}\x{E4F}' .
  '\x{E5A}-\x{E5B}\x{F01}-\x{F17}\x{F1A}-\x{F1F}\x{F34}\x{F36}\x{F38}' .
  '\x{F3A}-\x{F3D}\x{F85}\x{FBE}-\x{FC5}\x{FC7}-\x{FD8}\x{104A}-\x{104F}' .
  '\x{109E}-\x{109F}\x{10FB}\x{1360}-\x{1368}\x{1390}-\x{1399}\x{1400}' .
  '\x{166D}-\x{166E}\x{1680}\x{169B}-\x{169C}\x{16EB}-\x{16ED}' .
  '\x{1735}-\x{1736}\x{17B4}-\x{17B5}\x{17D4}-\x{17D6}\x{17D8}-\x{17DB}' .
  '\x{1800}-\x{180A}\x{180E}\x{1940}-\x{1945}\x{19DE}-\x{19FF}' .
  '\x{1A1E}-\x{1A1F}\x{1AA0}-\x{1AA6}\x{1AA8}-\x{1AAD}\x{1B5A}-\x{1B6A}' .
  '\x{1B74}-\x{1B7C}\x{1C3B}-\x{1C3F}\x{1C7E}-\x{1C7F}\x{1CD3}\x{1FBD}' .
  '\x{1FBF}-\x{1FC1}\x{1FCD}-\x{1FCF}\x{1FDD}-\x{1FDF}\x{1FED}-\x{1FEF}' .
  '\x{1FFD}-\x{206F}\x{207A}-\x{207E}\x{208A}-\x{208E}\x{20A0}-\x{20B8}' .
  '\x{2100}-\x{2101}\x{2103}-\x{2106}\x{2108}-\x{2109}\x{2114}' .
  '\x{2116}-\x{2118}\x{211E}-\x{2123}\x{2125}\x{2127}\x{2129}\x{212E}' .
  '\x{213A}-\x{213B}\x{2140}-\x{2144}\x{214A}-\x{214D}\x{214F}' .
  '\x{2190}-\x{244A}\x{249C}-\x{24E9}\x{2500}-\x{2775}\x{2794}-\x{2B59}' .
  '\x{2CE5}-\x{2CEA}\x{2CF9}-\x{2CFC}\x{2CFE}-\x{2CFF}\x{2E00}-\x{2E2E}' .
  '\x{2E30}-\x{3004}\x{3008}-\x{3020}\x{3030}\x{3036}-\x{3037}' .
  '\x{303D}-\x{303F}\x{309B}-\x{309C}\x{30A0}\x{30FB}\x{3190}-\x{3191}' .
  '\x{3196}-\x{319F}\x{31C0}-\x{31E3}\x{3200}-\x{321E}\x{322A}-\x{3250}' .
  '\x{3260}-\x{327F}\x{328A}-\x{32B0}\x{32C0}-\x{33FF}\x{4DC0}-\x{4DFF}' .
  '\x{A490}-\x{A4C6}\x{A4FE}-\x{A4FF}\x{A60D}-\x{A60F}\x{A673}\x{A67E}' .
  '\x{A6F2}-\x{A716}\x{A720}-\x{A721}\x{A789}-\x{A78A}\x{A828}-\x{A82B}' .
  '\x{A836}-\x{A839}\x{A874}-\x{A877}\x{A8CE}-\x{A8CF}\x{A8F8}-\x{A8FA}' .
  '\x{A92E}-\x{A92F}\x{A95F}\x{A9C1}-\x{A9CD}\x{A9DE}-\x{A9DF}' .
  '\x{AA5C}-\x{AA5F}\x{AA77}-\x{AA79}\x{AADE}-\x{AADF}\x{ABEB}' .
  '\x{D800}-\x{F8FF}\x{FB29}\x{FD3E}-\x{FD3F}\x{FDFC}-\x{FDFD}' .
  '\x{FE10}-\x{FE19}\x{FE30}-\x{FE6B}\x{FEFF}-\x{FF0F}\x{FF1A}-\x{FF20}' .
  '\x{FF3B}-\x{FF40}\x{FF5B}-\x{FF65}\x{FFE0}-\x{FFFD}'); // Matches Unicode characters that are word boundaries.

$gender_pronoun = array();
$gender_pronoun['en'] = array('his/her','his','her');
$gender_pronoun['de'] = array('sein/ihr','sein','ihr');
$gender_pronoun['fr'] = array('son','son','son');
$gender_pronoun['es'] = array('su','su','su');
$gender_pronoun['tw'] = array('他／她','他','她');
$gender_pronoun['cn'] = array('他／她','他','她');
$gender_pronoun['ja'] = array('his/her','his','her');
$gender_pronoun['ko'] = array('his/her','his','her');

function mysql_query_or_die($sql_query,$connection) {
	$mysql_result = mysql_query($sql_query, $connection) or die('SQL:'.$sql_query.', error:'.mysql_error());
	return $mysql_result;
}

function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}

function array_value_sort ($a, $b) {
	if ($a == $b) return 0;
	return ($a > $b) ? -1 : 1;
}

function array_null_to_space(&$value,$key) {
	if (!isset($value)) {$value="";};
}

function get_amount_symbol($country) {
	switch ($country) {
		case 'jp': case 'cn': $symbol='¥'; break;
		case 'uk': $symbol='£'; break;
		case 'fr': case 'de': $symbol='€'; break;
		default: $symbol='$'; break;
	}
	return $symbol;
}

function get_GMT($time) {
	switch (date('T')) {
		case 'PDT': $GMT_time = $time+25200; break;
		case 'PST': $GMT_time = $time+28800; break;
		case 'HKT': $GMT_time = $time-28800; break;
		case 'UTC': default: $GMT_time = $time; break;
	}
	return $GMT_time;
}
function getTimeByCity($GMT_time,$city) {
	switch ($city) {
		case 'YVR':
			$local_time = $GMT_time - 25200; break;
		default:
			$local_time = $GMT_time; break;
	}
	return $local_time;
}
function getTimeByCtryCity($GMT_time,$country,$city) {
	return getTimeByZone($GMT_time,$country,getTimeZoneByCity($GMT_time,$country,$city));
}
function getTimeByZone($GMT_time,$country,$timezone) {
	global $database_library,$localconnect;
	$selectTimeSQL = "SELECT offset FROM ".$database_library.".timezone_offset WHERE country='".$country."' AND timezone='".$timezone."'";
	$get_timezone = mysql_query_or_die($selectTimeSQL, $localconnect);
	if ($row_get_timezone=mysql_fetch_assoc($get_timezone)) {
		$local_time = $GMT_time + $row_get_timezone['offset'];
	} else {
		$local_time = $GMT_time;
	}
	mysql_free_result($get_timezone);
	return $local_time;
}
function getTimeZoneByCity($time,$country,$city) {
	global $database_library,$localconnect;
	$timestamp = date("Y-m-d H:i:s",$time);
	$selectTimeSQL = "SELECT country,timezone FROM ".$database_library.".timezone_city WHERE country='".$country."' AND city='".$city."' AND (from_date IS NULL OR from_date<='".$timestamp."') AND (to_date IS NULL OR to_date>'".$timestamp."')";
	$get_timezone = mysql_query_or_die($selectTimeSQL, $localconnect);
	if ($row_get_timezone=mysql_fetch_assoc($get_timezone)) {
		$timezone = $row_get_timezone['timezone'];
	} else {
		$timezone = '';
	}
	mysql_free_result($get_timezone);
	return $timezone;
}
function get_LTime($GMT_time,$timezone) {
	global $database_library,$localconnect;
	$selectTimeSQL = "SELECT offset FROM ".$database_library.".timezone_offset WHERE timezone='".$timezone."'";
	$get_timezone = mysql_query_or_die($selectTimeSQL, $localconnect);
	if ($row_get_timezone=mysql_fetch_assoc($get_timezone)) {
		$local_time = $GMT_time + $row_get_timezone['offset'];
	} else {
		$local_time = $GMT_time;
	}
	mysql_free_result($get_timezone);
	return $local_time;
}

function get_local_time($time) {
	switch (date('T')) {
		case 'PDT': $local_time = $time+25200; break;
		case 'PST': $local_time = $time-28800; break;
		case 'HKT': $local_time = $time+28800; break;
		default: $local_time = $time-0; break;
	}
	return $local_time;
}

function get_mth_yr_language($datetime) {
	$month_year_array = array("en"=>'',"tw"=>'',"cn"=>'','ja'=>'','ko'=>'','fr'=>'','de'=>'','es'=>'');
	$year_number = date("Y",$datetime);
	$month_number = date("n",$datetime);
	$month_year_array['en'] = date("M Y",$datetime);
	$month_year_array['tw'] = $year_number.'年'.$month_number.'月';
	$month_year_array['cn'] = $year_number.'年'.$month_number.'月';
	$month_year_array['ja'] = $year_number.'年'.$month_number.'月';
	$month_year_array['ko'] = $year_number.'년'.$month_number.'월';
	switch ($month_number) {
		case '1': 
			$month_year_array['fr'] = 'janv '.$year_number;
			$month_year_array['de'] = 'Jan '.$year_number;
			$month_year_array['es'] = 'enero '.$year_number;
			break;
		case '2': 
			$month_year_array['fr'] = 'févr '.$year_number;
			$month_year_array['de'] = 'Feb '.$year_number;
			$month_year_array['es'] = 'feb '.$year_number;
			break;
		case '3': 
			$month_year_array['fr'] = 'mars '.$year_number;
			$month_year_array['de'] = 'März '.$year_number;
			$month_year_array['es'] = 'marzo '.$year_number;
			break;
		case '4': 
			$month_year_array['fr'] = 'avril '.$year_number;
			$month_year_array['de'] = 'Apr '.$year_number;
			$month_year_array['es'] = 'abr '.$year_number;
			break;
		case '5': 
			$month_year_array['fr'] = 'mai '.$year_number;
			$month_year_array['de'] = 'Mai '.$year_number;
			$month_year_array['es'] = 'mayo '.$year_number;
			break;
		case '6': 
			$month_year_array['fr'] = 'juin '.$year_number;
			$month_year_array['de'] = 'Juni '.$year_number;
			$month_year_array['es'] = 'jun '.$year_number;
			break;
		case '7': 
			$month_year_array['fr'] = 'juil '.$year_number;
			$month_year_array['de'] = 'Juli '.$year_number;
			$month_year_array['es'] = 'jul '.$year_number;
			break;
		case '8': 
			$month_year_array['fr'] = 'août '.$year_number;
			$month_year_array['de'] = 'Aug '.$year_number;
			$month_year_array['es'] = 'agosto '.$year_number;
			break;
		case '9': 
			$month_year_array['fr'] = 'sept '.$year_number;
			$month_year_array['de'] = 'Sept '.$year_number;
			$month_year_array['es'] = 'sept '.$year_number;
			break;
		case '10': 
			$month_year_array['fr'] = 'oct '.$year_number;
			$month_year_array['de'] = 'Okt '.$year_number;
			$month_year_array['es'] = 'oct '.$year_number;
			break;
		case '11': 
			$month_year_array['fr'] = 'nov '.$year_number;
			$month_year_array['de'] = 'Nov '.$year_number;
			$month_year_array['es'] = 'nov '.$year_number;
			break;
		case '12': 
			$month_year_array['fr'] = 'déc '.$year_number;
			$month_year_array['de'] = 'Dez '.$year_number;
			$month_year_array['es'] = 'dic '.$year_number;
			break;
	}
	return $month_year_array;
}

function log_user_agent() {
	global $database_localmain,$localconnect;
	$insertAgentSQL = sprintf("INSERT INTO ".$database_localmain.".stats_crawler (signature,date_crawled,page) VALUES (%s,%s,%s)",
							  GetSQLValueString($_SERVER['HTTP_USER_AGENT'],"text"),
							  GetSQLValueString(date("Y-m-d H:i:s",get_GMT(time())),"date"),
							  GetSQLValueString($_SERVER['SCRIPT_FILENAME'].'?'.$_SERVER['QUERY_STRING'],"text"));
	$Result1 = mysql_query_or_die($insertAgentSQL, $localconnect);
}

function not_crawler($user_agent) {
	global $database_library,$localconnect;
	$selectSQL= sprintf("SELECT * FROM ".$database_library.".crawler_signatures WHERE locate(signature,%s)>0",
							  GetSQLValueString($user_agent,"text"));
	$get_crawler = mysql_query_or_die($selectSQL, $localconnect);
//	$not_crawler=(mysql_num_rows($get_crawler)==0);
	$not_crawler = true;
	mysql_free_result($get_crawler);
	log_user_agent();
	return $not_crawler;
}

function get_default_text($language,$selector) {
	global $database_library,$localconnect;
	
	$selectSQL = "SELECT content FROM ".$database_library.".page_text WHERE language='".$language."' AND (page='all' OR page='php') AND selector='".$selector."'";
	$get_text = mysql_query_or_die($selectSQL, $localconnect);
	if ($row_get_text=mysql_fetch_assoc($get_text)) {
		$text=$row_get_text['content'];
	} else {
		$text='';
	}
	mysql_free_result($get_text);
	return $text;
}

function get_image_src($photo_id,$friend_code,$prefix) {
	global $database_library,$localconnect,$database_useradmin,$useradmin;
	
	$selectPhotoSQL = sprintf("SELECT user_id,photo_id,server_ext,folder,filename,viewable,removed FROM ".$database_useradmin.".site_photos WHERE photo_id=%s",
								GetSQLValueString($photo_id,"int"));
	$get_photo = mysql_query_or_die($selectPhotoSQL, $useradmin);
	if ($row_get_photo=mysql_fetch_assoc($get_photo)) {
		if ($row_get_photo['removed']=='Y') {
			$photo_src = '/artwork/tn_no_biz_photo_red.png'; // photo already removed
		} else if ($row_get_photo['viewable']<$friend_code) {
			$photo_src = '/artwork/tn_no_biz_photo_yellow.png'; // photo not available to visitor
		} else if (substr($row_get_photo['folder'],0,1)=='/') {
			$photo_src = $row_get_photo['folder'].$row_get_photo['filename']; // photo is a site photo
		} else {
			$user_id = $row_get_photo['user_id'];
			if ($user_root=get_user_root($user_id)) {
				if ($user_root=='/') {
					$user_root = get_image_server($row_get_photo['server_ext']).'user_photos/';
				} else {
					$user_root = $row_get_user['user_root'];
				}
				
				$photo_src = $user_root.$row_get_photo['folder'].$prefix.$row_get_photo['filename'];
			} else {
				$photo_src = '/artwork/tn_no_biz_photo_purple.png'; // user account not active or not found
			}
		}
	} else {
		$photo_src = '/artwork/tn_no_biz_photo_purple.png'; // photo not found
	}
	mysql_free_result($get_photo);
	
	return $photo_src;
}

function get_image_server($serverExt) {
	if ($_SERVER["SERVER_NAME"]=='localhost') {
		$imageServer='/images/';
	} else if (substr($serverExt,0,1)=='.') {
		if (substr($_SERVER["SERVER_NAME"],10)=='www.616414' || substr($_SERVER["SERVER_NAME"],6)=='616414') {
			$domain='616414';
		} else {
			$domain='pogo616';
		}
		if ($serverExt==null || $serverExt=='') {
			$imageServer='http://images.'.$domain.substr($_SERVER["SERVER_NAME"],strrpos($_SERVER["SERVER_NAME"],'.')).'/';
//			$imageServer='/images/';
		} else {
			$imageServer='http://images.'.$domain.$serverExt.'/';
		}
	} else if ($serverExt=='pogo616.com' || $serverExt=='pogolog.com') {
			$imageServer='http://images.'.$serverExt.'/';
	} else {
			$imageServer='http://www.'.$serverExt.'/images/';
	}
	return $imageServer;
}

function get_photo_domain() {
	switch ($_SERVER["SERVER_NAME"]) {
		case 'localhost': $imageDomain=''; break;
		case 'www.616414.hk': case 'www.616414.net': $imageDomain='616414'; break;
		case 'www.pogo616.hk': case 'www.pogo616.net': case 'www.pogo616.ca': case 'www.pogo616.com.au': case 'www.pogo616.com': default: $imageDomain='pogo616'; break;
	}
	return $imageDomain;
}

function get_image_server_ext() {
	switch ($_SERVER["SERVER_NAME"]) {
		case 'localhost': $imageServerExt=''; break;
		case 'www.pogo616.hk': $imageServerExt='.hk'; break;
		case 'www.pogo616.net': $imageServerExt='.net'; break;
		case 'www.pogo616.ca': $imageServerExt='.ca'; break;
		case 'www.pogo616.com.au': $imageServerExt='.com.au'; break;
		case 'www.pogo616.com': $imageServerExt='pogo616.com'; break;
		default: $imageServerExt=str_replace('www.','',$_SERVER["SERVER_NAME"]); break;
	}
	return $imageServerExt;
}

function get_blogger_home($user_id) {
	global $database_cms,$useradmin;
	
	if (isset($user_id) && $user_id!='') {
		$selectSQL = "SELECT * FROM ".$database_cms.".client_domains WHERE user_id=".$user_id;
		$get_url = mysql_query_or_die($selectSQL, $useradmin);
		if ($row_get_url=mysql_fetch_assoc($get_url)) {
			$blogger_home = 'www.'.str_replace('www.','',$row_get_url['domain_name']);
		}
		mysql_free_result($get_url);
	} else {
		$blogger_home = 'www.pogolog.com';
	}
	return $blogger_home;
}

function get_google_property_id() {
	$domain_name = str_replace('www.','',$_SERVER["SERVER_NAME"]);
	switch ($domain_name) {
		case 'pogo616.com':
			$property_id = 'UA-19640877-1';
			break;
		case 'pogolog.com':
			$property_id = 'UA-25991451-1';
			break;
		case 'pogo616.hk':
			$property_id = 'UA-19640877-2';
			break;
		default:
			global $database_cms,$useradmin;
			$selectSQL = "SELECT google_property_id FROM ".$database_cms.".client_domains WHERE domain_name='".$domain_name."'";
			$get_id = mysql_query_or_die($selectSQL, $useradmin);
			if ($row_get_id=mysql_fetch_assoc($get_id)) {
				$property_id = $row_get_id['google_property_id'];
			}
			mysql_free_result($get_id);
			break;
	}
	return $property_id;
}

function get_plugins($plugin_ids) {
	global $database_library,$localconnect;
	$plugin_array = array();
	if ($plugin_ids=='') {
		return $plugin_array;
	} else if (!is_array($plugin_ids)) {
		$plugin_ids=explode(',',$plugin_ids);
	}
	while (count($plugin_ids)>0) {
		$plugin_id = array_shift($plugin_ids);
		$plugin = array("id"=>$plugin_id,"script_id"=>"script_".$plugin_id,"style_id"=>"style_".$plugin_id);
		$selectSQL = "SELECT plugin_id,script FROM ".$database_library.".plugin_scripts WHERE plugin_id=".$plugin_id;
		$get_plugin = mysql_query_or_die($selectSQL, $localconnect);
		if ($row_get_plugin=mysql_fetch_assoc($get_plugin)) {
			$plugin['script'] = '<script type="text/javascript" id="pluginScript'.$plugin_id.'">'.$row_get_plugin['script'].'</script>';
		} else {
			$plugin['script'] = '';
		}
		mysql_free_result($get_plugin);


		$selectSQL = "SELECT plugin_id,css FROM ".$database_library.".plugin_css WHERE plugin_id=".$plugin_id;
		$get_plugin = mysql_query_or_die($selectSQL, $localconnect);
		if ($row_get_plugin=mysql_fetch_assoc($get_plugin)) {
			$plugin['css'] = '<style type="text/css" id="pluginStyle'.$plugin_id.'">'.$row_get_plugin['css'].'</style>';
		} else {
			$plugin['css'] = '';
		}
		mysql_free_result($get_plugin);
		
		$selectSQL = "SELECT plugin_id,name,body FROM ".$database_library.".plugin_functions WHERE plugin_id=".$plugin_id;
		$get_plugin = mysql_query_or_die($selectSQL, $localconnect);
		$plugin['functions'] = array();
		while ($row_get_plugin=mysql_fetch_assoc($get_plugin)) {
			array_push($plugin['functions'],array("name"=>$row_get_plugin['name'],"body"=>$row_get_plugin['body']));
		}
		mysql_free_result($get_plugin);

		array_push($plugin_array,$plugin);
	}
	return $plugin_array;
}

function get_dialog_plugins ($dialog_id,$current_plugins) {
	global $database_library,$localconnect;
	$plugin_array = array();
	if ($current_plugins!='' && isset($current_plugins)) {
		if (!is_array($current_plugins)) {
			$current_plugins=explode(',',$current_plugins);
		}
	}
	$plugin_ids = array();
	$selectSQL = "SELECT dialog_id,plugin_id FROM ".$database_library.".dialog_plugins WHERE dialog_id=".$dialog_id." ORDER BY plugin_id";
	$get_plugin = mysql_query_or_die($selectSQL, $localconnect);
	while ($row_get_plugin=mysql_fetch_assoc($get_plugin)) {
		if (!in_array($row_get_plugin['plugin_id'],$plugin_array)) {
			array_push($plugin_ids,$row_get_plugin['plugin_id']);
		}
	}
	mysql_free_result($get_plugin);
	return get_plugins($plugin_ids);
}

function get_page_title($language,$page) {
	global $database_library,$localconnect;
	$selectSQL = sprintf("SELECT selector,type,content FROM ".$database_library.".page_text WHERE language=%s AND page=%s AND type=%s AND selector=%s",
							  GetSQLValueString($language,"text"),
							  GetSQLValueString($page,"text"),
							  GetSQLValueString('label',"text"),
							  GetSQLValueString('page_title',"text"));
	$get_title = mysql_query_or_die($selectSQL, $localconnect);
	if ($row_get_title=mysql_fetch_assoc($get_title)) {
		$page_title=$row_get_title['content'];
	} else {
		$selectSQL = sprintf("SELECT selector,type,content FROM ".$database_library.".page_text WHERE language=%s AND page=%s AND type=%s AND selector=%s",
								  GetSQLValueString('en',"text"),
								  GetSQLValueString($page,"text"),
								  GetSQLValueString('label',"text"),
								  GetSQLValueString('page_title',"text"));
		$get_title = mysql_query_or_die($selectSQL, $localconnect);
		if ($row_get_title=mysql_fetch_assoc($get_title)) {
			$page_title=$row_get_title['content'];
		} else {
			$page_title="pogo616 Global Food and Restaurant Network";
		}
	}
	mysql_free_result($get_title);
	return $page_title;
}

function get_profile_title($language,$type,$user_name) {
	global $database_library,$localconnect;
	switch ($type) {
		case 'P':
			$selectSQL = sprintf("SELECT selector,type,content FROM ".$database_library.".page_text WHERE language=%s AND page=%s AND type=%s AND selector=%s",
									  GetSQLValueString($language,"text"),
									  GetSQLValueString('user',"text"),
									  GetSQLValueString('label',"text"),
									  GetSQLValueString('page_title',"text"));
			$get_title = mysql_query_or_die($selectSQL, $localconnect);
			if ($row_get_title=mysql_fetch_assoc($get_title)) {
				$profile_title=str_replace('[user_name]',$user_name,$row_get_title['content']);
			} else {
				$selectSQL = sprintf("SELECT selector,type,content FROM ".$database_library.".page_text WHERE language=%s AND page=%s AND type=%s AND selector=%s",
										  GetSQLValueString('en',"text"),
										  GetSQLValueString('user',"text"),
										  GetSQLValueString('label',"text"),
										  GetSQLValueString('page_title',"text"));
				$get_title = mysql_query_or_die($selectSQL, $localconnect);
				if ($row_get_title=mysql_fetch_assoc($get_title)) {
					$profile_title=str_replace('[user_name]',$user_name,$row_get_title['content']);
				} else {
					$profile_title=$user_name."'s Personal Food and Restaurant Profile";
				}
			}
			mysql_free_result($get_title);
			break;
	}
	return $profile_title;
}

function get_table_info($language,$total,$page_num,$page_size,$dataset_name,$options) {
	$div_html='';
	$counter_char='';
	$page_count = ceil($total/$page_size);
	if ($language=='tw' || $language=='cn') {
		switch ($dataset_name) {
			case 'reviews': case 'blogs': $counter_char=($language=='tw'?'篇':'篇'); break;
			case 'products': case 'lists': case 'districts': case 'friends': case 'albums': $counter_char=($language=='tw'?'個':'个'); break;
			case 'streets': $counter_char=($language=='tw'?'條':'条'); break;
			case 'buildings': $counter_char=($language=='tw'?'座':'座'); break;
			case 'biz': $counter_char=($language=='tw'?'家':'家'); break;
			case 'photos': $counter_char=($language=='tw'?'張':'张'); break;
			case 'chars': $counter_char=($language=='tw'?'字':'字');　break;
			case 'friends': case 'followers': $counter_char=($language=='tw'?'人':'人');　break;
		}
	} else if ($language=='ja') {
		switch ($dataset_name) {
			case 'biz': $counter_char='店'; break;
			case 'photos': $counter_char='枚'; break;
			case 'friends': case 'followers': $counter_char='人';　break;
		}
	} else if ($language=='ko') {
		switch ($dataset_name) {
			case 'biz': $counter_char='개소'; break;
			case 'reviews': case 'blogs': case 'lists': $counter_char='개'; break;
			case 'friends': case 'followers': $counter_char='명';　break;
		}
	}
	switch ($language) {
		case 'tw': 
			$total_info_html = '<strong><span id="total_count_pre_text">共：</span>'.$total.'<span id="total_count_post_text">'.$counter_char.'</span></strong>';
			$page_info_html = '<span id="page_count_pre_text"> (每頁</span>'.$page_size.'<span id="page_count_post_text">'.$counter_char.'</span><span id="num_page_pre_text">＝</span><span id="num_page_count">'.$page_count.'</span><span id="num_page_post_text">頁)</span>'; break;
		case 'cn': 
			$total_info_html = '<strong><span id="total_count_pre_text">共：</span>'.$total.'<span id="total_count_post_text">'.$counter_char.'</span></strong>';
			$page_info_html = '<span id="page_count_pre_text"> (每页</span>'.$page_size.'<span id="page_count_post_text">'.$counter_char.'</span><span id="num_page_pre_text">＝</span><span id="num_page_count">'.$page_count.'</span><span id="num_page_post_text">页)</span>'; break;
		case 'ja': 
			$total_info_html = '<strong><span id="total_count_pre_text">合計：</span>'.$total.'<span id="total_count_post_text">'.$counter_char.'</span></strong>';
			$page_info_html = '<span id="page_count_pre_text"> (1ページあたり</span>'.$page_size.'<span id="page_count_post_text">'.$counter_char.'</span><span id="num_page_pre_text">＝</span><span id="num_page_count">'.$page_count.'</span><span id="num_page_post_text">ページ)</span>'; break;
		case 'en': default: 
			$total_info_html = '<strong><span id="total_count_pre_text">total: </span>'.$total.'<span id="total_count_post_text"></span></strong>';
			$page_info_html = '<span id="page_count_pre_text"> (</span>'.$page_size.'<span id="page_count_post_text">/page</span><span id="num_page_pre_text">=</span><span id="num_page_count">'.$page_count.'</span><span id="num_page_post_text">'.($page_count==1?' page':' pages').')</span>'; break;
	}
	$no_total=false;
	if ($options['no_total']=='Y') {
		$no_total = true;
	}
	if (!$no_total) {
		$div_html = $total_info_html;
	} else {
		$div_html = '';
	}
	if ($page_count>1) {
		$div_html .= $page_info_html;
	}
	return $div_html;
}

function get_table_navi_all($language,$total,$page_num,$page_size,$page_num_variable,$get_page_function) {
	if (preg_match('/\050.*\051/',$get_page_function)==0) {
		$get_page_function .= '()';
	}
	$navi_html = ''; $page_num_html = '';
	if ($total>$page_size) {
		$page_count = ceil($total/$page_size);
		$page_index = 1;
		while ($page_index <= $page_count) {
			if ($page_index != $page_num) {
				$page_num_html .= '<a class="linkWords" style="cursor:pointer;" onclick="'.$page_num_variable.'='.$page_index.';'.$get_page_function.';">'.$page_index.'</a> ';
			} else {
				$page_num_html .= '<span class="boldWords">'.$page_index.'</span> ';
			}
			$page_index += 1;
		}

		$navi_html = '';
		$navi_html .= '<div class="smallWords">';
		$navi_html .= 	$page_num_html;
		$last_page = ceil($total/$page_size);
		$navi_html .= 	'<div class="fltrt topMargin4 stdWords">'.
							'<div class="fltlft">'.
								'<span class="labelPrePage">'.get_default_text($language,'pre_page').'</span>'.
								'<input type="text" size="1" onchange="if(isNaN($j(this).val())) { window.alert(not_number_error); } else {'.$page_num_variable.'=$j(this).val();'.$get_page_function.';}" />'.
								'<span class="labelPostPage">'.get_default_text($language,'post_page').'</span>'.
							'</div>'.
							'<div class="fltlftonly">'.
								'<input type="image" onclick="if(isNaN($j(this).parent().prev().children(\'input\').val())) { window.alert(not_number_error); } else {'.$page_num_variable.'=$j(this).parent().prev().children(\'input\').val();'.$get_page_function.';}" title="go to page" src="/artwork/goto_page_button.jpg" class="mediumIcon" /></div>'.
							'</div>';
		$navi_html .= 	'</div>';
		$navi_html .= 	'<br class="clearfloat" />';
		$navi_html .= '</div>';
	}
	return $navi_html;
}

function create_navi_function($navi_arg,$function_string) {
	if (preg_match('/\(\s*\)/',$function_string)) {
		return preg_replace('/\(\s*\)/','('.$navi_arg.')',$function_string);
	} else {
		return preg_replace('/\(([^\)]*)\)/','('.$navi_arg.',$1)',$function_string);
	}
}

function get_table_navi($language,$total,$page_num,$page_size,$page_num_variable,$get_page_function) {
	if (!preg_match('/\(.*\)/',$get_page_function)) {
		$get_page_function .= '()';
	}
	$navi_html = ''; $page_num_html = '';
	if ($total>$page_size) {
		$page_count = ceil($total/$page_size);
		if ($page_num-3>1) {
			$page_index = 1;
			$last_page = min(2,$page_num-4);
			while ($page_index <= $last_page) {
//				$page_num_html .= '<div class="otherPages"><a style="cursor:pointer;" onclick="'.$page_num_variable.'='.$page_index.';'.$get_page_function.';"  target="_blank"  onclick="'.$page_num_variable.'='.$page_index.';'.$get_page_function.';">'.$page_index.'</a></div>';
				if (isset($page_num_variable)) {
					$page_num_html .= '<div class="otherPages"><a style="cursor:pointer;" onclick="'.$page_num_variable.'='.$page_index.';'.$get_page_function.';">'.$page_index.'</a></div>';
				} else {
					$page_num_html .= '<div class="otherPages"><a style="cursor:pointer;" onclick="'.create_navi_function($page_index.','.$page_size,$get_page_function).';">'.$page_index.'</a></div>';
				}
				$page_index += 1;
			}
			if ($page_num-3>3) {
				$page_num_html .= '<div class="omittedPages">...</div>';
			}
		}
		
		$page_index = max(1,$page_num-3);
		$last_page = min($page_num+3,$page_count);
		while ($page_index <= $last_page) {
			if ($page_index != $page_num) {
				if (isset($page_num_variable)) {
					$page_num_html .= '<div class="otherPages"><a style="cursor:pointer;" onclick="'.$page_num_variable.'='.$page_index.';'.$get_page_function.';">'.$page_index.'</a></div>';
				} else {
					$page_num_html .= '<div class="otherPages"><a style="cursor:pointer;" onclick="'.create_navi_function($page_index.','.$page_size,$get_page_function).';">'.$page_index.'</a></div>';
				}
			} else {
				$page_num_html .= '<div class="currentPage">'.$page_index.'</div>';
			}
			$page_index += 1;
		}
		if ($page_num+3<$page_count) {
			$page_index = max($page_count-1,$page_num+4);
			$last_page = $page_count;
			if ($page_num+3<$page_count-2) {
				$page_num_html .= '<div class="omittedPages">...</div>';
			}
			while ($page_index <= $last_page) {
				if (isset($page_num_variable)) {
					$page_num_html .= '<div class="otherPages"><a style="cursor:pointer;" onclick="'.$page_num_variable.'='.$page_index.';'.$get_page_function.';">'.$page_index.'</a></div>';
				} else {
					$page_num_html .= '<div class="otherPages"><a style="cursor:pointer;" onclick="'.create_navi_function($page_index.','.$page_size,$get_page_function).';">'.$page_index.'</a></div>';
				}
				$page_index += 1;
			}
		}

		$navi_html = '';
		$navi_html .= '<div class="fltrt">';
		if ($total/$page_size>2 && $page_num>1) {
			if (isset($page_num_variable)) {
				$navi_html .= '<div class="fltlft webButtonsMed firstButtonMed" style="cursor:pointer;" onclick="'.$page_num_variable.'=1;'.$get_page_function.';"></div>';
			} else {
				$navi_html .= '<div class="fltlft webButtonsMed firstButtonMed" style="cursor:pointer;" onclick="'.create_navi_function('1,'.$page_size,$get_page_function).';"></div>';
			}
		}
		if ($total/$page_size>1 && $page_num>1) {
			if (isset($page_num_variable)) {
				$navi_html .= '<div class="fltlft webButtonsMed prevButtonMed" style="cursor:pointer;" onclick="'.$page_num_variable.'='.($page_num-1).';'.$get_page_function.';"></div>';
			} else {
				$navi_html .= '<div class="fltlft webButtonsMed prevButtonMed" style="cursor:pointer;" onclick="'.create_navi_function(($page_num-1).','.$page_size,$get_page_function).';"></div>';
			}
		}
		$navi_html .= '<div class="fltlft">'.$page_num_html.'</div>';
		$last_page = ceil($total/$page_size);
		if ($total/$page_size>1 && $page_num<$last_page ) {
			if (isset($page_num_variable)) {
				$navi_html .= '<div class="fltlft webButtonsMed nextButtonMed" style="cursor:pointer;" onclick="'.$page_num_variable.'='.($page_num+1).';'.$get_page_function.';"></div>';
			} else {
				$navi_html .= '<div class="fltlft webButtonsMed nextButtonMed" style="cursor:pointer;" onclick="'.create_navi_function(($page_num+1).','.$page_size,$get_page_function).';"></div>';
			}
		}
		if ($total/$page_size>2 && $page_num<$last_page) {
			if (isset($page_num_variable)) {
				$navi_html .= '<div class="fltlft webButtonsMed lastButtonMed" style="cursor:pointer;" onclick="'.$page_num_variable.'='.$last_page.';'.$get_page_function.';"></div>';
			} else {
				$navi_html .= '<div class="fltlft webButtonsMed lastButtonMed" style="cursor:pointer;" onclick="'.create_navi_function($last_page.','.$page_size,$get_page_function).';"></div>';
			}
		}
		
		$navi_html .= '<div class="fltlftonly">'.
						'<div class="fltlft">'.
							'<span class="labelPrePage">'.get_default_text($language,'pre_page').'</span>'.
							'<input type="text" size="1" onchange="if(isNaN($j(this).val())) { window.alert(not_number_error); } else {';
		if (isset($page_num_variable)) {
			$navi_html .= $page_num_variable.'=$j(this).val();'.$get_page_function;
		} else {
			$navi_html .= create_navi_function('$j(this).val(),'.$page_size,$get_page_function);
		}
		$navi_html .= 		';}" />'.
							'<span class="labelPostPage">'.get_default_text($language,'post_page').'</span>'.
						'</div>'.
						'<div class="fltlftonly">'.
							'<input type="image" onclick="if(isNaN($j(this).parent().prev().children(\'input\').val())) { window.alert(not_number_error); } else {';
		if (isset($page_num_variable)) {
			$navi_html .= $page_num_variable.'=$j(this).parent().prev().children(\'input\').val();'.$get_page_function;
		} else {
			$navi_html .= create_navi_function('$j(this).parent().prev().children(\'input\').val(),'.$page_size,$get_page_function);
		}
		$navi_html .= 		';}" title="go to page" src="/artwork/goto_page_button.jpg" class="mediumIcon" /></div>'.
						'</div>';
		$navi_html .= '</div>';
		$navi_html .= '<br class="clearfloat" />';
//		$navi_html .= '</div>';
	}
	return $navi_html;
}

function get_ip_country($ip_address) {
	if (isset($ip_address)) {
		global $database_library,$localconnect;
		$selectCtrySQL = "SELECT * FROM ".$database_library.".ip_locations WHERE ip_from<=".$ip_address." order by ip_from DESC LIMIT 0,1";
		$get_country = mysql_query_or_die($selectCtrySQL, $localconnect);
		if ($row_get_country=mysql_fetch_assoc($get_country)) {
			$ip_country['code']=strtolower($row_get_country['country_code']);
			$ip_country['country']=ucwords(strtolower($row_get_country['country_name']));
			$ip_country['region']=ucwords(strtolower($row_get_country['region']));
			$ip_country['city']=ucwords(strtolower($row_get_country['city']));
			$ip_country['latitude']=ucwords(strtolower($row_get_country['latitude']));
			$ip_country['longitude']=ucwords(strtolower($row_get_country['longitude']));
			$ip_country['domain_name']=ucwords(strtolower($row_get_country['domain_name']));
		}
		mysql_free_result($get_country);
		return $ip_country;
	} else {
		return '';
	}
}

function get_country_name($language,$country) {
	global $database_library,$localconnect;
	if ($is_array=is_array($country)) {
		$country_array = $country;
	} else {
		$country_array = array($country);
	}
	$index = 0;
	$country_name_array = array();
	while ($index<count($country_array)) {
		if ($country_array[$index]=='-') {
			array_push($country_name_array,'?');
		} else {
			$selectCountrySQL = "SELECT ".$language." AS country_name FROM ".$database_library.".country_names WHERE country='".$country_array[$index]."'";
			$get_country = mysql_query_or_die($selectCountrySQL, $localconnect);
			if ($row_get_country=mysql_fetch_assoc($get_country)) {
				array_push($country_name_array,$row_get_country['country_name']);		
			} else {
				$selectCountrySQL = "SELECT name AS country_name FROM ".$database_library.".country_codes WHERE code='".$country_array[$index]."'";
				$get_country = mysql_query_or_die($selectCountrySQL, $localconnect);
				if ($row_get_country=mysql_fetch_assoc($get_country)) {
					array_push($country_name_array,$row_get_country['country_name']);		
				} else {
					array_push($country_name_array,'?');
				}
			}
		}
		$index += 1;
	}
	mysql_free_result($get_country);
	
	if ($is_array) {
		return $country_name_array;
	} else {
		return $country_name_array[0];
	}
}

function get_city_name($language,$city) {
	global $database_library,$localconnect;
	if ($is_array=is_array($city)) {
		$city_array = $city;
	} else {
		$city_array = array($city);
	}
	$index = 0;
	$city_name_array = array();
	while ($index<count($city_array)) {
		if ($city_array[$index]=='-') {
			array_push($city_name_array,'?');
		} else {
			$selectCitySQL = "SELECT ".$language." AS city_name FROM ".$database_library.".city_names WHERE city='".$city_array[$index]."'";
			$get_city = mysql_query_or_die($selectCitySQL, $localconnect);
			if ($row_get_city=mysql_fetch_assoc($get_city)) {
				array_push($city_name_array,$row_get_city['city_name']);		
			} else {
				array_push($city_name_array,'?');
			}
		}
		$index += 1;
	}
	mysql_free_result($get_city);
	
	if ($is_array) {
		return $city_name_array;
	} else {
		return $city_name_array[0];
	}
}

function get_user_relationship($visitor_id,$user_id) {
	global $localconnect,$database_friends;
	if ($visitor_id==null || $visitor_id=='' || $user_id==null || $user_id=='') {
		$friend_code = 9;
	} else if ($user_id==$visitor_id) {
		$friend_code = 0;
	} else {
		// status='A' means both the user and the friend have accepted the friendship. status='S' means the user has sent a request to the target user and is waiting for a response.
		$selectSQL = sprintf("SELECT * FROM ".$database_friends.".user_friends WHERE user_id=%s AND friend_id=%s AND (status=%s OR status=%s)",
											GetSQLValueString($user_id,'int'),
											GetSQLValueString($visitor_id,'int'),
											GetSQLValueString('A','text'),
											GetSQLValueString('S','text'));
		$get_friend = mysql_query_or_die($selectSQL, $localconnect);
		if (mysql_num_rows($get_friend)>0) {
			$friend_code=1;
		} else {
			$selectSQL = sprintf("SELECT user_friends.user_id,user_friends.friend_id,user_fof.friend_id as fof_id FROM ".$database_friends.".user_friends JOIN ".$database_friends.".user_friends AS user_fof ON user_friends.friend_id=user_fof.user_id WHERE user_friends.user_id!=user_fof.friend_id AND user_friends.user_id=%s AND user_fof.friend_id=%s AND user_friends.status=%s AND user_fof.status=%s",
											GetSQLValueString($user_id,'int'),
											GetSQLValueString($visitor_id,'int'),
											GetSQLValueString('A','text'),								 
											GetSQLValueString('A','text'));								 
			$get_fof = mysql_query_or_die($selectSQL, $localconnect);
			if (mysql_num_rows($get_fof)>0) {
				$friend_code=5;
			} else {
				$friend_code=9;
			}
			mysql_free_result($get_fof);
		}
		mysql_free_result($get_friend);
	}
	return $friend_code;
}

function is_follower($follower_id,$user_id) {
	global $database_useradmin,$useradmin;
	if ($follower_id==$user_id) {
		$is_follower = true;
	} else {
		$selectSQL = sprintf("SELECT * FROM ".$database_useradmin.".user_followers WHERE user_id=%s AND follower_id=%s AND removed=%s",
								  GetSQLValueString($user_id,"int"),
								  GetSQLValueString($follower_id,"int"),
								  GetSQLValueString('N',"text"));
		$get_follower = mysql_query_or_die($selectSQL, $useradmin);
		$is_follower = (mysql_num_rows($get_follower)>0);
		mysql_free_result($get_follower);
	}
	return $is_follower;
}

function is_friend($friend_id,$user_id) {
	global $database_useradmin,$useradmin;
	if ($friend_id==$user_id) {
		$is_friend = true;
	} else {
		$selectSQL = sprintf("SELECT * FROM ".$database_useradmin.".user_friends WHERE user_id=%s AND friend_id=%s AND (status=%s OR status=%s)",
								  GetSQLValueString($user_id,"int"),
								  GetSQLValueString($friend_id,"int"),
								  GetSQLValueString('A',"text"),
								  GetSQLValueString('s',"text"));
		$get_friend = mysql_query_or_die($selectSQL, $useradmin);
		$is_friend = (mysql_num_rows($get_friend)>0);
		mysql_free_result($get_friend);
	}
	return $is_friend;
}

function get_online_status($user_id) {
	global $useradmin;
	$last_beamed = date("Y-m-d H:i:s",get_GMT(time()-180));
	$selectSQL = sprintf("SELECT * FROM site_beacons WHERE user_id=%s AND last_beamed>=%s",
							  GetSQLValueString($user_id,"int"),
							  GetSQLValueString($last_beamed,"date"));
	$get_beacon = mysql_query_or_die($selectSQL, $useradmin);
	$online_status = ((mysql_num_rows($get_beacon)>0)?'Y':'N');
	mysql_free_result($get_beacon);
	return $online_status;
}

function get_username ($user_id,$db_connect) {
	global $database_useradmin,$database_localmain,$localconnect;
	if ($user_id!='' && $user_id!=null) {
		if ($db_connect==null) {
			$get_user = mysql_query_or_die("SELECT user_name FROM ".$database_localmain.".user_profiles WHERE user_id=".$user_id, $localconnect);
		} else {
			$get_user = mysql_query_or_die("SELECT user_name FROM ".$database_useradmin.".user_profiles WHERE user_id=".$user_id, $db_connect);
		}
		$row_get_user=mysql_fetch_assoc($get_user);
		$user_name = $row_get_user['user_name'];
		mysql_free_result($get_user);
	} else {
		$user_name = null;
	}
	return $user_name;
}

function get_user_id ($user_name,$db_connect) {
	global $database_useradmin;
	$filterUserNameCondition = '';
	//searching for keywords	
	if ($user_name!=NULL && $user_name!='') {
		
		//break up the biznames into separate words (use unicode_add_space for the future use of chinese or other unicode characters)
		$user_name = str_replace ("(", " ",$user_name);
		$user_name = str_replace (")", " ",$user_name);
		$user_name = unicode_add_space($user_name);
		$user_name = strtolower(addslashes(trim($user_name)));
		//explode the words into an array
		$userNameArrary= explode(" ",$user_name);
		//count the number of words in the array to create a loop for putting words into the table
		$wordCount = count($userNameArrary);
		//echo 'count = '.$wordCount.'<br/>';
		//remove symbols from biznames
			
		$wordIndex=0;
		while ($wordIndex < $wordCount) {
			$userNameArrary[$wordindex] = preg_replace("/\046/","[& ]",$userNameArrary[$wordindex]); 
			$userNameArrary[$wordindex] = preg_replace("/[\053]/","[\\+ ]",$userNameArrary[$wordindex]);
			$userNameArrary[$wordindex] = preg_replace("/\055/","[- ]",$userNameArrary[$wordindex]);
			$wordIndex += 1;
		}

		$index = 0;
		while ($index<$wordCount) {
			$filterUserName .= ($filterUserName!=''?' AND ':'').sprintf('locate(%s,user_name)>0',GetSQLValueString($userNameArrary[$index],"text"));
			$index += 1;
		}
		
		
		$filterUserNameCondition .= ' AND ('.$filterUserName.')';
		//echo 'filterKeywordsCondition = '.$filterKeywordsCondition.'<br/>';			
			
	} else {
		$userNameArrary = array();
		$filterUserNameCondition = '';
	}	
		
	$selectUserIDStatement = "SELECT user_id FROM ".$database_useradmin.".user_profiles WHERE TRUE".$filterUserNameCondition;
	//echo 'SQL: '.$selectUserIDStatement;
	$getUserID= mysql_query_or_die($selectUserIDStatement, $db_connect);
	$userIDArray = array();
//	$index=0;
	while ($rowGetUserID = mysql_fetch_assoc ($getUserID)){
		array_push($userIDArray,$rowGetUserID['user_id']);
//		$userIDArray[$index]=$rowGetUserID['user_id'];
//		$index += 1; 
	}

	//$user_id=$rowGetUserID['user_id'];
	mysql_free_result($getUserID);
	return $userIDArray;
}

function get_mutual_friends($user_id,$fof_id,$dbconnet) {
	$friends_array = array();
	$selectSQL = sprintf("SELECT SQL_CALC_FOUND_ROWS DISTINCT user_friends.user_id,user_friends.friend_id,user_network.friend_id AS fof_id,user_profiles.user_name,user_profiles.first_name,user_profiles.last_name FROM user_friends JOIN user_friends AS user_network ON user_friends.friend_id=user_network.user_id JOIN user_profiles ON user_friends.friend_id=user_profiles.user_id WHERE user_friends.user_id=%s AND user_network.friend_id=%s",
							  GetSQLValueString($user_id,"int"),
							  GetSQLValueString($fof_id,"int"));
	$get_friends = mysql_query_or_die($selectSQL, $dbconnet);
	while ($row_get_friends=mysql_fetch_assoc($get_friends)) {
		array_push($friends_array,$row_get_friends);
	}
	mysql_free_result($get_friends);
	return $friends_array;
}

function get_recipe_object($recipe_id,$language) {
	global $database_useradmin,$useradmin;
	$current_unix_time = get_GMT(microtime(true));
	
	$recipe_object = array();
	$draft_recipe = false;
	// retrieve html for the specified recipe
	$selectLanguageSQL = "SELECT language, food_recipe_html.title, food_recipe_html.html, food_recipe_html.status, food_recipe_html.date_posted, food_recipes.tag_id, food_recipes.created_by, language='".$language."' AS language_matched FROM ".$database_useradmin.".food_recipe_html".
		" LEFT JOIN ".$database_useradmin.".food_recipes ON food_recipes.recipe_id=food_recipe_html.recipe_id".
		" WHERE food_recipe_html.recipe_id=".$recipe_id." AND food_recipes.removed='N' ORDER BY language_matched DESC,language LIMIT 0,1";
	$get_html = mysql_query_or_die($selectLanguageSQL, $useradmin);
	if ($row_get_html=mysql_fetch_assoc($get_html)) {
		$recipe_object['recipe_id']=$recipe_id;
		$recipe_object['language']=$row_get_html['language'];
		$recipe_object['tag_id'] = $row_get_html['tag_id'];
		$recipe_object['title'] = $row_get_html['title'];
		$recipe_object['html'] = $row_get_html['html'];
		$recipe_object['html'] = str_replace("http://images.pogo616.hk","http://images.pogo616.com",$recipe_object['html']);
		$recipe_object['html'] = stripslashes($recipe_object['html']);
		if ($_SERVER["SERVER_NAME"]=='localhost') {
			$recipe_object['html'] = preg_replace('/images\.pogolog\.com/','localhost/images',$recipe_object['html']);
		}
		$draft_recipe = ($row_get_html['status']=='D' || $row_get_html['date_posted']==null || strtotime($row_get_html['date_posted'])>$current_unix_time);
		if ($row_get_html['created_by']==$_SESSION['MM_UserID'] || $_SESSION['MM_AccessLevel']>=5) {
			$recipe_object['removable'] = 'Y';
		} else {
			$recipe_object['removable'] = 'N';
		}
		$recipe_object['created_by'] = $row_get_html['created_by'];
	} else {
		return $recipe_object;
	}
	mysql_free_result($get_html);

	$selectLanguageSQL = "SELECT food_recipe_html.language, food_recipe_html.status FROM ".$database_useradmin.".food_recipe_html".
		" LEFT JOIN ".$database_useradmin.".food_recipes ON food_recipes.recipe_id=food_recipe_html.recipe_id".
		" WHERE food_recipe_html.recipe_id=".$recipe_id." AND food_recipes.removed='N' AND food_recipe_html.status='D'";
	$get_html = mysql_query_or_die($selectLanguageSQL, $useradmin);
	$post_all = (mysql_num_rows($get_html)>0);
	mysql_free_result($get_html);
	
	// contruct buttons
	$recipe_object['buttons'] = '';
	$selectLanguageSQL = "SELECT language,language='".$recipe_object['language']."' AS language_matched FROM ".$database_useradmin.".food_recipe_html".
		" WHERE food_recipe_html.recipe_id=".$recipe_id." ORDER BY language_matched DESC,language";
	$get_html = mysql_query_or_die($selectLanguageSQL, $useradmin);
	while ($row_get_html=mysql_fetch_assoc($get_html)) {
		if ($row_get_html['language']==$recipe_object['language']) {
			$language_class = ' selected';
		} else {
			$language_class = '';
		}
		$recipe_object['buttons'] .= '<div class="fltlft langButtons '.$row_get_html['language'].'Button'.($language_class).'" title="'.get_language_name($language,$row_get_html['language']).'" onclick="get_recipe(event,'.$recipe_id.',\''.$row_get_html['language'].'\');"></div>';
	}
	if ($draft_recipe) {
		$recipe_object['buttons'] .= '<span class="fltlft" style="color:#DD0000">draft</span>';
		$recipe_object['draft'] = 'Y';
	} else {
		$recipe_object['draft'] = 'N';
	}
	if ($recipe_object['buttons']!='') {
		$recipe_object['buttons'] .= '<br class="clearfloat" />';
	}

	$recipe_object['actions'] = '';
	if (isset($_SESSION['MM_UserID'])) { 
		if ($recipe_object['created_by']==$_SESSION['MM_UserID'] || $_SESSION['MM_AccessLevel']>=5) {
			$recipe_object['actions'].='<a id="editRecipeBtn" class="fltlft topMargin2 linkWords" onclick="edit_feature(\'recipe\');">edit</a>';
			if ($draft_recipe) {
				$recipe_object['actions'].='<a id="publishRecipeBtn" class="fltlft topMargin2 linkWords" onclick="setup_dialog({language:GB_Language,dialog:\'#publishContent\',post_load_func:\'set_publish_type\',post_load_args:[\'recipe\']});">post this language</a>';
			}
			if ($post_all) {
				$recipe_object['actions'].='<a id="publishRecipeAllBtn" class="fltlft topMargin2 linkWords" onclick="setup_dialog({language:GB_Language,dialog:\'#publishContent\',post_load_func:\'set_publish_type\',post_load_args:[\'recipe_all\']});">post all languages</a>';
			}
	/*
			$recipe_object['actions'].='<a id="exportRecipeBtn" class="fltlft topMargin2 linkWords" onclick="export_recipe();">export</a>';
	*/
			$recipe_object['actions'].='<a id="removeRecipeBtn" class="fltlft topMargin2 linkWords" onclick="confirm_remove_recipe(false);">remove this language</a>';
			$recipe_object['actions'].='<a id="removeRecipeBtn" class="fltlft topMargin2 linkWords" onclick="confirm_remove_recipe(true);">remove all languages</a>';
			$recipe_object['actions'].='<a id="addRecipeLanguageBtn" class="fltlft topMargin2 linkWords" onclick="add_recipe_language();">add a language</a>';
		}
	}
	mysql_free_result($get_html);
	return $recipe_object;	
}

function connect_unicode() {
	$server_name = $_SERVER["SERVER_NAME"];
	switch ($server_name) {
		case 'www.pogo616.com': 
			$unicode_host = "pogo616.net";
			$unicode_user = "pogo616_seymour";
			$unicode_pwd = "RgDwvbJ)fhyW";
			break;
		case 'www.pogo616.net':
			$unicode_host = "localhost";
			$unicode_user = "pg616net_seymour";
			$unicode_pwd = "Seemore030807";
			break;
		case 'www.616414.com': 
			$unicode_host = "616414.net";
			$unicode_user = "c616414c_seymour";
			$unicode_pwd = "RgDwvbJ)fhyW";
			break;
		case 'www.616414.net':
			$unicode_host = "localhost";
			$unicode_user = "n616414n_seymour";
			$unicode_pwd = "Seemore030807";
			break;
		case 'localhost':
			$unicode_host = "localhost";
			$unicode_user = "root";
			$unicode_pwd = "Seemore";
			break;
	}
	$unicodeadmin = mysql_pconnect($unicode_host, $unicode_user, $unicode_pwd) or trigger_error(mysql_error(),E_USER_ERROR);
	if ($server_name=='localhost') {
		$database_hanzi = "pogo616_unicode";
	} else {
		$database_hanzi = "pg616hk_unicode";
	}
	return array("db_name"=>$database_hanzi,"db_connect"=>$unicodeadmin);
}

function tw2cn ($tw, $update) {
	// $update variable is no longer requried
	global $database_library, $local_hanzi, $localconnect;
	$tw_array['tw']=$tw;
	$json_string = json_encode($tw_array);
	$tw_start = strpos($json_string,'"tw":"')+6;
	$tw_end = strpos($json_string,'"',$tw_start);
	$tw_char_index = $tw_start-6;
	$new_tw_char_index = strpos($json_string,"\u",$tw_start);
	$cn_string = '{"cn":"';
	$pinyin_string = '"pinyin":"';
	$canpin_string = '"canpin":"';
	$found = true;
	$no_pinyin = false;
	$no_canpin = false;
	
	while ($new_tw_char_index>=$tw_start && $new_tw_char_index<$tw_end) {
		if ($new_tw_char_index > $tw_char_index + 6) {
			$cn_string .= substr($json_string,$tw_char_index+6,$new_tw_char_index-$tw_char_index-6);
			$pinyin_string .= substr($json_string,$tw_char_index+6,$new_tw_char_index-$tw_char_index-6).' ';
			$canpin_string .= substr($json_string,$tw_char_index+6,$new_tw_char_index-$tw_char_index-6).' ';
		}
		$tw_char_index = $new_tw_char_index;
		$tw_code = substr($json_string,$tw_char_index,6);
		if (hexdec(substr($tw_code,2))>=hexdec("4E00") && hexdec(substr($tw_code,2))<=hexdec("9FFF")) {
			// if the character is within the range for chinese characters, then get its simplified equivalent, its pinyin and cantonese romanisation from the tw_cn table
			$tw_cn_SQL = sprintf("SELECT * from ".$local_hanzi.".tw_cn WHERE tw_code=%s", GetSQLValueString(substr($tw_code,2),'text'));
			$get_tw_cn = mysql_query_or_die($tw_cn_SQL, $localconnect);
			$row_get_tw_cn = mysql_fetch_assoc($get_tw_cn);
			$totalRows_get_tw_cn = mysql_num_rows($get_tw_cn);
			if ($totalRows_get_tw_cn>0) {
				$cn_string .= '\u'.$row_get_tw_cn['cn_code'];
				if ($row_get_tw_cn['pinyin']==NULL || $row_get_tw_cn['pinyin']=='') { // sometimes cn exists but pinyin doesn't, in this case mark it and return empty string in $pinyin_string at the end
					$no_pinyin = true;
				} else if (!$no_pinyin) { // only proceed if all previous pinyins exist
					$pinyin_string .= $row_get_tw_cn['pinyin']." ";
				}
				if ($row_get_tw_cn['canpin']==NULL || $row_get_tw_cn['canpin']=='') { // sometimes cn exists but pinyin doesn't, in this case mark it and return empty string in $pinyin_string at the end
					$no_canpin = true;
				} else if (!$no_canpin) { // only proceed if all previous pinyins exist
					$canpin_string .= $row_get_tw_cn['canpin']." ";
				}
			} else {
				// the character is not found in the table, gather its pinyin and cantonese romanisation from the unihan library and insert a record in the tw_cn table
				$found=false;
				$tw_char_array = json_decode('{"char":"'.$tw_code.'"}', true);
				$tw_char = $tw_char_array['char'];
				
				$pinyin_string = '';
				$pinyinSQL = sprintf("SELECT DISTINCT han_char, unicode_hex, pinyin FROM ".$database_library.".unihan WHERE unicode_hex=%s AND hanyu='Y'", GetSQLValueString(substr($tw_code,2),"text"));
				$get_pinyin = mysql_query_or_die($pinyinSQL, $localconnect);
				while ($row_get_pinyin = mysql_fetch_assoc($get_pinyin)) {
					$pinyin_string .= ucfirst(strtolower($row_get_pinyin['pinyin'])).', ';
				}
				mysql_free_result($get_pinyin);
				if ($pinyin_string!='') {
					$pinyin_string = substr($pinyin_string,0,strlen($pinyin_string)-2);
				}
				$canpin_string = '';
				$canpinSQL = sprintf("SELECT DISTINCT han_char, unicode_hex, pinyin FROM ".$database_library.".unihan WHERE unicode_hex=%s AND hanyu!='Y'", GetSQLValueString(substr($tw_code,2),"text"));
				$get_canpin = mysql_query_or_die($canpinSQL, $localconnect);
				while ($row_get_canpin = mysql_fetch_assoc($get_canpin)) {
					$canpin_string .= ucfirst(strtolower($row_get_canpin['pinyin'])).', ';
				}
				mysql_free_result($get_canpin);
				if ($canpin_string!='') {
					$canpin_string = substr($canpin_string,0,strlen($canpin_string)-2);
				}
				// opens a connection with table tw_cn (if a connection already exists, it will be used instead of a new one being opened so don't close the connection in case it was opened by someone else)
				$unicode_connect = connect_unicode();
				$unicode_admin = $unicode_connect['db_connect'];
				$database_hanzi = $unicode_connect['db_name'];
				$selectSQL = sprintf("SELECT * FROM ".$database_hanzi.".tw_cn WHERE tw_code=%s",
										GetSQLValueString(substr($tw_code,2),'text'));
				$get_tw_cn = mysql_query_or_die($selectSQL, $unicode_admin);
				if (mysql_num_rows($get_tw_cn)==0) {
					$replaceSQL = sprintf("REPLACE INTO ".$database_hanzi.".tw_cn (tw, tw_code, all_pinyin, all_canpin, tw_count, cn_count, date_added) VALUE (%s, %s, %s, %s, 0, 0, %s)",
											GetSQLValueString($tw_char,'text'),
											GetSQLValueString(substr($tw_code,2),'text'),
											GetSQLValueString($pinyin_string,'text'),
											GetSQLValueString($canpin_string,'text'),
											GetSQLValueString(date("Y-m-d H:i:s",get_GMT(time())), "date"));
					$Result1 = mysql_query_or_die($replaceSQL, $unicode_admin);
				}
				mysql_free_result($get_tw_cn);
			}
			mysql_free_result($get_tw_cn);
		} else {
			$cn_string .= substr($json_string,$tw_char_index,6);
			$pinyin_string .= substr($json_string,$tw_char_index,6);
			$canpin_string .= substr($json_string,$tw_char_index,6);
		}
		$new_tw_char_index = strpos($json_string,"\u",$tw_char_index+6);
	}
	if ($found) {
		if ($tw_char_index+6<$tw_end) {
			$cn_string .= substr($json_string,$tw_char_index+6,$tw_end-$tw_char_index-6);
			$pinyin_string .= substr($json_string,$tw_char_index+6,$tw_end-$tw_char_index-6);
			$canpin_string .= substr($json_string,$tw_char_index+6,$tw_end-$tw_char_index-6);
		}
		if ($no_pinyin) {
			$pinyin_string = '"pinyin":"';
		}
		if ($no_canpin) {
			$canpin_string = '"canpin":"';
		}
		$cn_array = json_decode($cn_string.'",'.trim($pinyin_string).'",'.trim($canpin_string).'"}',true);
	} else {
		$cn_array['cn']='';
		$cn_array['pinyin']='';
		$cn_array['canpin']='';
	}
	return $cn_array;
}

function code2han ($code) {
	$code_array = explode(",",$code);
	$code_string = '{"hanchar":"\u'.implode("\u",explode(",",$code)).'"}';
	$code_array = json_decode($code_string,true);
	return $code_array['hanchar'];
}

function han2code ($han) {
	$han_array['char']=$han;
	$json_string = json_encode($han_array);
	$string_pos = strpos($json_string,'"char":"\u');
	if ($string_pos>0) {
		$code=substr($json_string,$string_pos+10,strlen($json_string)-11-2);
		$code=str_replace("\u",",",$code);
	} else {
		$code=NULL;
	}
	return $code;
}
/*
function ucode2han ($code_string) {
	$code_string = '{"han_string":"'.$code_string.'"}';
	$code_array = json_decode($code_string,true);
	return $code_array['han_string'];
}

function han2ucode ($han_string) {
	$han_array['han_string']=$han_string;
	$json_string = json_encode($han_array);
//	$json_string will have the format: {"han_string":"\u...."} 
	$code=substr($json_string,15,strlen($json_string)-17);
	return $code;
}
*/

function ucode2han ($code_string) {
	return json_decode('"'.$code_string.'"',true);
}

function han2ucode ($han_string) {
	return $unicode_string = str_replace('"','',json_encode($han_string));
}

function strip_symbols( $text )
{
    $plus   = '\+\x{FE62}\x{FF0B}\x{208A}\x{207A}';
    $minus  = '\x{2012}\x{208B}\x{207B}';
 
    $units  = '\\x{00B0}\x{2103}\x{2109}\\x{23CD}';
    $units .= '\\x{32CC}-\\x{32CE}';
    $units .= '\\x{3300}-\\x{3357}';
    $units .= '\\x{3371}-\\x{33DF}';
    $units .= '\\x{33FF}';
 
    $ideo   = '\\x{2E80}-\\x{2EF3}';
    $ideo  .= '\\x{2F00}-\\x{2FD5}';
    $ideo  .= '\\x{2FF0}-\\x{2FFB}';
    $ideo  .= '\\x{3037}-\\x{303F}';
    $ideo  .= '\\x{3190}-\\x{319F}';
    $ideo  .= '\\x{31C0}-\\x{31CF}';
    $ideo  .= '\\x{32C0}-\\x{32CB}';
    $ideo  .= '\\x{3358}-\\x{3370}';
    $ideo  .= '\\x{33E0}-\\x{33FE}';
    $ideo  .= '\\x{A490}-\\x{A4C6}';
 
    return preg_replace(
        array(
        // Remove modifier and private use symbols.
            '/[\p{Sk}\p{Co}]/u',
        // Remove mathematics symbols except + - = ~ and fraction slash
            '/\p{Sm}(?<![' . $plus . $minus . '=~\x{2044}])/u',
        // Remove + - if space before, no number or currency after
            '/((?<= )|^)[' . $plus . $minus . ']+((?![\p{N}\p{Sc}])|$)/u',
        // Remove = if space before
            '/((?<= )|^)=+/u',
        // Remove + - = ~ if space after
            '/[' . $plus . $minus . '=~]+((?= )|$)/u',
        // Remove other symbols except units and ideograph parts
            '/\p{So}(?<![' . $units . $ideo . '])/u',
        // Remove consecutive white space
            '/ +/',
        ),
        ' ',
        $text );
}

function clean_latin ($language,$string) {
	$A = '\x{00C0}-\x{00C5}';
	$a = '\x{00E0}-\x{00E5}';
	$AE = '\x{00C6}';
	$ae = '\x{00E6}';
	$C = '\x{00C7}';
	$c = '\x{00E7}';
	$E = '\x{00C8}-\x{00CB}';
	$e = '\x{00E8}-\x{00EB}';
	$I = '\x{00CC}-\x{00CF}';
	$i = '\x{00EC}-\x{00EF}';
	$N = '\x{00D1}';
	$n = '\x{00F1}';
	$O = '\x{00D2}-\x{00D6}';
	$o = '\x{00F2}-\x{00F6}';
	$U = '\x{00D9}-\x{00DC}';
	$u = '\x{00F9}-\x{00FC}';
	$S = '\x{008A}';
	$s = '\x{009A}';
	$ss= '\x{00DF}';
	$OE = '\x{008C}';
	$oe = '\x{009C}';
	$Y = '\x{009F}\x{00DD}';
	$y = '\x{00FF}\x{00FF}';
	$Z = '\x{008E}';
	$z = '\x{009E}';
	
	switch ($language) {
		case 'en':
			$string = preg_replace("/[".$A."]/u","A",$string);
			$string = preg_replace("/[".$a."]/u","a",$string);
			$string = preg_replace("/[".$AE."]/u","A",$string);
			$string = preg_replace("/[".$ae."]/u","a",$string);
			
			$string = preg_replace("/[".$C."]/u","C",$string);
			$string = preg_replace("/[".$c."]/u","c",$string);
			$string = preg_replace("/[".$E."]/u","E",$string);
			$string = preg_replace("/[".$e."]/u","e",$string);
			
			$string = preg_replace("/[".$N."]/u","N",$string);
			$string = preg_replace("/[".$n."]/u","n",$string);
			$string = preg_replace("/[".$I."]/u","I",$string);
			$string = preg_replace("/[".$i."]/u","i",$string);
			
			$string = preg_replace("/[".$S."]/u","S",$string);
			$string = preg_replace("/[".$s."]/u","s",$string);
			$string = preg_replace("/[".$OE."]/u","OE",$string);
			$string = preg_replace("/[".$oe."]/u","oe",$string);
			
			$string = preg_replace("/[".$Y."]/u","Y",$string);
			$string = preg_replace("/[".$y."]/u","y",$string);
			$string = preg_replace("/[".$Z."]/u","Z",$string);
			$string = preg_replace("/[".$z."]/u","z",$string);
			
			$string = preg_replace("/[".$ss."]/u","ss",$string);
			
			break;
	}
	return $string;
}

function clean_name($language,$biz_name,$remove_ignore,$return_string) {
	// replace multiple spaces with exactly one space and strip out 'a', 'an', 'the',  slash (057) then turn string into an array
	global $database_library, $localconnect;
	
	$articles = array();
	$articles['en'] = array("/\ba\b/","/\ban\b/","/\bthe\b/");
	
	$clean_string = clean_latin($language,$biz_name);
	
	// replace ampersand (046), plus (053) with 'and'
	$ampersand = '/[\046\053]/';
	$clean_string = preg_replace($ampersand," and ",$clean_string);
	
	// double quote (042), '%' (045), '(' (050), ')' (051), asterisk (052), comma (054), dash (055) period (056), slash (\/) and vertical bar (174)
	$puntuation = '/[\042\045\050\051\052\054\055\056\/\174]/';
	$clean_string = preg_replace($puntuation," ",$clean_string);
	
	// apostrophe (047)
	$apostrophe = '/\047/';
	$clean_string = preg_replace($apostrophe,"",$clean_string);
	
	if ($language=='en') {
		$clean_string = preg_replace($articles[$language]," ",$clean_string);
	}
	$clean_string = strtolower(trim(preg_replace('/\040+/',' ',$clean_string)));
	if ($remove_ignore) {
		$biz_name_array = explode(" ",$clean_string);
		$selectSQL = "SELECT * FROM ".$database_library."."."biz_ignore_names";
		$get_word = mysql_query_or_die($selectSQL, $localconnect);
		while ($row_get_word = mysql_fetch_assoc($get_word)) {
			$ignore_word = array($row_get_word['word']);
			$biz_name_array = array_diff($biz_name_array,$ignore_word);
		}
		mysql_free_result($get_word);
		if (count($biz_name_array)<3) {
			if ($return_string) {
				return $clean_string;
			} else {
				return explode(" ",$clean_string);
			}
		} else {
			if ($return_string) {
				return implode(" ",$biz_name_array);
			} else {
				return $biz_name_array;
			}
		}
	} else {
		if ($return_string) {
			return $clean_string;
		} else {
			return explode(" ",$clean_string);
		}
	}
}

function clean_address_new($language, $country, $string) {
	// replace multiple spaces with exactly one space
	global $database_library, $database_addradmin, $localconnect;
	$clean_string = clean_latin($language,trim($string));
	
	$articles = array();
	$articles['en'] = array("/\ba\b/","/\ban\b/","/\bthe\b/");
	
	// replace ampersand (046), plus (053) with 'and'
	$ampersand = '/[\046\053]/';
	$clean_string = preg_replace($ampersand," and ",$clean_string);
	
	// double quote (042), '(' (050), ')' (051), asterisk (052), comma (054), period (056) and forward slash (057) - replace them with space
	$puntuation = '/[\042\050\051\052\054\056\057]/';
	$clean_string = preg_replace($puntuation," ",$clean_string);
	
	// delete spaces before and after dash (055)
	$dash = '/\040*\055\040*/';
	$clean_string = preg_replace($dash,"-",$clean_string);
	
	// remove apostrophe (047)
	$apostrophe = '/\047/';
	$clean_string = preg_replace($apostrophe,'',$clean_string);
		
	// turn string into lower case
	$clean_string = strtolower($clean_string);
	if ($language=='en') {
		if ($country=='au') {
			// assume the last word is street type, expand abbreviation 
			$street_pos = strrpos($clean_string," ");
			if ($street_pos!==false) {
				$street_type = substr($clean_string,$street_pos+1);
				$selectSQL = "SELECT * FROM ".$database_addradmin.".au_street_types WHERE street_type='".$street_type."'";
				$get_word = mysql_query_or_die($selectSQL, $localconnect);
				if ($row_get_word = mysql_fetch_assoc($get_word)) {
					$clean_string = substr_replace($clean_string,$row_get_word['abbreviation'],$street_pos+1,strlen($street_type));
				}
				mysql_free_result($get_word);
			}
		}
//		$clean_string = preg_replace($articles[$language]," ",$clean_string);
	}
	$clean_string = strtolower(trim(preg_replace('/\040+/',' ',$clean_string)));
	return $clean_string;
}

function unicode_add_space($string){
	$encoded_string = json_encode($string);
	//echo 'filtername_encoded: '.$encoded_string; 
	
	//echo 'filtername_remove bracket: '.$encoded_string;
	$spaced_encoded_string = str_replace("\u"," \u",$encoded_string);
	//echo 'filtername_encoded with space: '.$spaced_encoded_string;
	$spaced_encoded_string = str_replace(" \u00","\u00",$spaced_encoded_string);
	//echo 'filtername_encoded with space: '.$spaced_encoded_string;
	$spaced_encoded_string = trim($spaced_encoded_string);
	//echo 'filtername_encoded with space after trim: '.$spaced_encoded_string;
	$spaced_encoded_string = preg_replace("/\040+/"," ",$spaced_encoded_string);
	//echo 'filtername_encoded with space remove extra spaces: '.$spaced_encoded_string;
	//echo "before loop:".$spaced_encoded_string;
	
	$count=0;
	while ($count< strlen($spaced_encoded_string)){
		$string_pos_count = strpos($spaced_encoded_string,"\u",$count);
		//echo "before if :".$spaced_encoded_string;
		if ($string_pos_count===false) {
			$count=strlen($spaced_encoded_string);
		} else { 
			if (substr($spaced_encoded_string,$string_pos_count+6,1)!=' ' && substr($spaced_encoded_string,$string_pos_count,4)!="\u00" && $string_pos_count+6<strlen($spaced_encoded_string)) {
				$spaced_encoded_string = substr_replace($spaced_encoded_string," ",$string_pos_count+6,0);
				//echo "after substr:".$spaced_encoded_string;
				$count = $string_pos_count+7;
			} else {
				$count = $string_pos_count+6;
			}
		}
	}
	$spaced_encoded_string=strtolower($spaced_encoded_string);
	//echo "before decode:".$spaced_encoded_string;
	$decoded_string= json_decode($spaced_encoded_string,true);
	//echo "decoded string:".$decoded_string;
	return trim($decoded_string);	
}

function clean_unicode($language,$unicode,$useradmin) {
	global $database_dedup,$database_library;
	
	// strip out double-quotation marks returned by json_encode 
	$unicode_string = str_replace('"','',json_encode($unicode));
	// add a space before each unicode char so that the chars can be placed in individual elements in an array
	$unicode_string = str_replace("\u"," \u",$unicode_string);
	// remove space before a latin-1 letter
	$unicode_string = str_replace(" \u00","\u00",$unicode_string);
	// replace multiple spaces with exactly one space and strip out ampersand (046), plus (053) and dash (055) then turn string into an array
	$unicode_string = preg_replace("/\040+/"," ",preg_replace("/[\046\053\055]/"," ",trim($unicode_string)));
	// go through the entire string and add a space between a unicode char and latin char
	$search_start = 0;
	while ($search_start<strlen($unicode_string)) {
		$unicode_pos = strpos($unicode_string,"\u",$search_start);
		if ($unicode_pos===false) {
			$search_start=strlen($unicode_string);
		} else {
			if (substr($unicode_string,$unicode_pos+6,1)!=' ' && substr($unicode_string,$unicode_pos,4)!="\u00" && $unicode_pos+6<strlen($unicode_string)) {
				$unicode_string = substr_replace($unicode_string," ",$unicode_pos+6,0);
				$search_start = $unicode_pos+7;
			} else {
				$search_start = $unicode_pos+6;
			}
		}
	}
	$unicode_array = explode(" ",strtolower($unicode_string));
	
	$selectSQL = "SELECT * FROM ".$database_library."."."unicode_ignore_chars";
	$get_word = mysql_query_or_die($selectSQL, $useradmin);
	while ($row_get_word = mysql_fetch_assoc($get_word)) {
		$ignore_word = array($row_get_word['unicode']);
		$unicode_array = array_diff($unicode_array,$ignore_word);
	}
	mysql_free_result($get_word);
	return $unicode_array;
}

function clean_tel($tel_string) {
	// strips out brackets, dash (055) or space (040)
	if ($tel_string==null || $tel_string=='') {
		return '';
	} else {
		return preg_replace(array("/[()\040\055]/","/^0/"),"",$tel_string);
	}
}

function get_full_tel($country,$city,$tel_string,$useradmin) {
	if ($tel_string==null || $tel_string='') {
		return '';
	} else {
		$selectCountrySQL = sprintf("SELECT * FROM country_info WHERE code=%s",GetSQLValueString($country,'text'));
		$get_country = mysql_query_or_die($selectCountrySQL, $useradmin);
		if (mysql_num_rows($get_country)>0) {
			$row_get_country = mysql_fetch_assoc($get_country);
			$country_code = trim($row_get_country['tel_code']);
		} else {
			$country_code = '';
		}
		mysql_free_result($get_country);
		return $country_code.clean_tel($tel_string);
	}
}

function clean_postcode($postcode_string) {
	// strips out brackets, dash (055) or space (040)
	if ($postcode_string==null || $postcode_string=='') {
		return '';
	} else {
		return preg_replace("/[\040]/","",strtoupper(trim($postcode_string)));
	}
}

function convert_street_code($country,$street_type) {
	global $database_addradmin,$localconnect;
	
	switch ($country) {
		case 'ca':
			$selectSQL = "SELECT * FROM ".$database_addradmin.".".$country."_street_types WHERE string='".$street_type."'";
			$get_code = mysql_query_or_die($selectSQL, $localconnect);
			if ($row_get_code=mysql_fetch_assoc($get_code)) {
				if ($row_get_code['string']==null) {
					$code = $street_type;
				} else {
					$code = $row_get_code['code'];
				}
			} else {
				$code = $street_type;
			}
			mysql_free_result($get_code);
			break;
		default:
			$code = $street_type;
			break;
	}
	return $code;
}

function extract_street_new($language,$country,$region,$city,$full_address) {
	global $database_addradmin,$localconnect;
	
	$street_array = array();
	if ($country=='hk' || $country=='ca') {
		$address_array = explode(" ",$full_address);
		$count = count($address_array);
		$street_index = 0;
		$found_street = FALSE;
		$found_match = FALSE;
		switch ($country) {
			case 'ca':
				$selectSQLBase = "SELECT DISTINCT trim(concat_ws(' ',street_name,street_type_code)) AS en FROM ".$database_addradmin.".".$country."_streets".
					" WHERE province='".$region."' AND city='".$city."' AND locate(%s,concat_ws(' ',replace(replace(street_name,\".\",\"\"),\"'\",\"\"),street_type_code))=1";
				$selectExactSQLBase = "SELECT DISTINCT trim(concat_ws(' ',street_name,street_type_code)) AS en FROM ".$database_addradmin.".".$country."_streets".
					" WHERE province='".$region."' AND city='".$city."' AND concat_ws(' ',replace(replace(street_name,\".\",\"\"),\"'\",\"\"),street_type_code)=%s";
				break;
			case 'hk':
				$selectSQLBase = 'SELECT * FROM '.$database_addradmin.'.'.$country.'_streets WHERE locate(%s,replace(en,"'."'".'",""))=1';
				$selectExactSQLBase = 'SELECT * FROM '.$database_addradmin.'.'.$country.'_streets WHERE replace(en,"'."'".'","")=%s';
				break;
		}
		while (!$found_street && $street_index<$count) {
			$street_words = 0;
			do {
				$street_words += 1;
				if ($street_words>1) {
					$addr_phrase = str_replace("'","",implode(" ",array_slice($address_array,$street_index,$street_words-1)).' '.convert_street_code($country,$address_array[$street_index+$street_words-1]));
				} else {
					$addr_phrase = str_replace("'","",implode(" ",array_slice($address_array,$street_index,$street_words)));
				}
				$selectSQL = sprintf($selectSQLBase, GetSQLValueString($addr_phrase, "text"));
//				echo 'select SQL:<span style="color:#0000DD">'.$selectSQL.'</span><br />';
				$get_en_name = mysql_query_or_die($selectSQL, $localconnect);
				$total_get_en_name = mysql_num_rows($get_en_name);
				if ($total_get_en_name > 0) {
					$found_match = TRUE;
					$match_words = $street_words;
				}
				if ($found_match && ($street_index+$match_words>=$count || $total_get_en_name==0)) {
					if ($match_words>1) {
						$addr_phrase = str_replace("'","",implode(" ",array_slice($address_array,$street_index,$match_words-1)).' '.convert_street_code($country,$address_array[$street_index+$match_words-1]));
					} else {
						$addr_phrase = str_replace("'","",implode(" ",array_slice($address_array,$street_index,$match_words)));
					}
					$selectExactSQL = sprintf($selectExactSQLBase, GetSQLValueString($addr_phrase, "text"));
//					echo 'select SQL:<span style="color:#DD0000">'.$selectExactSQL.'</span><br />';
					$get_exact_name = mysql_query_or_die($selectExactSQL, $localconnect);
					if (mysql_num_rows($get_exact_name)>0) {
						$row_get_exact_name = mysql_fetch_assoc($get_exact_name);
						$en_street = $row_get_exact_name['en'];
						$tw_street = $row_get_exact_name['tw'];
						$cn_street = $row_get_exact_name['cn'];
						$found_street = TRUE;
						$street_words = $match_words;
					}
					mysql_free_result($get_exact_name);
				}
				mysql_free_result($get_en_name);
			} while (!$found_street && $street_index+$street_words<$count && $total_get_en_name>0);
			
			// if a match is found, strip it out and re-adjust word count
			if (!$found_street) {
				$street_index += 1;
			}
		}
		if ($found_street) {
//			echo '<span style="color:#00DD00;font-weight:bold"> street found </span>';
			if ($country=='ca') {
				if ($street_index>0) {
					$pre_street_word = $address_array[$street_index-1];
					if ($pre_street_word=='e'||$pre_street_word=='east'||
						$pre_street_word=='s'||$pre_street_word=='south'||
						$pre_street_word=='w'||$pre_street_word=='west'||
						$pre_street_word=='n'||$pre_street_word=='north'||
						$pre_street_word=='se'||$pre_street_word=='sw'||
						$pre_street_word=='ne'||$pre_street_word=='nw') {
						switch ($pre_street_word) {
							case 'e': case 'east': $street_array['direction']='east'; break;
							case 's': case 'south': $street_array['direction']='south'; break;
							case 'w': case 'west': $street_array['direction']='west'; break;
							case 'n': case 'north': $street_array['direction']='north'; break;
							default:
								$street_array['direction']=$pre_street_word;
						}
						if ($street_index>1) {
							$street_array['number'] = $address_array[$street_index-2];
						}
						$direction_found = true;
					} else {
						$street_array['number'] = $address_array[$street_index-1];
						$direction_found = false;
					}
				} else {
					$direction_found = false;
				}
				if (!$direction_found && $street_index+$street_words<count($address_array)) {
					$post_street_word = $address_array[$street_index+$street_words];
					if ($post_street_word=='e'||$post_street_word=='east'||
						$post_street_word=='s'||$post_street_word=='south'||
						$post_street_word=='w'||$post_street_word=='west'||
						$post_street_word=='n'||$post_street_word=='north'||
						$post_street_word=='se'||$post_street_word=='sw'||
						$post_street_word=='ne'||$post_street_word=='nw') {
						switch ($pre_street_word) {
							case 'e': case 'east': $street_array['direction']='east'; break;
							case 's': case 'south': $street_array['direction']='south'; break;
							case 'w': case 'west': $street_array['direction']='west'; break;
							case 'n': case 'north': $street_array['direction']='north'; break;
							default:
								$street_array['direction']=$post_street_word;
						}
					}
				}
			} else {
				if ($street_index>0) {
					$street_array['number'] = $address_array[$street_index-1];
				}
			}
			// remove apostrophe (047) and period (056) from the street name
			$street_array['name'] = trim(strtolower(preg_replace('/[\047\056]/','',$row_get_exact_name['en'])));
//			$street_array['name'] = implode(" ",array_slice($address_array,$street_index,$street_words));
			return $street_array;
		} else {
		return $street_array;
		}
	} else {
		return $street_array;
	}
}

function extract_street($country,$address_1,$address_2,$useradmin) {
	global $database_addradmin,$localconnect;
	
	$full_address = preg_replace("/\040+/"," ",trim($address_1.' '.$address_2));
	$address_array = explode(" ",$full_address);
	$count = count($address_array);
	
	if ($country=='hk') {
		$street_index = 0;
		$found_street = FALSE;
		$found_match = FALSE;
		while (!$found_street && $street_index<$count) {
			$street_words = 0;
			do {
				$street_words += 1;
				$addr_phrase = str_replace("'","",implode(" ",array_slice($address_array,$street_index,$street_words)));
				$selectSQL = sprintf('SELECT * FROM '.$database_addradmin.'.hk_streets WHERE locate(%s,replace(en,"'."'".'",""))=1', GetSQLValueString($addr_phrase, "text"));
				$get_en_name = mysql_query_or_die($selectSQL, $localconnect);
				$total_get_en_name = mysql_num_rows($get_en_name);
				if ($total_get_en_name > 0) {
					$found_match = TRUE;
					$match_words = $street_words;
				}
				if ($found_match && ($street_index+$match_words>=$count || $total_get_en_name==0)) {
					$addr_phrase = str_replace("'","",implode(" ",array_slice($address_array,$street_index,$match_words)));
					$selectExactSQL = sprintf('SELECT * FROM '.$database_addradmin.'.hk_streets WHERE replace(en,"'."'".'","")=%s', GetSQLValueString($addr_phrase, "text"));
					$get_exact_name = mysql_query_or_die($selectExactSQL, $localconnect);
					if (mysql_num_rows($get_exact_name)>0) {
						$row_get_exact_name = mysql_fetch_assoc($get_exact_name);
						$en_street = $row_get_exact_name['en'];
						$tw_street = $row_get_exact_name['tw'];
						$cn_street = $row_get_exact_name['cn'];
						$found_street = TRUE;
						$street_words = $match_words;
					}
					mysql_free_result($get_exact_name);
				}
				mysql_free_result($get_en_name);
			} while (!$found_street && $street_index+$street_words<$count && $total_get_en_name>0);
			
			// if a match is found, strip it out and re-adjust word count
			if (!$found_street) {
				$street_index += 1;
			}
		}
		if ($found_street) {
			return implode(" ",array_slice($address_array,$street_index,$street_words));
		} else {
			return '';
		}
	} else {
		return '';
	}
}

function extract_building_new($language,$country,$region,$city,$full_address) {
	global $database_addradmin,$localconnect;
	$address_array = explode(" ",$full_address);
	$count = count($address_array);
	
	$building_array=array();
	if ($country=='hk') {
		$bldg_index = 0;
		$found_bldg = FALSE;
		$found_match = FALSE;
		while (!$found_bldg && $bldg_index<$count) {
			$bldg_words = 0;
			do {
				$bldg_words += 1;
				$addr_phrase = str_replace("'","",implode(" ",array_slice($address_array,$bldg_index,$bldg_words)));
				$selectSQL = sprintf('SELECT * FROM '.$database_addradmin.'.hk_buildings WHERE locate(%s,replace(en,"\'",""))=1', GetSQLValueString($addr_phrase, "text"));
				$get_en_name = mysql_query_or_die($selectSQL, $localconnect);
				$total_get_en_name = mysql_num_rows($get_en_name);
				if ($total_get_en_name > 0) {
					$found_match = TRUE;
					$match_words = $bldg_words;
				}
				if ($found_match && ($bldg_index+$match_words>=$count || $total_get_en_name==0)) {
					$addr_phrase = str_replace("'","",implode(" ",array_slice($address_array,$bldg_index,$match_words)));
					$selectExactSQL = sprintf('SELECT * FROM '.$database_addradmin.'.hk_buildings WHERE replace(en,"\'","")=%s', GetSQLValueString($addr_phrase, "text"));
					$get_exact_name = mysql_query_or_die($selectExactSQL, $localconnect);
					if (mysql_num_rows($get_exact_name)) {
						$row_get_exact_name = mysql_fetch_assoc($get_exact_name);
						$en_bldg = $row_get_exact_name['en'];
						$tw_bldg = $row_get_exact_name['tw'];
						$cn_bldg = $row_get_exact_name['cn'];
						$found_bldg = TRUE;
						$bldg_words = $match_words;
					}
					mysql_free_result($get_exact_name);
				}
				mysql_free_result($get_en_name);
			} while (!$found_bldg && $bldg_index+$bldg_words<$count && $total_get_en_name>0);
			
			// if a match is found, strip it out and re-adjust word count so that next scan doesn't need to go over these words again
			if (!$found_bldg) {
				$bldg_index += 1;
			}
		}
		if ($found_bldg) {
			$building_array['number'] = null;
			$building_array['name']=implode(" ",array_slice($address_array,$bldg_index,$bldg_words));
			return $building_array;
		} else {
			return $building_array;
		}
	} else {
		return $building_array;
	}
}

function extract_building($country,$address_1,$address_2,$useradmin) {
	global $database_addradmin,$localconnect;
	$full_address = preg_replace("/\040+/"," ",trim($address_1.' '.$address_2));
	$address_array = explode(" ",$full_address);
	$count = count($address_array);
	
	if ($country=='hk') {
		$bldg_index = 0;
		$found_bldg = FALSE;
		$found_match = FALSE;
		while (!$found_bldg && $bldg_index<$count) {
			$bldg_words = 0;
			do {
				$bldg_words += 1;
				$addr_phrase = str_replace("'","",implode(" ",array_slice($address_array,$bldg_index,$bldg_words)));
				$selectSQL = sprintf('SELECT * FROM '.$database_addradmin.'.hk_buildings WHERE locate(%s,replace(en,"\'",""))=1', GetSQLValueString($addr_phrase, "text"));
				$get_en_name = mysql_query_or_die($selectSQL, $localconnect);
				$total_get_en_name = mysql_num_rows($get_en_name);
				if ($total_get_en_name > 0) {
					$found_match = TRUE;
					$match_words = $bldg_words;
				}
				if ($found_match && ($bldg_index+$match_words>=$count || $total_get_en_name==0)) {
					$addr_phrase = str_replace("'","",implode(" ",array_slice($address_array,$bldg_index,$match_words)));
					$selectExactSQL = sprintf('SELECT * FROM '.$database_addradmin.'.hk_buildings WHERE replace(en,"\'","")=%s', GetSQLValueString($addr_phrase, "text"));
					$get_exact_name = mysql_query_or_die($selectExactSQL, $localconnect);
					if (mysql_num_rows($get_exact_name)) {
						$row_get_exact_name = mysql_fetch_assoc($get_exact_name);
						$en_bldg = $row_get_exact_name['en'];
						$tw_bldg = $row_get_exact_name['tw'];
						$cn_bldg = $row_get_exact_name['cn'];
						$found_bldg = TRUE;
						$bldg_words = $match_words;
					}
					mysql_free_result($get_exact_name);
				}
				mysql_free_result($get_en_name);
			} while (!$found_bldg && $bldg_index+$bldg_words<$count && $total_get_en_name>0);
			
			// if a match is found, strip it out and re-adjust word count so that next scan doesn't need to go over these words again
			if (!$found_bldg) {
				$bldg_index += 1;
			}
		}
		if ($found_bldg) {
			return implode(" ",array_slice($address_array,$bldg_index,$bldg_words));
		} else {
			return '';
		}
	} else {
		return '';
	}
}

function get_main_photo ($country,$biz_id,$useradmin) {
	$selectSQL = sprintf("SELECT server_ext, folder, filename FROM site_photos".
			" LEFT JOIN biz_photos ON site_photos.photo_id=biz_photos.photo_id".
			" WHERE biz_photos.country=%s AND biz_photos.biz_id=%s AND biz_photos.ranking=1",
					GetSQLValueString($country,'text'),
					GetSQLValueString($biz_id,'int'));
	$get_photo = mysql_query_or_die($selectSQL, $useradmin);
	if ($row_get_photo = mysql_fetch_assoc($get_photo)) {
		$photo['server'] = get_image_server($row_get_photo['server_ext']);
		$photo['folder'] = $row_get_photo['folder'];
		$photo['filename'] = $row_get_photo['filename'];
	} else {
		$photo['server'] = '';
		$photo['folder'] = '/artwork';
		$photo['filename'] = 'no_biz_photo.jpg';
	}
	mysql_free_result($get_photo);
	return $photo; 
}

function get_postcode($country,$addr_array,$ds_addradmin,$useradmin) {
	switch ($country) {
		case 'au': 
			$state = $addr_array[0];
			$locality = $addr_array[1];
			$selectSQL = sprintf("SELECT DISTINCT postcode FROM ".$ds_addradmin.".au_postcodes WHERE state=%s AND locality=%s",
								 GetSQLValueString($state,"text"),
								 GetSQLValueString($locality,"text"));
			$get_postcode = mysql_query_or_die($selectSQL, $useradmin);
			if (mysql_num_rows($get_postcode)==1) {
				$row_get_postcode=mysql_fetch_assoc($get_postcode);
				$postcode=$row_get_postcode['postcode'];
			} else {
				$postcode='';
			}
			mysql_free_result($get_postcode);
			break;
	}
	return $postcode;
}

function add_city($country,$region,$city,$ds_addradmin,$useradmin) {
	if ($city!='' && $city!=null) {
		switch ($country) {
			case 'uk':
				$selectCitySQL = sprintf("SELECT * FROM ".$ds_addradmin.".".$country."_cities WHERE region=%s AND city=%s",
									 GetSQLValueString(trim($region),"text"),
									 GetSQLValueString(trim($city),"text"));
				$get_city = mysql_query_or_die($selectCitySQL, $useradmin);
				if (mysql_num_rows($get_city)==0) {
					$insertSQL = sprintf("INSERT INTO ".$ds_addradmin.".".$country."_cities (region,city) VALUES (%s,%s)",
									 GetSQLValueString(trim($region),"text"),
									 GetSQLValueString(trim($city),"text"));
					$Result1 = mysql_query_or_die($insertSQL, $useradmin);
				}
				mysql_free_result($get_city);
				break;
		}
	}
}

function add_street($country,$region,$city,$address,$ds_addradmin,$useradmin) {
	$street_start = strpos($address,'^');
	if ($street_start!==false) {
		$street_end = strpos($address,'^',$street_start+1);
		if ($street_end!==false) {
			$street = trim(substr($address,$street_start+1,$street_end-$street_start-1));
		} else {
			$street = trim(substr($address,$street_start+1));
		}
		switch ($country) {
			case 'au':
				$selectStreetSQL = sprintf("SELECT * FROM ".$ds_addradmin.".".$country."_streets_full WHERE state=%s AND city=%s AND street=%s",
									 GetSQLValueString(trim($region),"text"),
									 GetSQLValueString(trim($city),"text"),
									 GetSQLValueString($street,"text"));
				$insertSQL = sprintf("INSERT INTO ".$ds_addradmin.".".$country."_streets_full (state,city,street) VALUES (%s,%s,%s)",
								 GetSQLValueString(trim($region),"text"),
								 GetSQLValueString(trim($city),"text"),
								 GetSQLValueString($street,"text"));
				break;
			case 'uk':
				$selectStreetSQL = sprintf("SELECT * FROM ".$ds_addradmin.".".$country."_streets_full WHERE region=%s AND city=%s AND street=%s",
									 GetSQLValueString(trim($region),"text"),
									 GetSQLValueString(trim($city),"text"),
									 GetSQLValueString($street,"text"));
				$insertSQL = sprintf("INSERT INTO ".$ds_addradmin.".".$country."_streets_full (region,city,street) VALUES (%s,%s,%s)",
								 GetSQLValueString(trim($region),"text"),
								 GetSQLValueString(trim($city),"text"),
								 GetSQLValueString($street,"text"));
				break;
		}
		$get_street = mysql_query_or_die($selectStreetSQL, $useradmin);
		if (mysql_num_rows($get_street)==0) {
			$Result1 = mysql_query_or_die($insertSQL, $useradmin);
		}
		mysql_free_result($get_street);
	}
	return str_replace('^','',$address);
}

function clean_address($language,$address,$useradmin) {
	// strips out ampersand (046), plus (053) and dash (055) then turn string into an array
	$address_word_array = explode(" ",strtolower(trim(preg_replace("/\040+/"," ",preg_replace("/[\046\053\055]/"," ",$address)))));
	$selectSQL = "SELECT * FROM address_ignore_words";
	$get_word = mysql_query_or_die($selectSQL, $useradmin);
	while ($row_get_word = mysql_fetch_assoc($get_word)) {
		$ignore_word = array($row_get_word['word']);
		$address_word_array = array_diff($address_word_array,$ignore_word);
	}
	mysql_free_result($get_word);
	return $address_word_array;
}

function update_photo_tags ($photo_id, $useradmin) {
//	This function updates tag_ids of the given photo. It does not update the tag count
//	A photo takes on the tags of any linked products. If there is no product linked, it then takes on the tags of linked businesses. It there is no business linked, the tag_ids recorded in photo_tags table will be used
	
	$photo_tags = array();
	
	// first check for products linked to the photo
	$getProductsPhotosSQL = sprintf("SELECT product_id FROM products_photos WHERE photo_id=%s ORDER BY product_id", GetSQLValueString($photo_id,"int"));
	$get_products_photos = mysql_query_or_die($getProductsPhotosSQL, $useradmin);
	$totalRows_get_products_photos = mysql_num_rows($get_products_photos);
	if ($totalRows_get_products_photos>0) {
		while($row_get_products_photos = mysql_fetch_assoc($get_products_photos)) {
			$product_id = $row_get_products_photos['product_id'];
			$getTagsSQL = sprintf("SELECT tag_id FROM product_tags WHERE product_id=%s", GetSQLValueString($product_id,"int"));
			$get_tags = mysql_query_or_die($getTagsSQL, $useradmin);
			while ($row_get_tags = mysql_fetch_assoc($get_tags)) {
				array_push($photo_tags,$row_get_tags['tag_id']);
			}
			mysql_free_result($get_tags);
		}
	} else {
		// then check for businesses linked to the photo
		$getBizPhotosSQL = sprintf("SELECT country, biz_id FROM biz_photos WHERE photo_id=%s ORDER BY country, biz_id", GetSQLValueString($photo_id,"int"));
		$get_biz_photos = mysql_query_or_die($getBizPhotosSQL, $useradmin);
		$totalRows_get_biz_photos = mysql_num_rows($get_biz_photos);
		if ($totalRows_get_biz_photos>0) {
			while($row_get_biz_photos = mysql_fetch_assoc($get_biz_photos)) {
				$country = $row_get_biz_photos['country'];
				$biz_id = $row_get_biz_photos['biz_id'];
				$getTagsSQL = sprintf("SELECT tag_id FROM biz_tags WHERE country=%s AND biz_id=%s",
									 GetSQLValueString($country,"text"),
									 GetSQLValueString($biz_id,"int"));
				$get_tags = mysql_query_or_die($getTagsSQL, $useradmin);
				while ($row_get_tags = mysql_fetch_assoc($get_tags)) {
					array_push($photo_tags,$row_get_tags['tag_id']);
				}
				mysql_free_result($get_tags);
			}
		} else {
			// then look in the photo_tags table
			$getTagsSQL = sprintf("SELECT tag_id FROM photo_tags WHERE photo_id=%s", GetSQLValueString($photo_id,"int"));
			$get_tags = mysql_query_or_die($getTagsSQL, $useradmin);
			while ($row_get_tags = mysql_fetch_assoc($get_tags)) {
				array_push($photo_tags,$row_get_tags['tag_id']);
			}
			mysql_free_result($get_tags);
		}
		mysql_free_result($get_biz_photos);
	}
	mysql_free_result($get_products_photos);

	// delete all existing records in photo_tags table
	$deleteSQL = sprintf("DELETE FROM photo_tags WHERE photo_id=%s", GetSQLValueString($photo_id,"int"));
	$Result1 = mysql_query_or_die($deleteSQL, $useradmin);
	
	// insert unique tags into photo_tags record
	$photo_tags = array_unique($photo_tags);
	while (count($photo_tags)>0) {
		$tag_id = array_shift($photo_tags);
		$insertSQL = sprintf("INSERT INTO photo_tags (tag_id,photo_id,ranking) VALUES (%s,%s,NULL)",
								GetSQLValueString($tag_id,"int"),

								GetSQLValueString($photo_id,"int"));
		$Result1 = mysql_query_or_die($insertSQL, $useradmin);
	}
}

function update_building_by_biz ($country, $biz_id, $useradmin) {
	if ($country=='hk') {
		$getBizSQL = sprintf("SELECT en_address_1,en_address_2,tw_address_1,tw_address_2,biz_tags FROM hk_biz WHERE biz_id=%s", GetSQLValueString($biz_id, "int"));
		$get_biz = mysql_query_or_die($getBizSQL, $useradmin);
		if (mysql_num_rows($get_biz)>0) {
			$row_get_biz = mysql_fetch_assoc($get_biz);
			$en_address_1 = $row_get_biz['en_address_1'];
			$en_address_2 = $row_get_biz['en_address_2'];
			$tw_address_1 = $row_get_biz['tw_address_1'];
			$tw_address_2 = $row_get_biz['tw_address_2'];
			$biz_tags = $row_get_biz['biz_tags'];
			
			$getBuildingsSQL = sprintf("SELECT * FROM hk_buildings WHERE (LOCATE(en,%s)>0 OR LOCATE(en,%s)>0 OR LOCATE(tw,%s)>0 OR LOCATE(tw,%s)>0) AND en!=%s AND en IS NOT NULl AND tw IS NOT NULL",
									GetSQLValueString($en_address_1, "text"),
									GetSQLValueString($en_address_2, "text"),
									GetSQLValueString($tw_address_1, "text"),
									GetSQLValueString($tw_address_2, "text"),
									GetSQLValueString('z', "text"));
			$get_building = mysql_query_or_die($getBuildingsSQL, $useradmin);
			if (mysql_num_rows($get_building)>0) {
				$row_get_building = mysql_fetch_assoc($get_building);
				$id = $row_get_building['id'];
				$replaceSQL = sprintf("REPLACE INTO buildings_biz (country,biz_id,building_id) VALUE (%s, %s, %s)",
									 GetSQLValueString('hk',"text"),
									 GetSQLValueString($biz_id,"int"),
									 GetSQLValueString($id,"int"));
				$Result1 = mysql_query_or_die($replaceSQL, $useradmin);
				update_building_tags ($country, $id, $useradmin);
				$select_condition = sprintf(" AND building_id!=%s", GetSQLValueString($id,"int"));
			} else {
				$select_condition = '';
			}
			mysql_free_result($get_building);
			
			// delete all other buildings that the business was previously linked to
			$getBuildingsBizSQL = sprintf("SELECT * FROM buildings_biz WHERE country=%s AND biz_id=%s".$select_condition,
								 GetSQLValueString('hk',"text"),
								 GetSQLValueString($biz_id,"int"));
			$get_buildings_biz = mysql_query_or_die($getBuildingsBizSQL, $useradmin);
			while ($row_get_buildings_biz = mysql_fetch_assoc($get_buildings_biz)) {
				$id = $row_get_buildings_biz['building_id'];
				$deleteSQL = sprintf("DELETE FROM buildings_biz WHERE country=%s AND biz_id=%s AND building_id=%s",
									 GetSQLValueString('hk',"text"),
								 GetSQLValueString($biz_id,"int"),
								 GetSQLValueString($id,"int"));
				$Result1 = mysql_query_or_die($deleteSQL, $useradmin);
				update_building_tags ($country, $id, $useradmin);
			}
			mysql_free_result($get_buildings_biz);
		} else {

			return false;
		}
		mysql_free_result($get_biz);
	}
}

function update_building_tags ($country, $id, $useradmin) {
	$getBuildingsSQL = sprintf("SELECT * FROM buildings_biz WHERE country=%s AND building_id=%s",
								 GetSQLValueString($country,"text"),
								 GetSQLValueString($id,"int"));
	$get_buildings = mysql_query_or_die($getBuildingsSQL, $useradmin);

	$deleteSQL = sprintf("DELETE FROM buildings_photos WHERE country=%s AND building_id=%s AND linked_to_biz=%s",
								 GetSQLValueString($country,"text"),
								 GetSQLValueString($id,"int"),
								 GetSQLValueString('Y',"text"));
	$Result1 = mysql_query_or_die($deleteSQL, $useradmin);
	
	$biz_tags = '';
	while ($row_get_buildings = mysql_fetch_assoc($get_buildings)) {
		$biz_id = $row_get_buildings['biz_id'];
		$getBizSQL = sprintf("SELECT biz_tags FROM ".$country."_biz WHERE biz_id=%s", GetSQLValueString($biz_id,"int"));
		$get_biz = mysql_query_or_die($getBizSQL, $useradmin);
		if (mysql_num_rows($get_biz)>0) {
			$row_get_biz = mysql_fetch_assoc($get_biz);
			$biz_tags .= $row_get_biz['biz_tags'];
		
			$selectPhotoSQL = sprintf("SELECT photo_id FROM biz_photos WHERE country=%s AND biz_id=%s",
									 GetSQLValueString($country,"text"),
									 GetSQLValueString($biz_id,"int"));
			$get_photos = mysql_query_or_die($selectPhotoSQL, $useradmin);
			while($row_get_photos = mysql_fetch_assoc($get_photos)) {
				$photo_id = $row_get_photos['photo_id'];
				$replaceSQL = sprintf("REPLACE INTO buildings_photos (country,photo_id,building_id,linked_to_biz) VALUE (%s, %s, %s, %s)",
									 GetSQLValueString($country,"text"),
									 GetSQLValueString($photo_id,"int"),
									 GetSQLValueString($id,"int"),
									 GetSQLValueString('Y',"text"));
				$Result1 = mysql_query_or_die($replaceSQL, $useradmin);
			}
			mysql_free_result($get_photos);
		}
		mysql_free_result($get_biz);
	}
	mysql_free_result($get_buildings);
	$biz_tags = tag_array_to_string(array_unique(tag_string_to_array($biz_tags)));
	$updateSQL = sprintf("UPDATE hk_buildings SET biz_tags=%s WHERE id=%s", GetSQLValueString($biz_tags,"text"), GetSQLValueString($id,"int"));
	$Result1 = mysql_query_or_die($updateSQL, $useradmin);
}

function build_tag_string ($entity, $tag_id_string, $country, $language, $useradmin) {
	$region = '';
	$city = '';
	$tag_id_array = tag_string_to_array($tag_id_string);
	$tag_string = '';
	$tag_markup = '';
	while (count($tag_id_array)>0) {
		$tag_id = array_shift($tag_id_array);
		$tag_string .= get_tag_name($tag_id, $language).',';
		$tag_markup .= get_tag_markup_by_ID($entity, $tag_id, $country, $region, $city, $language, 'N', $useradmin);
	}
	$tag_array = array("tag_string"=>$tag_string, "tag_markup"=>$tag_markup);
	return $tag_array;
}

function build_tags_by_entity ($entity, $entity_id, $country, $language, $show_count) {
	global $database_localmain,$localconnect;
	$tag_string = '';
	$tag_markup = '';
	$region = '';
	$city = '';
	$tag_text_array=array();
	$tag_id_text=array();
	$tag_ids=array();
	if ($language=='' || $language==null) {
		$language = 'en';
	}
	// get existing tags from relevant table
	switch ($entity) {
		case 'biz':
			$selectTagsSQL = sprintf("SELECT biz_tags.* FROM ".$database_localmain.".biz_tags".
						" LEFT JOIN ".$database_localmain.".primary_tags ON biz_tags.tag_id=primary_tags.tag_id".
						" WHERE country=%s AND biz_id=%s AND (primary_tags.category_id!=3 OR primary_tags.tag_level=1)".
						" ORDER BY category_id, primary_tags.".$language,
							GetSQLValueString($country, "text"),
							GetSQLValueString($entity_id, "int"));
			break;
	}
	$get_tags = mysql_query_or_die($selectTagsSQL, $localconnect);
	while ($row_get_tags = mysql_fetch_assoc($get_tags)) {
		$tag_id = $row_get_tags['tag_id'];
		array_push($tag_id_array,$tag_id);
		$tag_string .= get_tag_name($tag_id, $language).',';
		if ($show_count) {
			$tag_markup .= get_tag_markup_by_ID($entity, $tag_id, $country, $region, $city, $language, 'N', $localconnect);
		} else if ($row_get_tags['user_action']=='A') {
			$tag_markup .= get_tag_markup_by_ID('tags_user_added', $tag_id, $country, $region, $city, $language, 'N', $localconnect);
		} else if ($row_get_tags['user_action']=='D') {
			$tag_markup .= get_tag_markup_by_ID('tags_user_deleted', $tag_id, $country, $region, $city, $language, 'N', $localconnect);
		} else {
			$tag_markup .= get_tag_markup_by_ID('tags', $tag_id, $country, $region, $city, $language, 'N', $localconnect);
		}
		$tag_text = get_tag_text($tag_id,$localconnect);
		array_push($tag_text_array,$tag_text); 
		$tag_id_text["tag_".$tag_id] = $tag_text;
		if ($tag_id==203) {
			switch ($entity) {
				case 'biz':
					$selectTagsSQL = sprintf("SELECT biz_tags.* FROM ".$database_localmain.".biz_tags".
								" LEFT JOIN ".$database_localmain.".primary_tags ON biz_tags.tag_id=primary_tags.tag_id".
								" WHERE country=%s AND biz_id=%s AND primary_tags.category_id=3 AND primary_tags.tag_level!=1".
								" ORDER BY category_id, primary_tags.".$language,
									GetSQLValueString($country, "text"),
									GetSQLValueString($entity_id, "int"));
					break;
			}
			$get_chinese_tags = mysql_query_or_die($selectTagsSQL, $localconnect);
			$tag_markup .= '<div id="group_203_start"></div>';
			while ($row_get_tags = mysql_fetch_assoc($get_chinese_tags)) {
				$tag_id = $row_get_tags['tag_id'];
				$tag_string .= get_tag_name($tag_id, $language).',';
				if ($show_count) {
					$tag_markup .= get_tag_markup_by_ID($entity, $tag_id, $country, $region, $city, $language, 'N', $localconnect);
				} else if ($row_get_tags['user_action']=='A') {
					$tag_markup .= get_tag_markup_by_ID('tags_user_added', $tag_id, $country, $region, $city, $language, 'N', $localconnect);
				} else if ($row_get_tags['user_action']=='D') {
					$tag_markup .= get_tag_markup_by_ID('tags_user_deleted', $tag_id, $country, $region, $city, $language, 'N', $localconnect);
				} else {
					$tag_markup .= get_tag_markup_by_ID('tags', $tag_id, $country, $region, $city, $language, 'N', $localconnect);
				}
				$tag_text = get_tag_text($tag_id,$localconnect);
				array_push($tag_text_array,$tag_text); 
				$tag_id_text["tag_".$tag_id] = $tag_text;
			}
			$tag_markup .= '<div id="group_203_end"></div>';
			mysql_free_result($get_chinese_tags);
		}
	}
	mysql_free_result($get_tags);
	$tag_array = array("tag_string"=>$tag_string, "tag_markup"=>$tag_markup, "ID_text"=>$tag_id_text, "tag_text"=>$tag_text_array,"tag_ids"=>$tag_id_array);
	return $tag_array;
}

function build_child_id ($tag_id, $useradmin) {
	$selectChildTagsSQL = sprintf("SELECT * FROM tag_includes WHERE tag_id=%s ORDER BY include_id", GetSQLValueString($tag_id,"int"));
	$get_child_tags = mysql_query_or_die($selectChildTagsSQL, $useradmin);
	$child_tag_id_string = '';
	while ($row_get_child_tags= mysql_fetch_assoc($get_child_tags)) {
		$child_tag_id = $row_get_child_tags['include_id'];
		if (substr($child_tag_id,strlen($child_tag_id)-1)==',') {
			$child_tag_id_string .= $child_tag_id;
		} else {
			$child_tag_id_string .= $child_tag_id.',';
		}
	}
	mysql_free_result($get_child_tags);
	return $child_tag_id_string;
}

function build_parent_id ($tag_id, $useradmin) {
	$selectParentTagsSQL = sprintf("SELECT * FROM tag_includes WHERE include_id=%s ORDER BY tag_id", GetSQLValueString($tag_id,"int"));
	$get_parent_tags = mysql_query_or_die($selectParentTagsSQL, $useradmin);
	$parent_tag_id_string = '';
	while ($row_get_parent_tags= mysql_fetch_assoc($get_parent_tags)) {
		$parent_tag_id = $row_get_parent_tags['tag_id'];
		if (substr($parent_tag_id,strlen($parent_tag_id)-1)==',') {
			$parent_tag_id_string .= $parent_tag_id;
		} else {
			$parent_tag_id_string .= $parent_tag_id.',';
		}
	}
	mysql_free_result($get_parent_tags);
	return $parent_tag_id_string;
}

function change_parent_tags ($tag_id, $new_tags, $category_id, $useradmin) {
	$selectParentTagsSQL = sprintf("SELECT * FROM tag_includes WHERE include_id=%s ORDER BY tag_id", GetSQLValueString($tag_id,"int"));
	$get_parent_tags = mysql_query_or_die($selectParentTagsSQL, $useradmin);
	$current_tag_array = array();
	while ($row_get_parent_tags= mysql_fetch_assoc($get_parent_tags)) {
		array_push($current_tag_array,$row_get_parent_tags['tag_id']);
	}
	mysql_free_result($get_parent_tags);
	
	if (substr($new_tags,strlen($new_tags)-1)==',') {
		$new_tags = substr($new_tags,0,strlen($new_tags)-1);
	}
	if ($new_tags=='') {
		$new_tag_array = array();
	} else {
		$new_tag_array = explode(",",$new_tags);
	}

	$deleteTagsSQL = sprintf("DELETE FROM tag_includes WHERE include_id=%s", GetSQLValueString($tag_id,"int"));
	$Result1 = mysql_query_or_die($deleteTagsSQL, $useradmin);
	
	$new_tag_id_array = array();
	while (count($new_tag_array)>0) {
		$parent_tag = array_shift($new_tag_array);
		$parent_tag_id = get_tag_ID($parent_tag, '', 1, true, $useradmin);
		if ($parent_tag_id==NULL) {
			$parent_tag_id = add_user_tag ($parent_tag, 'en', $category_id, $useradmin);
		}
		if (!in_array($parent_tag_id,$new_tag_id_array)) {
			$new_tag_id_array = array_merge($new_tag_id_array,find_ancestor_tags(array($parent_tag_id),$useradmin));
		}
		$insertSQL= sprintf("INSERT INTO tag_includes (tag_id, include_id) VALUE (%s, %s)",
							 GetSQLValueString($parent_tag_id, "int"),
							 GetSQLValueString($tag_id, "int"));
		$Result1 = mysql_query_or_die($insertSQL, $useradmin);
	}
	
	$removed_tag_array = array_diff($current_tag_array,$new_tag_id_array);
	$added_tag_array = array_diff($new_tag_id_array,$current_tag_array);
	update_all_tag_parents ($tag_id, $added_tag_array, $removed_tag_array, $useradmin);
	
	$parent_tag_array = array("removed_tag_array"=>$removed_tag_array, "added_tag_array"=>$added_tag_array);
	return $parent_tag_array;
}

function change_child_tags ($tag_id, $new_tags, $category_id, $useradmin) {
	$selectChildTagsSQL = sprintf("SELECT * FROM tag_includes WHERE tag_id=%s ORDER BY include_id", GetSQLValueString($tag_id,"int"));
	$get_child_tags = mysql_query_or_die($selectChildTagsSQL, $useradmin);
	$current_tag_array = array();
	while ($row_get_child_tags= mysql_fetch_assoc($get_child_tags)) {
		array_push($current_tag_array,$row_get_child_tags['include_id']);
	}
	mysql_free_result($get_child_tags);
	
	if (substr($new_tags,strlen($new_tags)-1)==',') {
		$new_tags = substr($new_tags,0,strlen($new_tags)-1);
	}
	if ($new_tags=='') {
		$new_tag_array = array();
	} else {
		$new_tag_array = explode(",",$new_tags);
	}

	$deleteTagsSQL = sprintf("DELETE FROM tag_includes WHERE tag_id=%s", GetSQLValueString($tag_id,"int"));
	$Result1 = mysql_query_or_die($deleteTagsSQL, $useradmin);
	
	$new_tag_id_array = array();
	while (count($new_tag_array)>0) {
		$child_tag = array_shift($new_tag_array);
		$child_tag_id = get_tag_ID($child_tag, '', 1, true, $useradmin);
		if ($child_tag_id==NULL) {
			$child_tag_id = add_user_tag ($child_tag, 'en', $category_id, $useradmin);
		}
		if (!in_array($child_tag_id,$new_tag_id_array)) {
			$new_tag_id_array = array_merge($new_tag_id_array,find_descendant_tags(array($child_tag_id),$useradmin));
		}
		$insertSQL= sprintf("INSERT INTO tag_includes (tag_id, include_id) VALUE (%s, %s)",
							 GetSQLValueString($tag_id, "int"),
							 GetSQLValueString($child_tag_id, "int"));
		$Result1 = mysql_query_or_die($insertSQL, $useradmin);
	}
	$removed_tag_array = array_diff($current_tag_array,$new_tag_id_array);
	$added_tag_array = array_diff($new_tag_id_array,$current_tag_array);
	update_all_tag_children ($tag_id, $added_tag_array, $removed_tag_array, $useradmin);
	
	$child_tag_array = array("removed_tag_array"=>$removed_tag_array, "added_tag_array"=>$added_tag_array);
	return $child_tag_array;
}

function get_tag_name ($tag_id_string, $language) {
	global $database_localmain,$localconnect;
	if (!is_array($tag_id_string)) {
		$return_array = false;
		$tag_id_string = preg_replace('/\040/','',(string)($tag_id_string));
		$tag_id_array = explode(',',$tag_id_string);
	} else {
		$return_array = true;
		$tag_id_array = array_merge($tag_id_string);
	}
	$tag_name='';
	while (count($tag_id_array)>0) {
		$tag_id = array_shift($tag_id_array);
		if (is_nan($tag_id)) {
			$tag_name .= ','.$tag_id.'**';
		} else {
			if ($language=='') {
				$selectSQL = sprintf("SELECT en FROM ".$database_localmain.".primary_tags WHERE tag_id=%s", GetSQLValueString($tag_id, "text"));
			} else {
				$selectSQL = sprintf("SELECT ".$language.", en FROM ".$database_localmain.".primary_tags WHERE tag_id=%s", GetSQLValueString($tag_id, "int"));
			}
			$get_primary_tag = mysql_query_or_die($selectSQL, $localconnect);	
			if ($row_get_primary_tag = mysql_fetch_assoc($get_primary_tag)) {
				if ($language=='') {
					$tag_name .= ','.$row_get_primary_tag['en'];
				} else {
					$tag_name .= ','.($row_get_primary_tag[$language]==NULL||$row_get_primary_tag[$language]==''?$row_get_primary_tag['en']:$row_get_primary_tag[$language]);
				}
			} else {
				$tag_name .= ','.$tag_id.'?';
			}
			mysql_free_result($get_primary_tag);
		}
	}
	if ($return_array) {
		return explode(',',substr($tag_name,1));
	} else {
		return substr($tag_name,1);
	}
}

function get_mall_name ($country,$bldg_id_string, $language) {
	global $database_addradmin,$localconnect;
	if (!is_array($bldg_id_string)) {
		$return_array = false;
		$bldg_id_string = preg_replace('/\040/','',(string)($bldg_id_string));
		$bldg_id_array = explode(',',$bldg_id_string);
	} else {
		$return_array = true;
		$bldg_id_array = array_merge($bldg_id_string);
	}
	if ($country!='hk') {
		if ($return_array) {
			return array();
		} else {
			return '';
		}
	} else {
		switch ($language) {
			case 'tw': case 'cn': $bldg_language = $language; break;
			default: $bldg_language = 'en'; break;
		}
	}
	$bldg_name='';
	while (count($bldg_id_array)>0) {
		$bldg_id = array_shift($bldg_id_array);
		if (is_nan($bldg_id)) {
			$bldg_name .= ','.$bldg_id.'**';
		} else {
			if ($bldg_language=='en') {
				$selectSQL = sprintf("SELECT en FROM ".$database_addradmin.".".$country."_buildings WHERE id=%s", GetSQLValueString($bldg_id, "text"));
			} else {
				$selectSQL = sprintf("SELECT ".$bldg_language.", en FROM ".$database_addradmin.".".$country."_buildings WHERE id=%s", GetSQLValueString($bldg_id, "int"));
			}
			$get_bldg = mysql_query_or_die($selectSQL, $localconnect);	
			if ($row_get_bldg = mysql_fetch_assoc($get_bldg)) {
				if ($bldg_language=='en') {
					$bldg_name .= ','.$row_get_bldg['en'];
				} else {
					$bldg_name .= ','.($row_get_bldg[$bldg_language]==NULL||$row_get_bldg[$bldg_language]==''?$row_get_bldg['en']:$row_get_bldg[$bldg_language]);
				}
			} else {
				$bldg_name .= ','.$bldg_id.'?';
			}
			mysql_free_result($get_bldg);
		}
	}
	if ($return_array) {
		return explode(',',substr($bldg_name,1));
	} else {
		return substr($bldg_name,1);
	}
}

function get_tag_ID_new ($tag_name_string, $language, $biz_category_id, $single_matach) {
	global $useradmin;
	if (is_array($tag_name_string)) {
		$return_array = true;
		$tag_name_array = array_merge($tag_name_string);
		$index = 0;
		while ($index<count($tag_name_array)) {
			$tag_name_array[$index] = trim($tag_name_array[$index]);
			$index += 1;
		}
	} else {
		$return_array = false;
		$tag_name_array = explode(",",trim(preg_replace('/\040*,\040*/',',',$tag_name_string)));
	}

	switch ($language) {
		case '': $language_condition = ''; break;
		case 'tw': $language_condition = " AND (alias_tags.language='en' OR alias_tags.language='tw')"; break;
		case 'cn': $language_condition = " AND (alias_tags.language='en' OR alias_tags.language='cn')"; break;
		default: $language_condition = sprintf(" AND alias_tags.language=%s", GetSQLValueString($language, "text")); break;
	}
	if ($biz_category_id!=0 && $biz_category_id!=null) {
		switch ($biz_category_id) {
			case 1:
				$categoryCondition = ' AND (category_id=3 OR category_id=4 OR category_id=14 OR category_id=16 OR category_id=34 OR category_id=8)';
				break;
			default: $categoryCondition = '';
		}
	} else {
		$categoryCondition = '';
	}
	
	$tag_id_array = array();
	while (count($tag_name_array)>0) {
		$tag_name = array_shift($tag_name_array);
		$selectSQL = sprintf("SELECT DISTINCT primary_id FROM alias_tags LEFT JOIN primary_tags ON alias_tags.primary_id=primary_tags.tag_id WHERE alias_tags.alias_tag=%s".$language_condition.$categoryCondition,
								 GetSQLValueString($tag_name, "text"));
		$get_primary_tag = mysql_query_or_die($selectSQL, $useradmin);
		$finished=false;
		while(!$finished) {
			if ($row_get_primary_tag=mysql_fetch_assoc($get_primary_tag)) {
				if ($single_matach) {
					$finished = true;
				}
				array_push($tag_id_array,$row_get_primary_tag['primary_id']);
			} else {
				$finished = true;
			}
		}
	}
	mysql_free_result($get_primary_tag);
	if ($return_array) {
		return $tag_id_array;
	} else {
		return implode(',',$tag_id_array);
	}
}

function get_tag_ID ($tag_name, $language, $biz_category_id, $single_matach, $useradmin) {
	global $database_localmain;
	switch ($language) {
		case '': $language_condition = ''; break;
		case 'tw': $language_condition = " AND (alias_tags.language='en' OR alias_tags.language='tw')"; break;
		case 'cn': $language_condition = " AND (alias_tags.language='en' OR alias_tags.language='cn')"; break;
		default: $language_condition = sprintf(" AND alias_tags.language=%s", GetSQLValueString($language, "text")); break;
	}
	if ($biz_category_id!=0 && $biz_category_id!=null) {
		switch ($biz_category_id) {
			case 1:
				$categoryCondition = ' AND (category_id=3 OR category_id=4 OR category_id=14 OR category_id=16 OR category_id=34 OR category_id=8)';
				break;
			default: $categoryCondition = '';
		}
	} else {
		$categoryCondition = '';
	}
	$selectSQL = sprintf("SELECT DISTINCT primary_id FROM ".$database_localmain.".alias_tags LEFT JOIN ".$database_localmain.".primary_tags ON alias_tags.primary_id=primary_tags.tag_id WHERE alias_tags.alias_tag=%s".$language_condition.$categoryCondition,
							 GetSQLValueString($tag_name, "text"));
	$get_primary_tag = mysql_query_or_die($selectSQL, $useradmin);
	if ($single_matach) {
		if (mysql_num_rows($get_primary_tag)>0) {
			$row_get_primary_tag = mysql_fetch_assoc($get_primary_tag);
			$tag_id = $row_get_primary_tag['primary_id'];
		} else {
			$tag_id = NULL;
		}
		mysql_free_result($get_primary_tag);
		return $tag_id;
	} else {
		$tag_id_array = array();
		if (mysql_num_rows($get_primary_tag)>0) {
			while($row_get_primary_tag = mysql_fetch_assoc($get_primary_tag)) {
				array_push($tag_id_array,$row_get_primary_tag['primary_id']);
			}
		} else {
			array_push($tag_id_array,$tag_name);
		}
		mysql_free_result($get_primary_tag);
		return $tag_id_array;
	}
}

function get_tag_markup_by_ID ($entity, $tag_id, $country, $region, $city_array, $language, $add_tags, $useradmin) {
	global $database_useradmin,$database_localmain,$localconnect;
	if (isset($useradmin)) {
		$dbConnect = $useradmin;
		$dbName = $database_useradmin;
	} else {
		$dbConnect = $localconnect;
		$dbName = $database_localmain;
	}
	if (is_nan($tag_id)) {
		switch ($language) {
			case 'tw': $tag_markup_lang_label = "用戶自選標籤"; break;
			case 'cn': $tag_markup_lang_label = "用户自选标签"; break;
			case 'en':
			default: $tag_markup_lang_label = "User-generated Tag"; break;
		}
//		$tag_markup = "<div id='".$entity."_tag_".$tag_id."' title='".$tag_markup_lang_label."' class='user_tags tag_level_1 round-corners-medium' onclick='tag_clicked(event);'>".$tag_id."**</div>";
		$tag_markup = '<input type="button" id="'.$entity."_tag_".$tag_id.'" title="'.$tag_markup_lang_label.'" class="user_tags tag_level_1 round-corners-medium" onclick="tag_clicked(event);" value="'.$tag_id.'**" />';
	} else {
		if ($add_tags!='Y') {
			switch ($entity) {
//				case 'biz': $add_tags_condition = ' AND biz_count>0'; break;
//				case 'photos': $add_tags_condition = ' AND photo_count>0'; break;
//				case 'products': $add_tags_condition = ' AND product_count>0'; break;
				default : $add_tags_condition = ''; break;
			}
		} else {
			$add_tags_condition = '';
		}
		switch ($entity) {
			case 'biz': case 'popular': case 'best': case 'tags_user_added': case 'tags_user_deleted':
				$selectSQL = sprintf("SELECT primary_tags.*, ".$country."_tag_ranking.ranking, tag_categories.en AS tag_category FROM ".$dbName.".primary_tags".
					" LEFT JOIN ".$dbName.".".$country."_tag_ranking ON primary_tags.tag_id=".$country."_tag_ranking.tag_id".
					" LEFT JOIN ".$dbName.".tag_categories ON primary_tags.category_id=tag_categories.category_id WHERE primary_tags.tag_id=%s".$add_tags_condition, GetSQLValueString($tag_id, "int"));
				break;
			case 'products':
				$selectSQL = sprintf("SELECT primary_tags.*, product_tag_ranking.product_count AS count, product_tag_ranking.ranking, tag_categories.en AS tag_category FROM ".$dbName.".primary_tags".
					" LEFT JOIN ".$dbName.".product_tag_ranking ON primary_tags.tag_id=product_tag_ranking.tag_id".
					" LEFT JOIN ".$dbName.".tag_categories ON primary_tags.category_id=tag_categories.category_id WHERE primary_tags.tag_id=%s".$add_tags_condition, GetSQLValueString($tag_id, "int"));
				break;
			case 'photos':
				$selectSQL = sprintf("SELECT primary_tags.*, photo_tag_ranking.photo_count AS count, photo_tag_ranking.ranking, tag_categories.en AS tag_category FROM ".$dbName.".primary_tags".
					" LEFT JOIN ".$dbName.".photo_tag_ranking ON primary_tags.tag_id=photo_tag_ranking.tag_id".
					" LEFT JOIN ".$dbName.".tag_categories ON primary_tags.category_id=tag_categories.category_id WHERE primary_tags.tag_id=%s", GetSQLValueString($tag_id, "int"));
				break;
			case 'tags': case 'all_tags':
				if ($country=='') {
					$selectSQL = sprintf("SELECT primary_tags.*, tag_categories.en AS tag_category, 0 AS count, 0 AS ranking FROM ".$dbName.".primary_tags".
						" LEFT JOIN ".$dbName.".tag_categories ON primary_tags.category_id=tag_categories.category_id WHERE primary_tags.tag_id=%s", GetSQLValueString($tag_id, "int"));
				} else {
					$selectSQL = sprintf("SELECT primary_tags.*, tag_categories.en AS tag_category, biz_count AS count, ranking FROM ".$dbName.".primary_tags".
						" LEFT JOIN ".$dbName.".tag_categories ON primary_tags.category_id=tag_categories.category_id".
						" LEFT JOIN ".$dbName.".".$country."_tag_ranking ON ".$country."_tag_ranking.tag_id=primary_tags.tag_id WHERE primary_tags.tag_id=%s", GetSQLValueString($tag_id, "int"));
				}
		}
		$get_primary_tag = mysql_query_or_die($selectSQL, $dbConnect);
		if ($row_get_primary_tag = mysql_fetch_assoc($get_primary_tag)) {
			if ($row_get_primary_tag[$language]=='' || $row_get_primary_tag[$language]==NULL) {
				if ($language=='tw' && $row_get_primary_tag['cn']!='' && $row_get_primary_tag['cn']!=NULL) {
					$display_name = $row_get_primary_tag['cn'];
					$tooltip = trim($row_get_primary_tag['cn_description']);
				} else if ($language=='cn' && $row_get_primary_tag['tw']!='' && $row_get_primary_tag['tw']!=NULL) {
					$display_name = $row_get_primary_tag['tw'];
					$tooltip = trim($row_get_primary_tag['tw_description']);
				} else if ($language=='') {
					$display_name = '';
					$tooltip = '';
				} else {
					$display_name = $row_get_primary_tag['en'];
					$tooltip = trim($row_get_primary_tag['en_description']);
				}
			} else {
				$display_name = $row_get_primary_tag[$language];
				$tooltip = trim($row_get_primary_tag[$language."_description"]);
			}
			$tag_category = trim($row_get_primary_tag['tag_category']);
			$category_id = $row_get_primary_tag['category_id'];
			if ($entity=='biz' || $entity=='popular' || $entiry=='tags_user_added' || $entity=='tags_user_deleted') {
				$count = get_tag_count($entity, $tag_id, $country, $region, $city_array, $dbConnect);
			} else {
				$count = $row_get_primary_tag['count'];
			}
			$ranking = $row_get_primary_tag['ranking'];
			if ($count==null || $count==0) {
				$tag_level = 1;
			} else if ($category_id==3) {
				if ($ranking<=10) {
					$tag_level = 1;
				} else if ($ranking<=20) {
					$tag_level = 2;
				} else {
					$tag_level = 3;
				}
			} else if ($category_id==4) {
				if ($ranking<=5) {
					$tag_level = 1;
				} else if ($ranking<=10) {
					$tag_level = 2;
				} else {
					$tag_level = 3;
				}
			} else {
				if ($ranking<=3) {
					$tag_level = 1;
				} else if ($ranking<=6) {
					$tag_level = 2;
				} else {
					$tag_level = 3;
				}
			}
//			$tag_level = trim($row_get_primary_tag['tag_level']);
		/*
			$topfiveSQL = sprintf("SELECT primary_tag FROM primary_tags WHERE primary_tag IN (SELECT primary_tag FROM primary_tags ORDER BY biz_count LIMIT 5)");
			$get_top_five = mysql_query_or_die($topfiveSQL, $dbConnect);
			$nextfiveSQL = sprintf("SELECT primary_tag FROM primary_tags WHERE primary_tag IN (SELECT primary_tag FROM primary_tags ORDER BY biz_count LIMIT 5,14)");
			$get_next_five = mysql_query_or_die($nextfiveSQL, $dbConnect);
			$count_tier = (mysql_num_rows($get_top_five)>0) ? "1" : ( (mysql_num_rows($get_next_five)>0) ? "2" : "3");
		*/
			if ($entity=='tags' || $entity=='all_tags' || $entity=='best' || $entity=='tags_user_added' || $entity=='tags_user_deleted') {
				$span_class = '';
				$display_mark = '';
				if ($entity=='tags_user_deleted') {
					$span_class = 'struckWords';
				} else if ($entity=='tags_user_added') {
					$display_mark = ' *';
				}
				if ($entity=='tags_user_added' || $entity=='tags_user_deleted') {
					$selector_prefix = 'biz_tag_';
				} else {
					$selector_prefix = $entity.'_tag_';
				}
//				$tag_markup = '<div id="'.$selector_prefix.$tag_id.'" title="'.$tooltip.'" class="'.$tag_category.'_tags tag_level_'.$tag_level.' round-corners-medium" onclick="tag_clicked(event);"><span class="'.$span_class.'">'.$display_name.$display_mark.'</span></div>';
				$tag_markup = '<input type="button" id="'.$selector_prefix.$tag_id.'" title="'.$tooltip.'" class="'.$tag_category.'_tags tag_level_'.$tag_level.' '.$span_class.' round-corners-medium" onclick="tag_clicked(event);" value="'.$display_name.$display_mark.'" />';
			} else {
				$tag_ranking = trim($row_get_primary_tag['ranking']);
				$tag_tier = ($tag_ranking <=5) ? "1" : (($tag_ranking > 5 && $tag_ranking <= 10 ) ? "2" : "3");
//				$tag_markup = '<div id="'.$entity.'_tag_'.$tag_id.'" title="'.$tooltip.'" class="'.($count==0?'opague ':'').$tag_category.'_tags tag_level_'.$tag_level.' round-corners-medium" onclick="tag_clicked(event);"><span>'.$display_name.'</span> <span>('.$count.')</span></div>';
				$tag_markup = '<input type="button" id="'.$entity.'_tag_'.$tag_id.'" title="'.$tooltip.'" class="'.($count==0?'opague ':'').$tag_category.'_tags tag_level_'.$tag_level.' round-corners-medium" onclick="tag_clicked(event);" value="'.$display_name.' ('.$count.')" />';
			}
		} else {
			switch ($language) {
				case 'tw': $tag_markup_lang_label = "找不到這個標籤"; break;
				case 'cn': $tag_markup_lang_label = "找不到这个标签"; break;
				case 'en':
				default: $tag_markup_lang_label = "Tag not found"; break;
			}
//			$tag_markup = "<div id='".$entity."_tag_".$tag_id."' title='".$tag_markup_lang_label."' class='user_tags tag_level_2 round-corners-medium' onclick='tag_clicked(event);'>".$tag_id."??</div>";
			$tag_markup = '<input type="button" id="'.$entity."_tag_".$tag_id.'" title="'.$tag_markup_lang_label.'" class="user_tags tag_level_2 round-corners-medium" onclick="tag_clicked(event);" value="'.$tag_id.'??" />';
		}
		mysql_free_result($get_primary_tag);
	}
	return $tag_markup;
}

function get_tag_count($entity, $tag_id, $country, $region, $city_array, $useradmin) {
	global $database_addradmin;
	$count = 0;
	switch ($entity) {
		case 'biz': case 'popular': case 'best':
			if ($city_array['metro']=='') {
				$metro_names = array();
			} else {
				$metro_names = explode(",",$city_array['metro']);
			}
			if ($city_array['city']=='') {
				$city_names = array();
			} else {
				$city_names = explode(",",$city_array['city']);
			}
			if ($city_array['locality']=='') {
				$locality_names = array();
			} else {
				$locality_names = explode(",",$city_array['locality']);
			}
			$locationFilter='';
			$left_joins = '';
			switch ($country) {
				case 'ca':
					if ($region!='') {
						$locationFilter .= " AND ".$country."_biz.province='".$region."'";
						if (count($metro_names)>0) {
							$locationFilter .= " AND (".$country."_metro_areas.province='".$region."' OR ".$country."_metro_areas.province IS NULL)";
						}
						if (count($locality_names)>0) {
							$locationFilter .= " AND ca_localities.province='".$region."'";
						}
					}
					if (count($metro_names)>0) {
						$left_joins .= " LEFT JOIN ".$country."_metro_areas ON ".$country."_metro_areas.city=".$country."_biz.city";
					}
					if (count($locality_names)>0) {
						$left_joins .= " LEFT JOIN ".$country."_biz_localities ON ".$country."_biz_localities.biz_id=".$country."_biz.biz_id LEFT JOIN ".$country."_localities ON ".$country."_localities.city=".$country."_biz.city AND ".$country."_localities.locality_id=".$country."_biz_localities.locality_id";
					}
					$cityFilter = '';
					while (count($metro_names)>0) {
						$name = array_shift($metro_names);
						if ($name=='0') {
							$selectCitySQL = sprintf("SELECT DISTINCT ".$country."_biz.province AS region,".$country."_biz.city FROM ".$country."_biz LEFT JOIN ".$country."_metro_areas ON ".$country."_biz.province=".$country."_metro_areas.province AND ".$country."_biz.city=".$country."_metro_areas.city WHERE ".$country."_biz.province=%s AND metro IS NULL ORDER BY city",
													 GetSQLValueString($region,"text"));
							$get_city = mysql_query_or_die($selectCitySQL, $useradmin);
							if (mysql_num_rows($get_city)>0) {
								while ($row_get_city=mysql_fetch_assoc($get_city)) {
									$cityFilter .= " OR ".$country."_biz.city='".$row_get_city['city']."'";
								}
							}
							mysql_free_result($get_city);
						} else {
							$cityFilter .= " OR ".$country."_metro_areas.metro='".$name."' OR ".$country."_biz.city='".$name."'";
						}
					}
					while (count($city_names)>0) {
						$cityFilter .= " OR ".$country."_biz.city='".array_shift($city_names)."'";
					}
					while (count($locality_names)>0) {
						$cityFilter .= " OR ".$country."_localities.locality='".array_shift($locality_names)."'";
					}
					if ($cityFilter!='') {
						$locationFilter .= " AND (".substr($cityFilter,4).")";
					}
					break;
				case 'au':
					if ($region!='') {
						$locationFilter .= " AND ".$country."_biz.state='".$region."'";
					}
					$cityFilter = '';
					while (count($city_array)>0) {
						$city_name = array_shift($city_array);
						$cityFilter .= " OR city='".$city_name."'";
					}
					if ($cityFilter!='') {
						$locationFilter .= " AND (".substr($cityFilter,4).")";
					}
					break;
				case 'hk':
					if ($region!='') {
						$locationFilter .= " AND hk_admin_districts.region='".$region."'";
					}
					$cityFilter = '';
					while (count($metro_names)>0) {
						$name = array_shift($metro_names);
						$cityFilter .= " OR hk_admin_districts.en_name='".$name."' OR hk_admin_districts.tw_name='".$name."' OR hk_admin_districts.cn_name='".$name."'";
					}
					if ($cityFilter!='') {
						$locationFilter .= " AND (".substr($cityFilter,4).")";
					}
					$cityFilter = '';
					while (count($city_names)>0) {
						$name = array_shift($city_names);
						$cityFilter .= " OR hk_districts.en='".$name."' OR hk_districts.tw='".$name."' OR hk_districts.cn='".$name."'";
					}
					if ($cityFilter!='') {
						$locationFilter .= " AND (".substr($cityFilter,4).")";
					}
					break;
				case 'uk':
					if ($region!='') {
						$locationFilter .= " AND ".$country."_biz.region='".$region."'";
					}
					while (count($city_array)>0) {
						$city_name = array_shift($city_array);
						$cityFilter .= " OR locality='".$city_name."'";
					}
					if ($cityFilter!='') {
						$locationFilter .= " AND (".substr($cityFilter,4).")";
					}
					break;
			}
			
			if ($country=='hk') {
				$selectSQL = "SELECT tag_id, count(DISTINCT ".$country."_biz.biz_id) AS count FROM ".$country."_biz LEFT JOIN biz_tags ON ".$country."_biz.biz_id=biz_tags.biz_id".
				" LEFT JOIN ".$database_addradmin.".hk_districts ON hk_biz.district_id=hk_districts.id".
				" LEFT JOIN ".$database_addradmin.".hk_admin_districts ON hk_districts.admin_district_id=hk_admin_districts.id".
				$left_joins.
				sprintf(" WHERE biz_tags.tag_id=%s AND biz_tags.country='".$country."' AND biz_category_id=1 AND ".$country."_biz.status='O'".$locationFilter, GetSQLValueString($tag_id, "int"));
//				echo 'sql:'.$selectSQL;
			} else {
				$selectSQL = "SELECT tag_id, count(DISTINCT ".$country."_biz.biz_id) AS count FROM ".$country."_biz".
				" LEFT JOIN biz_tags ON ".$country."_biz.biz_id=biz_tags.biz_id".
				$left_joins.
				sprintf(" WHERE biz_tags.tag_id=%s AND biz_tags.country='".$country."' AND ".$country."_biz.status='O'".$locationFilter, GetSQLValueString($tag_id, "int"));
			}
//			echo 'sql:'.$selectSQL.'<br />';
			$get_biz_count = mysql_query_or_die($selectSQL, $useradmin);
			$row_get_biz_count = mysql_fetch_assoc($get_biz_count);
			$count = $row_get_biz_count['count'];
			break;
	}
	return $count;
}

function get_locality_id($country,$region,$city,$locality,$useradmin) {
	global $database_addradmin;
	switch ($country) {
		case 'hk':
			$selectSQL = sprintf("SELECT id AS locality_id FROM ".$database_addradmin.".".$country."_districts WHERE en=%s OR tw=%s OR cn=%s",
						 GetSQLValueString($locality, "text"),
						 GetSQLValueString($locality, "text"),
						 GetSQLValueString($locality, "text"));
			break;
		case 'ca':
			$selectSQL = sprintf("SELECT * FROM ".$country."_localities WHERE province=%s AND city=%s AND locailty=%s",
						 GetSQLValueString($region, "text"),
						 GetSQLValueString($city, "text"),
						 GetSQLValueString($locality, "text"));
			break;
		case 'au':
			$selectSQL = sprintf("SELECT * FROM ".$country."_localities WHERE state=%s AND city=%s AND locailty=%s",
						 GetSQLValueString($region, "text"),
						 GetSQLValueString($city, "text"),
						 GetSQLValueString($locality, "text"));
			break;
		case 'uk':
			$selectSQL = sprintf("SELECT * FROM ".$country."_localities WHERE region=%s AND city=%s AND locailty=%s",
						 GetSQLValueString($region, "text"),
						 GetSQLValueString($city, "text"),
						 GetSQLValueString($locality, "text"));
			break;
	}
	$get_locality_id = mysql_query_or_die($selectSQL, $useradmin);
	if (mysql_num_rows($get_locality_id)>0) {
		$row_get_locality_id = mysql_fetch_assoc($get_locality_id);
		$locality_id = $row_get_locality_id['locality_id'];
	} else {
		$locality_id = 0;
	}
	mysql_free_result($get_locality_id);
	return $locality_id;
}

function get_locality_name($country,$locality_id,$useradmin) {
	global $database_addradmin;
	if ($country=='hk') {
		$selectSQL = sprintf("SELECT * FROM ".$database_addradmin.".".$country."_districts WHERE id=%s",
							 GetSQLValueString($locality_id, "int"));
	} else {
		$selectSQL = sprintf("SELECT * FROM ".$country."_localities WHERE locality_id=%s",
							 GetSQLValueString($locality_id, "int"));
	}
	$get_locality = mysql_query_or_die($selectSQL, $useradmin);
	$row_get_locality = mysql_fetch_assoc($get_locality);
	switch ($country) {
		case 'ca': 
			$name_array = array("province"=>$row_get_locality['province'],"city"=>$row_get_locality['city'],"en"=>$row_get_locality['locality']);
			break;
		case 'au': 
			$name_array = array("state"=>$row_get_locality['state'],"city"=>$row_get_locality['city'],"en"=>$row_get_locality['locality']);
			break;
		case 'uk':
			$name_array = array("region"=>$row_get_locality['region'],"city"=>$row_get_locality['city'],"en"=>$row_get_locality['locality']);
			break;
		case 'hk':
			$name_array = array("en"=>$row_get_locality['en'],"tw"=>$row_get_locality['tw'],"cn"=>$row_get_locality['cn']);
			break;
	}
	mysql_free_result($get_locality);
	return $name_array;
}

/*
function get_tag_text($tag_id,$language,$useradmin) {
	$selectTagSQL = sprintf("SELECT * FROM primary_tags WHERE tag_id=%s",
							GetSQLValueString($tag_id,"int"));
	$get_tag = mysql_query_or_die($selectTagSQL, $useradmin);
	if ($row_get_tag = mysql_fetch_assoc($get_tag)) {
		if ($row_get_tag[$language]=='' || $row_get_tag[$language]==null) {
			$name = $row_get_tag['en'];
		} else {
			$name = $row_get_tag[$language];
		}
		if ($row_get_tag[$language.'_description']=='' || $row_get_tag[$language.'_description']==null) {
			$desc = $row_get_tag['en_descriptino'];
		} else {
			$desc = $row_get_tag[$language.'_description'];
		}
		$return_array = array("name"=>$name,"desc"=>$desc);
	} else {
		$return_array = array("name"=>'',"desc"=>'');
	}
	mysql_free_result($get_tag);
	return $return_array;
}
*/
function get_tag_text ($tag_id,$useradmin) {
	$tag_text_array = array("en"=>'',"tw"=>'',"cn"=>'',"fr"=>'',"de"=>'',"es"=>'',"ja"=>'',"ko"=>'', "pt"=>'');
	$tag_desc_array = array("en"=>'',"tw"=>'',"cn"=>'',"fr"=>'',"de"=>'',"es"=>'',"ja"=>'',"ko"=>'', "pt"=>'');
	$selectSQL = sprintf("SELECT * FROM primary_tags WHERE tag_id=%s",GetSQLValueString($tag_id, "int"));
	$get_tag = mysql_query_or_die($selectSQL, $useradmin);
	$row_tag = mysql_fetch_assoc($get_tag);
	$tag_text_array['en'] = $row_tag['en'];
	$tag_text_array['tw'] = ($row_tag['tw']==''||$row_tag['tw']==null?$row_tag['en']:$row_tag['tw']);
	$tag_text_array['cn'] = ($row_tag['cn']==''||$row_tag['cn']==null?$row_tag['en']:$row_tag['cn']);
	$tag_text_array['fr'] = ($row_tag['fr']==''||$row_tag['fr']==null?$row_tag['en']:$row_tag['fr']);
	$tag_text_array['de'] = ($row_tag['de']==''||$row_tag['de']==null?$row_tag['en']:$row_tag['de']);
	$tag_text_array['es'] = ($row_tag['es']==''||$row_tag['es']==null?$row_tag['en']:$row_tag['es']);
	$tag_text_array['ja'] = ($row_tag['ja']==''||$row_tag['ja']==null?$row_tag['en']:$row_tag['ja']);
	$tag_text_array['ko'] = ($row_tag['ko']==''||$row_tag['ko']==null?$row_tag['en']:$row_tag['ko']);
	$tag_text_array['pt'] = ($row_tag['pt']==''||$row_tag['pt']==null?$row_tag['en']:$row_tag['pt']);
	$tag_desc_array['en'] = $row_tag['en_description'];
	$tag_desc_array['tw'] = ($row_tag['tw_description']==''||$row_tag['tw_description']==null?$row_tag['en_description']:$row_tag['tw_description']);
	$tag_desc_array['cn'] = ($row_tag['cn_description']==''||$row_tag['cn_description']==null?$row_tag['en_description']:$row_tag['cn_description']);
	$tag_desc_array['fr'] = ($row_tag['fr_description']==''||$row_tag['fr_description']==null?$row_tag['en_description']:$row_tag['fr_description']);
	$tag_desc_array['de'] = ($row_tag['de_description']==''||$row_tag['de_description']==null?$row_tag['en_description']:$row_tag['de_description']);
	$tag_desc_array['es'] = ($row_tag['es_description']==''||$row_tag['es_description']==null?$row_tag['en_description']:$row_tag['es_description']);
	$tag_desc_array['ja'] = ($row_tag['ja_description']==''||$row_tag['ja_description']==null?$row_tag['en_description']:$row_tag['ja_description']);
	$tag_desc_array['ko'] = ($row_tag['ko_description']==''||$row_tag['ko_description']==null?$row_tag['en_description']:$row_tag['ko_description']);
	$tag_desc_array['pt'] = ($row_tag['pt_description']==''||$row_tag['pt_description']==null?$row_tag['en_description']:$row_tag['pt_description']);
	mysql_free_result($get_tag);
	return array("name"=>$tag_text_array,"desc"=>$tag_desc_array);
}

function get_locality_markup_by_name ($country,$locality,$count,$class,$id_prefix,$useradmin) {
	$tag_level = 1;
	if ($count=='') {
//		$markup = "<div id='".$id_prefix."_loc' title='".$locality."' class='locality_tags tag_level_".$tag_level." round-corners-medium ".$class."' onclick='locality_clicked(event,".'"'.$locality.'"'.");'><span>".$locality."</span></div>";
		$markup = '<input type="button" id="'.$id_prefix.'_loc" title="'.$locality.'" class="locality_tags tag_level_'.$tag_level.' round-corners-medium '.$class.'" onclick="locality_clicked(event,\''.$locality.'\');" value="'.$locality.'" />';
	} else {
//		$markup = "<div id='".$id_prefix."_loc' title='".$locality."' class='locality_tags tag_level_".$tag_level." round-corners-medium ".$class."' onclick='locality_clicked(event,".'"'.$locality.'"'.");'><span>".$locality."</span> (".$count.")</div>";
		$markup = '<input type="button" id="'.$id_prefix.'_loc" title="'.$locality.'" class="locality_tags tag_level_'.$tag_level.' round-corners-medium '.$class.'" onclick="locality_clicked(event,\''.$locality.'\');" value="'.$locality.' ('.$count.')" />';
	}
	return $markup;
}

function get_locality_markup_by_ID ($country,$locality_id,$count,$class,$id_prefix,$useradmin) {
	global $database_addradmin,$localconnect;
	if ($country=='hk') {
		$selectSQL = sprintf("SELECT en,tw,cn FROM ".$database_addradmin.".".$country."_districts WHERE id=%s",
							GetSQLValueString($locality_id, "int"));
		$get_locality = mysql_query_or_die($selectSQL, $localconnect);
		$row_locality = mysql_fetch_assoc($get_locality);
		$tag_level = 1;
		$markup=array();
		if ($count=='') {
			$markup['en'] = '<input type="button" id="'.$id_prefix.'_loc_'.$locality_id.'" title="'.$row_locality['en'].'" class="locality_tags tag_level_'.$tag_level.' round-corners-medium '.$class.'" onclick="locality_clicked(event,'.$locality_id.');" value="'.$row_locality['en'].'" />';
			$markup['tw'] = '<input type="button" id="'.$id_prefix.'_loc_'.$locality_id.'" title="'.$row_locality['tw'].'" class="locality_tags tag_level_'.$tag_level.' round-corners-medium '.$class.'" onclick="locality_clicked(event,'.$locality_id.');" value="'.$row_locality['tw'].'" />';
			$markup['cn'] = '<input type="button" id="'.$id_prefix.'_loc_'.$locality_id.'" title="'.$row_locality['cn'].'" class="locality_tags tag_level_'.$tag_level.' round-corners-medium '.$class.'" onclick="locality_clicked(event,'.$locality_id.');" value="'.$row_locality['cn'].'" />';
		} else {
			$markup['en'] = '<input type="button" id="'.$id_prefix.'_loc_'.$locality_id.'" title="'.$row_locality['en'].'" class="locality_tags tag_level_'.$tag_level.' round-corners-medium '.$class.'" onclick="locality_clicked(event,'.$locality_id.');" value="'.$row_locality['en'].' ('.$count.')" />';
			$markup['tw'] = '<input type="button" id="'.$id_prefix.'_loc_'.$locality_id.'" title="'.$row_locality['tw'].'" class="locality_tags tag_level_'.$tag_level.' round-corners-medium '.$class.'" onclick="locality_clicked(event,'.$locality_id.');" value="'.$row_locality['tw'].' ('.$count.')" />';
			$markup['cn'] = '<input type="button" id="'.$id_prefix.'_loc_'.$locality_id.'" title="'.$row_locality['cn'].'" class="locality_tags tag_level_'.$tag_level.' round-corners-medium '.$class.'" onclick="locality_clicked(event,'.$locality_id.');" value="'.$row_locality['cn'].' ('.$count.')" />';
		}
	} else {
		$selectSQL = sprintf("SELECT * FROM ".$country."_localities WHERE locality_id=%s",
							GetSQLValueString($locality_id, "int"));
		$get_locality = mysql_query_or_die($selectSQL, $useradmin);
		$row_locality = mysql_fetch_assoc($get_locality);
		$locality = $row_locality['locality'];
	//	$tag_level = $row_locality['level'];
		$tag_level = 1;
		if ($count=='') {
			$markup = '<input type="button" id="'.$id_prefix.'_loc_'.$locality_id.'" title="'.$locality.'" class="locality_tags tag_level_'.$tag_level.' round-corners-medium '.$class.'" onclick="locality_clicked(event,\''.$locality.'\');" value="'.$locality.'" />';
		} else {
			$markup = '<input type="button" id="'.$id_prefix.'_loc_'.$locality_id.'" title="'.$locality.'" class="locality_tags tag_level_'.$tag_level.' round-corners-medium '.$class.'" onclick="locality_clicked(event,\''.$locality.'\');" value="'.$locality.' ('.$count.')" />';
		}
		mysql_free_result($get_locality);
	}
	return $markup;
}

function count_biz_by_location($country,$region,$metro,$locality_raw,$tags,$dbconnect) {
	global $database_addradmin,$localconnect;
	$count = 0;
	switch ($country) {
		case 'hk':
			$locality_id_array = explode(',',$locality_raw);
			break;
		case 'au': case 'ca':
			$locality = addslashes(trim($locality_raw));
			$locality_id_array = get_locality_id_by_name($country,$region,$metro,$locality,$dbconnect);
			break;
	}
	$localityCondition = '';
	switch ($country) {
		case 'hk':
			while (count($locality_id_array)>0) {
				$locality_id = array_shift($locality_id_array);
				/*
				$localityCondition .= sprintf(" OR ".$country."_biz.district_id=%s OR locality_id=%s",
								GetSQLValueString($locality_id, "int"),
								GetSQLValueString($locality_id, "int"));
				*/
				$localityCondition .= sprintf(" OR ".$country."_biz.district_id=%s",
								GetSQLValueString($locality_id, "int"));
			}
			if ($localityCondition!='') {
				$localityCondition = " AND (".substr($localityCondition,3).")";
			}
			$selectSQL = "SELECT count(DISTINCT ".$country."_biz.biz_id) AS count FROM ".$country."_biz LEFT JOIN ".$database_addradmin.".".$country."_districts ON ".$country."_biz.district_id=".$country."_districts.id WHERE biz_category_id=1 AND status='O'".$localityCondition;
			break;
		case 'ca':
			while (count($locality_id_array)>0) {
				$locality_id = array_shift($locality_id_array);
				$localityCondition .= sprintf(" OR locality_id=%s",GetSQLValueString($locality_id, "int"));
			}
			if ($localityCondition!='') {
				$localityCondition = " AND (".substr($localityCondition,3).")";
			}
			$selectSQL = sprintf("SELECT count(DISTINCT ".$country."_biz.biz_id) AS count FROM ".$country."_biz LEFT JOIN ".$country."_biz_localities ON ".$country."_biz_localities.biz_id=".$country."_biz.biz_id WHERE biz_category_id=1 AND status='O' AND (province=%s AND city=%s)".$localityCondition, 
								GetSQLValueString($region, "text"),
								GetSQLValueString($locality, "text"));
			break;
		case 'au':
			while (count($locality_id_array)>0) {
				$locality_id = array_shift($locality_id_array);
				$localityCondition .= sprintf(" OR locality_id=%s",GetSQLValueString($locality_id, "int"));
			}
			if ($localityCondition!='') {
				$localityCondition = " AND (".substr($localityCondition,3).")";
			}
			$selectSQL = sprintf("SELECT count(DISTINCT ".$country."_biz.biz_id) AS count FROM ".$country."_biz LEFT JOIN ".$country."_biz_localities ON ".$country."_biz_localities.biz_id=".$country."_biz.biz_id WHERE biz_category_id=1 AND status='O' AND (state=%s AND city=%s)".$localityCondition, 
								GetSQLValueString($region, "text"),
								GetSQLValueString($locality, "text"));
			break;
	}
	$get_count = mysql_query_or_die($selectSQL, $dbconnect);
	$row_get_count = mysql_fetch_assoc($get_count);
	$count = $row_get_count['count'];
	mysql_free_result($get_count);
	return $count;
}

function add_user_tag ($tag_name, $language, $category_id, $useradmin) {
	$findCatIDSQL = "SELECT * FROM tag_categories WHERE biz_category_id=".$category_id." AND ".$language."='user_generated'";
	$get_category_id = mysql_query_or_die($findCatIDSQL, $useradmin);
	$row_get_category_id = mysql_fetch_assoc($get_category_id);
	$tag_category_id = $row_get_category_id['category_id'];
	mysql_free_result($get_category_id);
	
	$insertTagSQL = sprintf("INSERT INTO alias_tags (alias_tag, language, is_primary) VALUES (%s, %s, 'Y')",
					GetSQLValueString($tag_name, "text"),
					GetSQLValueString($language, "text"));
	$Result1 = mysql_query_or_die($insertTagSQL, $useradmin);
	$tag_id = mysql_insert_id($useradmin);
	
	$updateTagSQL = sprintf("UPDATE alias_tags SET primary_id=%s WHERE alias_id=%s", GetSQLValueString($tag_id, "int"), GetSQLValueString($tag_id, "int"));
	$Result1 = mysql_query_or_die($updateTagSQL, $useradmin);
	
	$insertTagSQL = sprintf("INSERT INTO primary_tags (tag_id, category_id, ".$language.", ".$language."_description) VALUES (%s, %s, %s, %s)",
					GetSQLValueString($tag_id, "int"),
					GetSQLValueString($tag_category_id, "int"),
					GetSQLValueString($tag_name, "text"),
					GetSQLValueString($tag_name, "text"));
	$Result1 = mysql_query_or_die($insertTagSQL, $useradmin);
	return $tag_id;	
}

function update_tag_count ($tag_id, $entity, $country, $useradmin) {
	if ($entity=='biz') {
		// get biz_count from biz_tags table
		$countSQL = sprintf("SELECT count(biz_id) AS count FROM biz_tags WHERE tag_id=%s AND country=%s",
				GetSQLValueString($tag_id, "int"),
				GetSQLValueString($country, "text"));
		$get_tag_count = mysql_query_or_die($countSQL, $useradmin);
		$row_get_tag_count = mysql_fetch_assoc($get_tag_count);
		$tag_count = $row_get_tag_count['count'];
		mysql_free_result($get_tag_count);
		
		// update biz_count in tag_ranking table
		$countSQL = sprintf("SELECT * FROM ".$country."_tag_ranking WHERE tag_id=%s", GetSQLValueString($tag_id, "int"));
		$get_tag_count = mysql_query_or_die($countSQL, $useradmin);
		$total_get_tag_count = mysql_num_rows($get_tag_count);
		if ($total_get_tag_count>0) {
			$updateSQL = sprintf("UPDATE ".$country."_tag_ranking SET ".$entity."_count=%s WHERE tag_id=%s",
								 GetSQLValueString($tag_count, "int"),
								 GetSQLValueString($tag_id, "int"));
			$Result1 = mysql_query_or_die($updateSQL, $useradmin);
		} else {
			$insertSQL= sprintf("INSERT INTO ".$country."_tag_ranking (".$entity."_count, tag_id) VALUE (%s, %s)",
								 GetSQLValueString($tag_count, "int"),
								 GetSQLValueString($tag_id, "int"));
			$Result1 = mysql_query_or_die($insertSQL, $useradmin);
		}
		mysql_free_result($get_tag_count);
		
		// get category_id for updating tag_ranking table
		$selectTagSQL = sprintf("SELECT category_id FROM primary_tags WHERE tag_id=%s", GetSQLValueString($tag_id, "int"));
		$get_tag = mysql_query_or_die($selectTagSQL, $useradmin);
		if (mysql_num_rows($get_tag)>0) {
			$row_get_tag=mysql_fetch_assoc($get_tag);
			$category_id_condition = " AND category_id=".$row_get_tag['category_id'];
		} else {
			$category_id_condition = " AND TRUE";
		}
		mysql_free_result($get_tag);
			
		// update ranking in tag_ranking table
		$countSQL = "SELECT ".$country."_tag_ranking.tag_id,biz_count FROM ".$country."_tag_ranking LEFT JOIN primary_tags ON ".$country."_tag_ranking.tag_id=primary_tags.tag_id WHERE biz_count IS NOT NULL AND biz_count!=0".$category_id_condition." ORDER BY biz_count DESC, primary_tags.en";
		$get_tag_count = mysql_query_or_die($countSQL, $useradmin);
		$ranking = 1;
		while ($row_get_tag_count=mysql_fetch_assoc($get_tag_count)) {
			$tag_id = $row_get_tag_count['tag_id'];
			$updateSQL = sprintf("UPDATE ".$country."_tag_ranking SET ranking=%s WHERE tag_id=%s",
								 GetSQLValueString($ranking, "int"),
								 GetSQLValueString($tag_id, "int"));
			$Result1 = mysql_query_or_die($updateSQL, $useradmin);
			$ranking += 1;
		}
		mysql_free_result($get_tag_count);
	} else {
		$countSQL = sprintf("SELECT count(".$entity."_id) AS count FROM ".$entity."_tags WHERE tag_id=%s",
				GetSQLValueString($tag_id, "int"));
		$get_tag_count = mysql_query_or_die($countSQL, $useradmin);
		$row_get_tag_count = mysql_fetch_assoc($get_tag_count);
		$tag_count = $row_get_tag_count['count'];
		mysql_free_result($get_tag_count);
	
		$countSQL = sprintf("SELECT * FROM ".$entity."_tag_ranking WHERE tag_id=%s", GetSQLValueString($tag_id, "int"));
		$get_tag_count = mysql_query_or_die($countSQL, $useradmin);
		$total_get_tag_count = mysql_num_rows($get_tag_count);
		
		if ($total_get_tag_count>0) {
			$updateSQL = sprintf("UPDATE ".$entity."_tag_ranking SET ".$entity."_count=%s WHERE tag_id=%s",
								 GetSQLValueString($tag_count, "int"),
								 GetSQLValueString($tag_id, "int"));
			$Result1 = mysql_query_or_die($updateSQL, $useradmin);
		} else {
			$insertSQL= sprintf("INSERT INTO ".$entity."_tag_ranking (".$entity."_count, tag_id) VALUE (%s, %s)",
								 GetSQLValueString($tag_count, "int"),
								 GetSQLValueString($tag_id, "int"));
			$Result1 = mysql_query_or_die($insertSQL, $useradmin);
		}
		mysql_free_result($get_tag_count);
		
		// get category_id for updating tag_ranking table
		$selectTagSQL = sprintf("SELECT category_id FROM primary_tags WHERE tag_id=%s", GetSQLValueString($tag_id, "int"));
		$get_tag = mysql_query_or_die($selectTagSQL, $useradmin);
		if (mysql_num_rows($get_tag)>0) {
			$row_get_tag=mysql_fetch_assoc($get_tag);
			$category_id_condition = " AND category_id=".$row_get_tag['category_id'];
		} else {
			$category_id_condition = " AND TRUE";
		}
		mysql_free_result($get_tag);
			
		// update ranking in tag_ranking table
		$countSQL = "SELECT ".$entity."_tag_ranking.tag_id,".$entity."_count FROM ".$entity."_tag_ranking LEFT JOIN primary_tags ON ".$entity."_tag_ranking.tag_id=primary_tags.tag_id WHERE ".$entity."_count IS NOT NULL AND ".$entity."_count!=0".$category_id_condition." ORDER BY ".$entity."_count DESC, primary_tags.en";
		$get_tag_count = mysql_query_or_die($countSQL, $useradmin);
		$ranking = 1;
		while ($row_get_tag_count=mysql_fetch_assoc($get_tag_count)) {
			$tag_id = $row_get_tag_count['tag_id'];
			$updateSQL = sprintf("UPDATE ".$entity."_tag_ranking SET ranking=%s WHERE tag_id=%s",
								 GetSQLValueString($ranking, "int"),
								 GetSQLValueString($tag_id, "int"));
			$Result1 = mysql_query_or_die($updateSQL, $useradmin);
			$ranking += 1;
		}
		mysql_free_result($get_tag_count);
	}
}

function find_ancestor_tags ($tag_array, $useradmin) {
	$return_array = array();
	while (count($tag_array)>0) {
		$tag_id = array_shift($tag_array);
		array_push($return_array,$tag_id);
		$selectSQL = sprintf("SELECT * FROM tag_includes WHERE include_id=%s", GetSQLValueString($tag_id, "int"));
		$get_parent_tags = mysql_query_or_die($selectSQL, $useradmin);
		
		while ($row_get_parent_tags = mysql_fetch_assoc($get_parent_tags)) {
			$parent_id_array = array($row_get_parent_tags['tag_id']);
			$return_array = array_merge($return_array,find_ancestor_tags($parent_id_array, $useradmin));
		}
		mysql_free_result($get_parent_tags);
	}
	return $return_array;
}

function find_descendant_tags ($tag_array, $useradmin) {
	$return_array = array();
	while (count($tag_array)>0) {
		$tag_id = array_shift($tag_array);
		array_push($return_array,$tag_id);
		$selectSQL = sprintf("SELECT * FROM tag_includes WHERE tag_id=%s", GetSQLValueString($tag_id, "int"));
		$get_child_tags = mysql_query_or_die($selectSQL, $useradmin);
		
		while ($row_get_child_tags = mysql_fetch_assoc($get_child_tags)) {
			$include_id_array = array($row_get_child_tags['include_id']);
			$return_array = array_merge($return_array,find_descendant_tags($include_id_array, $useradmin));
		}
		mysql_free_result($get_child_tags);
	}
	return $return_array;
}

function update_all_tag_parents ($tag_id, $added_tag_array, $removed_tag_array, $useradmin) {
	$ancestors_to_add = find_ancestor_tags($added_tag_array, $useradmin);
	$ancestors_to_remove = find_ancestor_tags($removed_tag_array, $useradmin);
	
	$selectBizSQL = sprintf("SELECT biz_id, biz_tags FROM au_biz WHERE locate(%s,biz_tags)=1 OR locate(%s,biz_tags)>1",
						GetSQLValueString($tag_id.',', "text"),
						GetSQLValueString(','.$tag_id.',', "text"));
	$get_biz = mysql_query_or_die($selectBizSQL, $useradmin);
	
	while ($row_get_biz = mysql_fetch_assoc($get_biz)) {
		$tag_id_string = $row_get_biz['biz_tags'];
		$biz_id = $row_get_biz['biz_id'];
		if (substr($tag_id_string,strlen($tag_id_string)-1)==',') {
			$tag_id_string = substr($tag_id_string,0,strlen($tag_id_string)-1);
		}
		if ($tag_id_string=='') {
			$tag_id_array = array();
		} else {
			$tag_id_array = explode(",",$tag_id_string);
		}
		$new_tag_array = array_unique(array_merge(find_ancestor_tags(array_diff($tag_id_array,$ancestors_to_remove),$useradmin),$ancestors_to_add));
		$new_tag_string = implode(",",$new_tag_array).',';
		$updateBizSQL = sprintf("UPDATE au_biz SET biz_tags=%s WHERE biz_id=%s",
							GetSQLValueString($new_tag_string, "text"),
							GetSQLValueString($biz_id, "int"));
		$Result1 = mysql_query_or_die($updateBizSQL, $useradmin);
		update_all_tag_count ('biz', 'au', $biz_id, $useradmin);
	}
	mysql_free_result($get_biz);
	
	$selectBizSQL = sprintf("SELECT biz_id, biz_tags FROM hk_biz WHERE locate(%s,biz_tags)=1 OR locate(%s,biz_tags)>1",
						GetSQLValueString($tag_id.',', "text"),
						GetSQLValueString(','.$tag_id.',', "text"));
	$get_biz = mysql_query_or_die($selectBizSQL, $useradmin);
	
	while ($row_get_biz = mysql_fetch_assoc($get_biz)) {
		$tag_id_string = $row_get_biz['biz_tags'];
		$biz_id = $row_get_biz['biz_id'];
		if (substr($tag_id_string,strlen($tag_id_string)-1)==',') {
			$tag_id_string = substr($tag_id_string,0,strlen($tag_id_string)-1);
		}
		if ($tag_id_string=='') {
			$tag_id_array = array();
		} else {
			$tag_id_array = explode(",",$tag_id_string);
		}
		$new_tag_array = array_unique(array_merge(find_ancestor_tags(array_diff($tag_id_array,$ancestors_to_remove),$useradmin),$ancestors_to_add));
		$new_tag_string = implode(",",$new_tag_array).',';
		$updateBizSQL = sprintf("UPDATE hk_biz SET biz_tags=%s WHERE biz_id=%s",
							GetSQLValueString($new_tag_string, "text"),
							GetSQLValueString($biz_id, "int"));
		$Result1 = mysql_query_or_die($updateBizSQL, $useradmin);
		update_all_tag_count ('biz', 'hk', $biz_id, $useradmin);
	}
	mysql_free_result($get_biz);
	
	$selectProductSQL = sprintf("SELECT product_id, product_tags FROM products WHERE locate(%s,product_tags)=1 OR locate(%s,product_tags)>1",
						GetSQLValueString($tag_id.',', "text"),
						GetSQLValueString(','.$tag_id.',', "text"));
	$get_products = mysql_query_or_die($selectProductSQL, $useradmin);
	
	while ($row_get_products = mysql_fetch_assoc($get_products)) {
		$tag_id_string = $row_get_products['product_tags'];
		$product_id = $row_get_products['product_id'];
		if (substr($tag_id_string,strlen($tag_id_string)-1)==',') {
			$tag_id_string = substr($tag_id_string,0,strlen($tag_id_string)-1);
		}
		if ($tag_id_string=='') {
			$tag_id_array = array();
		} else {
			$tag_id_array = explode(",",$tag_id_string);
		}
		$new_tag_array = array_unique(array_merge(find_ancestor_tags(array_diff($tag_id_array,$ancestors_to_remove),$useradmin),$ancestors_to_add));
		$new_tag_string = implode(",",$new_tag_array).',';
		$updateProductSQL = sprintf("UPDATE products SET product_tags=%s WHERE product_id=%s",
							GetSQLValueString($new_tag_string, "text"),
							GetSQLValueString($product_id, "int"));
		$Result1 = mysql_query_or_die($updateProductSQL, $useradmin);
		update_all_tag_count ('product', '', $product_id, $useradmin);
	}
	mysql_free_result($get_products);
	
	$selectPhotoSQL = sprintf("SELECT photo_id, photo_tags FROM site_photos WHERE locate(%s,photo_tags)=1 OR locate(%s,photo_tags)>1",
						GetSQLValueString($tag_id.',', "text"),
						GetSQLValueString(','.$tag_id.',', "text"));
	$get_photos = mysql_query_or_die($selectPhotoSQL, $useradmin);
	
	while ($row_get_photos = mysql_fetch_assoc($get_photos)) {
		$tag_id_string = $row_get_photos['photo_tags'];
		$photo_id = $row_get_photos['photo_id'];
		if (substr($tag_id_string,strlen($tag_id_string)-1)==',') {
			$tag_id_string = substr($tag_id_string,0,strlen($tag_id_string)-1);
		}
		if ($tag_id_string=='') {
			$tag_id_array = array();
		} else {
			$tag_id_array = explode(",",$tag_id_string);
		}
		$new_tag_array = array_unique(array_merge(find_ancestor_tags(array_diff($tag_id_array,$ancestors_to_remove),$useradmin),$ancestors_to_add));
		$new_tag_string = implode(",",$new_tag_array).',';
		$updatePhotoSQL = sprintf("UPDATE site_photos SET photo_tags=%s WHERE photo_id=%s",
							GetSQLValueString($new_tag_string, "text"),
							GetSQLValueString($photo_id, "int"));
		$Result1 = mysql_query_or_die($updatePhotoSQL, $useradmin);
		
		update_all_tag_count ('photo', '', $photo_id, $useradmin);
	}
	mysql_free_result($get_photos);
}

function update_all_tag_children ($tag_id, $added_tag_array, $removed_tag_array, $useradmin) {
	$all_ancestors = find_ancestor_tags(array($tag_id),$useradmin);
	
	while (count($removed_tag_array)>0) {
		$remove_tag_id = array_shift($removed_tag_array);
		$selectBizSQL = sprintf("SELECT biz_id, biz_tags FROM au_biz WHERE locate(%s,biz_tags)=1 OR locate(%s,biz_tags)>1",
							GetSQLValueString($remove_tag_id.',', "text"),
							GetSQLValueString(','.$remove_tag_id.',', "text"));
		$get_biz = mysql_query_or_die($selectBizSQL, $useradmin);
		while ($row_get_biz = mysql_fetch_assoc($get_biz)) {
			$tag_id_string = $row_get_biz['biz_tags'];
			$biz_id = $row_get_biz['biz_id'];
			if (substr($tag_id_string,strlen($tag_id_string)-1)==',') {
				$tag_id_string = substr($tag_id_string,0,strlen($tag_id_string)-1);
			}
			if ($tag_id_string=='') {
				$tag_id_array = array();
			} else {
				$tag_id_array = explode(",",$tag_id_string);
			}
			$new_tag_array = array_unique(find_ancestor_tags(array_diff($tag_id_array,$all_ancestors),$useradmin));
			$new_tag_string = implode(",",$new_tag_array).',';
			$updateBizSQL = sprintf("UPDATE au_biz SET biz_tags=%s WHERE biz_id=%s",
								GetSQLValueString($new_tag_string, "text"),
								GetSQLValueString($biz_id, "int"));
			$Result1 = mysql_query_or_die($updateBizSQL, $useradmin);
			update_all_tag_count ('biz', 'au', $biz_id, $useradmin);
		}
		mysql_free_result($get_biz);
		
		$selectBizSQL = sprintf("SELECT biz_id, biz_tags FROM hk_biz WHERE locate(%s,biz_tags)=1 OR locate(%s,biz_tags)>1",
							GetSQLValueString($remove_tag_id.',', "text"),
							GetSQLValueString(','.$remove_tag_id.',', "text"));
		$get_biz = mysql_query_or_die($selectBizSQL, $useradmin);
		while ($row_get_biz = mysql_fetch_assoc($get_biz)) {
			$tag_id_string = $row_get_biz['biz_tags'];
			$biz_id = $row_get_biz['biz_id'];
			if (substr($tag_id_string,strlen($tag_id_string)-1)==',') {
				$tag_id_string = substr($tag_id_string,0,strlen($tag_id_string)-1);
			}
			if ($tag_id_string=='') {
				$tag_id_array = array();
			} else {
				$tag_id_array = explode(",",$tag_id_string);
			}
			$new_tag_array = array_unique(find_ancestor_tags(array_diff($tag_id_array,$all_ancestors),$useradmin));
			$new_tag_string = implode(",",$new_tag_array).',';
			$updateBizSQL = sprintf("UPDATE hk_biz SET biz_tags=%s WHERE biz_id=%s",
								GetSQLValueString($new_tag_string, "text"),
								GetSQLValueString($biz_id, "int"));
			$Result1 = mysql_query_or_die($updateBizSQL, $useradmin);
			update_all_tag_count ('biz', 'hk', $biz_id, $useradmin);
		}
		mysql_free_result($get_biz);
	
		$selectProductSQL = sprintf("SELECT product_id, product_tags FROM products WHERE locate(%s,product_tags)=1 OR locate(%s,product_tags)>1",
							GetSQLValueString($remove_tag_id.',', "text"),
							GetSQLValueString(','.$remove_tag_id.',', "text"));
		$get_products = mysql_query_or_die($selectProductSQL, $useradmin);
		while ($row_get_products = mysql_fetch_assoc($get_products)) {
			$tag_id_string = $row_get_products['product_tags'];
			$product_id = $row_get_products['product_id'];
			if (substr($tag_id_string,strlen($tag_id_string)-1)==',') {
				$tag_id_string = substr($tag_id_string,0,strlen($tag_id_string)-1);
			}
			if ($tag_id_string=='') {
				$tag_id_array = array();
			} else {
				$tag_id_array = explode(",",$tag_id_string);
			}
			$new_tag_array = array_unique(find_ancestor_tags(array_diff($tag_id_array,$all_ancestors),$useradmin));
			$new_tag_string = implode(",",$new_tag_array).',';
			$updateProductSQL = sprintf("UPDATE products SET product_tags=%s WHERE product_id=%s",
								GetSQLValueString($new_tag_string, "text"),
								GetSQLValueString($product_id, "int"));
			$Result1 = mysql_query_or_die($updateProductSQL, $useradmin);
			update_all_tag_count ('product', '', $product_id, $useradmin);
		}
		mysql_free_result($get_products);
		
		$selectPhotoSQL = sprintf("SELECT photo_id, photo_tags FROM site_photos WHERE locate(%s,photo_tags)=1 OR locate(%s,photo_tags)>1",
							GetSQLValueString($remove_tag_id.',', "text"),
							GetSQLValueString(','.$remove_tag_id.',', "text"));
		$get_photos = mysql_query_or_die($selectPhotoSQL, $useradmin);
		while ($row_get_photos = mysql_fetch_assoc($get_photos)) {
			$tag_id_string = $row_get_photos['photo_tags'];
			$photo_id = $row_get_photos['photo_id'];
			if (substr($tag_id_string,strlen($tag_id_string)-1)==',') {
				$tag_id_string = substr($tag_id_string,0,strlen($tag_id_string)-1);
			}
			if ($tag_id_string=='') {
				$tag_id_array = array();
			} else {
				$tag_id_array = explode(",",$tag_id_string);
			}
			$new_tag_array = array_unique(find_ancestor_tags(array_diff($tag_id_array,$all_ancestors),$useradmin));
			$new_tag_string = implode(",",$new_tag_array).',';
			$updatePhotoSQL = sprintf("UPDATE site_photos SET photo_tags=%s WHERE photo_id=%s",
								GetSQLValueString($new_tag_string, "text"),
								GetSQLValueString($photo_id, "int"));
			$Result1 = mysql_query_or_die($updatePhotoSQL, $useradmin);
			
			update_all_tag_count ('photo', '', $photo_id, $useradmin);
		}
		mysql_free_result($get_photos);
	}
	
	while (count($added_tag_array)>0) {
		$add_tag_id = array_shift($added_tag_array);
		$selectBizSQL = sprintf("SELECT biz_id, biz_tags FROM au_biz WHERE locate(%s,biz_tags)=1 OR locate(%s,biz_tags)>1",
							GetSQLValueString($add_tag_id.',', "text"),
							GetSQLValueString(','.$add_tag_id.',', "text"));
		$get_biz = mysql_query_or_die($selectBizSQL, $useradmin);
		while ($row_get_biz = mysql_fetch_assoc($get_biz)) {
			$tag_id_string = $row_get_biz['biz_tags'];
			$biz_id = $row_get_biz['biz_id'];
			if (substr($tag_id_string,strlen($tag_id_string)-1)==',') {
				$tag_id_string = substr($tag_id_string,0,strlen($tag_id_string)-1);
			}
			if ($tag_id_string=='') {
				$tag_id_array = array();
			} else {
				$tag_id_array = explode(",",$tag_id_string);
			}
			$new_tag_array = array_unique(array_merge($tag_id_array,$all_ancestors));
			$new_tag_string = implode(",",$new_tag_array).',';
			$updateBizSQL = sprintf("UPDATE au_biz SET biz_tags=%s WHERE biz_id=%s",
								GetSQLValueString($new_tag_string, "text"),
								GetSQLValueString($biz_id, "int"));
			$Result1 = mysql_query_or_die($updateBizSQL, $useradmin);
			update_all_tag_count ('biz', 'au', $biz_id, $useradmin);
		}
		mysql_free_result($get_biz);
		
		$selectBizSQL = sprintf("SELECT biz_id, biz_tags FROM hk_biz WHERE locate(%s,biz_tags)=1 OR locate(%s,biz_tags)>1",
							GetSQLValueString($add_tag_id.',', "text"),
							GetSQLValueString(','.$add_tag_id.',', "text"));
		$get_biz = mysql_query_or_die($selectBizSQL, $useradmin);
		while ($row_get_biz = mysql_fetch_assoc($get_biz)) {
			$tag_id_string = $row_get_biz['biz_tags'];
			$biz_id = $row_get_biz['biz_id'];
			if (substr($tag_id_string,strlen($tag_id_string)-1)==',') {
				$tag_id_string = substr($tag_id_string,0,strlen($tag_id_string)-1);
			}
			if ($tag_id_string=='') {
				$tag_id_array = array();
			} else {
				$tag_id_array = explode(",",$tag_id_string);
			}
			$new_tag_array = array_unique(array_merge($tag_id_array,$all_ancestors));
			$new_tag_string = implode(",",$new_tag_array).',';
			$updateBizSQL = sprintf("UPDATE hk_biz SET biz_tags=%s WHERE biz_id=%s",
								GetSQLValueString($new_tag_string, "text"),
								GetSQLValueString($biz_id, "int"));
			$Result1 = mysql_query_or_die($updateBizSQL, $useradmin);
			update_all_tag_count ('biz', 'hk', $biz_id, $useradmin);
		}
		mysql_free_result($get_biz);
	
		$selectProductSQL = sprintf("SELECT product_id, product_tags FROM products WHERE locate(%s,product_tags)=1 OR locate(%s,product_tags)>1",
							GetSQLValueString($add_tag_id.',', "text"),
							GetSQLValueString(','.$add_tag_id.',', "text"));
		$get_products = mysql_query_or_die($selectProductSQL, $useradmin);
		while ($row_get_products = mysql_fetch_assoc($get_products)) {
			$tag_id_string = $row_get_products['product_tags'];
			$product_id = $row_get_products['product_id'];
			if (substr($tag_id_string,strlen($tag_id_string)-1)==',') {
				$tag_id_string = substr($tag_id_string,0,strlen($tag_id_string)-1);
			}
			if ($tag_id_string=='') {
				$tag_id_array = array();
			} else {
				$tag_id_array = explode(",",$tag_id_string);
			}
			$new_tag_array = array_unique(array_merge($tag_id_array,$all_ancestors));
			$new_tag_string = implode(",",$new_tag_array).',';
			$updateProductSQL = sprintf("UPDATE products SET product_tags=%s WHERE product_id=%s",
								GetSQLValueString($new_tag_string, "text"),
								GetSQLValueString($product_id, "int"));
			$Result1 = mysql_query_or_die($updateProductSQL, $useradmin);
			update_all_tag_count ('product', '', $product_id, $useradmin);
		}
		mysql_free_result($get_products);
		
		$selectPhotoSQL = sprintf("SELECT photo_id, photo_tags FROM site_photos WHERE locate(%s,photo_tags)=1 OR locate(%s,photo_tags)>1",
							GetSQLValueString($add_tag_id.',', "text"),
							GetSQLValueString(','.$add_tag_id.',', "text"));
		$get_photos = mysql_query_or_die($selectPhotoSQL, $useradmin);
		while ($row_get_photos = mysql_fetch_assoc($get_photos)) {
			$tag_id_string = $row_get_photos['photo_tags'];
			$photo_id = $row_get_photos['photo_id'];
			if (substr($tag_id_string,strlen($tag_id_string)-1)==',') {
				$tag_id_string = substr($tag_id_string,0,strlen($tag_id_string)-1);
			}
			if ($tag_id_string=='') {
				$tag_id_array = array();
			} else {
				$tag_id_array = explode(",",$tag_id_string);
			}
			$new_tag_array = array_unique(array_merge($tag_id_array,$all_ancestors));
			$new_tag_string = implode(",",$new_tag_array).',';
			$updatePhotoSQL = sprintf("UPDATE site_photos SET photo_tags=%s WHERE photo_id=%s",
								GetSQLValueString($new_tag_string, "text"),
								GetSQLValueString($photo_id, "int"));
			$Result1 = mysql_query_or_die($updatePhotoSQL, $useradmin);
			
			update_all_tag_count ('photo', '', $photo_id, $useradmin);
		}
		mysql_free_result($get_photos);
	}
}

function update_all_tag_count ($entity, $country, $id, $useradmin) {
	switch ($entity) {
		case 'biz':
			$selectTagSQL = sprintf("SELECT tag_id FROM biz_tags WHERE biz_id=%s AND country=%s", GetSQLValueString($id, "int"), GetSQLValueString($country, "text"));
			$get_biz = mysql_query_or_die($selectTagSQL, $useradmin);
			$tag_id_array = array();
			while ($row_get_biz = mysql_fetch_assoc($get_biz)) {
				array_push($tag_id_array,$row_get_biz['tag_id']);
			}
			mysql_free_result($get_biz);
			
			$DeleteTags = sprintf("DELETE FROM biz_tags WHERE biz_id=%s AND country=%s", GetSQLValueString($id, "int"), GetSQLValueString($country, "text"));
			$Result1 = mysql_query_or_die($DeleteTags, $useradmin);
			
			while (count($tag_id_array)) {
				$tag_id = array_shift($tag_id_array);
				update_tag_count ($tag_id, $entity, $country, $useradmin);
			}
			
			$selectSQL = sprintf("SELECT * FROM ".$country."_biz WHERE biz_id=%s", GetSQLValueString($id, "int"));
			$get_biz = mysql_query_or_die($selectSQL, $useradmin);
			while ($row_get_biz = mysql_fetch_assoc($get_biz)) {
				$tag_string = $row_get_biz['biz_tags'];
				if (substr($tag_string,strlen($tag_string)-1)==',') {
					$tag_string = substr($tag_string,0,strlen($tag_string)-1);
				}
				if ($tag_string=='') {
					$tag_array = array();
				} else {
					$tag_array = explode(",",$tag_string);
				}
				while (count($tag_array)>0) {
					$tag_id = array_shift($tag_array);
					$InsertNumericTag= sprintf("INSERT INTO biz_tags (biz_id, country, tag_id) VALUE (%s, %s, %s)",
							 GetSQLValueString($id, "int"),
							 GetSQLValueString($country, "text"),
							 GetSQLValueString($tag_id, "int"));
					$Result1 = mysql_query_or_die($InsertNumericTag, $useradmin);
					update_tag_count ($tag_id, $entity, $country, $useradmin);
				}
			}
			mysql_free_result($get_biz);
			
			$selectBizPhotosSQL = sprintf("SELECT photo_id FROM biz_photos WHERE country=%s AND biz_id=%s", GetSQLValueString($country, "text"), GetSQLValueString($id, "int"));
			$get_biz_photos = mysql_query_or_die($selectBizPhotosSQL, $useradmin);
			$biz_photos_array = array();
			while ($row_get_biz_photos = mysql_fetch_assoc($get_biz_photos)) {
				array_push($biz_photos_array,$row_get_biz_photos['photo_id']);
			}
			mysql_free_result($get_biz_photos);
			
			while (count($biz_photos_array) > 0) {
				$photo_id = array_shift($biz_photos_array);
				update_photo_tags ($photo_id, $useradmin);
			}
			break;
		case 'product':
			$selectTagSQL = sprintf("SELECT tag_id FROM ".$entity."_tags WHERE ".$entity."_id=%s", GetSQLValueString($id, "int"));
			$get_products = mysql_query_or_die($selectTagSQL, $useradmin);
			$tag_id_array = array();
			while ($row_get_products = mysql_fetch_assoc($get_products)) {
				array_push($tag_id_array,$row_get_products['tag_id']);
			}
			mysql_free_result($get_products);
			$DeleteTags = sprintf("DELETE FROM ".$entity."_tags WHERE ".$entity."_id=%s", GetSQLValueString($id, "int"));
			$Result1 = mysql_query_or_die($DeleteTags, $useradmin);
			while (count($tag_id_array)) {
				$tag_id = array_shift($tag_id_array);
				update_tag_count ($tag_id, $entity, $country, $useradmin);
			}
			
			$selectSQL = sprintf("SELECT * FROM products WHERE product_id=%s", GetSQLValueString($id, "int"));
			$get_products = mysql_query_or_die($selectSQL, $useradmin);
			while ($row_get_products = mysql_fetch_assoc($get_products)) {
				$tag_string = $row_get_products['product_tags'];
				if (substr($tag_string,strlen($tag_string)-1)==',') {
					$tag_string = substr($tag_string,0,strlen($tag_string)-1);
				}
				if ($tag_string=='') {
					$tag_array = array();
				} else {
					$tag_array = explode(",",$tag_string);
				}
				while (count($tag_array)>0) {
					$tag_id = array_shift($tag_array);
					$InsertTag= sprintf("INSERT INTO product_tags (product_id, tag_id) VALUE (%s, %s)",
							 GetSQLValueString($id, "int"),
							 GetSQLValueString($tag_id, "int"));
					$Result1 = mysql_query_or_die($InsertTag, $useradmin);
					update_tag_count ($tag_id, $entity, $country, $useradmin);
				}
			}
			mysql_free_result($get_products);
			
			$selectProductsPhotosSQL = sprintf("SELECT photo_id FROM products_photos WHERE product_id=%s", GetSQLValueString($id, "int"));
			$get_products_photos = mysql_query_or_die($selectProductsPhotosSQL, $useradmin);
			$products_photos_array = array();
			while ($row_get_products_photos = mysql_fetch_assoc($get_products_photos)) {
				array_push($products_photos_array,$row_get_products_photos['photo_id']);
			}
			mysql_free_result($get_products_photos);
			
			while (count($products_photos_array) > 0) {
				$photo_id = array_shift($products_photos_array);
				update_photo_tags ($photo_id, $useradmin);
			}
			break;
		case 'photo': // this only updates photos that are not linked function update_photo_tags updates all photos
			$selectBizSQL = sprintf("SELECT country, biz_id FROM biz_photos WHERE photo_id=%s", GetSQLValueString($id, "int"));
			$get_biz_count = mysql_query_or_die($selectBizSQL, $useradmin);
			$total_get_biz_count = mysql_num_rows($get_biz_count);
			mysql_free_result($get_biz_count);
			
			$selectProductSQL = sprintf("SELECT product_id FROM products_photos WHERE photo_id=%s", GetSQLValueString($id, "int"));
			$get_product_count = mysql_query_or_die($selectProductSQL, $useradmin);
			$total_get_product_count = mysql_num_rows($get_product_count);
			mysql_free_result($get_product_count);
	
			if ($total_get_biz_count==0 && $total_get_product_count==0) {
				$selectTagSQL = sprintf("SELECT tag_id FROM ".$entity."_tags WHERE ".$entity."_id=%s", GetSQLValueString($id, "int"));
				$get_photos = mysql_query_or_die($selectTagSQL, $useradmin);
				$tag_id_array = array();
				while ($row_get_photos = mysql_fetch_assoc($get_photos)) {
					array_push($tag_id_array,$row_get_photos['tag_id']);
				}
				mysql_free_result($get_photos);
				$DeleteTags = sprintf("DELETE FROM ".$entity."_tags WHERE ".$entity."_id=%s", GetSQLValueString($id, "int"));
				$Result1 = mysql_query_or_die($DeleteTags, $useradmin);
				while (count($tag_id_array)) {
					$tag_id = array_shift($tag_id_array);
					update_tag_count ($tag_id, $entity, $country, $useradmin);
				}
			
				$selectSQL = sprintf("SELECT * FROM site_photos WHERE photo_id=%s", GetSQLValueString($id, "int"));
				$get_photos = mysql_query_or_die($selectSQL, $useradmin);
				while ($row_get_photos = mysql_fetch_assoc($get_photos)) {
					$tag_string = $row_get_photos['photo_tags'];
					if (substr($tag_string,strlen($tag_string)-1)==',') {
						$tag_string = substr($tag_string,0,strlen($tag_string)-1);
					}
					if ($tag_string=='') {
						$tag_array = array();
					} else {
						$tag_array = explode(",",$tag_string);
					}
					while (count($tag_array)>0) {
						$tag_id = array_shift($tag_array);
						$InsertTag= sprintf("INSERT INTO photo_tags (photo_id, tag_id) VALUE (%s, %s)",
								 GetSQLValueString($id, "int"),
								 GetSQLValueString($tag_id, "int"));
						$Result1 = mysql_query_or_die($InsertTag, $useradmin);
						update_tag_count ($tag_id, $entity, $country, $useradmin);
					}
				}
				mysql_free_result($get_photos);
			}
			break;
		}
}

function ucode_string_to_array ($ucode_string) {
	$ucode_array = array();
	$ucode_index = -6;
	$new_ucode_index = strpos($ucode_string,"\u",$ucode_index+6);
	while ($new_ucode_index!==false) {
		if ($new_ucode_index > $ucode_index + 6) {
			array_push($ucode_array,substr($ucode_string,$ucode_index+6,$new_ucode_index-$ucode_index-6));
		}
		$ucode_index = $new_ucode_index;
		array_push($ucode_array,substr($ucode_string,$ucode_index,6));
		$new_ucode_index = strpos($ucode_string,"\u",$ucode_index+6);
	}
	if ($ucode_index+6<strlen($ucode_string)) {
		array_push($ucode_array,substr($ucode_string,$ucode_index+6));
	}
	return $ucode_array;
}

function tag_string_to_array ($tag_string) {
	if (substr($tag_string,strlen($tag_string)-1)==',') {
		$tag_string = substr($tag_string,0,strlen($tag_string)-1);
	}
	if ($tag_string=='') {
		$tag_array = array();
	} else {
		$tag_array = explode(",",$tag_string);
	}
	return $tag_array;
}

function tag_array_to_string ($tag_array) {
	if (count($tag_array)>0) {
		$tag_string = implode(",",$tag_array).",";
	} else {
		$tag_string = '';
	}
	return $tag_string;
}

function get_missing_child_tags ($tag_id_string, $useradmin) {
	$tag_id_array = tag_string_to_array ($tag_id_string);
	$array_length = count($tag_id_array);
	$array_index = 0;
	$child_array_group = array();
	while ($array_index<$array_length) {
		$tag_id = $tag_id_array[$array_index];
		$child_tag_array = tag_string_to_array(build_child_id($tag_id,$useradmin));
		if (count(array_intersect($tag_id_array,$child_tag_array))==0 && count($child_tag_array)>0) {
			array_unshift($child_tag_array,$tag_id);
			array_push($child_array_group,$child_tag_array);
		}
		$array_index += 1;
	}
	return $child_array_group;
}

function build_missing_tags_html ($entity, $missing_tag_array, $missing_tag_leader, $language, $tag_input, $useradmin) {
	$missing_tags_html = '';
	while (count($missing_tag_array)>0) {
		$missing_tag_id = array_shift($missing_tag_array);
		$missing_tag_name = get_tag_name($missing_tag_id,$language);
		$missing_tags_html .= '<div class="RelatedTagsCheckbox"><input type="checkbox" name="child_'.$missing_tag_id.'_of_'.$missing_tag_leader.'" id="child_'.$missing_tag_id.'_of_'.$missing_tag_leader.'" onclick="update_tags('."'".$tag_input."','child_".$missing_tag_id.'_of_'.$missing_tag_leader."','".$missing_tag_name."','".$entity."_tag_".$missing_tag_id."'".')" />'.'<label for="child_'.$missing_tag_id.'_of_'.$missing_tag_leader.'">'.$missing_tag_name.'</label></div>';
	}
	return $missing_tags_html;
}

function build_multi_street_bldg_html ($type, $multi_street_bldg_array) {
	$multi_street_bldg_html = '<div id="'.($type=='street'?'MultiStreetRadio':'MultiBldgRadio').'">';
	while (count($multi_street_bldg_array)>0) {
		$street_bldg_array = array_shift($multi_street_bldg_array);
		$street_bldg_id = $street_bldg_array['id'];
		$street_bldg_name = $street_bldg_array['name'];
		$street_bldg_address = $street_bldg_array['address'];
		$multi_street_bldg_html .= '<div><input type="radio" name="multi_'.$type.'_radio" id="multi_'.$type."_ID_".$street_bldg_id.'" value="'.$street_bldg_address.'" onclick="" />'.'<label for="multi_'.$type."_ID_".$street_bldg_id.'">'.$street_bldg_name.'</label></div>';
	}
	$multi_street_bldg_html .= '</div>';
	return $multi_street_bldg_html;
}

function check_biz_address ($country,$biz_id,$language,$addres_1,$address_2,$useradmin) {
	if ($address_1==null || $address_1=='') {
		$found = true;
	} else {
		$selectStreetsSQL = sprintf("SELECT id FROM ".$country."_streets WHERE locate(".$language.",%s)>0", GetSQLValueString($address_1,"text"));
		$get_streets = mysql_query_or_die($selectStreetsSQL, $useradmin);
		if (mysql_num_rows($get_streets)>0) {
			$found = true;
		} else {
			$selectStreetsSQL = sprintf("SELECT id FROM ".$country."_buildings WHERE locate(".$language.",%s)>0", GetSQLValueString($address_1,"text"));
			$get_buildings = mysql_query_or_die($selectStreetsSQL, $useradmin);
			if (mysql_num_rows($get_buildings)>0) {
				$found = true;
			} else {
				$found = false;
			}
			mysql_free_result($get_buildings);
		}
		mysql_free_result($get_streets);
	}
	if ($found) {
		if ($address_2==null || $address_2=='') {
			$found = true;
		} else {
			$selectStreetsSQL = sprintf("SELECT id FROM ".$country."_streets WHERE locate(".$language.",%s)>0", GetSQLValueString($address_2,"text"));
			$get_streets = mysql_query_or_die($selectStreetsSQL, $useradmin);
			if (mysql_num_rows($get_streets)>0) {
				$found = true;
			} else {
				$selectStreetsSQL = sprintf("SELECT id FROM ".$country."_buildings WHERE locate(".$language.",%s)>0", GetSQLValueString($address_2,"text"));
				$get_buildings = mysql_query_or_die($selectStreetsSQL, $useradmin);
				if (mysql_num_rows($get_buildings)>0) {
					$found = true;
				} else {
					$found = false;
				}
				mysql_free_result($get_buildings);
			}
			mysql_free_result($get_streets);
		}
	}
	return $found;
}

function check_chinese ($char_string,$check_what,$useradmin) {
	$char_code_array = ucode_string_to_array(han2ucode($char_string,$useradmin));
	$new_code_array = array();
	while (count($char_code_array)>0) {
		$ucode = array_shift($char_code_array);
		if (substr($ucode,0,2)=='\u' && strlen($ucode)==6) {
			$han_char = ucode2han($ucode,$useradmin);
			$selectSQL = sprintf("SELECT * FROM biezi_table WHERE biezi=%s", GetSQLValueString($han_char,"text"));
			$get_char = mysql_query_or_die($selectSQL, $useradmin);
			if (mysql_num_rows($get_char)>0) {
				$row_get_char = mysql_fetch_assoc($get_char);
				array_push($new_code_array,han2ucode($row_get_char['zhengzi']));
			} else {
				array_push($new_code_array,$ucode);
			}
			mysql_free_result($get_char);
		} else {
			array_push($new_code_array,$ucode);
		}
	}
	return ucode2han(implode("",$new_code_array));
}

function count_han_char ($language,$han_char,$useradmin) {
	$count=0;
	global $database_addradmin, $database_localmain;
	$selectSQL = sprintf("SELECT * FROM ".$database_addradmin.".hk_districts WHERE locate(%s,".$language.")>0", GetSQLValueString($han_char,'text'));
	$get_hk_districts = mysql_query_or_die($selectSQL, $useradmin);
	while ($row_get_hk_districts = mysql_fetch_assoc($get_hk_districts)) {
		$han_string = $row_get_hk_districts[$language];
		$count += substr_count($han_string,$han_char);
	}
	mysql_free_result($get_hk_districts);
	
	$selectSQL = sprintf("SELECT * FROM ".$database_addradmin.".hk_streets WHERE locate(%s,".$language.")>0", GetSQLValueString($han_char,'text'));
	$get_hk_streets = mysql_query_or_die($selectSQL, $useradmin);
	while ($row_get_hk_streets = mysql_fetch_assoc($get_hk_streets)) {
		$han_string = $row_get_hk_streets[$language];
		$count += substr_count($han_string,$han_char);
	}
	mysql_free_result($get_hk_streets);
	
	$selectSQL = sprintf("SELECT * FROM ".$database_addradmin.".hk_buildings WHERE locate(%s,".$language.")>0", GetSQLValueString($han_char,'text'));
	$get_hk_buildings = mysql_query_or_die($selectSQL, $useradmin);
	while ($row_get_hk_buildings = mysql_fetch_assoc($get_hk_buildings)) {
		$han_string = $row_get_hk_buildings[$language];
		$count += substr_count($han_string,$han_char);
	}
	mysql_free_result($get_hk_buildings);
	
	$selectSQL = sprintf("SELECT * FROM hk_biz WHERE locate(%s,".$language."_name)>0", GetSQLValueString($han_char,'text'));
	$get_hk_biz = mysql_query_or_die($selectSQL, $useradmin);
	while ($row_get_hk_biz = mysql_fetch_assoc($get_hk_biz)) {
		$han_string = $row_get_hk_biz[$language.'_name'];
		$count += substr_count($han_string,$han_char);
	}
	mysql_free_result($get_hk_biz);
	
	$selectSQL = sprintf("SELECT * FROM hk_biz WHERE locate(%s,".$language."_address_1)>0", GetSQLValueString($han_char,'text'));
	$get_hk_biz = mysql_query_or_die($selectSQL, $useradmin);
	while ($row_get_hk_biz = mysql_fetch_assoc($get_hk_biz)) {
		$han_string = $row_get_hk_biz[$language.'_address_1'];
		$count += substr_count($han_string,$han_char);
	}
	mysql_free_result($get_hk_biz);
	
	$selectSQL = sprintf("SELECT * FROM hk_biz WHERE locate(%s,".$language."_address_2)>0", GetSQLValueString($han_char,'text'));
	$get_hk_biz = mysql_query_or_die($selectSQL, $useradmin);
	while ($row_get_hk_biz = mysql_fetch_assoc($get_hk_biz)) {
		$han_string = $row_get_hk_biz[$language.'_address_2'];
		$count += substr_count($han_string,$han_char);
	}
	mysql_free_result($get_hk_biz);
	
	$selectSQL = sprintf("SELECT * FROM hk_biz WHERE locate(%s,".$language."_direction)>0", GetSQLValueString($han_char,'text'));
	$get_hk_biz = mysql_query_or_die($selectSQL, $useradmin);
	while ($row_get_hk_biz = mysql_fetch_assoc($get_hk_biz)) {
		$han_string = $row_get_hk_biz[$language.'_direction'];
		$count += substr_count($han_string,$han_char);
	}
	mysql_free_result($get_hk_biz);
	
	if ($language=='tw') {
		$selectSQL = sprintf("SELECT * FROM hk_biz_parent WHERE locate(%s,tagline)>0", GetSQLValueString($han_char,'text'));
		$get_hk_biz = mysql_query_or_die($selectSQL, $useradmin);
		while ($row_get_hk_biz = mysql_fetch_assoc($get_hk_biz)) {
			$han_string = $row_get_hk_biz['tagline'];
			$count += substr_count($han_string,$han_char);
		}
		mysql_free_result($get_hk_biz);
	}
	
	$selectSQL = sprintf("SELECT * FROM product_details WHERE language=%s AND locate(%s,name)>0",
					GetSQLValueString($language,'text'),
					GetSQLValueString($han_char,'text'));
	$get_products = mysql_query_or_die($selectSQL, $useradmin);
	while ($row_get_products = mysql_fetch_assoc($get_products)) {
		$han_string = $row_get_products['name'];
		$count += substr_count($han_string,$han_char);
	}
	mysql_free_result($get_products);
	
	$selectSQL = sprintf("SELECT * FROM product_details WHERE language=%s AND locate(%s,brief_description)>0",
					GetSQLValueString($language,'text'),
					GetSQLValueString($han_char,'text'));
	$get_products = mysql_query_or_die($selectSQL, $useradmin);
	while ($row_get_products = mysql_fetch_assoc($get_products)) {
		$han_string = $row_get_products['brief_description'];
		$count += substr_count($han_string,$han_char);
	}
	mysql_free_result($get_products);
	
	$selectSQL = sprintf("SELECT * FROM product_details WHERE language=%s AND locate(%s,description)>0",
					GetSQLValueString($language,'text'),
					GetSQLValueString($han_char,'text'));
	$get_products = mysql_query_or_die($selectSQL, $useradmin);
	while ($row_get_products = mysql_fetch_assoc($get_products)) {
		$han_string = $row_get_products['description'];
		$count += substr_count($han_string,$han_char);
	}
	mysql_free_result($get_products);
	
	if ($language=='tw') {
		$selectSQL = sprintf("SELECT * FROM site_photos WHERE locate(%s,description)>0", GetSQLValueString($han_char,'text'));
		$get_photos = mysql_query_or_die($selectSQL, $useradmin);
		while ($row_get_photos = mysql_fetch_assoc($get_photos)) {
			$han_string = $row_get_photos['description'];
			$count += substr_count($han_string,$han_char);
		}
		mysql_free_result($get_photos);
	}
	
	$selectSQL = sprintf("SELECT * FROM ".$database_localmain.".alias_tags WHERE language=%s AND locate(%s,alias_tag)>0",
					GetSQLValueString($language,'text'),
					GetSQLValueString($han_char,'text'));
	$get_tags = mysql_query_or_die($selectSQL, $useradmin);
	while ($row_get_tags = mysql_fetch_assoc($get_tags)) {
		$han_string = $row_get_tags['alias_tag'];
		$count += substr_count($han_string,$han_char);
	}
	mysql_free_result($get_tags);

	return $count;
}

function get_currency_symbol($country) {
	global $database_library,$localconnect;
	$selectSQL = "SELECT * FROM ".$database_library.".currency_symbols WHERE country='".$country."'";
	$get_symbol = mysql_query_or_die($selectSQL, $localconnect);
	if ($row_get_symbol = mysql_fetch_assoc($get_symbol)) {
		$symbol = $row_get_symbol['symbol'];
	} else {
		$symbol = '$';
	}
	mysql_free_result($get_symbol);
	return $symbol;
}

function get_language_name ($language,$language_code) {
	global $database_library,$localconnect;
	$selectSQL = "SELECT name FROM ".$database_library.".language_codes WHERE code='".$language_code."' AND language='".$language."'";
	$get_language = mysql_query_or_die($selectSQL, $localconnect);
	if ($row_get_language = mysql_fetch_assoc($get_language)) {
		$name = $row_get_language['name'];
	} else {
		$selectSQL = "SELECT name FROM ".$database_library.".language_codes WHERE code='".$language_code."' AND language='en'";
		$get_language = mysql_query_or_die($selectSQL, $localconnect);
		if ($row_get_language = mysql_fetch_assoc($get_language)) {
			$name = $row_get_language['name'];
		} else {
			$name = '?';
		}
	}
	mysql_free_result($get_language);
	return $name;
}

function get_language_label ($language) {
	switch ($language) {
		case 'en': $language_label = 'en'; break;
		case 'tw': $language_label = '繁'; break;
		case 'cn': $language_label = '简'; break;
		case 'ja': $language_label = '日'; break;
		case 'de': $language_label = 'de'; break;
		case 'ko': $language_label = '한'; break;
		case 'es': $language_label = 'es'; break;
		case 'pt': $language_label = 'pt'; break;
		case 'fr': $language_label = 'fr'; break;
		default: $language_label = $language; break;
	}
	return $language_label;
}

function get_language_image ($language) {
	switch ($language) {
		case 'en': $language_image = '../artwork/en_square.png'; break;
		case 'tw': $language_image = '../artwork/tw_square.png'; break;
		case 'cn': $language_image = '../artwork/cn_square.png'; break;
		case 'ja': $language_image = '../artwork/ja_square.png'; break;
		case 'de': $language_image = '../artwork/de_square.png'; break;
		case 'ko': $language_image = '../artwork/ko_square.png'; break;
		case 'es': $language_image = '../artwork/es_square.png'; break;
		case 'pt': $language_image = '../artwork/pt_square.png'; break;
		case 'fr': $language_image = '../artwork/fr_square.png'; break;
		default: $language_image = ''; break;
	}
	return $language_image;
}

function dup_array_values ($val) {
	if ($val>1) {
		return true;
	} else {
		return false;
	}
}

function unique_array_values ($val) {
	if ($val>1) {
		return false;
	} else {
		return true;
	}
}

function get_biz_id($biz_name,$country) {
	global $database_localmain, $localconnect;
	$filterUserNameCondition = '';
	//searching for keywords	
	if ($biz_name!=NULL && $biz_name!='') {
		
		//break up the biznames into separate words (use unicode_add_space for the future use of chinese or other unicode characters)
		$biz_name = str_replace ("(", " ",$biz_name);
		$biz_name = str_replace (")", " ",$biz_name);
		$biz_name = unicode_add_space($biz_name);
		$biz_name = strtolower(addslashes(trim($biz_name)));
		//explode the words into an array
		$bizNameArrary= explode(" ",$biz_name);
		//count the number of words in the array to create a loop for putting words into the table
		$wordCount = count($bizNameArrary);
		//echo 'count = '.$wordCount.'<br/>';
		//remove symbols from biznames
			
		$wordIndex=0;
		while ($wordIndex < $wordCount) {
			$bizNameArrary[$wordindex] = preg_replace("/\046/","[& ]",$bizNameArrary[$wordindex]); 
			$bizNameArrary[$wordindex] = preg_replace("/[\053]/","[\\+ ]",$bizNameArrary[$wordindex]);
			$bizNameArrary[$wordindex] = preg_replace("/\055/","[- ]",$bizNameArrary[$wordindex]);
			$wordIndex += 1;
		}
		
		switch ($country){
			case 'hk': case'tw': case'cn':
				$index = 0;
				while ($index<$wordCount) {
					$filterTWBizName .= sprintf(' AND locate(%s,tw_name)>0',GetSQLValueString($bizNameArrary[$index],"text"));
					$filterCNBizName .= sprintf(' AND locate(%s,cn_name)>0',GetSQLValueString($bizNameArrary[$index],"text"));
					$filterENBizName .= sprintf(' AND locate(%s,en_name)>0',GetSQLValueString($bizNameArrary[$index],"text"));
					$index += 1;
				}
				$filterBizNameCondition .= ' AND ('.substr ($filterTWBizName, 5).' OR '.substr ($filterCNBizName, 5).' OR '.substr ($filterENBizName, 5).')';
			break;
			case 'mo'://this is not yet available 
				while ($index<$wordCount) {
					$filterTWBizName .= sprintf(' AND locate(%s,tw_name)>0',GetSQLValueString($bizNameArrary[$index],"text"));
					$filterCNBizName .= sprintf(' AND locate(%s,cn_name)>0',GetSQLValueString($bizNameArrary[$index],"text"));
					$filterENBizName .= sprintf(' AND locate(%s,en_name)>0',GetSQLValueString($bizNameArrary[$index],"text"));
					$filterPTBizName .= sprintf(' AND locate(%s,pt_name)>0',GetSQLValueString($bizNameArrary[$index],"text"));
					$index += 1;
				}
				$filterBizNameCondition .= ' AND ('.substr ($filterTWBizName, 5).' OR '.substr ($filterCNBizName, 5).' OR '.substr ($filterENBizName, 5).' OR '.substr ($filterPTBizName).')';
			break;
			case 'de': 
				$index = 0;
				while ($index<$wordCount) {
					$filterDEBizName .= sprintf(' AND locate(%s,de_name)>0',GetSQLValueString($bizNameArrary[$index],"text"));
					$filterOLBizName .= sprintf(' AND locate(%s,ol_name)>0',GetSQLValueString($bizNameArrary[$index],"text"));
					$index += 1;
				}
				$filterBizNameCondition .= ' AND ('.substr ($filterDEBizName, 5).' OR '.substr ($filterOLBizName, 5).')';
			break;
			case 'fr': 
				$index = 0;
				while ($index<$wordCount) {
					$filterOLBizName .= sprintf(' AND locate(%s,ol_name)>0',GetSQLValueString($bizNameArrary[$index],"text"));
					$filterFRBizName .= sprintf(' AND locate(%s,fr_name)>0',GetSQLValueString($bizNameArrary[$index],"text"));
					$index += 1;
				}
				$filterBizNameCondition .= ' AND ('.substr ($filterFRBizName, 5).' OR '.substr ($filterOLBizName, 5).')';
			break;
			case 'us': case 'sg': case 'au': case 'uk': case 'ca':
				$index = 0;
				while ($index<$wordCount) {
					$filterOLBizName .= sprintf(' AND locate(%s,ol_name)>0',GetSQLValueString($bizNameArrary[$index],"text"));
					$filterENBizName .= sprintf(' AND locate(%s,en_name)>0',GetSQLValueString($bizNameArrary[$index],"text"));
					$index += 1;
				}
				$filterBizNameCondition .= ' AND ('.substr ($filterOLBizName, 5).' OR '.substr ($filterENBizName, 5).')';			
			break;
		//echo 'filterKeywordsCondition = '.$filterKeywordsCondition.'<br/>';			
		}	
	} else{
		$bizNameArrary = array();
		$filterBizNameCondition = '';
	}	
		
	$selectBizIDStatement = "SELECT biz_id FROM ".$database_localmain.".".$country."_biz WHERE TRUE".$filterBizNameCondition;
	//echo 'SQL: '.$selectBizIDStatement;
	$getBizID= mysql_query_or_die($selectBizIDStatement, $localconnect);
	$bizIDArray = array();
//	$index=0;
	while ($rowGetBizID = mysql_fetch_assoc ($getBizID)){
		array_push($bizIDArray,$rowGetBizID['biz_id']);
//		$bizIDArray[$index]=$rowGetBizID['biz_id'];
//		$index += 1; 
	}

	//$user_id=$rowGetUserID['user_id'];
	mysql_free_result($getBizID);
	return $bizIDArray;
}

function get_biz_hours_table($language,$country,$biz_id,$add_table) {
	global $database_localmain,$localconnect;
	
	$selectHoursSQL = "SELECT dow, open_from, open_to FROM ".$database_localmain.".biz_hours WHERE biz_country='".$country."' AND biz_id=".$biz_id." ORDER BY dow, open_from";
//	echo 'Hours SQL:'.$selectHoursSQL;
	$get_hours = mysql_query_or_die($selectHoursSQL, $localconnect);
	if (mysql_num_rows($get_hours)>0) {
		if ($add_table) {
			$biz_hours_table = '<div><table>';
		} else {
			$biz_hours_table = '';
		}
	} else {
		$biz_hours_table = '';
	}
	$dow_hours = array();
	$dow_string = '';
	while ($row_get_hours = mysql_fetch_assoc($get_hours)) {
		$biz_hours_table .= '<tr>';
		if ($dow_string!=$row_get_hours['dow']) {
			$dow_string = $row_get_hours['dow'];
			$biz_hours_table_markup = '';
			$dow_array = explode(',',$dow_string);
			$dow_array_index = 0; // this is used to step through the dow_array 
			$next_dow_index = 1; // this is used to step through dow 
			while ($dow_array_index<count($dow_array)) {
				if ($dow_array[$dow_array_index]=='H') {
					$next_dow = 8;
				} else {
					$next_dow = $dow_array[$dow_array_index];
				}
				while ($next_dow_index<$next_dow) {
					$biz_hours_table_markup .= '<td></td>';
					$next_dow_index += 1;
				}
				switch ($next_dow_index) {
					case 6: $dow_style = 'style="background-color:#0FF;"'; break;
					case 7: 
					case 8: $dow_style = 'style="background-color:#C96;"'; break;
					default: $dow_style = ''; break;
				}
				$biz_hours_table_markup .= '<td class="abbrev_dow_'.$next_dow_index.'" '.$dow_style.'>';
				$biz_hours_table_markup .= get_default_text($language,'abbrev_dow_'.$next_dow_index).'</td>';
				$next_dow_index += 1;
				$dow_array_index += 1;
			}
			while ($next_dow_index<=8) {
				$biz_hours_table_markup .= '<td></td>';
				$next_dow_index += 1;
			}
		}
		$biz_hours_table .= $biz_hours_table_markup;
		if ($row_get_hours['open_from']==NULL) {
			$biz_hours_table .= '<td class="abbrev_closed">'.get_default_text($language,'abbrev_closed').'</td>';
		} else if ($row_get_hours['open_from']=='24:00:00' && $row_get_hours['open_to']=='24:00:00') {
			$biz_hours_table .= '<td class="abbrev_open">'.get_default_text($language,'abbrev_open').'</td>';			
		} else {
			$biz_hours_table .= "<td align='right'>".substr($row_get_hours['open_from'],0,5).'-'.substr($row_get_hours['open_to'],0,5).'</td></tr>';
		}
		$hours_array = array("dow"=>$row_get_hours['dow'], "open_from"=>substr($row_get_hours['open_from'],0,5), "open_to"=>substr($row_get_hours['open_to'],0,5));
		array_push($dow_hours,$hours_array);
	}
	if (mysql_num_rows($get_hours)>0) {
		if ($add_table) {
			$biz_hours_table .= '</table></div>';
		}
	}
	mysql_free_result($get_hours);
	return array("biz_hours_table"=>$biz_hours_table,"dow_hours"=>$dow_hours);
}

function get_next_photo_ranking ($country,$biz_id) {
	global $database_useradmin, $useradmin;
	$selectRankingSQL = sprintf("SELECT max(ranking) AS max_ranking FROM ".$database_useradmin.".biz_photos WHERE country=%s AND biz_id=%s",
					GetSQLValueString($country,"text"),
					GetSQLValueString($biz_id,"int"));
	$get_ranking = mysql_query_or_die($selectRankingSQL, $useradmin);
	if ($row_get_ranking=mysql_fetch_assoc($get_ranking)) {
		$ranking = $row_get_ranking['max_ranking']+1;
	} else {
		$ranking = 1;
	}
	return $ranking;
}

function get_next_photo_position ($album_id,$source) {
	global $database_useradmin, $useradmin;
	if (isset($source) && $source!='') {
		$photoSourceCondition = " AND source='".$source."'";
	} else {
		$photoSourceCondition = "";
	}
	$selectPositionSQL = sprintf("SELECT max(photo_position) AS max_position FROM ".$database_useradmin.".photo_albums LEFT JOIN ".$database_useradmin.".site_photos ON photo_albums.photo_id=site_photos.photo_id WHERE album_id=%s".$photoSourceCondition,
					GetSQLValueString($album_id,"int"));
	$get_position = mysql_query_or_die($selectPositionSQL, $useradmin);
	if ($row_get_position=mysql_fetch_assoc($get_position)) {
		$position = $row_get_position['max_position']+1;
	} else {
		$position = 1;
	}
	return $position;
}

function update_photo_ranking ($country,$biz_id) {
	global $database_useradmin, $useradmin;
	$selectPhotosSQL = sprintf("SELECT * FROM ".$database_useradmin.".biz_photos WHERE country=%s AND biz_id=%s ORDER BY ranking",
			GetSQLValueString($country,"text"),
			GetSQLValueString($biz_id,"int"));
	$get_photos = mysql_query_or_die($selectPhotosSQL, $useradmin);
	$ranking = 1;
	while ($row_get_photos=mysql_fetch_assoc($get_photos)) {
		$photo_id = $row_get_photos['photo_id'];
		$updateSQL = sprintf("UPDATE ".$database_useradmin.".biz_photos SET ranking=%s, is_main_photo=%s WHERE country=%s AND biz_id=%s AND photo_id=%s",
					GetSQLValueString($ranking,"int"),
					GetSQLValueString(($ranking==1?'Y':'N'),"text"),
					GetSQLValueString($country,"text"),
					GetSQLValueString($biz_id,"int"),
					GetSQLValueString($photo_id,"int"));
		$Result1 = mysql_query_or_die($updateSQL, $useradmin);
		$ranking += 1;
	}
}

function get_next_album_position ($user_id) {
	global $database_useradmin, $useradmin;
	$selectPositionSQL = sprintf("SELECT max(album_position) AS max_position FROM ".$database_useradmin.".photo_album_info WHERE user_id=%s AND removed=%s",
					GetSQLValueString($user_id,"int"),
					GetSQLValueString('N',"text"));
	$get_position = mysql_query_or_die($selectPositionSQL, $useradmin);
	if ($row_get_position=mysql_fetch_assoc($get_position)) {
		$position = $row_get_position['max_position']+1;
	} else {
		$position = 1;
	}
	mysql_free_result($get_position);
	return $position;
}

function get_next_fav_biz_position ($user_id,$list_no) {
	global $database_useradmin, $useradmin;
	$selectPositionSQL = sprintf("SELECT max(ranking) AS max_ranking FROM ".$database_useradmin.".fav_biz WHERE user_id=%s AND list_no=%s",
					GetSQLValueString($user_id,"int"),
					GetSQLValueString($list_no,"int"));
	$get_position = mysql_query_or_die($selectPositionSQL, $useradmin);
	if ($row_get_position=mysql_fetch_assoc($get_position)) {
		$position = $row_get_position['max_ranking']+1;
	} else {
		$position = 1;
	}
	mysql_free_result($get_position);
	return $position;
}

function update_fav_biz_ranking ($user_id,$list_no) {
	global $database_useradmin, $useradmin;
	$selectFavBizSQL = sprintf("SELECT * FROM ".$database_useradmin.".fav_biz WHERE user_id=%s AND list_no=%s ORDER BY ranking",
					GetSQLValueString($user_id,"int"),
					GetSQLValueString($list_no,"int"));
	$get_fav_biz = mysql_query_or_die($selectFavBizSQL, $useradmin);
	$ranking = 1;
	while ($row_get_fav_biz=mysql_fetch_assoc($get_fav_biz)) {
		$country = $row_get_fav_biz['country'];
		$biz_id = $row_get_fav_biz['biz_id'];
		$updateSQL = sprintf("UPDATE ".$database_useradmin.".fav_biz SET ranking=%s WHERE user_id=%s AND list_no=%s AND country=%s AND biz_id=%s",
						GetSQLValueString($ranking,"int"),
						GetSQLValueString($user_id, "int"),
						GetSQLValueString($list_no, "int"),
						GetSQLValueString($country, "text"),
						GetSQLValueString($biz_id, "int"));
		$Result1 = mysql_query_or_die($updateSQL, $useradmin);
		$ranking += 1;
	}
	mysql_free_result($get_fav_biz);
}

function update_album_position ($user_id) {
	global $database_useradmin, $useradmin;
	$selectPhotosSQL = sprintf("SELECT * FROM ".$database_useradmin.".photo_album_info WHERE user_id=%s AND removed=%s ORDER BY album_position",
					GetSQLValueString($user_id,"int"),
					GetSQLValueString('N',"text"));
	$get_albums = mysql_query_or_die($selectPhotosSQL, $useradmin);
	$position = 1;
	while ($row_get_albums=mysql_fetch_assoc($get_albums)) {
		$album_id = $row_get_albums['album_id'];
		$updateSQL = sprintf("UPDATE ".$database_useradmin.".photo_album_info SET album_position=%s WHERE user_id=%s AND album_id=%s",
					GetSQLValueString($position,"int"),
					GetSQLValueString($user_id,"int"),
					GetSQLValueString($album_id,"int"));
		$Result1 = mysql_query_or_die($updateSQL, $useradmin);
		$position += 1;
	}
	mysql_free_result($get_albums);
}

function update_photo_position_source ($album_id,$source) {
	global $database_useradmin, $useradmin;
	$selectPhotosSQL = sprintf("SELECT * FROM ".$database_useradmin.".photo_albums LEFT JOIN ".$database_useradmin.".site_photos ON photo_albums.photo_id=site_photos.photo_id WHERE album_id=%s AND source=%s ORDER BY photo_position",
			GetSQLValueString($album_id,"int"),
			GetSQLValueString($source,"text"));
	$get_photos = mysql_query_or_die($selectPhotosSQL, $useradmin);
	$position = 1;
	while ($row_get_photos=mysql_fetch_assoc($get_photos)) {
		$photo_id = $row_get_photos['photo_id'];
		$updateSQL = sprintf("UPDATE ".$database_useradmin.".photo_albums SET photo_position=%s WHERE album_id=%s AND photo_id=%s",
					GetSQLValueString($position,"int"),
					GetSQLValueString($album_id,"int"),
					GetSQLValueString($photo_id,"int"));
		$Result1 = mysql_query_or_die($updateSQL, $useradmin);
		$position += 1;
	}
	mysql_free_result($get_photos);
}

function update_photo_position ($album_id,$source) {
	global $database_useradmin, $useradmin;
	if (isset($source) && $source!='') {
		update_photo_position_source ($album_id,$source);
	} else {
		update_photo_position_source ($album_id,'S');
		update_photo_position_source ($album_id,'B');
		update_photo_position_source ($album_id,'U');
	}
}

function pad_sample_biz_photos ($country,$biz_id) {
	global $database_useradmin, $useradmin;
//	$no_photo_array = array(1,2,3,4,5);
//	$sample_photo_array = array (11,12,13,14,15);
//	shuffle($no_photo_array);
//	$photo_id_array = array_merge(array_slice($no_photo_array,1,4),$sample_photo_array);
	$photo_id_array = array(1,2,3,4,5);
	shuffle($photo_id_array);
//	array_unshift($photo_id_array,array_shift($no_photo_array));

	$deleteSQL = sprintf("DELETE FROM ".$database_useradmin.".biz_photos WHERE country=%s AND biz_id=%s AND photo_id<%s",
							  GetSQLValueString($country,"text"),
							  GetSQLValueString($biz_id,"int"),
							  GetSQLValueString(2000,"int"));
	$Result1 = mysql_query_or_die($deleteSQL, $useradmin);
	
	$selectSQL = sprintf("SELECT count(photo_id) AS count FROM ".$database_useradmin.".biz_photos WHERE country=%s AND biz_id=%s",
							  GetSQLValueString($country,"text"),
							  GetSQLValueString($biz_id,"int"));
	$get_count = mysql_query_or_die($selectSQL, $useradmin);
	if ($row_get_count=mysql_fetch_assoc($get_count)) {
		$num_photos=$row_get_count['count'];
	} else {
		$num_photos=0;
	}
	
	$photo_id_index = 0;
	if ($num_photos<1) {
		while ($num_photos<1) {
			$num_photos += 1;
			$insertValues .= sprintf(",(%s,%s,%s,%s,'N')",
								  GetSQLValueString($country,"text"),
								  GetSQLValueString($biz_id,"int"),
								  GetSQLValueString($photo_id_array[$photo_id_index],"int"),
								  GetSQLValueString($num_photos,"int"));
			$photo_id_index += 1;
		}
//		echo "SQL:".$insertSQL;
		$insertSQL = "INSERT INTO ".$database_useradmin.".biz_photos (country,biz_id,photo_id,ranking,is_main_photo) VALUES ".substr($insertValues,1);
		$Result1 = mysql_query_or_die($insertSQL, $useradmin);
	}
}

function get_photo_tn_markup ($photo_id,$language,$options) {
	global $database_useradmin,$useradmin;
	$tn_markup = '';
	$tn_markup .= '<div class="Photo_TN_Frame smallWords" '.($options['clickable']=='Y'?' onclick="thumbnail_clicked(event,'.$photo_id.');"':'').'>';
	$tn_markup .= '<div>';
	if ($options['show_id']=='Y') {
		$caption = 'ID: '.$photo_id.'<br />';
	} else if ($options['number']!=null) {
		$caption = $options['number'].'. ';
	} else {
		$caption = '';
	}
	
	$selectPhotoSQL = sprintf("SELECT * FROM ".$database_useradmin.".site_photos WHERE removed='N' AND photo_id=%s",
								  GetSQLValueString($photo_id,"int"));
	$get_photo = mysql_query_or_die($selectPhotoSQL, $useradmin);
	if ($row_get_photo=mysql_fetch_assoc($get_photo)) {
		$title = $row_get_photo['title'];
		$server = get_image_server($row_get_photo['server_ext']);
		$folder = $row_get_photo['folder'];
		$filename = $row_get_photo['filename'];
	} else {
		$title = '??';
		$folder= '';
		$filename = '';
	}
	$caption .= $title;
	$class = (isset($options['class'])?$options['class']:'');
	$tn_markup .= '<img class="Photo_TN_Img '.$class.'" src="'.$server.'user_photos/'.$folder.'/tn_'.$filename.'" alt="'.$title.'" title="'.$title.'" align="middle" />';
	$tn_markup .= '</div>';
	$tn_markup .= '<span>'.$caption.'</span>';
	$tn_markup .= '</div>';
	
	mysql_free_result($get_photo);
	return $tn_markup;		
}

function get_recipe_title($recipe_id,$language) {
	global $database_localconnect,$localconnect;
	
	$selectSQL = "SELECT food_recipe_html.recipe_id, food_recipes.tag_id, language, food_recipe_html.title FROM ".$database_localmain.".food_recipe_html".
		" LEFT JOIN ".$database_localmain.".food_recipes ON food_recipes.recipe_id=food_recipe_html.recipe_id".
		" WHERE language='".$language."' AND food_recipe_html.recipe_id=".$recipe_id;
	$get_title = mysql_query_or_die($selectSQL, $localconnect);
	if ($row_get_title=mysql_fetch_assoc($get_title)) {
		if ($row_get_title['title']!=null && $row_get_title['title']!='') {
			$title = $row_get_title['title'];
		} else {
			$title = get_tag_name($row_get_title['tag_id'],$language);
		}
	} else {
		$selectSQL = "SELECT food_recipe_html.recipe_id, food_recipes.tag_id, language, food_recipe_html.title FROM ".$database_localmain.".food_recipe_html".
			" LEFT JOIN ".$database_localmain.".food_recipes ON food_recipes.recipe_id=food_recipe_html.recipe_id".
			" WHERE food_recipe_html.recipe_id=".$recipe_id." ORDER BY language";
		$get_title = mysql_query_or_die($selectSQL, $localconnect);
		if ($row_get_title=mysql_fetch_assoc($get_title)) {
			if ($row_get_title['title']!=null && $row_get_title['title']!='') {
				$title = $row_get_title['title'];
			} else {
				$title = get_tag_name($row_get_title['tag_id'],$language);
			}
		}
	}
	mysql_free_result($get_title);
	return $title;
}

function getDefaultLanguage($defaultLangCode) {
	if (isset($_SERVER["HTTP_ACCEPT_LANGUAGE"])) {
		if ($defaultLangCode==null) {
			$browser_language = parseDefaultLanguage($_SERVER["HTTP_ACCEPT_LANGUAGE"]);
		} else {
			$browser_language = $defaultLangCode;
		}
		$browser_language=strtolower($browser_language);
		$main_language = substr($browser_language,0,2);
		$sub_language = substr($browser_language,3,2);
		switch ($main_language) {
			case "zh":
				switch ($sub_language) {
					case "cn": case "tw": 
						$language=$sub_language;
						break;
					case 'hk':
						$language='tw';
						break;
					case 'sg': 
						$language='cn';
						break;
					default: 
						$language='tw';
						break;
				};
				break;
			case "en": case "cn": case "tw": case "ja": case "de": case 'ko': case 'fr': case 'es': 
					$language=$main_language;
				break;
			default:
					$language='en';
				break;
		}
		return $language;
	} else {
		return parseDefaultLanguage(NULL);
	}
}

function parseDefaultLanguage($http_accept, $deflang = "en") {
   if(isset($http_accept) && strlen($http_accept) > 1)  {
      # Split possible languages into array
      $x = explode(",",$http_accept);
      foreach ($x as $val) {
         #check for q-value and create associative array. No q-value means 1 by rule
         if(preg_match("/(.*);q=([0-1]{0,1}\.\d{0,4})/i",$val,$matches))
            $lang[$matches[1]] = (float)$matches[2];
         else
            $lang[$val] = 1.0;
      }

      #return default language (highest q-value)
      $qval = 0.0;
      foreach ($lang as $key => $value) {
         if ($value > $qval) {
            $qval = (float)$value;
            $deflang = $key;
         }
      }
   }
   if (strlen($deflang)>3) {
	   $deflang=substr($deflang,0,3).strtoupper(substr($deflang,3));
   }
   return $deflang;
}

function get_fb_locale($deflang) {
	$locale=str_replace('-','_',$deflang);
	switch (substr($deflang,0,2)) {
		case 'zh': if ($deflang!='zh_TW' && $deflang!='zh_CN' && $deflang!='zh_HK') {$locale='zh_TW'; } break;
		case 'tw': $locale='zh_TW'; break;
		case 'cn': $locale='zh_CN'; break;
		case 'ja': $locale='ja_JP'; break;
		case 'ko': $locale='ko_KR'; break;
		case 'en': if ($deflang!='en_US' && $deflang!='en_GB') { $locale='en_GB'; } break;
		case 'de': if ($deflang!='de_DE') { $locale='de_DE'; } break;
		case 'fr': if ($deflang!='fr_FR') { $locale='fr_FR'; } break;
		case 'es': if ($deflang!='es_ES') { $locale='es_ES'; } break;
		default: $locale='en_GB'; break;
	}
	return $locale;
}

function browser_info($agent=null) {
  // Declare known browsers to look for
  $known = array('msie', 'firefox', 'safari', 'webkit', 'opera', 'netscape',
    'konqueror', 'gecko');

  // Clean up agent and build regex that matches phrases for known browsers
  // (e.g. "Firefox/2.0" or "MSIE 6.0" (This only matches the major and minor
  // version numbers.  E.g. "2.0.0.6" is parsed as simply "2.0"
  $agent = strtolower($agent ? $agent : $_SERVER['HTTP_USER_AGENT']);
  $pattern = '#(?<browser>' . join('|', $known) .
    ')[/ ]+(?<version>[0-9]+(?:\.[0-9]+)?)#';

  // Find all phrases (or return empty array if none found)
  if (!preg_match_all($pattern, $agent, $matches)) return array();

  // Since some UAs have more than one phrase (e.g Firefox has a Gecko phrase,
  // Opera 7,8 have a MSIE phrase), use the last one found (the right-most one
  // in the UA).  That's usually the most correct.
  $i = count($matches['browser'])-1;
  return array($matches['browser'][$i] => $matches['version'][$i],"browser"=>$matches['browser'][$i],"version"=>$matches['version'][$i]);
}

function truncate_utf8($string, $max_length, $wordsafe = FALSE, $add_ellipsis = FALSE, $min_wordsafe_length = 1) {
	/*
		Truncates a UTF-8-encoded string safely to a number of characters.
		Parameters
		
		$string The string to truncate.
		
		$max_length An upper limit on the returned string length, including trailing ellipsis if $add_ellipsis is TRUE.
		
		$wordsafe If TRUE, attempt to truncate on a word boundary. Word boundaries are spaces, punctuation, and Unicode characters used as word boundaries in non-Latin languages; see PREG_CLASS_UNICODE_WORD_BOUNDARY for more information. If a word boundary cannot be found that would make the length of the returned string fall within length guidelines (see parameters $max_length and $min_wordsafe_length), word boundaries are ignored.
		
		$add_ellipsis If TRUE, add t('...') to the end of the truncated string (defaults to FALSE). The string length will still fall within $max_length.
		
		$min_wordsafe_length If $wordsafe is TRUE, the minimum acceptable length for truncation (before adding an ellipsis, if $add_ellipsis is TRUE). Has no effect if $wordsafe is FALSE. This can be used to prevent having a very short resulting string that will not be understandable. For instance, if you are truncating the string "See myverylongurlexample.com for more information" to a word-safe return length of 20, the only available word boundary within 20 characters is after the word "See", which wouldn't leave a very informative string. If you had set $min_wordsafe_length to 10, though, the function would realise that "See" alone is too short, and would then just truncate ignoring word boundaries, giving you "See myverylongurl..." (assuming you had set $add_ellipses to TRUE).
	*/
	
	$ellipsis = ' […]';
	$max_length = max($max_length, 0);
	$min_wordsafe_length = max($min_wordsafe_length, 0);
	
	if (drupal_strlen($string) <= $max_length) {
		// No truncation needed, so don't add ellipsis, just return.
		return $string;
	}
	
	/*
	if ($add_ellipsis) {
		// Truncate ellipsis in case $max_length is small.
		$ellipsis = drupal_substr(t('...'), 0, $max_length);
		$max_length -= drupal_strlen($ellipsis);
		$max_length = max($max_length, 0);
	}
	*/

	if ($max_length <= $min_wordsafe_length) {
		// Do not attempt word-safe if lengths are bad.
		$wordsafe = FALSE;
	}
	
	$string = ltrim($string);
	if ($wordsafe) {
		$matches = array();
		// Find the last word boundary, if there is one within $min_wordsafe_length
		// to $max_length characters. preg_match() is always greedy, so it will
		// find the longest string possible.
		$found = preg_match('/^(.{' . $min_wordsafe_length . ',' . $max_length . '})[' . PREG_CLASS_UNICODE_WORD_BOUNDARY . ']/u', $string, $matches);
		if ($found) {
			$string = $matches[1];
		} else {
			$string = drupal_substr($string, 0, $max_length);
		}
	} else {
		$string = drupal_substr($string, 0, $max_length);
	}
	
	if ($add_ellipsis) {
		$string = rtrim($string).$ellipsis;
	}
	
	return $string;
}

function drupal_strlen($text) {
	// Count the amount of characters in a UTF-8 string. This is less than or equal to the byte count.
	global $multibyte;
	if ($multibyte == UNICODE_MULTIBYTE) {
		return mb_strlen($text);
	}
	else {
		// Do not count UTF-8 continuation bytes.
		return strlen(preg_replace("/[\x80-\xBF]/", '', $text));
	}
}

function drupal_substr($text, $start, $length = NULL) {
	/*
		Cut off a piece of a string based on character indices and counts. Follows the same behavior as PHP's own substr() function.
		
		Note that for cutting off a string at a known character/substring location, the usage of PHP's normal strpos/substr is safe and much faster.
	*/
  global $multibyte;
  if ($multibyte == UNICODE_MULTIBYTE) {
    return $length === NULL ? mb_substr($text, $start) : mb_substr($text, $start, $length);
  }
  else {
    $strlen = strlen($text);
    // Find the starting byte offset.
    $bytes = 0;
    if ($start > 0) {
      // Count all the continuation bytes from the start until we have found
      // $start characters or the end of the string.
      $bytes = -1;
      $chars = -1;
      while ($bytes < $strlen - 1 && $chars < $start) {
        $bytes++;
        $c = ord($text[$bytes]);
        if ($c < 0x80 || $c >= 0xC0) {
          $chars++;
        }
      }
    }
    elseif ($start < 0) {
      // Count all the continuation bytes from the end until we have found
      // abs($start) characters.
      $start = abs($start);
      $bytes = $strlen;
      $chars = 0;
      while ($bytes > 0 && $chars < $start) {
        $bytes--;
        $c = ord($text[$bytes]);
        if ($c < 0x80 || $c >= 0xC0) {
          $chars++;
        }
      }
    }
    $istart = $bytes;

    // Find the ending byte offset.
    if ($length === NULL) {
      $iend = $strlen;
    }
    elseif ($length > 0) {
      // Count all the continuation bytes from the starting index until we have
      // found $length characters or reached the end of the string, then
      // backtrace one byte.
      $iend = $istart - 1;
      $chars = -1;
      $last_real = FALSE;
      while ($iend < $strlen - 1 && $chars < $length) {
        $iend++;
        $c = ord($text[$iend]);
        $last_real = FALSE;
        if ($c < 0x80 || $c >= 0xC0) {
          $chars++;
          $last_real = TRUE;
        }
      }
      // Backtrace one byte if the last character we found was a real character
      // and we don't need it.
      if ($last_real && $chars >= $length) {
        $iend--;
      }
    }
    elseif ($length < 0) {
      // Count all the continuation bytes from the end until we have found
      // abs($start) characters, then backtrace one byte.
      $length = abs($length);
      $iend = $strlen;
      $chars = 0;
      while ($iend > 0 && $chars < $length) {
        $iend--;
        $c = ord($text[$iend]);
        if ($c < 0x80 || $c >= 0xC0) {
          $chars++;
        }
      }
      // Backtrace one byte if we are not at the beginning of the string.
      if ($iend > 0) {
        $iend--;
      }
    }
    else {
      // $length == 0, return an empty string.
      return '';
    }

    return substr($text, $istart, max(0, $iend - $istart + 1));
  }
}
  
   /*   
    Utf-8、gb2312都支持的汉字截取函数   
    cut_str(字符串, 截取长度, 开始长度, 编码);   
    编码默认为 utf-8   
    开始长度默认为 0   
    */  
	
   function cut_str($string, $sublen, $start = 0, $code = 'UTF-8')    
   {    
      if($code == 'UTF-8')    
      {    
          $pa = "/[\x01-\x7f]|[\xc2-\xdf][\x80-\xbf]|\xe0[\xa0-\xbf][\x80-\xbf]|[\xe1-\xef][\x80-\xbf][\x80-\xbf]|\xf0[\x90-\xbf][\x80-\xbf][\x80-\xbf]|[\xf1-\xf7][\x80-\xbf][\x80-\xbf][\x80-\xbf]/";    
          preg_match_all($pa, $string, $t_string);    
 
          if(count($t_string[0]) - $start > $sublen) return join('', array_slice($t_string[0], $start, $sublen))."...";    
          return join('', array_slice($t_string[0], $start, $sublen));    
      }    
      else    
      {    
          $start = $start*2;    
          $sublen = $sublen*2;    
          $strlen = strlen($string);    
          $tmpstr = '';    
 
         for($i=0; $i<$strlen; $i++)    
          {    
              if($i>=$start && $i<($start+$sublen))    
              {    
                  if(ord(substr($string, $i, 1))>129)    
                  {    
                      $tmpstr.= substr($string, $i, 2);    
                  }    
                  else    
                  {    
                      $tmpstr.= substr($string, $i, 1);    
                  }    
              }    
              if(ord(substr($string, $i, 1))>129) $i++;    
          }    
          if(strlen($tmpstr)<$strlen ) $tmpstr.= "...";    
          return $tmpstr;    
      }    
   }    
function linkifyYouTubeURLs($text) {
    $text = preg_replace('~
        # Match non-linked youtube URL in the wild. (Rev:20111012)
        https?://         # Required scheme. Either http or https.
        (?:[0-9A-Z-]+\.)? # Optional subdomain.
        (?:               # Group host alternatives.
          youtu\.be/      # Either youtu.be,
        | youtube\.com    # or youtube.com followed by
          \S*             # Allow anything up to VIDEO_ID,
          [^\w\-\s]       # but char before ID is non-ID char.
        )                 # End host alternatives.
        ([\w\-]{11})      # $1: VIDEO_ID is exactly 11 chars.
        (?=[^\w\-]|$)     # Assert next char is non-ID or EOS.
        (?!               # Assert URL is not pre-linked.
          [?=&+%\w]*      # Allow URL (query) remainder.
          (?:             # Group pre-linked alternatives.
            [\'"][^<>]*>  # Either inside a start tag,
          | </a>          # or inside <a> element text contents.
          )               # End recognized pre-linked alts.
        )                 # End negative lookahead assertion.
        [?=&+%\w-]*        # Consume any URL (query) remainder.
        ~ix', 
        '<iframe width="540" height="304" src="http://www.youtube.com/embed/$1?wmode=opague&rel=0&controls=1&showinfo=0" frameborder="0" allowfullscreen></iframe>',
        $text);
    return $text;
}
function smart_trim($text, $max_len, $trim_middle = false, $trim_chars = '...')
{
	$text = trim($text);
	if (strlen($text) < $max_len) {
		return $text;
	} elseif ($trim_middle) {
		$hasSpace = strpos($text, ' ');
		if (!$hasSpace) {
			/**
			 * The entire string is one word. Just take a piece of the
			 * beginning and a piece of the end.
			 */
			$first_half = substr($text, 0, $max_len / 2);
			$last_half = substr($text, -($max_len - strlen($first_half)));
		} else {
			/**
			 * Get last half first as it makes it more likely for the first
			 * half to be of greater length. This is done because usually the
			 * first half of a string is more recognizable. The last half can
			 * be at most half of the maximum length and is potentially
			 * shorter (only the last word).
			 */
			$last_half = substr($text, -($max_len / 2));
			$last_half = trim($last_half);
			$last_space = strrpos($last_half, ' ');
			if (!($last_space === false)) {
				$last_half = substr($last_half, $last_space + 1);
			}
			$first_half = substr($text, 0, $max_len - strlen($last_half));
			$first_half = trim($first_half);
			if (substr($text, $max_len - strlen($last_half), 1) == ' ') {
				/**
				 * The first half of the string was chopped at a space.
				 */
				$first_space = $max_len - strlen($last_half);
			} else {
				$first_space = strrpos($first_half, ' ');
			}
			if (!($first_space === false)) {
				$first_half = substr($text, 0, $first_space);
			}
		}
		return $first_half.$trim_chars.$last_half;
	} else {
		$trimmed_text = substr($text, 0, $max_len);
		$trimmed_text = trim($trimmed_text);
		if (substr($text, $max_len, 1) == ' ') {
			/**
			 * The string was chopped at a space.
			 */
			$last_space = $max_len;
		} else {
			/**
			 * In PHP5, we can use 'offset' here -Mike
			 */
			$last_space = strrpos($trimmed_text, ' ');
		}
		if (!($last_space === false)) {
			$trimmed_text = substr($trimmed_text, 0, $last_space);
		}
		return remove_trailing_punctuation($trimmed_text).$trim_chars;
	}
}
/**
 * Strip trailing punctuation from a line of text.
 *
 * @param  string $text The text to have trailing punctuation removed from.
 *
 * @return string       The line of text with trailing punctuation removed.
 */
function remove_trailing_punctuation($text)
{
	return preg_replace("'[^a-zA-Z_0-9]+$'s", '', $text);
}
function replace_hyperlink($text) {
	return preg_replace('/(?<!src)(?<!=[\x22\x27])\b((http[s]?:\/\/[^\/^\x20^\<]+)(\/[^\/^\x20^\<]*)*[\/]?)\b/','<a href="$1" target="_blank">$2...</a>',$text);
}
?>