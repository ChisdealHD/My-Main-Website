<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Login Form</title>
  <link rel="stylesheet" href="css/style.css">
  <!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<body>

<video autoplay loop poster="http://tccnservers.serveminecraft.net/loginvideo/tccnbanner.png" id="bgvid">
<source src="http://tccnservers.serveminecraft.net/loginvideo/Backgroundslogin.mp4" type="video/mp4">
</video>
  <section class="container">
    <div class="login">
      <?php 

                                $errors = array(
                                    1=>"Invalid user name or password, Try again",
                                    2=>"Please login to access this area"
                                  );

                                $error_id = isset($_GET['err']) ? (int)$_GET['err'] : 0;

                                if ($error_id == 1) {
                                        echo '<p class="text-danger">'.$errors[$error_id].'</p>';
                                    }elseif ($error_id == 2) {
                                        echo '<p class="text-danger">'.$errors[$error_id].'</p>';
                                    }
                               ?>  
      <h1>Login to ChisdealHD</h1>
      <form action="authenticate.php" method="POST" class="form-signin col-md-8 col-md-offset-2" role="form">
        <p><input type="text" name="username" class="form-control" placeholder="Username" required autofocus><br/></p>
        <p><input type="password" name="password" class="form-control" placeholder="Password" required><br/></p>
        <p class="remember_me">
          <label>
            <input type="checkbox" name="remember_me" id="remember_me">
            Remember me on this computer
          </label>
        </p>
        <p class="submit"><button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button></p>
      </form>
    </div>

    <div class="login-help">
      <p>Go back Main Menu <a href="index.html">Click here to Home page</a>.</p>
    </div>
  </section>
</body>
</html>
