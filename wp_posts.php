// Displays Wordpress posts, in raw data(HTML) format, pulling from the MySql / wp-posts table.
<?php

//MySQL Database Connect
include 'dataconnect.php';

// Pull from tables
$usertable="wp_posts";
$yourfield = "post_title";

mysql_connect($hostname,$username, $password) or die ("<html><script language='JavaScript'>alert('Unable to connect to database! Please try again later.'),history.go(-1)</script></html>");
mysql_select_db($dbname);

# Check If Record Exists

$query = "SELECT * FROM wp_posts";

$result = mysql_query($query);

if($result)
{
while($row = mysql_fetch_array($result))
{
$name = $row["post_content"];
echo "Name: ".$name."<br><br>";
}
}



?>
