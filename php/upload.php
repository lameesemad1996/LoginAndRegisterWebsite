<?php
if(isset($_POST['upload'])) {
$file = $_FILES['image'];

$fileName = $_FILES['image']['name'];
$fileTmpName = $_FILES['image']['tmp_name'];
$fileSize = $_FILES['image']['size'];
$fileError = $_FILES['image']['error'];
$fileType = $_FILES['image']['type'];

$fileExt = explode('.', $fileName);
$fileActualExt = strtolower(end($fileExt));

$allowed = array('jpg', 'jpeg', 'png');

if (in_array($fileActualExt,$allowed)) {
    d
}
else{
    echo "You cannot upload files of this type!";
}
}
?>