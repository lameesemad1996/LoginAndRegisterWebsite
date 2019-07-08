<?php
include_once('User.php');

Database::connect('myDB', 'root', '');
if($_FILES["image"] != NULL)
{
    $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
}

if(isset($_POST["submit"]) and isset($_POST["name"]) and isset($_POST["email"]) and isset($_POST["password"]))
{
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    User::add($name, $email, $password, $file);

    mail($email, "Thank You!", "Thank you for registering!");
    header("Location://localhost/index.php");
}
else
{
    echo "Please fill all the fields!";
}
?>
