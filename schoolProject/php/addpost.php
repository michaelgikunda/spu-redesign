<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Post</title>
</head>
<body>
<?php
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

// get the user input
$title = $_POST['title'];
$content = $_POST['content'];
$image = $_POST['name'];

// select the image of the user with the specified name
$sql = "SELECT image FROM credentials WHERE name = '$image'";
$result = mysqli_query($conn, $sql);

// check if the query returned any results
if (mysqli_num_rows($result) > 0) {
    // retrieve the user's image and store it in a variable
    $row = mysqli_fetch_assoc($result);
    $image = $row['image'];
} else {
    $image = '../images/spu_logo.png'; // set a default image if none is found
}

// insert a new blog post with the retrieved user image
$sql = "INSERT INTO blog (title, content, image) VALUES ('$title', '$content', '$image')";
if (mysqli_query($conn, $sql)) {
    echo "New blog post created successfully!";
    header("Location: blog.php");
} else {
    echo "Error: " . mysqli_error($conn);
}

// close the database connection
mysqli_close($conn);
?>

</body>
</html>