<?php

session_start();

use PHPMailer\PHPMailer\PHPMailer;

require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if (isset($_POST['submit'])) {

    // Initialize PHPMailer settings.
    $mail = new PHPMailer(true);
        
    $mail->isSMTP();

    $mail->Host = 'smtp.gmail.com';

    $mail->SMTPAuth = true;

    // Store this in seperate pages to avoid spam..
    $mail->Username = 'ruben.rosalia2002@gmail.com';
    $mail->Password = 'akro zyuw teai eeqh';

    $mail->SMTPSecure = 'ssl';

    $mail->Port = '465';

    $mail->SetFrom('name@yourdomain.com', 'Shabu Shabu');

    $mail->addAddress($_SESSION["email"]);

    $mail->isHTML(true);

    $mail->Subject = "Uw reserving voor"." ".$_SESSION['menu_choice']." "."op" ." ".$_SESSION['dateDisplay'];

    $mail->Body = "Uw reserving hebben wij in goede orde ontvangen";

    $mail->send();
}
