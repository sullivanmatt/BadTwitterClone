<?php
include("config.php");

if (!isset($_SESSION["user"])){
  header("Location: /BadTwitterClone/login.html");
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<link rel="SHORTCUT ICON" href="/BadTwitterClone/favicon.ico">
<meta content="text/html; charset=ISO-8859-1" http-equiv="content-type"><title>BadTwitterClone - Home</title>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body>
<center>
<h1>BadTwitterClone <img border="0" src="/BadTwitterClone/asset.php?file=./images/sadbird.png" alt="Bad Twitter Clone Logo" width="130" height="110" /></h1>
<img src="https://fbcdn-sphotos-d-a.akamaihd.net/hphotos-ak-xaf1/v/t1.0-9/4549_547760346922_2987152_n.jpg?oh=86c5aa9bbe6d30d5fe4009eb6903dbec&oe=55BE4BD4&__gda__=1433908892_6daaf34400f6630365f3a46c5312689c">
</center>
<br />
<br />
<br />
<center><a href="/BadTwitterClone/policy.html">Privacy Policy</a> - <a href="/BadTwitterClone/terms.html">Terms of Use</a></center>
</body>
</html>

