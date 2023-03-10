<?php
    if(isset($_POST['submit'])){
        $conn = mysqli_connect("localhost", "root", "", "schoolproject");
    $val = $_POST['val'];
    $sql = "DELETE FROM blog WHERE title ='$val'";
    $complete = mysqli_query($conn, $sql);
    if ($complete){
        echo 'Succefully deleted';
    }else{
        echo "Error Code";
    }}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Blog</title>
</head>
<body>
    <form action="admin.php" method="post">
        Blog Name: <input type="text" name="val">
        <input type="submit" value="submit" name="submit">
    </form>
</body>
</html>
