<?php
include_once('User.php');
include_once('database.php');

Database::connect('myDB', 'root', '');

if (  isset($_POST['submit']) )
{
    session_start();
}

$email = $_POST["email"];
$password = $_POST["password"];

$users = User::all($email);  

if(count($users) == 0) {
    session_abort();
    $Message = "Your email or password is incorrect.";
    header("Location://localhost/login.php?Message={$Message}");
}

foreach ($users as $user) {
    if(password_verify($password, $user->get_password()))
    {
        $_SESSION['id'] = $user->get_id();
        $_SESSION['name'] = $user->get_name();
        $_SESSION['email'] = $user->get_email();

        header("Location://localhost/profile.php");    
    }
    else {
        session_abort();
        $Message = "Your email or password is incorrect.";
        header("Location://localhost/login.php?Message={$Message}");
    }
}
?>