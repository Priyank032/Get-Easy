<?php
session_start();
require "db.php";
// $_SESSION['college'] ="ipscollege@gmail.com";
if(!isset($_SESSION['college']))
{
    header("location:login.php");
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
       $rno = test_input($_POST["rno"]);
      $name = test_input($_POST["name"]);
      $email = test_input($_POST["email"]);
      $course = test_input($_POST["course"]);
      
      
     // check if name only contains letters and whitespace
      if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
       echo "<script>alert('Only letters and white space allowed')</script>";  
       echo '<script> window.location.replace("add_new_user.php")</script>';
      }
      
    //   if (!preg_match("/^[0-9]*$/",$phone) || strlen($phone)!=10) {
       
    //     echo "<script>alert('Only 10 digits numbers are required')</script>";
    //     echo '<script> window.location.replace("register.php")</script>';
    //   }

      if (!preg_match("/^[0-9A-Z]*$/",$rno)) {
        echo "<script>alert('Only numbers and capital alphabets are required')</script>";
        echo '<script> window.location.replace("add_new_user.php")</script>';
      }
  
      $sql1="SELECT * from col_users where urno='$rno' ";
      $rec1=mysqli_query($db,$sql1);
      if(mysqli_num_rows($rec1) > 0){
        echo "<script> alert('This roll no.  exists. Check your Data') </script>";
        echo '<script> window.location.replace("add_new_user.php")</script>';
      } else{
        $sql = "INSERT into col_users (`urno`, `uname`, `uemail`, `ucourse`) values('$rno','$name','$email','$course')";
        //we are using mysql_query function. it returns a resource on true else False on error
         $result = mysqli_query($db,$sql);
         if($result){
            echo "<script> alert('Student added successfully you can Check your Data') </script>";
            echo '<script> window.location.replace("All_Student.php")</script>';
         }else{
            echo "<script> alert('Student dont added successfully ') </script>";
            echo '<script> window.location.replace("add_new_user.php")</script>';
         }
      }
}
      ?>