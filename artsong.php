<?php 
    //grabs the parameters of the url ?user=
    $url = "http://ip:8004/statistics?json=1";
    $content = file_get_contents($url);
    $json = json_decode($content, true);
    $now = $json['streams[0]']['songtitle'];
	$now1 = $json['streams']['0']['songtitle'];
    $listeners = $json['peaklisteners'];
	$listeners1 = $json['streams']['0']['currentlisteners'];
	$next = $json['online'] == true ? $hosteename : 'Not HOSTING! </3';
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

<p>
</br>
Listeners: <?php echo "<br>$listeners </br>";?></br>
Current track: <?php echo "<br>$naw : $naw1 </br>";?></span>
Next track: <span id="track-title">LIVE</span>
</p>

<div id="name"> <marquee behavior="scroll" direction="left" scrollamount="4"><span id="track-title"></span><br></marquee>

</div>
<div id="art">
  <img src="logo_sngle2.jpg" alt="LOGO" style="width:100px;height:240;">
  </div>
</body>
</html>