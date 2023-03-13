<?php
session_start();

$con=mysqli_connect("localhost","root","","creslms");
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

function send_password_reset($get_name,$get_email,$token)
{
    $mail = new PHPMAILER(true);
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'admimcrescent@gmail.com';                     //SMTP username
    $mail->Password   = '***';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('admimcrescent@gmail.com', $get_name);
    $mail->addAddress($get_email);     //Add a recipient
     //Optional name
     $email_template ="
     <h2>hello</h2>
     <h3>You are receiving this email</h3>
     <a href 'http://localhost/creslms/password.php?token=$token&email=$get_email'>Click me</a>";

     $mail->Body = $email_template;
     $mail->send();
}





if(isset($_POST['password_reset_link']))
{
    $email=mysqli_real_escape_string($con,$_POST['email']);
    $token = md5(rand());

    $check_email = "SELECT email FROM student WHERE email='$email'LIMIT 1";
    $check_email_run = mysqli_query($con, $check_email);

    if(mysqli_num_rows($check_email_run)>0)
    {
        $row = mysqli_fetch_array($check_email_run);
        $get_name = $row['name'];
        $get_email = $row['email'];

        $update_token = "UPDATE student SET verify_token='$token' WHERE email='$get_email'LIMIT 1";
        $update_token_run = mysqli_query($con, $update_token);

        if($update_token_run)
        {
            send_password_reset($get_name,$get_email,$token);
            $_SESSION['status'] ="we emailed you a password reset link";
            header("Location: password.php");
            exit(0);
        }
        else{
               $_SESSION['status'] ="something went wrong";
               header("Location: password.php");
               exit(0);
        }


    }
    else{
        $_SESSION['status'] = "no email found";
        header("Location:password.php");
        exit(0);
    }
}
?>