<?php
include 'config.php';
if($_SESSION['user'] != "admin") {
  die("You must be 'admin' to reach this area.");
}

if(isset($_GET['dir']))
{
    $fp = fsockopen("10.10.10.46", 1500, $errno, $errstr, 30);

    //$connection = ssh2_connect('10.10.10.46', 22);
    //ssh2_auth_password($connection, 'root', 'W3bfilings!');

    if($_GET['dir'] == "up")
    {
        fwrite($fp, "/usr/bin/python retaliation.py up 100");
    }
    else if($_GET['dir'] == "down")
    {
        fwrite($fp, "/usr/bin/python retaliation.py down 100");
    }
    else if($_GET['dir'] == "left")
    {
        fwrite($fp, "/usr/bin/python retaliation.py left 100");
    }
    else if($_GET['dir'] == "right")
    {
        fwrite($fp, "/usr/bin/python retaliation.py right 100");
    }
    else if($_GET['dir'] == "fire")
    {
        fwrite($fp, "/usr/bin/python retaliation.py fire");
    }
    fclose($fp);
}
