<?php

$url = "http://chisdealhd.xyz/radio/np.php";
$content = file_get_contents($url);
$json = json_decode($content, true);
header('Access-Control-Allow-Origin: *');
$title = $json['track']['title'];
print "$title";
?>