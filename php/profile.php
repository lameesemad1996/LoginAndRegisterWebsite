<?php
include_once('User.php');
include_once('submit.php');

session_start();

$id = $_SESSION["id"];
$name = $_SESSION["name"];
$email = $_SESSION["email"];
?>

<html>
<head>

<link href="css/form.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script> src="js/jquery-3.4.1.min.js"</script>

</head>

<body>

<button onclick="window.location.href='/logout.php'"> Logout </button>

<?php

Database::connect('myDB', 'root', '');

$user = new User($id);

?>
<form action="update.php" method="POST">
  <label>
    <p class="label-txt">NAME</p>
    <br>
    <input type="text" class="input" name="name" value="<?=$user->get_name()?>">
    <div class="line-box">
      <div class="line"></div>
    </div>
  </label>
  <label>
    <p class="label-txt">EMAIL</p>
    <br>
    <input type="text" class="input" name="email" id="email" value="<?=$user->get_email()?>"> 
    <div class="line-box">
      <div class="line"></div>
    </div>
  </label>
  <br>
  <br>

  <button id="update" name="update" class="btn btn-primary" onclick="window.location.href='/update.php'">Update</button>
  <br>
  <br>  
  <!-- <button onclick="insert_pass()" id="update" name="update" class="btn btn-primary">Change Password</button> -->

</form>

<script>
  insert_pass()
  {
    
  }
</script>

</body>

</html>