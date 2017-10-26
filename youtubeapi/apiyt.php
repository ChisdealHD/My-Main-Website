<?php

    //Twitch API
    $url = "http://chisdealhd.x10host.com/radio/API/apiyt.php";
    $content1 = file_get_contents($url);
    $videoid = json_decode($content, true);


    //INFO Kept
    $reload = "javascript:void(0)";
    $ytvideos = $videoid['videoid'];
    $foo = new StdClass();
    $foo->videoid = $ytvideos;

    $json = json_encode($foo);
    echo $json;
    //=> {"hello":"world","bar":"baz"}
?>