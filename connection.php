<?php

function openConnection() {
    // Try to figure out what these should be for you
    $dbhost    = "localhost";
    $dbuser    = "Eloualid1";
    $dbpass    = "Wachtwoord123";
    $db        = "Becode";

    // Try to understand what happens here
    $pdo = new PDO('mysql:host='. $dbhost .';dbname='. $db, $dbuser, $dbpass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

    // Why we do this here
    return $pdo;
}


//"SELECT first_name FROM table student";

/*
function openConnection() {
$dsn = 'mysql:host=localhost;dbname=Becode';
$user = 'Eloualid1';
$password = 'Wachtwoord123';

try {
    $db = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}}
openConnection();*/

/*
if($users = $db->query('SELECT * FROM users WHERE'))
{
// Sorgu başarıyla çalışırsa üyeleri listeleriz
}
else
{
    echo 'Sorguda bir hata meydana geldi.';
    $error = $db->errorInfo();
    echo 'Hata mesajı: ' . $error[2];
}*/

