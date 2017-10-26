<?php
    //grabs the parameters of the url ?user=
    $ytkey = "";


    //Mixer API
    $url = "https://mixer.com/api/v1/channels/ChisdealHD";
    $content = file_get_contents($url);
    $mixer = json_decode($content, true);


    //Twitch API
    $url1 = "https://api.twitch.tv/kraken/channels/chisdealhd?client_id=";
    $content1 = file_get_contents($url1);
    $twitch = json_decode($content1, true);


    //Youtube API
    $url2 = "https://www.googleapis.com/youtube/v3/channels?part=statistics&id=UCbwlLVr4jf1cR0VBrddPUoQ&key=";
    $content2 = file_get_contents($url2);
    $youtube = json_decode($content2, true);


    //Smashcast API
    $url3 = "https://api.smashcast.tv/user/chisdealhd";
    $content3 = file_get_contents($url3);
    $smashcast = json_decode($content3, true);

    //PlayerME API
    $url4 = "https://player.me/api/v1/users/ChisdealHD?username=true";
    $content4 = file_get_contents($url4);
    $playerme = json_decode($content4, true);


    //INFO Kept
    $reload = "javascript:void(0)";
    $followermixer = $mixer['numFollowers'];
    $followersmashcast = $smashcast['followers'];
    $followertwitch = $twitch['followers'];
    $youtubesubs = $youtube['items'][0]['statistics']['subscriberCount'];
    $followerplayerme = $playerme['results']['followers_count'];
    $foo = new StdClass();
    $foo->YouTube = "Coming SOON!";
    $foo->Mixer = $followermixer;
    $foo->Twitch = $followertwitch;
    $foo->Smashcast = $followersmashcast;
    $foo->Playerme = $followerplayerme;

    $json = json_encode($foo);
    echo $json;
    //=> {"hello":"world","bar":"baz"}
?>