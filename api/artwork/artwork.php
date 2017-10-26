<html>
<head>
<style>
html, body {
margin:0;
padding:0;
height:100%;
-ms-content-zooming:none;
}
label {
margin:0;
padding:0;
height:100%;
display:block;
overflow:auto;
-ms-content-zooming:zoom;
-ms-content-zoom-limit-max:500%;
-ms-content-zoom-chaining:none;
}
img {
display:block;
max-width:100%;
max-height:100%;
}
input {
display:none;
}
input:checked + label > img {
max-width:none;
max-height:none;
}
input:checked + label {
-ms-content-zoom-limit-min:10%;
}
</style>
<style media="(max-width: 100px), (max-height: 100px)">
img {
cursor:zoom-in;
}input:checked + label > img {
cursor:zoom-out;
}
</style>
<meta name="viewport" content="width=device-width; height=device-height;">
<link rel="stylesheet" href="resource://content-accessible/ImageDocument.css">
<link rel="stylesheet" href="resource://content-accessible/TopLevelImageDocument.css">
<link rel="stylesheet" href="chrome://global/skin/media/TopLevelImageDocument.css">
<title>artwork</title>
</head>
<body>
<input id="zoom" type="checkbox">
<label id="imgContainer" for="zoom">
<?php

$url = "http://chisdealhd.xyz/radio/np.php";
$content = file_get_contents($url);
$json = json_decode($content, true);

////////////////////////
// This script is provided free of charge
// from http://streamfinder.com
// Free to use. Free to change.
//
// Please keep this header in place if redistributing the script
//
// v 1.0 11/2010
//
////////////////////////

////////////////////
// CONFIG AREA
// MAKE EDITS BELOW
///////////////////

//Enter your shoutcast 7.htm url


//$sc_url_ip = "162.244.80.30"; // <= CHANGE THIS
//ex: 6x.3x.18x.14x

//$sc_url_port = "8498"; // <= CHANGE THIS
//ex:8000


////////////////////
// END OF CONFIG AREA
//
// DO NOT EDIT BELOW
// UNLESS YOU KNOW WHAT YOU ARE DOING
////////////////////

//function getNowPlaying($sc_url_ip,$sc_url_port)
//{

//$open = fsockopen($sc_url_ip,$sc_url_port,$errno,$errstr,'.5'); 
//	if ($open) { 
//	fputs($open,"GET /7.html HTTP/1.1\nUser-Agent:Mozilla\n\n"); 
//	stream_set_timeout($open,'1');
//	$read = fread($open,200);
//	$text = explode(",",$read);
//	if($text[6] == '' || $text[6] == '</body></html>'){ $msg = ' live stream '; } else { $msg = $text[6]; }
//	$text = $msg; 
//	} else {  return false; } 
//	fclose($open);
//	
//	return $text;	
//}

//////////////////

//get the now playing

//$current_song = getNowPlaying($sc_url_ip,$sc_url_port);
//$current_song = iconv('ISO-8859-1', 'UTF-8', $current_song);

//print $current_song;
//$singinfo = explode(" - ",$current_song);

$title = $json['track']['title'];
$artist = $json['track']['artists'];

$imgurl = @file_get_contents("http://api.depubliekeomroep.nl/anp/albumart.php?artiest=".$artist."&titel=".$title."&size=large");
//print $imgurl;
if ($imgurl != "") {
 print "<img class=\"transparent\" style=\"width:100px;height:100;\" src=\"" . $imgurl . "\">";
} else { 
 print "<img class=\"transparent\" style=\"width:100px;height:100;\" src=\"https://images-ext-1.discordapp.net/external/jT_RoqH3jKcy5D2vIlAsiJjG_EAABDxaDU8wmw-TMOo/https/cdn.discordapp.com/icons/357687170569338881/ce6db58c82eeb90e92f542cc44b41b39.jpg\">";
}
?>
</label>
</body>
</html>