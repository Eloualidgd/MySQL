<?php
declare(strict_types=1);
ini_set('display_errors', "1");
ini_set('display_startup_errors', "1");
error_reporting(E_ALL);
require 'connection.php';
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Databases</title>
</head>

<body>
<h2>Database</h2>
<a href="insert.php">Click if you want to register</a>
<br><br>
<table>
    <thead>
    <tr>
        <td>First Name</td>
        <td>Last Name</td>
        <td>E-mail</td>
        <td>Preferred Language</td>
        <td>Personal Page</td>
    </tr>
    </thead>
    <tbody>
<!--    creo una variable $selectvar , y empiezo a seleccionar de insert.php lo que necesito luego creo un foreach y cogo la variable-->
<!--    $connection de insert.php utilizando la funcion query estoy llamando otra vez a la variable que tenemos una linea arriba y le damos -->
<!--    la informacion a la variable $line-->
    <?php
    $selectVar = 'SELECT first_name, last_name, email, preferred_language, linkedin FROM student ORDER BY ID';
    foreach ($connection->query($selectVar) as $line): ?>
        <tr>
            <td><?php echo $line['first_name'] ?></td>
            <td><?php echo $line['last_name'] ?></td>
            <td><?php echo $line['email'] ?></td>
            <td><?php echo $line['preferred_language'] ?></td>
            <td><?php echo $line['linkedin'] ?></td>
            <!-- despues de ya tener la informacion en mi variable $line vamos eliginedo lo que necesitamos y lo
                        ensenamos con el echo -->
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>

</body>
</html>