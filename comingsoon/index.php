<?php 
    //grabs the parameters of the url ?user=
    $url = "https://beam.pro/api/v1/channels/ChisdealHD";
    $content = file_get_contents($url);
    $json = json_decode($content, true);
    $follows = $json['numFollowers'];
    $title = $json['name'];
    $name = $json['token'];
    $live = $json['online'] == true ? 'Online' : 'Offline ';
    $beamid = $json['id'];
    $host1 = $json['hosteeId'];
    $host = $json['hosteeId'] == true ? 'dQw4w9WgXcQ' : 'smEeQv2EZaQ';
    $sparks = $json['user']['sparks'];
    $lvl = $json['user']['level'];
    $facebook = $json['user']['social']['facebook'];
    $twitter = $json['user']['social']['twitter'];
    $youtube = $json['user']['social']['youtube'];
    $bio = $json['user']['bio'];
    $game = $json['type']['name'];
    $Followers = " Followers";
    $url2 = "https://beam.pro/api/v1/channels/1873/hosters";
    $content2 = file_get_contents($url2);
    $json2 = json_decode($content2, true);
    $url3 = "https://beam.pro/api/v1/channels/ChisdealHD?fields=online";
    $content3 = file_get_contents($url3);
    $json3 = json_decode($content3, true);
    $hosters = count($json2);
    $url4 = "https://beam.pro/api/v1/channels/35982/recordings";
    $content4 = file_get_contents($url4);
    $json4 = json_decode($content4, true);
    $vod = count($json4);
    $vod1 = $json4['vods'][3]['baseUrl'];
?>

<?php 
    //grabs the parameters of the url ?user=
    $beamurl = "https://beam.pro/api/v1/channels/" . $host1;
    $content123 = file_get_contents($beamurl);
    $json123 = json_decode($content123, true);
    $hosteename = $json123['token'];
    $beamid1 = $json123['id'];
    $nameshow = $json123['online'] == true ? $hosteename : $name;
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>-=Coming Soon=-</title>

    <link rel="icon" type="png" href="http://chisdealhd.xyz/images/favicons/fav.png">
    <link rel="shortcut icon" href="http://chisdealhd.xyz/images/favicons/test.ico">
    <meta name="msapplication-TileColor" content="#2d89ef">
    <meta name="msapplication-config" content="http://chisdealhd.xyz/images/favicons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

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

    <!-- fontawesome -->
    <script src="https://use.fontawesome.com/3db7fc1628.js"></script>

    <meta name="google-site-verification" content="l0cPmKI_fyfmfvGI47ra5LWCuIjbMDrS9hWOuu290dU" />    


<style>
/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(192,192,192,0.3); /* Fallback color */
    background-color: rgba(192,192,192,0.3); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    background-color: #02fff6;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
}

/* The Close Button */
.close {
    color: #ff0101;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #0000ff;
    text-decoration: none;
    cursor: pointer;
}
</style>


<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

			ga('create', 'UA-91739579-1', 'auto');
			
			ga('send', 'pageview');
			</script>

<script>
function getVote(int) {
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("poll").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("GET","poll_vote.php?vote="+int,true);
  xmlhttp.send();
}
</script>


<script>
  (function() {
    var cx = '001224529200749593940:nd9_5v8wars';
    var gcse = document.createElement('script');
    gcse.type = 'text/javascript';
    gcse.async = true;
    gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(gcse, s);
  })();
</script>

    <!-- google font -->
    <link href='http://fonts.googleapis.com/css?family=Cabin:400,700' rel='stylesheet' type='text/css'>

    <!-- custom css -->
    <link href="css/custom.css" rel="stylesheet"/>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <audio id="audioplayer">
		</audio>
		<script>
			var lastSong = null;
			var selection = null;
			var playlist = ["music/loading.ogg", "music/loading1.ogg", "music/loading2.ogg", "music/loading3.ogg", "music/loading4.ogg", "music/loading5.ogg", "music/loading6.ogg", "music/loading7.ogg", "music/loading8.ogg", "music/loading9.ogg", "music/loading10.ogg"]; // List of Songs
			var player = document.getElementById("audioplayer"); // Get Audio Element
			player.autoplay=true;
			player.volume = 0.6
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
    <div class="se-pre-con"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="header-logo-wrapper">
            <img src="images/Avatar_chis.png" alt="ChisdealHD" title="ChisdealHD LOGO" class="img-responsive center-block" width="100" height="100" />
          </div>
        </div>
      </div>
   
      <div class="row">
        <div class="col-md-12">
        <h2 class="text-center">Website coming SOON!!</h2>
        </div>
      </div>
  
      <div class="row">
        <div class="col-md-12">
          <div id="counter_wrapper">
            <div class="text-center" id="counter"></div>
		<center><button type="button" class="btn btn-primary" id="myBtn">Open POLL</button><button type="button" class="btn btn-primary" onclick="location.href='https://discordapp.com/oauth2/authorize?permissions=1341643849&scope=bot&client_id=317898411833819148'">Invite Discord BOT!</button><button type="button" class="btn btn-primary" onclick="location.href='https://steamcommunity.com/id/chisdealhd'">Steam</button><button type="button" class="btn btn-primary" onclick="location.href='http://discord.me/chisdealhd'">Join Discord</button><button type="button" class="btn btn-primary" onclick="location.href='http://twitter.com/chisdeal2013'">Twitter</button><button type="button" class="btn btn-primary" onclick="location.href='http://www.mgn.tm/apply'">Join MGN Network</button></center>

		<!-- The Modal -->
		<div id="myModal" class="modal">

			<!-- Modal content -->
			<div class="modal-content">
    				<span class="close">&times;</span>
    				<div id="poll">
						<h3>Do you like my Website so far?</h3>
						<form>
						Yes:
						<input type="radio" name="vote" value="0" onclick="getVote(this.value)">
						<br>No:
						<input type="radio" name="vote" value="1" onclick="getVote(this.value)">
						</form>
					</div>
 			 </div>

		</div>
          </div>
        </div>
      </div>

    <div class="row">
      <div class="col-md-12">
        <div class="social-media-wrapper text-center">
          <a href="https://www.facebook.com/Chisdealhd_yt-154236558351437/"><i class="fa fa-facebook-official"></i></a>
          <a href="http://twitter.com/chisdeal2013"><i class="fa fa-twitter"></i></a>
		  <a href="http://instagram.com/chisdealhd"><i class="fa fa-instagram"></i></a>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <div class="text-center copyright">Copyright &copy; 2017 Chisdealhd.xyz</div> 
      </div>
    </div>
    
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

    <!-- fit text -->
    <script type="text/javascript" src="js/jquery.fittext.js"></script>

    <!-- jquery countdown -->
    <script type="text/javascript" src="js/jquery.plugin.js"></script> 
    <script type="text/javascript" src="js/jquery.countdown.js"></script>

    <!--placeholder -->
    <script type="text/javascript" src="js/jquery.placeholder.js"></script>

    <script type="text/javascript" src="js/scripts.js"></script>

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
  </body>
</html>	