<?php
include_once('User.php');
include_once('submit.php');

session_start();

Database::connect('myDB', 'root', '');

$id = $_SESSION['id'];

$email = $_POST["email"];
$name = $_POST["name"];

$_SESSION['name'] = $name;
$_SESSION['email'] = $email;

$user = new User($id);
$user->set_name($name);
$user->set_email($email);

$user->save();

header("Location://localhost/profile.php");


?>