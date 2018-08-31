<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('asset_url()'))
{
	function asset_url()
    {
      	return base_url().'assets/';
    }
}

/**
 * 
 * @param File $file
 * @param string $upload_dir
 * @param string $file_types
 * @param int $max_file_size
 * @return multitype:number unknown |multitype:number string unknown
 */
function uploadImage($file,$upload_dir,$file_types,$max_file_size,$file_name=""){
	$status = array();
	$status['status'] = 0;
	$original_file_name = clean(basename($file["name"]));
	$files = explode(".",$original_file_name);
	$file_extention = end($files);
	if($file_name == "") {
		$file_name = $files[0];
	}
	
	$target_file = $upload_dir . microtime(true) . $file_name.".".$file_extention;
	$msg = validateFile($target_file,$file,$max_file_size,$file_types);
	if ($msg != "success") {
		$status['status'] = 0;
		$status['msg'] = $msg;
		return $status;
	} else {
		if (move_uploaded_file($file["tmp_name"], $target_file)) {
			$paths = explode("/",$target_file);
			array_shift($paths);
			$status['status'] = 1;
			$status['msg'] = "The file ". basename( $file["name"]). " has been uploaded.";
			$status['image'] = implode("/",$paths);
			return $status;
		} else {
			$status['status'] = 0;
			$status['msg'] = "Sorry, there was an error uploading your file.";
			return $status;
		}
	}
}

function validateFile($target_file,$file,$max_file_size,$file_types){
	$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
	if ($file["size"] > $max_file_size) {
		return "File size is too large.";
	}
	$imageFileType = strtolower($imageFileType);
	if(!in_array($imageFileType, $file_types)) {
		return "Sorry, only ".implode(",",$file_types)." files are allowed.";
	}
	return "success";
}

function clean($string) {
	$string = preg_replace('/\s+/', '-',$string);
	return preg_replace('/[^A-Za-z0-9\-.]/', '-', $string);
}

/**
 * Get user IP
 * @return string
 */
function getRealIP() {
   	$headers = array ('HTTP_X_FORWARDED_FOR', 'HTTP_X_FORWARDED', 'HTTP_FORWARDED_FOR', 'HTTP_FORWARDED', 'HTTP_VIA', 'HTTP_X_COMING_FROM', 'HTTP_COMING_FROM', 'HTTP_CLIENT_IP' );
   	foreach ( $headers as $header ) {
   		if (isset ( $_SERVER [$header]  )) {
   			if (($pos = strpos ( $_SERVER [$header], ',' )) != false) {
   				$ip = substr ( $_SERVER [$header], 0, $pos );
   			} else {
   				$ip = $_SERVER [$header];
   			}
   			$ipnum = ip2long ( $ip );
   			if ($ipnum !== - 1 && $ipnum !== false && (long2ip ( $ipnum ) === $ip)) {
   				if (($ipnum - 184549375) && ($ipnum  - 1407188993) && ($ipnum  - 1062666241))
   					if (($pos = strpos ( $_SERVER [$header], ',' )) != false) {
   						$ip = substr ( $_SERVER [$header], 0, $pos );
   					} else {
   						$ip = $_SERVER [$header];
   					}
   					return $ip;
   				}
   			}
   
   	}
   	return $_SERVER ['REMOTE_ADDR'];
}

function isPermitted($resource_id,$activity){
	$upermissions = $_SESSION['fbuserpermissions'];
	$key = array_search($resource_id, array_column($upermissions, 'resource_id'));
	$resource_permission = $upermissions[$key];
	$activity = $activity.'_permission';
	if ($resource_permission[$activity] == 'Y') {
		return true;
	} else {
		return false;
	}
}

function downloadExcel($data, $fileName){
	header("Content-Disposition: attachment; filename=\"$fileName\"");
	header("Content-Type: application/vnd.ms-excel");

	$flag = false;
	foreach($data as $row) {
		if(!$flag) {
			// display column names as first row
			echo implode("\t", array_keys($row)) . "\n";
			$flag = true;
		}
		array_walk($row, 'filterData');
		echo implode("\t", array_values($row)) . "\n";

	}
}

function filterData(&$str)
{

	$str = trim(preg_replace('/\s\s+/', ' ', $str));
	$str = preg_replace("/\r?\n/", "\\n", $str);
	if(strstr($str, '"')) $str = '"' . str_replace('"', '""', $str) . '"';
}

/**
 * Get Ineteger ID
 * @param string ID
 * @return integer ID
 */
