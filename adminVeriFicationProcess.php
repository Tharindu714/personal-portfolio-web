<?php
require "connection.php";

require "SMTP.php";
require "PHPMailer.php";
require "Exception.php";

use PHPMailer\PHPMailer\PHPMailer;

if (isset($_POST["e"])) {
    $email = $_POST["e"];

    $admin_Resultset = Database::search("SELECT * FROM `admin` WHERE
  `email` = '" . $email . "'");

    $admin_num = $admin_Resultset->num_rows;
    if ($admin_num > 0) {

        $code = uniqid();

        Database::insUpdelete("UPDATE `admin` SET `verification_code` = '" . $code . "' WHERE `email` = '" . $email . "'");

        // email code
        $mail = new PHPMailer;
        $mail->IsSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'tharibro2211@gmail.com';
        $mail->Password = 'osproabgubeizhym';
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;
        $mail->setFrom('tharibro2211@gmail.com', 'Infinitix Admin Verification');
        $mail->addReplyTo('tharibro2211@gmail.com', 'Infinitix Admin Verification');
        $mail->addAddress($email);
        $mail->isHTML(true);
        $mail->Subject = 'Infinitix Admin Login verification_code Has sent to you';
        $bodyContent = '<h1 style="color:#6244C5">Your new Verification Code is ' . $code . '</h1>';
        $mail->Body = $bodyContent;

        if ($mail->send()) {
            echo "success";
        } else {
            echo 'Verification code sending failed';
        }

    } else {
        header("location:adminsigning.php");
    }

} else {
    header("location:adminsigning.php");
}
