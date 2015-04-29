<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<link rel="SHORTCUT ICON" href="/BadTwitterClone/favicon.ico">
<meta content="text/html; charset=ISO-8859-1" http-equiv="content-type"><title>BadTwitterClone - All Tweets</title>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body>
<center>
<h1>BadTwitterClone  <img border="0" src="/BadTwitterClone/images/sadbird.png" alt="Bad Twitter Clone Logo" width="130" height="110" /></h1>
</center>
<br />
<center><a href="/BadTwitterClone/">Home</a></center>
<br />
<br />
<center>

<?php
//open connection to the database, assumes the database is on the same machine
//as the machine executing this PHP code (local machine)
//edit config.php to change the machine preferences
include 'config.php';
include 'opendb.php';

//assumes there is already a databse in the mysql databse called "badtwitterclone"
$dbname = 'badtwitterclone';
mysql_select_db($dbname);

if(isset($_POST['user'])) {
  if(strlen($_POST['user']) == 0) {
   echo 'Error - no user specified!';
  }
  else {
    echo 'User ' . $_POST['user']  . ' deleted!';
  }
}
else
{
  echo '<b>Showing all users.</b>';
  echo '<br />';
  echo '<br />';

  $result = mysql_query("SELECT * FROM Users WHERE 1 ORDER BY Username DESC");

  echo '<form method="POST" id="myform"><input type="hidden" id="user" name="user"><table border="1">';
  echo '<tr>';
  echo '<th>Username</th>';
  echo '<th>Actions</th>';
  echo '</tr>';

  // iterate over all results
  while($row = mysql_fetch_array($result))
  {
     echo '<tr>';
     echo '<td>' . $row['Username'] . '</td>';
     if($_SESSION['user'] == "admin") {
       echo '<td width="90px"><div align="center"><input type="button" value="Delete" onclick="document.getElementById(\'user\').value=\'' . $row['Username'] . '\';document.getElementById(\'myform\').submit()"></div></td>';
     } else {
       echo '<td>&nbsp;</td>';
     }
     echo '</tr>';
  }

  echo '</table></form>';

}

//close connection to the database
include 'closedb.php';
?>
</center>
<br />
</body>
</html>
