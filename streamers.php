<?php 

    //Mixer Users

    $mixerurl1 = "https://mixer.com/api/v1/channels/ChisdealHD";

    $mixercontent1 = file_get_contents($mixerurl1);

    $mixerjson1 = json_decode($mixercontent1, true);

    $mixertitle1 = $mixerjson1['name'];

    $mixergame1 = $mixerjson1['type']['name'];

    $mixergame = $mixerjson1['type']['name'] == true ? $mixergame1 : '<font color="red">N/A</font>';

    $mixerlive1 = $mixerjson1['online'] == true ? '<a href="http://mixer.com/chisdealhd"><font color="orange">Online</font></a>' : '<font color="red">Offline</font>';

    $mixerbeamid1 = $mixerjson1['id'];

?>

<?php 

    //Stats Live!

    $twitchurl = "https://api.twitch.tv/kraken/streams/ChisdealHD?client_id=";

    $twitchcontent = file_get_contents($twitchurl);

    $twitchjson = json_decode($twitchcontent, true);

    $twitchgame1 = $twitchjson['stream']['channel'] ['game'];

    $twitchgame = $twitchjson['stream']['channel'] ['game'] == true ? $twitchgame1 : '<font color="red">N/A</font>';

    $twitchlive = $twitchjson['stream'] == true ? '<a href="http://twitch.tv/chisdealhd"><font color="orange">Online</font></a>' : '<font color="red">Offline</font>';
    
    $live = $mixerjson['stream'] == true ? '🔴' : '◯';

?>

<?php 

    //Mixer Users

    $mixerurl2 = "https://mixer.com/api/v1/channels/BigMikey150";

    $mixercontent2 = file_get_contents($mixerurl2);

    $mixerjson2 = json_decode($mixercontent2, true);

    $mixertitle1 = $mixerjson2['name'];

    $mixergame3 = $mixerjson2['type']['name'];

    $mixergame4 = $mixerjson2['type']['name'] == true ? $mixergame3 : '<font color="red">N/A</font>';

    $mixerlive2 = $mixerjson2['online'] == true ? '<a href="http://mixer.com/bigmikey150"><font color="orange">Online</font></a>' : '<font color="red">Offline</font>';

    $mixerbeamid1 = $mixerjson2['id'];

?>

<?php 

    //Stats Live!

    $twitchurl1 = "https://api.twitch.tv/kraken/streams/BigMikey150?client_id=";

    $twitchcontent1 = file_get_contents($twitchurl1);

    $twitchjson1 = json_decode($twitchcontent1, true);

    $twitchgame2 = $twitchjson1['stream']['channel'] ['game'];

    $twitchgame1 = $twitchjson1['stream']['channel'] ['game'] == true ? $twitchgame2 : '<font color="red">N/A</font>';

    $twitchlive1 = $twitchjson1['stream'] == true ? '<a href="http://twitch.tv/bigmikey150"><font color="orange">Online</font></a>' : '<font color="red">Offline</font>';

?>

<?php 

    //Mixer Users

    $mixerurl3 = "https://mixer.com/api/v1/channels/AstroSamz";

    $mixercontent3 = file_get_contents($mixerurl3);

    $mixerjson3 = json_decode($mixercontent3, true);

    $mixertitle3 = $mixerjson3['name'];

    $mixergame5 = $mixerjson3['type']['name'];

    $mixergame6 = $mixerjson3['type']['name'] == true ? $mixergame5 : '<font color="red">N/A</font>';

    $mixerlive3 = $mixerjson3['online'] == true ? '<a href="http://mixer.com/astrosamz"><font color="orange">Online</font></a>' : '<font color="red">Offline</font>';

    $mixerbeamid3 = $mixerjson3['id'];

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

<!-- Bootstrap -->
<link rel="stylesheet" href="css/bootstrap.css">

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


<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
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
        <li><a href="http://chisdealhd.xyz/sponsors/index.php">SponsorShip</a></li>
        <li><a href="http://chisdealhd.xyz/gallery/index.php">Gallery</a></li>
        <li><a href="http://twitch.tv/chisdealhd">LIVE: <?php echo $live;?></a></li>
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

<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <div class="jumbotron">
        <h1 class="text-center">ChisdealHD Streamers.</h1>
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
    </div>
   </div>
    <br>
  </div>
</div>
<div class="container">
<div class="row">
    <div class="col-lg-12">
      <div class="jumbotron">
        <div class="row">
          <div class="text-center col-sm-6">
            <h3>Mixer Streamers</h3>
            <p>-----------------</p>
            <p>ChisdealHD: 
            Live: <?php echo $mixerlive1;?><br>
            Game: <?php echo $mixergame;?>
            </p>
            <p>-----------------</p>
            <p>-----------------</p>
            <p>BigMikey150: 
            Live: <?php echo $mixerlive2;?><br>
            Game: <?php echo $mixergame4;?>
            </p>
            <p>-----------------</p>
            <p>-----------------</p>
            <p>AstroSamz: 
            Live: <?php echo $mixerlive3;?><br>
            Game: <?php echo $mixergame6;?>
            </p>
            <p>-----------------</p>
             </div>
              <div class="text-center col-sm-6">
                <h3>Twitch Streamers</h3>
                <p>-----------------</p>
                <p>ChisdealHD: 
                Live: <?php echo $twitchlive;?><br>
                Game: <?php echo $twitchgame;?>  
                </p>
                <p>-----------------</p>
                <p>-----------------</p>
                <p>BigMikey150: 
                Live: <?php echo $twitchlive1;?><br>
                Game: <?php echo $twitchgame1;?>  
                </p>
                <p>-----------------</p>
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
            <h3>Donate link</h3>
             <p>This is Donation Link for you guys to feel free Donate to me from Real Cash or use loots when im LIVE! its http://loots.com/chisdealhd </p>
             <a class="btn btn-danger btn-lg" href="https://www.tipeeestream.com/chisdealhd/donation" role="button">Donate</a></div>
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
	