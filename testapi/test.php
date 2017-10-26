<?php 
$bacon = 'Bacon_Space';
$mixer = "http://mixer.com/". $bacon;
$twitch = "http://twitch.tv/". $bacon;
$reload = "javascript:void(0)";
$smashcast = "http://smashcast.tv/BaconSpace";
$clientid = "?client_id=";
$url = "https://mixer.com/api/v1/channels/". $bacon;
    $content = file_get_contents($url);
    $json = json_decode($content, true);
    $url6 = "https://api.smashcast.tv/user/baconspace";
    $content6 = file_get_contents($url6);
    $json6 = json_decode($content6, true);
        $url2 = "https://mixer.com/api/v1/channels/". $mixerid ."/hosters";
    $content2 = file_get_contents($url2);
    $json2 = json_decode($content2, true);
    $url3 = "https://mixer.com/api/v1/channels/" . $bacon ."?fields=online";
    $content3 = file_get_contents($url3);
    $json3 = json_decode($content3, true);
    $url5 = "https://player.me/api/v1/users/" . $bacon ."?username=true";
    $content5 = file_get_contents($url5);
    $json5 = json_decode($content5, true);
    $hosts = count($json2);
            $youtube = "https://www.googleapis.com/youtube/v3/channels?part=statistics&id=UCbwlLVr4jf1cR0VBrddPUoQ&key=";
    $youtubes = file_get_contents($youtube);
    $yt = json_decode($youtubes, true);
                $url7 = "https://api.twitch.tv/kraken/channels/bacon_space?client_id=";
    $content7 = file_get_contents($url7);
    $twitchjson = json_decode($content7, true);
    $twitchurl = $twitchjson['url'];
    $subs = $yt['items'][0]['statistics']['subscriberCount'];
    $follows = $json['numFollowers'];
    $title = $json['name'];
    $mixerid = $json['id'];
    $player = $json['user']['social']['player'];
    $instagram = $json['user']['social']['instagram'];
    $patreon = $json['user']['social']['patreon'];
    $soundcloud = $json['user']['social']['soundcloud'];
    $youtube = $json['user']['social']['youtube'];
    $facebook = $json['user']['social']['facebook'];
    $twitter = $json['user']['social']['twitter'];
    $cover = $json['cover']['url'];
    $pmfollows = $json5['results']['followers_count'];
    $name = $json['token'];
    $slive = $json6['is_live'];
    $description = $json['description'];


    $lives = $json['online'] == true ? 'online' : 'offline';
        if (strtolower($slive) == "0") {
    $slive = 'offline';
}
        if (strtolower($slive) == "1") {
    $slive = 'online';
}
$curl = curl_init();
curl_setopt_array($curl, array(
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => 'https://api.twitch.tv/kraken/streams/bacon_space?client_id='
));
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
$response = curl_exec($curl);
$checkkey = "language" ;
$position = strpos($response,$checkkey);

curl_close($curl);  

if ($position === false) 
{
 $tlive = "offline";
}
else
{
    $tlive = "online";
}

$profile = array(
  'follows' => array(
    'Mixer' => $json['numFollowers'],
    'Player' => $json5['results']['followers_count'],
    'Youtube' => $yt['items'][0]['statistics']['subscriberCount'],
    'Facebook' => null,
   'Twitter' => null
  )
);
$links = array(
  'links' => array(
    'mixer' => $mixer,
    'twitch' => $twitchjson['url'],
    'player' => $player,
    'instagram' => $instagram,
    'patreon' => $patreon,
    'youtube' => $youtube,
    'facebook' => $facebook,
   'twitter' => $twitter
  )
);
$stream = array(
  'live' => array(
    'mixer' => $lives,
    'twitch' => $tlive,
    'smashcast' => $slive
  )
);
 $arr = array('profile' => $profile, 'online' => $stream, 'social' => $links);
 echo json_encode($arr);
?>