<?php 
    $url = "http://ip:8081/radio/statistics?json=1";
    $content = file_get_contents($url);
    $json = json_decode($content, true);
    $song = $json['streams'][0]['songtitle'];
    $nextsong = $json['streams'][0]['nexttitle'];
    $listerners = $json['peaklisteners'];
    $dj = $json['streams'][0]['dj'];
    $foo = new StdClass();
    $foo->song_name = $song;
    $foo->artist_name = $nextsong;
    $foo->requested_by = $dj;
    $foo->listeners = $listerners;

    $json = json_encode($foo);
    echo $json;
    //=> {"hello":"world","bar":"baz"}
?>