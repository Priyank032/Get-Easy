<?php
require "db.php";
session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
  
      $name = test_input($_POST["name"]);
      $email = test_input($_POST["email"]);
      $phone = test_input($_POST["phone"]);
      $rno = test_input($_POST["rno"]);
      $password = test_input($_POST["password"]);
      $cpassword = test_input($_POST["cpassword"]);
      
     
     // check if name only contains letters and whitespace
      if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
       echo "<script>alert('Only letters and white space allowed')</script>";  
       echo '<script> window.location.replace("register_user.php")</script>';
      }
      
      if (!preg_match("/^[0-9]*$/",$phone) || strlen($phone)!=10) {
       
        echo "<script>alert('Only 10 digits numbers are required')</script>";
        echo '<script> window.location.replace("register.php")</script>';
      }

      if (!preg_match("/^[0-9A-Z]*$/",$rno)) {
        echo "<script>alert('Only numbers and capital alphabets are required')</script>";
        echo '<script> window.location.replace("register_user.php")</script>';
      }
      $_SESSION["name"] = $name;
      $_SESSION["email"] = $email;
      $_SESSION["phone"] = $phone;
      $_SESSION["rno"] = $rno;
      $_SESSION["password"] = $password;
      $_SESSION["cpassword"] = $cpassword;

      $sql1="SELECT * from col_users where urno='$rno'";
      $rec1=mysqli_query($db,$sql1);
      $count = mysqli_num_rows($rec1);
      // echo $count;
      if($count ==0){
        //  echo " helo";
        echo "<script> alert('This roll no. doesn't exists. Contact your college faculties regarding this') </script>";
         echo '<script> window.location.replace("register.php")</script>';
      } 
      if($count > 0){       
        $otp = rand(100000,999999);
        $to_email =  $email;
        $subject = "Verify Your email";
        $body = " <!doctype html>
    <html>
    <head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>verify mail</title>
    <link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css' rel='stylesheet'>
    <link href='' rel='stylesheet'>
    <style></style>
    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js'></script>
    <script type='text/javascript'></script>
    </head>
    <body oncontextmenu='return false' class='snippet-body'>
    <!DOCTYPE html>
    <html>

    <head>
    <title></title>
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge' />
    <style type='text/css'>
    @media screen {
      @font-face {
        font-family: 'Lato';
        font-style: normal;
        font-weight: 400;
        src: local('Lato Regular'), local('Lato-Regular'), url(https://fonts.gstatic.com/s/lato/v11/qIIYRU-oROkIk8vfvxw6QvesZW2xOQ-xsNqO47m55DA.woff) format('woff');
      }

      @font-face {
        font-family: 'Lato';
        font-style: normal;
        font-weight: 700;
        src: local('Lato Bold'), local('Lato-Bold'), url(https://fonts.gstatic.com/s/lato/v11/qdgUG4U09HnJwhYI-uK18wLUuEpTyoUstqEm5AMlJo4.woff) format('woff');
      }

      @font-face {
        font-family: 'Lato';
        font-style: italic;
        font-weight: 400;
        src: local('Lato Italic'), local('Lato-Italic'), url(https://fonts.gstatic.com/s/lato/v11/RYyZNoeFgb0l7W3Vu1aSWOvvDin1pK8aKteLpeZ5c0A.woff) format('woff');
      }

      @font-face {
        font-family: 'Lato';
        font-style: italic;
        font-weight: 700;
        src: local('Lato Bold Italic'), local('Lato-BoldItalic'), url(https://fonts.gstatic.com/s/lato/v11/HkF_qI1x_noxlxhrhMQYELO3LdcAZYWl9Si6vvxL-qU.woff) format('woff');
      }
    }

    /* CLIENT-SPECIFIC STYLES */
    body,
    table,
    td,
    a {
      -webkit-text-size-adjust: 100%;
      -ms-text-size-adjust: 100%;
    }

    table,
    td {
      mso-table-lspace: 0pt;
      mso-table-rspace: 0pt;
    }

    img {
      -ms-interpolation-mode: bicubic;
    }

    /* RESET STYLES */
    img {
      border: 0;
      height: auto;
      line-height: 100%;
      outline: none;
      text-decoration: none;
    }

    table {
      border-collapse: collapse !important;
    }

    body {
      height: 100% !important;
      margin: 0 !important;
      padding: 0 !important;
      width: 100% !important;
    }

    /* iOS BLUE LINKS */
    a[x-apple-data-detectors] {
      color: inherit !important;
      text-decoration: none !important;
      font-size: inherit !important;
      font-family: inherit !important;
      font-weight: inherit !important;
      line-height: inherit !important;
    }

    /* MOBILE STYLES */
    @media screen and (max-width:600px) {
      h1 {
        font-size: 32px !important;
        line-height: 32px !important;
      }
    }

    /* ANDROID CENTER FIX */
    div[style*='margin: 16px 0;'] {
      margin: 0 !important;
    }
    </style>
    </head>

    <body style='background-color: #f4f4f4; margin: 0 !important; padding: 0 !important;'>
    <!-- HIDDEN PREHEADER TEXT -->
    <div style='display: none; font-size: 1px; color: #fefefe; line-height: 1px; font-family: 'Lato', Helvetica, Arial, sans-serif; max-height: 0px; max-width: 0px; opacity: 0; overflow: hidden;'> We're thrilled to have you here! Get ready to dive into your new account. </div>
    <table border='0' cellpadding='0' cellspacing='0' width='100%'>
    <!-- LOGO -->
    <tr>
    <td bgcolor='#FFA73B' align='center'>
    <table border='0' cellpadding='0' cellspacing='0' width='100%' style='max-width: 600px;'>
    <tr>
    <td align='center' valign='top' style='padding: 40px 10px 40px 10px;'> </td>
    </tr>
    </table>
    </td>
    </tr>
    <tr>
    <td bgcolor='#FFA73B' align='center' style='padding: 0px 10px 0px 10px;'>
    <table border='0' cellpadding='0' cellspacing='0' width='100%' style='max-width: 600px;'>
    <tr>
    <td bgcolor='#ffffff' align='center' valign='top' style='padding: 40px 20px 20px 20px; border-radius: 4px 4px 0px 0px; color: #111111; font-family: 'Lato', Helvetica, Arial, sans-serif; font-size: 48px; font-weight: 400; letter-spacing: 4px; line-height: 48px;'>
    <h1 style='font-size: 48px; font-weight: 400; margin: 2;'>Welcome!!!</h1> <img src=' https://img.icons8.com/clouds/100/000000/handshake.png' width='125' height='120' style='display: block; border: 0px;' />
    </td>
    </tr>
    </table>
    </td>
    </tr>
    <tr>
    <td bgcolor='#f4f4f4' align='center' style='padding: 0px 10px 0px 10px;'>
    <table border='0' cellpadding='0' cellspacing='0' width='100%' style='max-width: 600px;'>
    <tr>
    <td bgcolor='#ffffff' align='left' style='padding: 20px 30px 40px 30px; color: #666666; font-family: 'Lato', Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 400; line-height: 25px;'>
    <h5 style='text-align:center'>Hi, $name </h5>
    <p style='margin: 0;'>Verify Your account to copy the below otp and paste it  .The Below OTP will Be expire soon So submit the otp before expiring..</p>
    </td>
    </tr>
    <tr>
    <td bgcolor='#ffffff' align='left'>
    <table width='100%' border='0' cellspacing='0' cellpadding='0'>
    <tr>
    <td bgcolor='#ffffff' align='center' style='padding: 20px 30px 60px 30px;'>
    <table border='0' cellspacing='0' cellpadding='0'>
    <tr>
    <td align='center' style='border-radius: 3px;' bgcolor='#FFA73B'><a href='#' target='_blank' style='font-size: 20px; font-family: Helvetica, Arial, sans-serif; color: #ffffff; text-decoration: none; color: #ffffff; text-decoration: none; padding: 15px 25px; border-radius: 2px; border: 1px solid #FFA73B; display: inline-block;'>  $otp </a></td>
    </tr>
    </table>
    </td>
    </tr>
    </table>
    </td>
    </tr> <!-- COPY -->
    <tr>
    <td bgcolor='#ffffff' align='left' style='padding: 0px 30px 0px 30px; color: #666666; font-family: 'Lato', Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 400; line-height: 25px;'>
    
    </td>
    </tr> <!-- COPY -->
    <tr>
    <td bgcolor='#ffffff' align='left' style='padding: 20px 30px 20px 30px; color: #666666; font-family: 'Lato', Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 400; line-height: 25px;'>
    
    </td>
    </tr>
    <tr>
    <td bgcolor='#ffffff' align='left' style='padding: 0px 30px 20px 30px; color: #666666; font-family: 'Lato', Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 400; line-height: 25px;'>
    <p style='margin: 0;'>If you have any questions, just reply to this email—we're always happy to help out.</p>
    </td>
    </tr>
    <tr>
    <td bgcolor='#ffffff' align='left' style='padding: 0px 30px 40px 30px; border-radius: 0px 0px 4px 4px; color: #666666; font-family: 'Lato', Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 400; line-height: 25px;'>
    <p style='margin: 0;'>CEO,<br>GetEasy</p>
    </td>
    </tr>
    </table>
    </td>
    </tr>
    <tr>
    <td bgcolor='#f4f4f4' align='center' style='padding: 30px 10px 0px 10px;'>
    <table border='0' cellpadding='0' cellspacing='0' width='100%' style='max-width: 600px;'>
    <tr>
    <td bgcolor='#FFECD1' align='center' style='padding: 30px 30px 30px 30px; border-radius: 4px 4px 4px 4px; color: #666666; font-family: 'Lato', Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 400; line-height: 25px;'>
    <h2 style='font-size: 20px; font-weight: 400; color: #111111; margin: 0;'>Need more help?</h2>
    <p style='margin: 0;'><a href='#' target='_blank' style='color: #FFA73B;'>We&rsquo;re here to help you out</a></p>
    </td>
    </tr>
    </table>
    </td>
    </tr>
    <tr>
    <td bgcolor='#f4f4f4' align='center' style='padding: 0px 10px 0px 10px;'>
    <table border='0' cellpadding='0' cellspacing='0' width='100%' style='max-width: 600px;'>
    <tr>
    <td bgcolor='#f4f4f4' align='left' style='padding: 0px 30px 30px 30px; color: #666666; font-family: 'Lato', Helvetica, Arial, sans-serif; font-size: 14px; font-weight: 400; line-height: 18px;'> <br>
    <p style='margin: 0;'>If these emails get annoying, please feel free to <a href='#' target='_blank' style='color: #111111; font-weight: 700;'>unsubscribe</a>.</p>
    </td>
    </tr>
    </table>
    </td>
    </tr>
    </table>
    </body>

    </html>
    </body>
    </html>" ;
    $mail = new PHPMailer(true);
        
    try {
        //Server settings
        $mail->SMTPDebug = 1;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'priyankagrawal76660@gmail.com';                     //SMTP username
        $mail->Password   = '@123Priyank';                               //SMTP password
        $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
        $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
         
        // while( $data = mysqli_fetch_array($rec)){
        
            //Recipients
            $mail->setFrom('priyankagrawal76660@gmail.com',"admin" );
            $mail->addAddress($to_email, 'user');     //Add a recipient
            $mail->addAddress($to_email);               //Name is optional
           //  $mail->addReplyTo('info@example.com', 'Information');
           //  $mail->addCC('cc@example.com');
           //  $mail->addBCC('bcc@example.com');
        
            //Attachments
           //  $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
           //  $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
        
            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject =  $subject;
            $mail->Body    = $body;
            // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
            if($mail->send()){
                $esMessage = true;
            }else{
                $esMessage = false;
            }
        // }
        if($esMessage){
          $sql="insert into otp_expire(user_email,otp,expire)values('$email',$otp,0)";
          $result=mysqli_query($db,$sql);
          if($result)
          {
            echo "<script> alert('Check you email for verification') </script>";
            echo '<script> window.location.replace("account_activation_otp.php")</script>';  
          }
        }else{
          echo "<script> alert('email sending failed please try again later') </script>";
          echo '<script> window.location.replace("register_user.php")</script>';         
        }
    } catch (Exception $e) 
    {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
   
       
      }
}
 ?>