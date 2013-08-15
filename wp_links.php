// Displays Wordpress postmeta, in raw data(HTML) format, pulling from the MySql / wp-links table.

<?php


//MySQL Database Connect
include 'dataconnect.php';

// Pull from tables
$usertable="wp_links";
$yourfield = "link_url";



mysql_connect($hostname,$username, $password) or die ("<html><script language='JavaScript'>alert('Unable to connect to database! Please try again later.'),history.go(-1)</script></html>");
mysql_select_db($dbname);

# Check If Record Exists

$query = "SELECT * FROM wp_links";

$result = mysql_query($query);

if($result)
{
while($row = mysql_fetch_array($result))
{
$name = $row["link_url"];
echo "Name: ".$name."<br><br>";
}
}



?>
