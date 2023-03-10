<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp</title>
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

// check if the form has been submitted
if (isset($_POST)) {
    // get user inputs
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $image = $_POST['FileUpload1']; // get the filename of the uploaded image

    // upload the image to the server
    $target_dir = "../images/"; // directory where the uploaded image will be stored
    $target_file = $target_dir . basename($_POST["FileUpload1"]);
    move_uploaded_file($_POST["FileUpload1"], $target_file);

    // insert user inputs into the database
    $sql = "INSERT INTO credentials (name, email, password, image) VALUES ('$name', '$email', '$password', '$image')";

    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
        header("Location: blog.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>
</body>
</html>