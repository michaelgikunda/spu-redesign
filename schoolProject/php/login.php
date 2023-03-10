<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
    $email = $_POST['email'];
    $password = $_POST['password'];

    // query the database to check if the email and password match a record in the credentials table
    $sql = "SELECT * FROM credentials WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($conn, $sql);

    // check if the query returned any results
    if (mysqli_num_rows($result) > 0) {
        // login successful, redirect to dashboard or home page
        header("Location: blog.php");
    } else {
        // login failed, show error message
        echo "Invalid email or password";
    }
}

// close the database connection
mysqli_close($conn);
?>
</body>
</html>