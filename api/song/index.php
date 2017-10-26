<?php

$url = "http://chisdealhd.xyz/radio/np.php";
header("Access-Control-Allow-Origin: *");
$content = file_get_contents($url);
$json = json_decode($content, true);
$title = $json['track']['title'];
$artist = $json['track']['artists'];
print "$artist  - $title";
?>