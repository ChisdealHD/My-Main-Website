<?php 

    //grabs the parameters of the url ?user=

    $url = "https://mixer.com/api/v1/channels/ChisdealHD";

    $content = file_get_contents($url);

    $json = json_decode($content, true);

    $follows = $json['numFollowers'];

    $title = $json['name'];

    $name = $json['token'];

    $live = $json['online'] == true ? 'Online' : 'Offline ';

    $beamid = $json['id'];

	$host1 = $json['hosteeId'];

	$host = $json['hosteeId'] == true ? $host1 : $beamid;

    $sparks = $json['user']['sparks'];

    $lvl = $json['user']['level'];

    $facebook = $json['user']['social']['facebook'];

    $twitter = $json['user']['social']['twitter'];

    $youtube = $json['user']['social']['youtube'];

    $bio = $json['user']['bio'];

    $game = $json['type']['name'];

    $Followers = " Followers";

    $url2 = "https://mixer.com/api/v1/channels/35982/hosters";

    $content2 = file_get_contents($url2);

    $json2 = json_decode($content2, true);

    $url3 = "https://mixer.com/api/v1/channels/ChisdealHD?fields=online";

    $content3 = file_get_contents($url3);

    $json3 = json_decode($content3, true);

    $hosters = count($json2);

	$url4 = "https://mixer.com/api/v1/channels/35982/recordings";

	$content4 = file_get_contents($url4);

    $json4 = json_decode($content4, true);

	$vod = count($json4);

	$vod1 = $json4['vods'][3]['baseUrl'];

?>


<!DOCTYPE html>
<html class="full" lang="en">
<!-- Make sure the <html> tag is set to the .full CSS class. Change the background image in the full.css file. -->

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Live Page">
    <meta name="author" content="ChisdealHD">

    <title>ChisdealHD - Live Status Page!</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/styles.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<audio id="audioplayer">
		</audio>
		<script>
			var lastSong = null;
			var selection = null;
			var playlist = ["http://chisdealhd.xyz/music/MACKLEMORE_RYAN_LEWIS_-_CAN_T_HOLD_US_FEAT_RAY_DAL.ogg ", "http://chisdealhd.xyz/music/tiasu%20-%20Raw%20_%20Ninety9Lives%20release.ogg", "http://chisdealhd.xyz/music/Trip40%20%20-%20Into%20The%20Night%20_%20Ninety9Lives%20release.ogg", "http://chisdealhd.xyz/music/Adele%20-%20Hometown%20Glory%20(High%20Contrast%20Remix).ogg", "http://chisdealhd.xyz/music/Alan%20Walker%20-%20Faded%20(Luke%20Christopher%20Remix).ogg", "http://chisdealhd.xyz/music/Flux%20Pavilion%20&%20Matthew%20Koma%20-%20Emotional%20(Virtual%20Riot%20Remix).ogg", "http://chisdealhd.xyz/music/James%20Arthur%20-%20Impossible%20(Acoustic).ogg", "http://chisdealhd.xyz/music/Mr%20Probz%20-%20Waves%20%5bOfficial%20Music%20Video%5d.ogg", "http://chisdealhd.xyz/music/Naughty%20Boy%20-%20La%20La%20La%20ft.%20Sam%20Smith.ogg", "http://chisdealhd.xyz/music/MACKLEMORE%20&%20RYAN%20LEWIS%20-%20THRIFT%20SHOP%20FEAT.%20WANZ%20(OFFICIAL%20VIDEO).ogg", "http://chisdealhd.xyz/music/loading10.ogg", "http://chisdealhd.xyz/music/loading9.ogg", "http://chisdealhd.xyz/music/loading8.ogg", "http://chisdealhd.xyz/music/loading7.ogg", "http://chisdealhd.xyz/music/loading4.ogg"]; // List of Songs
			var player = document.getElementById("audioplayer"); // Get Audio Element
			player.autoplay=true;
			player.volume = 0.4
			player.addEventListener("ended", selectRandom); // Run function when song ends

			function selectRandom(){
				while(selection == lastSong){ // Repeat until different song is selected
					selection = Math.floor(Math.random() * playlist.length);
				}
				lastSong = selection; // Remember last song
				player.src = playlist[selection]; // Tell HTML the location of the new Song

			}

			selectRandom(); // Select initial song
			player.play(); // Start Song
		</script>
		
<div class="background-wrap">
	<div id="player"></div>
<script>
// Loads the IFrame Player API code asynchronously.
  var tag = document.createElement('script');
  tag.src = "https://www.youtube.com/player_api";
  var firstScriptTag = document.getElementsByTagName('script')[0];
  firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

  // Replaces the 'ytplayer' element with an <iframe> and
  // YouTube player after the API code downloads.
  var player;
function onYouTubePlayerAPIReady() {
    player = new YT.Player('player', {
			height: '100%',
			width: '100%',
        playerVars: {
            'autoplay': 1,
            'controls': 0,
            'autohide': 1,
            'wmode': 'opaque',
            'showinfo': 0,
            'loop': 1,
            'mute': 1,
            //'start': 15,
            //'end': 110,
            'playlist': 'gy9-FOiR4-s'

        },
        videoId: '93D1t02pUsM',
        events: {
            'onReady': onPlayerReady
        }
    });

}