function getIntId($id) {
	$intid = intval(preg_replace('/[^0-9]+/', '', $id), 10);
	return $intid;
}


function getLatLong($string) {
	$latlng = array();
	$details_url="https://maps.googleapis.com/maps/api/geocode/json?address=".urlencode($string)."&sensor=true";
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $details_url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	$response = json_decode(curl_exec($ch), true);
	//print_r($response);
	if ($response['status'] != 'OK') {
		$latlng['lat'] = "";
		$latlng['lng'] = "";
	} else {
		$geometry = $response['results'][0]['geometry'];
		$latlng['lat'] = $geometry['location']['lat'];
		$latlng['lng'] = $geometry['location']['lng'];
	}
	return $latlng;
}

function getGoogleDistance($fTdata) {
	$url = "https://maps.googleapis.com/maps/api/distancematrix/json?mode=driving&key=XXXXXXXXXXXXXXXXX";
	$params = array();
	$params['origins'] = $fTdata['from_lat'].", ".$fTdata['from_lng'];
	$params['destinations'] = $fTdata['to_lat'].", ".$fTdata['to_lng'];
	$url = $url."&".http_build_query($params);
	$ch = curl_init();
	curl_setopt($ch,CURLOPT_URL,$url);
	curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
	$output = curl_exec($ch);
	$result = json_decode($output,true);
	$distance = $result['rows'][0]['elements'][0]['distance']['value'];
	return $distance;
}

function getReferralCode($hash_length,$id) {
	$code = random36($hash_length).$id;
	$hash = str_split($code);
	shuffle($hash);
	return strtoupper(implode("",$hash));
}

function random36($length = 6)
{
	$str = '';
	$len = 1;
	while($len <= $length)
	{
		$str .= substr(base_convert(mt_rand(60466176, 2147483647), 10, 36), 0, $length);
		$len = strlen($str);
	}
	return substr($str,0,$length);
}
function moneyFormatIndia($num){

	$explrestunits = "" ;
	//$num = 160000;
	if(strlen($num)>3){
		$lastthree = substr($num, strlen($num)-3, strlen($num));
		$restunits = substr($num, 0, strlen($num)-3); // extracts the last three digits
		$restunits = (strlen($restunits)%2 == 1)?"0".$restunits:$restunits; // explodes the remaining digits in 2's formats, adds a zero in the beginning to maintain the 2's grouping.
		$expunit = str_split($restunits, 2);
		for($i=0; $i<sizeof($expunit); $i++){
			// creates each of the 2's group and adds a comma to the end
			if($i==0)
			{
				$explrestunits .= (int)$expunit[$i].","; // if is first value , convert into integer
			}else{
				$explrestunits .= $expunit[$i].",";
			}
		}
		$thecash = $explrestunits.$lastthree;
	} else {
		$thecash = $num;
	}
	return $thecash; // writes the final format where $currency is the currency symbol.
}

