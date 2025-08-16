<?php
use PHPMailer\PHPMailer\PHPMailer;

$name = $_POST["n"];
$email = $_POST["e"];
$subject = $_POST["s"];
$message = $_POST["m"];

if(empty($name)){
    echo("Please fill in all the required fields");
    exit;
}else if (empty($name)) {
    echo("Please enter your name");
}else if (empty($email)) {
    echo("Please enter your email");
}else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo("invalid email address");
}else if (empty($subject)) {
    echo("Please enter the subject");
}else if (empty($message)) {
    echo("Please enter your message");
}else{

require "SMTP.php";
require "PHPMailer.php";
require "Exception.php";

    $mail = new PHPMailer(true);
    $mail->IsSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'ashenlalantha71@gmail.com';
    $mail->Password = 'cubpektzejosluss';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;

    $mail->setFrom( 'ashenlalantha71@gmail.com', 'Best Care Contact Us');
    $mail->addReplyTo($email, $name);
    $mail->addAddress('ashenlalantha71@gmail.com');

    $mail->isHTML(true);
    $mail->Subject = 'Company Messages';
    $bodyContent = '<div style="background-color:#EFECEC; color:#181823; padding: .5rem; padding-left:1rem; border-radius: 15px 15px;">
    <h3 style="color:#6C5F5B">New message from &nbsp;<strong style="color:#181823">'.$name.'</strong></h3>
    <p><strong>Email: </strong>&nbsp;'.$email.'</p>
    <p><strong>Subject: </strong>&nbsp;'.$subject.'</p>
    <p><strong>Message: </strong>&nbsp;<span style="font-size:large;">'.$message.'</span></p>
    </div>';
    $mail->Body = $bodyContent;
    
    if (!$mail->send()) {
        echo 'Somthings wrong';
    } else {
        echo 'Success';
    }

    // if (!$mail->send()) {
    //     echo 'Mailer Error: ' . $mail->ErrorInfo;
    // } else {
    //     echo 'Success';
    // }

    }

?>