function onPlayerReady(event) {
    event.target.mute();
    $('#text').fadeIn(400);
    //why this? Well, if you want to overlay text on top of your video, you
    //will have to fade it in once your video has loaded in order for this
    //to work in Safari, or your will get an origin error.
}

//this pauses the video when it's out of view, just wrap your video in .m-//video
$(window).scroll(function() {
   var hT = $('.m-video').height(),
       wS = $(this).scrollTop();
   if (wS > hT) {
      player.pauseVideo();
   }
   else {
      player.playVideo();
   }
});
</script>	
</div>
<div class="content"> 

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">

<div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand" href="#">ChisdealHD</a></div>
                  <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">

					<li class="active"><a href='#'>Home</a>
                    <li><a href='http://twitch.tv/chisdealhd'>TWITCH</a></li>
					<li><a href='https://mixer.com/<?php echo $name;?>'>MIXER</a></li>
					<li><a href='http://smashcast.tv/chisdealhd'>SMASHCAST</a></li>
					<li><a href='http://youtube.com/chisdeal2013'>YOUTUBE</a></li>
					<li><a href='https://www.facebook.com/chisdealhdyt/?ref=br_tf'>FACEBOOK</a></li>
					<li><a href='http://twitter.com/chisdeal2013'>TWITTER</a></li>
					<li><a href='http://discord.me/chisdealhd'>DISCORD</a></li>
					<li><a href='https://www.instagram.com/chisdealhd'>INSTAGRAM</a></li>
					<li><a id="myBtn">ABOUT</a></li>
					<li><a href='#'>CONTACT</a></li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
	<div class="logo">
  <p><img src="http://chisdealhd.xyz/images/Avatar_chis.png" width="24" height="23" alt=""/> <span style="font-size: 16px; font-style: normal; font-weight: bold;">live.chisdealhd.xyz</span>  </a></p>
</div><br>

<center><h1><span>ChisdealHD Is:</span></h1></center><br>
<center><h1><span><?php echo $live;?></span></h1></center><br>
	<section style='padding-top:20px;font:bold  44px arial;color:#68D800;'>
		<center><img src="http://chisdealhd.xyz/images/Avatar_chis.png" width="200" height="200" alt=""/></center>
	</section><br>
	
	<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
	<center><h1><span>ABOUT ME!</span></h1></center><br>
    <center><p>Hello, my name is ChisdealHD AKA Grant Robinson.
	im a Freindly Person with lot Tallent and i been Development past 3 Years when i used be Age 16
	I'm here because you guys got me some Interested. i am a Youtuber/Streamer aswell i play lot Games
	and lot awesome clips of me playing CS:GO, ARK and more. i want you lot interesting my Work and all stuff for you 
	what im doing and i need lot support as i can get. my PC is very bad for streaming other games thats caused by CPU.</p></center><br>
	<center> <table style="width:100%">
  <tr>
    <th>Name Parts</th>
    <th>Specs</th>
    <th>Year</th>
  </tr>
  <tr>
    <td>intell(R) HD 4400 Graphics Card</td>
    <td>ShaderModal 5.0, DirectX 11, 1GB RAM Using!</td>
    <td>Built in with PC</td>
  </tr>
  <tr>
    <td>intell(R) Core(TM) i3-4130 CPU</td>
    <td>3.40GHz 2-cores 2-HyperThreds</td>
    <td>Built in with PC</td>
  </tr>
  <tr>
    <td>RAM!</td>
    <td>8GB DDR3 RAM</td>
    <td>2015</td>
  </tr>
  <tr>
    <td>HHD</td>
    <td>300GB Sata HDD ST3360320AS, 250GB Sata HDD WDC WD2500JS-55MHB1, 500GB Sata HHD</td>
    <td>2015</td>
  </tr>
  <tr>
    <td>Motherboard</td>
    <td>HP IPM87-MP from HP Pavlion PC</td>
    <td>Built in</td>
  </tr>
  <tr>
    <td>WIFI Chip</td>
    <td>Qualcomm Atheros AR9485 802.11b/g/n WiFi Adapter</td>
    <td>Built in</td>
  </tr>
  <tr>
    <td>ISP WIFI!</td>
    <td>TalkTalk, 30MB Down 1.40MB UP</td>
    <td>2015</td>
  </tr>
</table> </center><br>
  </div>
</div><br>

<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

	<center><h1><span>Go and Check Him OUT! 
	and 
	hit that Follow Button!</span></h1></center><br>
	<center><button type="button" class="btn btn-primary" onclick="location.href='https://mixer.com/<?php echo $name;?>'">Mixer.com</button></center><br>
	<center><button type="button" class="btn btn-primary" onclick="location.href='https://twitch.tv/chisdealhd'">Twitch.tv</button></center>
</div>
    <!-- Put your page content here! -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>
	
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
