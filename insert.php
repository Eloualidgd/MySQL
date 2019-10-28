<?php
require "connection.php";

if (isset($_POST['first_name'],$_POST['last_name'],$_POST['username'],$_POST['gender'],$_POST['linkedin'],
    $_POST['github'],$_POST['email'],$_POST['preferred_language'], $_POST['avatar'],$_POST['video'],
    $_POST['quote'],$_POST['quote_author'],$_POST['created_at'])){

    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $username = $_POST['username'];
    $gender = $_POST['gender'];
    $linkedin = $_POST['linkedin'];
    $github = $_POST['github'];
    $email = $_POST['email'];
    $preferred_language = $_POST['preferred_language'];
    $avatar = $_POST['avatar'];
    $video = $_POST['video'];
    $quote = $_POST['quote'];
    $quote_author = $_POST['quote_author'];
    $created_at = $_POST['created_at'];




 //echo $first_name;

    //$conn = new student($first_name, $last_name);
    $stmt = openConnection()->prepare("INSERT INTO student (first_name, last_name, username, gender, linkedin,
        github, email, preferred_language, avatar, video, quote, quote_author, created_at)
    VALUES (:first_name, :last_name, :username, :gender, :linkedin, :github, :email, :preferred_language,
        :avatar, :video, :quote, :quote_author, :created_at)");
//$stmt->bind_param( $first_name, $last_name);
    $stmt->bindParam(':first_name', $first_name);
    $stmt->bindParam(':last_name', $last_name);
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':gender', $gender);
    $stmt->bindParam(':linkedin', $linkedin);
    $stmt->bindParam(':github', $github);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':preferred_language', $preferred_language);
    $stmt->bindParam(':avatar', $avatar);
    $stmt->bindParam(':video', $video);
    $stmt->bindParam(':quote', $quote);
    $stmt->bindParam(':quote_author', $quote_author);
    $stmt->bindParam(':created_at', $created_at);

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
<h1>Registration Form</h1>

<form action="" method="post">
    First name:<br>
        <input type="text" name="first_name" placeholder="first name" required>
    <br>
    Last name:<br>
        <input type="text" name="last_name" placeholder="last name" required>
    <br>
    Username:<br>
        <input type="text" name="username" placeholder="username" required>
    <br>
    Gender:<br>
        <input type="text" name="gender" placeholder="gender" required>
    <br>
    Linkedin:<br>
        <input type="text" name="linkedin" placeholder="linkedin" required>
    <br>
    Github:<br>
        <input type="text" name="github" placeholder="github" required>
    <br>
    Email:<br>
        <input type="text" name="email" placeholder="email" required>
    <br>
    Preferred language:<br>
        <input type="text" name="preferred_language" placeholder="preferred language" required>
    <br>
    Avatar:<br>
        <input type="text" name="avatar" placeholder="avatar" required>
    <br>
    Video:<br>
        <input type="text" name="video" placeholder="video" required>
    <br>
    Quote:<br>
        <input type="text" name="quote" placeholder="quote" required>
    <br>
    Quote author:<br>
        <input type="text" name="quote_author" placeholder="quote author" required>
    <br>
    Created at:<br>
    <input type="text" name="created_at" placeholder="created at" required>
    <br>
    <br><br>
        <input type="submit" name="send" value="send">
</form>

</body>
</html>
