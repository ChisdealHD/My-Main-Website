<?php
	// Connect to MySQL
	    $username = "1923706_chisdeal";
	    $password = "Doctorwho23";
	    $host = "fdb14.biz.nf";
	    $dbname = "1923706_chisdeal";
	try {
	$conn = new PDO("mysql:host={$host};dbname={$dbname};charset=utf8", $username, $password);
	}
	catch(PDOException $ex)
	    {
	        $msg = "Failed to connect to the database";
	    }
	 
	// Was the form submitted?
	if (isset($_POST["ForgotPassword"])) {
	     
	    // Harvest submitted e-mail address
	    if (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
	        $email = $_POST["email"];
	         
	    }else{
	        echo "email is not valid";
	        exit;
	    }
	 
	    // Check to see if a user exists with this e-mail
	    $query = $conn->prepare('SELECT email FROM users WHERE email = :email');
	    $query->bindParam(':email', $email);
	    $query->execute();
	    $userExists = $query->fetch(PDO::FETCH_ASSOC);
	    $conn = null;
	     
	    if ($userExists["email"])
	    {
            
                date_default_timezone_set('Eroupe/London');

require_once('class.phpmailer.php');
//include("class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded

$mail             = new PHPMailer();

$body             = "gdssdh";
//$body             = eregi_replace("[\]",'',$body);

$mail->IsSMTP(); // telling the class to use SMTP
$mail->Host       = "ssl://smtp.gmail.com"; // SMTP server
$mail->SMTPDebug  = 1;                     // enables SMTP debug information (for testing)
                                           // 1 = errors and messages
                                           // 2 = messages only
$mail->SMTPAuth   = true;                  // enable SMTP authentication
$mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
$mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
$mail->Port       = 465;                   // set the SMTP port for the GMAIL server
$mail->Username   = "chisdeal2014@gmail.com";  // GMAIL username
$mail->Password   = "Doctorwho23";            // GMAIL password

$mail->SetFrom('chisdeal2014@gmail.com', 'ChisdealHD');

//$mail->AddReplyTo("user2@gmail.com', 'First Last");

$mail->Subject    = "password Reset";

//$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test


	        // Create a unique salt. This will never leave PHP unencrypted.
	        $salt = "498#2D83B631%3800EBD!801600D*7E3CC13";
	 
	        // Create the unique user password reset key
	        $password = hash('sha512', $salt.$userExists["email"]);
	 
	        // Create a url which we will direct them to reset their password
	        $pwrurl = "www.yoursitehere.com/reset_password.php?q=".$password;
	         
	        // Mail them their key
	        $mailbody = "Dear user,\n\nIf this e-mail does not apply to you please ignore it. It appears that you have requested a password reset at our website www.yoursitehere.com\n\nTo reset your password, please click the link below. If you cannot click it, please paste it into your web browser's address bar.\n\n" . $pwrurl . "\n\nThanks,\nThe Administration";
	        mail($userExists["email"], "www.yoursitehere.com - Password Reset", $mailbody);
	        echo "Your password recovery key has been sent to your e-mail address.";
	         
	    }
	    else
	        echo "No user with that e-mail address exists.";
	}
	?>