<html>
<head>
<link href="css/form.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>

<form action="submit.php" method="POST" enctype="multipart/form-data">
  <label>
    <p class="label-txt">ENTER YOUR EMAIL</p>
    <input type="text" class="input" name="email" id="email">
    <div class="line-box">
      <div class="line"></div>
    </div>
  </label>
  <label>
    <p class="label-txt">ENTER YOUR NAME</p>
    <input type="text" class="input" name="name" id="name"> 
    <div class="line-box">
      <div class="line"></div>
    </div>
  </label>
  <label>
    <p class="label-txt">ENTER YOUR PASSWORD</p>
    <input type="password" class="input" name="password" id="password">
    <div class="line-box">
      <div class="line"></div>
    </div>
  </label>
  <br>
  <br>
  <input type="file" name="image" id="image">
  <br>
  <br>
  
  <button type="submit" name="submit" id="submit">Submit</button>

</form>

<script src="js/form.js"></script>

</body>


</html>