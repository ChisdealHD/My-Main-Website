<?php
    //grabs the parameters of the url ?user=
    $_GET['user'];
    $streamer = $_GET['user'];
    //defines the url we want to parse
    $url = "https://mixer.com/api/v1/channels/$streamer";
    //gets the url contents
    $content = json_decode(file_get_contents($url), true);
    //this is where you parse through the data for the fields we want
    $beta = $content['numFollowers'];
    if (strtolower($beta) == true) {
    $beta = "$streamer Has $beta Followers";
}
    if (strtolower($beta) == false) {
    $beta = "$streamer is not Listed on Mixer";
}
    echo $beta;
?>