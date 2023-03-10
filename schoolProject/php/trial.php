<?php
// start the session
session_start();

// database connection settings
$servername = "localhost";
$username = "root"; // your MySQL username
$password = ""; // your MySQL password
$dbname = "schoolproject";

// create a database connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// check if the connection was successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// select all items from the blog table
$sql = "SELECT * FROM blog";
$result = mysqli_query($conn, $sql);

// check if the query returned any results
if (mysqli_num_rows($result) > 0) {
    // output each blog post in a blog post style
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<div class='blog-post'>'";
        echo "<h2>" . $row['title'] . "</h2>";
        echo "<p>" . $row['content'] . "</p>";
        echo '<img src="../images/'.$row['image'].'>';
        echo "</div>";
    }
} else {
    echo "No blog posts found";
}

// close the database connection
mysqli_close($conn);
?>
