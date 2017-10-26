<?php
    //grabs the parameters of the url ?user=
    $_GET['user'];
    $streamer = $_GET['user'];
    //defines the url we want to parse
    $youtube = "https://www.googleapis.com/youtube/v3/channels?part=statistics&id=$streamer&key=";
    //gets the url contents
    $youtubes = file_get_contents($youtube);
    $yt = json_decode($youtubes, true);
    //this is where you parse through the data for the fields we want
    $subs = $yt['items'][0]['statistics']['subscriberCount'];
    if (strtolower($subs) == true) {
    $subs = "$streamer Has $subs subscribers";
}
    if (strtolower($subs) == false) {
    $subs = "$streamer is not Listed on Youtube";
}
    echo $subs;
?>