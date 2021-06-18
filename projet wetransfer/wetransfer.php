<?php

require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;

if (isset($_POST['send_mail'])) {

    $message = $_POST['message'];
    $adresse = $_POST['email-to'];

    $mail = new PHPMailer;
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 587;
    $mail->SMTPSecure = 'tls';
    $mail->SMTPAuth = true;
    $mail->Username = 'tsboe.2015@gmail.com'; //expediteur
    $mail->Password = 'porsche68'; //mot de passe
    $mail->setFrom('Ferdi_Codeur@protonmail.com', 'ferdi');
    $mail->addAddress($adresse); //destinataire
    $mail->IsSMTP(true);
    $mail->SMTPDebug = 1;
    $mail->Subject = 'hello ferdi'; //sujet du mail
    $mail->Body = $message." http://wetransfer/download/".$filename ;

    if (!$mail->send()) {
        echo $mail->ErrorInfo;
    } else {
        echo "Message bien envoyé";
    }

    $countfiles = count($_FILES['myFiles']['tmp_name']);
    
    for($i=0; $i< $countfiles; $i++){
        $filename = $_FILES['myFiles']['name'][$i];
        move_uploaded_file($_FILES['myFiles']['tmp_name'][$i],'download/'.$filename);
    }
} 
?>