<?php
include 'config.php';
if (isset($_SESSION['user'])){
	unset($_SESSION['user']);
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<link rel="SHORTCUT ICON" href="/BadTwitterClone/favicon.ico">
<meta content="text/html; charset=ISO-8859-1" http-equiv="content-type"><title>BadTwitterClone - Login</title>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body>
<center>
<h1>BadTwitterClone Logout <img border="0" src="/BadTwitterClone/images/sadbird.png" alt="Bad Twitter Clone Logo" width="130" height="110" /></h1>
</center>
<br />
<center><a href="/BadTwitterClone/">Home</a></center>
<br />
<p>You have been logged out.</p>
<br />
</body>
</html>
