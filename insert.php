

<?php
require "connection.php";

if (isset($_POST['first_name'],$_POST['last_name'])){

    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
 echo $first_name;

    //$conn = new student($first_name, $last_name);
    $stmt = openConnection()->prepare("INSERT INTO student(first_name, last_name) VALUES (:first_name, :last_name)");
//$stmt->bind_param( $first_name, $last_name);
    $stmt->bindParam(':first_name', $first_name);
    $stmt->bindParam(':last_name', $last_name);
    $stmt->execute();

}


?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form method="post">
    First name:<br>
    <input type="text" name="first_name" value="first_name">
    <br>
    Last name:<br>
    <input type="text" name="last_name" value="last_name">
    <br>
    Username:<br>
    <input type="text" name="username" value="username">
    <br>
    Gender:<br>
    <input type="text" name="gender" value="gender">
    <br>
    Linkedin:<br>
    <input type="text" name="linkedin" value="linkedin">
    <br>
    Github:<br>
    <input type="text" name="github" value="github">
    <br>
    Email:<br>
    <input type="text" name="email" value="email">
    <br>
    Preferred language:<br>
    <input type="text" name="preferred_language" value="preferred_language">
    <br>
    Avatar:<br>
    <input type="text" name="avatar" value="avatar">
    <br>
    Video:<br>
    <input type="text" name="video" value="video">
    <br>
    Quote:<br>
    <input type="text" name="quote" value="quote">
    <br>
    Quote author:<br>
    <input type="text" name="quote_author" value="quote_author">
    <br>
    Created at:<br>
    <input type="text" name="created_at" value="created_at">
    <br>
    <br><br>
    <input type="submit" value="Submit">
</form>

</body>
</html>
