<html>
<head>

<link href="css/form.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script> src="js/jquery-3.4.1.min.js"</script>
<script src="js/form.js"></script>

</head>

<body>

<?php

if( !empty( $_REQUEST['Message'] ) )
{
    echo sprintf( '<p>%s</p>',$_REQUEST['Message'] );
}

?>

<button onclick="window.location.href='/index.php'"> Register </button>

<div id="add_err2"></div>

<form action="loginsubmit.php" method="POST" enctype="multipart/form-data">
  <label>
    <p class="label-txt">EMAIL</p>
    <input type="text" class="input" name="email" id="email">
    <div class="line-box">
      <div class="line"></div>
    </div>
  </label>
  
  <label>
    <p class="label-txt">PASSWORD</p>
    <input type="password" class="input" name="password" id="password">
    <div class="line-box">
      <div class="line"></div>
    </div>
  </label>
  
  <button type="submit" name="submit" id="submit">Login</button>

</form>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>