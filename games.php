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

<!-- Bootstrap -->
<link rel="stylesheet" href="css/bootstrap.css">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
</head>
<body>
<nav class="navbar navbar-default navbar-inverse">
  <div class="container-fluid"> 
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
        <li><a href="http://chisdealhd.xyz/">Home </a></li>        
        <li><a href="http://chisdealhd.xyz/development/index.php">Chis's Development Stuff</a></li>
        <li class="active"><a href="http://chisdealhd.xyz/games/index.php">GamesList</a></li>
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
        <h1 class="text-center">ChisdealHD Games List.</h1>
        <div class="row">
        </div>
        <div> </div>
        <div class="row">
          <div class="col-md-6"></div>
          <div class="col-md-6"></div>
        </div>
        <p class="text-center"><table style="width:100%">
        <tr>
        <th>Games Name</th>
        <th>Yes/No</th>
        <th>Getting it?</th>
        </tr>
        <tr>
        <td>Call of duty: black ops 2 / Zombies with nuketown DLC</td>
        <td>YES</td>
        <td>Already got it?</td>
        </tr>
        <tr>
        <td>Rust</td>
        <td>YES</td>
        <td>Already got it?</td>
        </tr>
        <tr>
        <td>Counter-Strike: GO</td>
        <td>YES</td>
        <td>Already got it?</td>
        </tr>
        <tr>
        <td>Arma 3</td>
        <td>YES</td>
        <td>Already got it?</td>
        </tr>
        <tr>
        <td>Arma 2 / OA</td>
        <td>YES</td>
        <td>Already got it?</td>
        </tr>
        <tr>
        <td>The Forest</td>
        <td>YES</td>
        <td>Already got it?</td>
        </tr>
        <tr>
        <td>Payday2</td>
        <td>YES</td>
        <td>Already got it?</td>
        </tr>
        <tr>
        <td>ARK: Survival Evolved</td>
        <td>YES</td>
        <td>Already got it?</td>
        </tr>
        <tr>
        <td>Borderlands 2</td>
        <td>YES</td>
        <td>Already got it?</td>
        </tr>
        <tr>
        <td>Call of duty: Black Ops</td>
        <td>YES</td>
        <td>Already got it?</td>
        </tr>
        <tr>
        <td>Garry's MOD</td>
        <td>YES</td>
        <td>Already got it?</td>
        </tr>
        <tr>
        <td>GTA 5</td>
        <td>YES</td>
        <td>Already got it?</td>
        </tr>
        <tr>
        <td>HAWKEN</td>
        <td>YES</td>
        <td>Already got it?</td>
        </tr>
        <tr>
        <td>H1Z1: King of the Kill</td>
        <td>YES</td>
        <td>Already got it?</td>
        </tr>
        <tr>
        <td>Fallout 3</td>
        <td>YES</td>
        <td>Already got it?</td>
        </tr>
        <tr>
        <td>Insurgency</td>
        <td>YES</td>
        <td>Already got it?</td>
        </tr>
        <tr>
        <td>Miscreated</td>
        <td>YES</td>
        <td>Already got it?</td>
        </tr>
        <tr>
        <td>PlayerUknown's Battlegrounds / PUBG</td>
        <td>YES</td>
        <td>Already got it?</td>
        </tr>
        <tr>
        <td>ShellShock Live</td>
        <td>YES</td>
        <td>Already got it?</td>
        </tr>
        <tr>
        <td>Space Engineers</td>
        <td>YES</td>
        <td>Already got it?</td>
        </tr>
        <tr>
        <td>Terraria</td>
        <td>YES</td>
        <td>Already got it?</td>
        </tr>
        <tr>
        <td>Warframe</td>
        <td>YES</td>
        <td>Already got it?</td>
        </tr>
        <tr>
        <td>Unturned</td>
        <td>YES</td>
        <td>Already got it?</td>
        </tr>
        <tr>
        <td>Trove</td>
        <td>YES</td>
        <td>Already got it?</td>
        </tr>
        <tr>
        <td>Supreme Commander / Forged Alliance</td>
        <td>YES</td>
        <td>Already got it?</td>
        </tr>
        <tr>
        <td>BattleField Hardline</td>
        <td>YES</td>
        <td>Already got it?</td>
        </tr>
        <tr>
        <td>Battlefield 3</td>
        <td>YES</td>
        <td>Already got it?</td>
        </tr>
        <tr>
        <td>Battlefield 4</td>
        <td>YES</td>
        <td>Already got it?</td>
        </tr>
        <tr>
        <td>The Crew</td>
        <td>YES</td>
        <td>Already got it?</td>
        </tr>
        <tr>
        <td>Watch Dogs</td>
        <td>YES</td>
        <td>Already got it?</td>
        </tr>
        </table></p>
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
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="js/jquery-1.11.2.min.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
</body>
</html>
