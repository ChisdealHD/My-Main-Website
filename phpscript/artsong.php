<?php 
    //grabs the parameters of the url ?user=
    $url = "http://chisdealhd.xyz/radio/np.php";
    $content = file_get_contents($url);
    $json = json_decode($content, true);
    $title = $json['track']['title'];
    $artist = $json['track']['artists'];
    $listeners = $json['current'];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>Untitled Document</title>
<style type="text/css">
#name {
	position:absolute;
	width:256px;
	height:27px;
	z-index:1;
	left: 364px;
	top: 151px;
	font-size:22px;
	font-weight:900;
	color: #0F3;
	background-color:#000000;
}

#art {
	position:absolute;
	width:102px;
	height:102px;
	z-index:3;
	left: 83px;
	top: 86px;
}
}
</style>
</head>

<body>


<div id="name"> <marquee behavior="scroll" direction="left" scrollamount="4"><?php echo "$artist";?> - <?php echo "$title";?><br></marquee>

</div>
<div id="art">
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


$sc_url_ip = "162.244.80.30"; // <= CHANGE THIS
//ex: 6x.3x.18x.14x

$sc_url_port = "8498"; // <= CHANGE THIS
//ex:8000


////////////////////
// END OF CONFIG AREA
//
// DO NOT EDIT BELOW
// UNLESS YOU KNOW WHAT YOU ARE DOING
////////////////////

function getNowPlaying($sc_url_ip,$sc_url_port)
{

$open = fsockopen($sc_url_ip,$sc_url_port,$errno,$errstr,'.5'); 
	if ($open) { 
	fputs($open,"GET /7.html HTTP/1.1\nUser-Agent:Mozilla\n\n"); 
	stream_set_timeout($open,'1');
	$read = fread($open,200);
	$text = explode(",",$read);
	if($text[6] == '' || $text[6] == '</body></html>'){ $msg = ' live stream '; } else { $msg = $text[6]; }
	$text = $msg; 
	} else {  return false; } 
	fclose($open);
	
	return $text;	
}

//////////////////

//get the now playing

$current_song = getNowPlaying($sc_url_ip,$sc_url_port);
$current_song = iconv('ISO-8859-1', 'UTF-8', $current_song);

//print $current_song;
$singinfo = explode(" - ",$current_song);

$title = $json['track']['title'];
$artist = $json['track']['artists'];

$imgurl = @file_get_contents("http://api.depubliekeomroep.nl/anp/albumart.php?artiest=".$artist."&titel=".$title."&size=large");
//print $imgurl;
if ($imgurl != "") {
	print "<img style=\"width:100px;height:240;\" src=\"" . $imgurl . "\">";
} else { 
 print "<img style=\"width:100px;height:240;\" src=\"https://images-ext-1.discordapp.net/external/jT_RoqH3jKcy5D2vIlAsiJjG_EAABDxaDU8wmw-TMOo/https/cdn.discordapp.com/icons/357687170569338881/ce6db58c82eeb90e92f542cc44b41b39.jpg?width=80&height=80\">";
}
?>
  </div>
</body>
</html>
