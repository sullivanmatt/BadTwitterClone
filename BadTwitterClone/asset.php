<?php
$name = $_GET['file'];
$fullpath = realpath($name);

if(substr( $fullpath, 0, 25 ) != "/var/www/BadTwitterClone/")
{
	die("You are trying to escape the sandbox, which is totally admirable, but I don't want this VM owned, so I've blocked that.  Sorry!  You can still get any resource in the /BadTwitterClone/ directory, though.");
}

$fp = fopen($name, 'rb');
header("Content-Length: " . filesize($name));
header("Content-Type: " . mime_content_type($name));
fpassthru($fp);
?>
