// Displays Wordpress Options, in raw data(HTML) format, pulling from the MySql / wp-options table.

<?php


//MySQL Database Connect
include 'dataconnect.php';

// Pull from tables
$usertable="wp_options";
$yourfield = "option_name";


mysql_connect($hostname,$username, $password) or die ("<html><script language='JavaScript'>alert('Unable to connect to database! Please try again later.'),history.go(-1)</script></html>");
mysql_select_db($dbname);


$sql = 'SELECT * FROM `wp_options`';


$result = mysql_query($sql);

while($row = mysql_fetch_array($result))
  {
  echo "option_name: <br />" . $row['option_name'] . "<br /> option_value: <br />" . $row['option_value'];
  echo "<br /><br />";
  }


?>
