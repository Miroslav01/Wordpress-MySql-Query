// Displays Wordpress posts, in raw data(HTML) format, pulling from the MySql / wp-posts table.
<?php

//MySQL Database Connect
include 'dataconnect.php';

$wp_posts = "wp_eaheph_posts";

$sql = "SELECT * FROM " . $wp_posts;
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<h1>" . $row["post_title"] . "</h1> <p>". $row["post_content"] . "</p><br><hr><br>";
    }
} else {
    echo "0 results";
}

$conn->close();

?>



