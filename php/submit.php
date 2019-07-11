<?php
include_once('User.php');

if (  isset($_POST['submit']) )
{
    session_start();
}


Database::connect('myDB', 'root', '');

if(isset($_FILES['image'])) {

    $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));

}

if(isset($_POST["submit"]) and isset($_POST["name"]) and isset($_POST["email"]) and isset($_POST["password"]))
{
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $image = $_FILES["image"];

    if(strlen($name) == 0 ) {
        header("Location://index.php");
    } elseif (strlen($email) == 0) {
        header("Location://index.php");
    } elseif (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
        header("Location://index.php");
    } elseif (strlen($password) == 0) {
        header("Location://index.php");
    } else { 
        $spassword = password_hash($password, PASSWORD_BCRYPT, array('cost' => 6 ));
        //add validation for existing email

        $id = User::add($name, $email, $spassword, $file);

        $_SESSION["id"] = $id;
        $_SESSION["name"] = $name;
        $_SESSION["email"] = $email;
        
        echo 'true';
        //$_SESSION["password"] = $password;

        mail($email, "Thank You!", "Thank you for registering!");
        header("Location://localhost/profile.php");
    }

    
}
?>
