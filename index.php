<?php
	//Configuration for our PHP Server.
	set_time_limit(0);
	ini_set('default_socket_timeout', 300);
	session_start();

	//Make Constants using define.
	define('clientID', 'f85328e8874142acb0e444510a344ed1');
	define('clientSecret', 'aca8602139db412fa8da0384a6098d70');
	define('redirectURI', 'http://localhost/appacademyapi/index.php');
	define('ImageDirectory', 'pics/');
	
	
	
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale1.0">
	<title>Jash</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="author" href="human.txt">
</head>
<body>
<!-- create a login for people to go on Instagram API. -->
<!-- creating a link to instagram through oauth/authorizing the account. -->
<!-- after setting client_id to blank in the beginning , along with redirect_uri then you have to echo it out from the constants. -->
	<a href="https:api.instagram.com/oauth/authorize/?client_id=<?php echo clientID; ?>&redirect_uri=<?php echo redirectURI; ?>&response_type=code">LOGIN</a>
	<script type="js/main.js"></script>
</body>
</html>