function getArialGeoDistance($latitudeFrom, $longitudeFrom, $latitudeTo, $longitudeTo, $earthRadius = 6371000)
{
	// convert from degrees to radians
	$latFrom = deg2rad($latitudeFrom);
	$lonFrom = deg2rad($longitudeFrom);
	$latTo = deg2rad($latitudeTo);
	$lonTo = deg2rad($longitudeTo);

	$latDelta = $latTo - $latFrom;
	$lonDelta = $lonTo - $lonFrom;

	$angle = 2 * asin(sqrt(pow(sin($latDelta / 2), 2) +
			cos($latFrom) * cos($latTo) * pow(sin($lonDelta / 2), 2)));
	return $angle * $earthRadius;
}
function stringEncrypt($str)
{
	$passw=null;
	$r='';
	$md=$passw?substr(md5($passw),0,16):'';
	$str=base64_encode($md.$str);
	$abc='ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
	$a=str_split($abc);
	$b=strrev($abc);
	if($passw){
		$b=_mixing_passw($b,$passw);
	}else{
		$r=rand(10,65);
		$b=mb_substr($b,$r).mb_substr($b,0,$r);
	}
	$s='';
	$b=str_split($b);
	$str=str_split($str);
	$lens=count($str);
	$lena=count($a);
	for($i=0;$i<$lens;$i++){
		for($j=0;$j<$lena;$j++){
			if($str[$i]==$a[$j]){
				$s.=$b[$j];
			}
		};
	};
	return $s.$r;
}
function stringDacrypt($str)
{
	$passw = null;
	$abc='ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
	$a=str_split($abc);
	$b=strrev($abc);
	if($passw){
		$b=_mixing_passw($b,$passw);
	}else{
		$r=mb_substr($str,-2);
		$str=mb_substr($str,0,-2);
		$b=mb_substr($b,$r).mb_substr($b,0,$r);
	}
	$s='';
	$b=str_split($b);
	$str=str_split($str);
	$lens=count($str);
	$lenb=count($b);
	for($i=0;$i<$lens;$i++){
		for($j=0;$j<$lenb;$j++){
			if($str[$i]==$b[$j]){
				$s.=$a[$j];
			}
		};
	};
	$s=base64_decode($s);
	if($passw&&substr($s,0,16)==substr(md5($passw),0,16)){
		$result = substr($s,16);
	}else{
		$result= $s;
	}
	return $result;
}
function dateDifference($userdate)
{
	$bloghistory = "";
	
	$cdate = date('Y-m-d');
	$selected_date = date('Y-m-d',strtotime($userdate));
	$t1 = StrToTime ( date('Y-m-d H:i:s') );
	$t2 = StrToTime ( $userdate );
	$diff = $t1 - $t2;
	
	if($cdate == $selected_date)
	{
		$hours =  number_format((float)($diff / ( 60 * 60 )), 2, '.', '');
		if(round($hours) == 0) {
			$minute = round(abs($t1 - $t2) / 60,2);
			$bloghistory = round($minute)." Minute Ago";
	
		} else {
			$bloghistory = round($hours)." Hours Ago";
		}
			
	} else {
			
		$date1 = date_create($selected_date);
		$date2 = date_create( $cdate);
		$difference = date_diff($date1,$date2);
		$days = $difference->format("%a Days");
			
		if($days == 1)
		{
			$bloghistory = "Yesterday";
		}
		else if($days > 31) {
			$currentyear = date('Y');
			$selectedyear = date('Y',strtotime($userdate));
			if($currentyear == $selectedyear) {
				$month = $difference->format("%m Months");
				$bloghistory = $month." Ago";
			} else {
					
				$year = $difference->format("%y Year");
				if($year == 0){
					$month = $difference->format("%m Months");
					$bloghistory = $month." Ago";
				} else {
					$bloghistory = $year." Ago";
				}
			}
		}
		else {
			$bloghistory = $days." Ago";
		}
	}
	return $bloghistory;
}

function frontendDateFormate($date)
{
	$newdate = date("j M Y",strtotime($date));
	return $newdate;
}
function frontend_getDateformate()
{
	$formate = "dd M yyyy";
	return $formate;
}

function auto_admin_logout () {
	
	$inactive = 50;
	$session_life = time()  - $_SESSION['timeout'];
	if($session_life > $inactive) {
		session_destroy ();
		redirect(base_url());
	}
	$_SESSION['admin_timeout'] =time();
	
}

function getWidth($image) {
	$sizes = getimagesize($image);
	$width = $sizes[0];
	return $width;
}
function getHeight($image) {
	$sizes = getimagesize($image);
	$height = $sizes[1];
	return $height;
}
function resizeImage($image,$width,$height,$scale,$ext) {
	$newImageWidth = ceil($width * $scale);
	$newImageHeight = ceil($height * $scale);
	$newImage = imagecreatetruecolor($newImageWidth,$newImageHeight);
	switch ($ext) {
		case 'jpg':
		case 'jpeg':
			$source = imagecreatefromjpeg($image);
			break;
		case 'gif':
			$source = imagecreatefromgif($image);
			break;
		case 'png':
			//$source = imagecreatefrompng($image);
			$source = imagecreatefromstring(file_get_contents($image));
			break;
		default:
			$source = false;
			break;
	}
	imagecopyresampled($newImage,$source,0,0,0,0,$newImageWidth,$newImageHeight,$width,$height);
	imagejpeg($newImage,$image,90);
	chmod($image, 0777);
	return $image;
}

function getInvoiceCode($id) {
	$tripid = str_pad($id, 5, '0', STR_PAD_LEFT);
	$id = "".$id;
	return $tripid;
}

