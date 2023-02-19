<?php
require "db.php";
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $pname = $_POST["pname"];
    $uid = $_POST["uid"];
    $pprice = $_POST["pprice"];
    $pquantity = $_POST["pquantity"];
    $pcondition = $_POST["pcondition"];
    $pdes = $_POST["pdes"];
    $sname = $_POST["sname"];
    $semail = $_POST["semail"];
    $scontact = $_POST["scontact"];
    $filename=$_FILES["file"]["name"];
    $tempname=$_FILES["file"]["tmp_name"];
    $folder='./products_images/'.$filename;
    if(move_uploaded_file($tempname, $folder)){
      $sql = "insert into products values('','$pname','$filename','$pprice','$pquantity','$pcondition','$sname','$semail','$scontact','$pdes','','$uid')";
      $result = mysqli_query($db,$sql);
      if($result){
        echo "<script>alert('product successfully added')</script>";
        echo "<script>window.location.assign('MyAdds.php')</script>";
      }else{
        echo "<script>alert('product not successfully added')</script>";
        echo "<script>window.location.assign('UploadAds.php')</script>";
      }
    }
}
?>