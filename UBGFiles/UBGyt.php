<?php

$id = NULL;
$channel_id = 'UCl_74sFMm1Sm3ePaRGrSnqg';

$xml = simplexml_load_file(sprintf('https://www.youtube.com/feeds/videos.xml?channel_id=%s', $channel_id));

header("Content-Type: application/json");
header('Access-Control-Allow-Origin: *');

if (!empty($xml->entry[0]->children('yt', true)->videoId[0])){
    $id = $xml->entry[0]->children('yt', true)->videoId[0];
}

if (!empty($xml->entry[0]->title[0])){
    $id1 = $xml->entry[0]->title[0];
}

if (!empty($xml->entry[1]->children('yt', true)->videoId[0])){
    $ido = $xml->entry[1]->children('yt', true)->videoId[0];
}

if (!empty($xml->entry[1]->title[0])){
    $id1o = $xml->entry[1]->title[0];
}
?>

<?php
$ar = array('titlen' => $id1, 'videoidn' => $id, 'titleo' => $id1o, 'videoido' => $ido);
echo json_encode($ar);
?>