function ip_info($ip = NULL, $purpose = "location", $deep_detect = TRUE) {
	$output = NULL;
	if (filter_var($ip, FILTER_VALIDATE_IP) === FALSE) {
		$ip = $_SERVER["REMOTE_ADDR"];
		if ($deep_detect) {
			if (filter_var(@$_SERVER['HTTP_X_FORWARDED_FOR'], FILTER_VALIDATE_IP))
				$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
			if (filter_var(@$_SERVER['HTTP_CLIENT_IP'], FILTER_VALIDATE_IP))
				$ip = $_SERVER['HTTP_CLIENT_IP'];
		}
	}
	$purpose    = str_replace(array("name", "\n", "\t", " ", "-", "_"), NULL, strtolower(trim($purpose)));
	$support    = array("country", "countrycode", "state", "region", "city", "location", "address");
	$continents = array(
			"AF" => "Africa",
			"AN" => "Antarctica",
			"AS" => "Asia",
			"EU" => "Europe",
			"OC" => "Australia (Oceania)",
			"NA" => "North America",
			"SA" => "South America"
	);
	if (filter_var($ip, FILTER_VALIDATE_IP) && in_array($purpose, $support)) {
		$ipdat = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=" . $ip));
		if (@strlen(trim($ipdat->geoplugin_countryCode)) == 2) {
			switch ($purpose) {
				case "location":
					$output = array(
					"city"           => @$ipdat->geoplugin_city,
					"state"          => @$ipdat->geoplugin_regionName,
					"country"        => @$ipdat->geoplugin_countryName,
					"country_code"   => @$ipdat->geoplugin_countryCode,
					"continent"      => @$continents[strtoupper($ipdat->geoplugin_continentCode)],
					"continent_code" => @$ipdat->geoplugin_continentCode
					);
					break;
				case "address":
					$address = array($ipdat->geoplugin_countryName);
					if (@strlen($ipdat->geoplugin_regionName) >= 1)
						$address[] = $ipdat->geoplugin_regionName;
					if (@strlen($ipdat->geoplugin_city) >= 1)
						$address[] = $ipdat->geoplugin_city;
					$output = implode(", ", array_reverse($address));
					break;
				case "city":
					$output = @$ipdat->geoplugin_city;
					break;
				case "state":
					$output = @$ipdat->geoplugin_regionName;
					break;
				case "region":
					$output = @$ipdat->geoplugin_regionName;
					break;
				case "country":
					$output = @$ipdat->geoplugin_countryName;
					break;
				case "countrycode":
					$output = @$ipdat->geoplugin_countryCode;
					break;
			}
		}
	}
	return $output;
}

function getFileName($file) {
	$ext = pathinfo($file, PATHINFO_EXTENSION);
	$fileName = "";
	if($ext == 'pdf') {
		$fileName = 'images/pdfimg.png';
	} elseif($ext =='doc' || $ext =='docx') {
		$fileName = 'images/word.png';
	} elseif($ext =='xls' || $ext =='xlsx') {
		$fileName = 'images/excel.jpg';
	} elseif($ext =='ppt' || $ext =='pptx') {
		$fileName = 'images/ppt.jpg';
	} elseif($ext =='zip' || $ext =='rar' || $ext =='tar') {
		$fileName = 'images/zipfile.png';
	} elseif($ext =='txt') {
		$fileName = 'images/txtfile.png';
	} elseif($ext =='jpg' || $ext =='JPG' || $ext =='png' || $ext =='PNG' || $ext =='gif' || $ext =='GIF' || $ext =='jpeg' || $ext =='JPEG') {
		//$fileName = 'images/imagicon.jpeg';
		$fileName = $file;
	} else {
		$fileName = $file;
	}
	return $fileName;
}

function fulltext_search_str($field_name,$str) {
	$str = strtolower($str);
	$common_keywords = explode(" ",$str);
	$keywords = array_values(array_unique($common_keywords));
	$str_sql = "";
	foreach ($keywords as $keyword) {
		if(strlen(trim($keyword)) > 0) {
			if($str_sql == "") {
				$str_sql = $field_name." LIKE '%".$keyword."%' ";
			} else {
				$str_sql = $str_sql."OR ".$field_name." LIKE '%".$keyword."%' ";
			}
		}
	}
	return $str_sql;
}
function text_search_str($field_name,$str) {
	$str = strtolower($str);
	$str_sql = "";
	$str_sql = $field_name." LIKE '%".$str."%' ";
	return $str_sql;
}

function fullOrder_str($str,$i) {
	$str = strtolower($str);
	$common_keywords = explode(" ",$str);
	$keywords = array_values(array_unique($common_keywords));

	$str_sql = "";
	foreach ($keywords as $keyword) {
		if(strlen(trim($keyword)) > 0) {
			$str_sql = $str_sql. " WHEN  '".$keyword."' THEN ".$i;
			$i++;
		}
	}
	
	return $str_sql;
}

