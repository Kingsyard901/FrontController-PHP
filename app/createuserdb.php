<?php
// Modulen för att skapa användare på registrera sidan.
session_start();

include_once 'dbconn.php';

// $first = $_POST['userfirst'];
// $last = $_POST['userlast'];
// $email = $_POST['useremail'];
// $uid = $_POST['useruid'];
// $pwd = $_POST['userpwd'];

//Valde att istället använda IF POSTen för att trigga både inmatning men även sessionen.
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $first = htmlspecialchars(ucfirst($_POST['userfirst']));
  $_SESSION['username'] = htmlspecialchars(ucfirst($_POST['userfirst']));
  $last = htmlspecialchars(ucfirst($_POST['userlast']));
  $email = htmlspecialchars(ucfirst($_POST['useremail']));
  $uid = htmlspecialchars(ucfirst($_POST['useruid']));
  $pwd = htmlspecialchars(ucfirst($_POST['userpwd']));
}

//mysql inserten. Ingen säkerhet applicerad på denna inmatning!
$sql = "INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd)
    VALUES ('$first', '$last', '$email', '$uid', '$pwd');";
mysqli_query($conn, $sql);

header( 'Location: ../user' );
die;

?>
