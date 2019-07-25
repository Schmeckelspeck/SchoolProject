<?php
session_start();
if(!isset($_SESSION['user_role']) && $_GET["login"] == 1) {
    echo "Der Nutzer ist nicht eingeloggt!";
    $loginURL = "loginView.php";
    header('Location: '.$loginURL);
    // header("Location: LoginView.php");
    // header('Location: http://www.example.com/');
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 5.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <title>App-Name</title>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="../style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

<section id="header">
<div class="container-fluid">
<div class="row">
<image style="width:10%; height:10%" src="../Ressources/img/Logo.jpg"/>


</div>
</section>

</div>

