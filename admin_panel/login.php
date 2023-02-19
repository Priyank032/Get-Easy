<?php
session_start();
require "db.php";
if(isset($_POST['submit_director'])){
  $a=$_POST['college'];
  $b=$_POST['Password'];
  // $c=md5($b);

  $sql="SELECT * FROM col_login where col_email = '$a' and col_pass = '$b' ";

  $r=mysqli_query($db,$sql);
 
  if(mysqli_num_rows($r)){
       $_SESSION['college']=$a;
       echo "<script>alert('Login Successfully')</script>";
       echo '<script> window.location.replace("index.php")</script>';
  }
  else{
      echo"<script> alert('INCORRECT CREDENTIALS') </script>";
  }
    
}
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Modern Flat Design Login Form Example</title>
  <link rel="stylesheet" href="./Login.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="login-page">
  <div class="form">
  <h1 class="text-center">Admin Login</h1>
    <form class="login-form" action="login.php" method="post">
      <!-- <label for="">USERNAME</label> -->

      <input type="email" name="college" placeholder="username"/>
      <!-- <label for="">PASSWORD</label> -->
      <input type="password" name="Password" placeholder="password"/>
      <button type="submit" name="submit_director">login</button>
      <!-- <p class="message" >if, you can Forgot?</p> -->
    </form>
  </div>
</div>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script  src="./script.js"></script>
<script>
  $('.message a').click(function(){
   $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
});
</script>
</body>
</html>
