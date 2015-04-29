<?php
include 'config.php';
if($_SESSION['user'] != "admin") {
  die("You must be 'admin' to reach this area.");
}
//else
//{
//die("To be declared the victor, you must stand up and yell \"I AM THE CHAMPION\".");
//}
?>

<!DOCTYPE html>
<html>
<head>
<title>Workiva - Nuclear Challenge</title>
<link href="https://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">

<script type="text/javascript" src="https://code.jquery.com/jquery-1.8.0.min.js"></script>

<style>
span.glyphicon-arrow-left {
    font-size: 3em;
}
span.glyphicon-arrow-right {
    font-size: 3em;
}
span.glyphicon-arrow-up {
    font-size: 3em;
}
span.glyphicon-arrow-down {
    font-size: 3em;
}
</style>

<script type="application/javascript">
$(document).keydown(function(e){
    if (e.keyCode == 37) { 
       $.get( 'control.php?dir=left', function() {});
       return false;
    }
    if (e.keyCode == 39) {
       $.get( 'control.php?dir=right', function() {});
       return false;
    }
    if (e.keyCode == 38) {
       $.get( 'control.php?dir=up', function() {});
       return false;
    }
    if (e.keyCode == 40) {
       $.get( 'control.php?dir=down', function() {});
       return false;
    }
    if (e.keyCode == 32) {
       $.get( 'control.php?dir=fire', function() {});
       return false;
    }
});
</script>

</head>
<body>
<audio autoplay="autoplay">
  <source src="launch.wav" type="audio/wav">
</audio>

<div id="main-content" class="container">
    <div class="row">
        <div class="well" style="text-align: center;">
        Use your arrow keys (left-right-up-down) and space to fire, or use the buttons below.<br /><br />
        <a href="javascript:void(0);" onclick="$.get( 'control.php?dir=fire', function() {});"><h2>FIRE!</h2></a><h5>(you have four darts)</h5><br />
        <a href="javascript:void(0);" onclick="$.get( 'control.php?dir=up', function() {});"><span class="glyphicon glyphicon-arrow-up"></span></a><br />
        <a href="javascript:void(0);" onclick="$.get( 'control.php?dir=left', function() {});"><span class="glyphicon glyphicon-arrow-left"></span></a> <img style="width:450px;height:450px" src="https://i.imgur.com/QgYpJDt.png"> <a href="javascript:void(0);" onclick="$.get( 'control.php?dir=right', function() {});"><span class="glyphicon glyphicon-arrow-right"></span><br />
        <a href="javascript:void(0);" onclick="$.get( 'control.php?dir=down', function() {});"><span class="glyphicon glyphicon-arrow-down"></span></a><br />


        </div>
    </div>
</div>
</body>
</html>
