<?php 
    $url = "http://162.244.80.30:8498/statistics?json=1";
    $content = file_get_contents($url);
    $json = json_decode($content, true);
    $song = $json['streams'][0]['songtitle'];
    $nextsong = $json['streams'][0]['nexttitle'];
    $listerners = $json['uniquelisteners'];
    $title = $json['streams'][0]['servertitle'];
?>

<?php
header("Content-Type: application/json");
header('Access-Control-Allow-Origin: *');
$ar = array('title' => $song, 'listeners' => $listerners, 'streamtitle' => $title);
echo json_encode($ar); // ["apple","orange","banana","strawberry"]
?>