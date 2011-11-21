<?php
	session_start();
	// Check, if user is already login, then jump to secured page
	if (isset($_SESSION['username']) && isset($_SESSION['password']) && $_SESSION['authenticated']=="true")
	{
		header('Location: updates.php');
	}
?>
<html>
<head>
<title>Campus Connection</title>
<link rel="stylesheet" href="style.css" />
</head>
<body>
	<div id="content">
		<div><?php include('index-header.php') ?></div><br />
		<div id="body"><?php include('index-body.php') ?></div>
		<div><?php include('footer.php') ?></div>
	</div>
</body>
</html>