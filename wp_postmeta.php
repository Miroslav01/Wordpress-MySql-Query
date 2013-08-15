//Displays Wordpress postmeta, in raw data(HTML) format, pulling from the MySql / wp-postmeta table.

<?php


//MySQL Database Connect
include 'dataconnect.php';

// Pull from tables
$usertable="wp_postmeta";
$yourfield = "meta_id";


mysql_connect($hostname,$username, $password) or die ("<html><script language='JavaScript'>alert('Unable to connect to database! Please try again later.'),history.go(-1)</script></html>");
mysql_select_db($dbname);

# Check If Record Exists

$sql = 'SELECT * FROM `wp_postmeta`';


$result = mysql_query($sql);

while($row = mysql_fetch_array($result))
  {
  echo "meta_key: <br />" . $row['meta_key'] . "<br /> meta_value: <br />" . $row['meta_value'];
  echo "<br /><br />";
  }



?>
