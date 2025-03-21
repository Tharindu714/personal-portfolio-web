<?php

session_start();

require "connection.php";

if (isset($_SESSION["Aduser"])) {

    $whatsapp = $_POST["wp"];
    $office = $_POST["office"];
    $call = $_POST["call"];
    $email = $_POST["email"];

    if (empty($whatsapp)) {
        echo ("Please Enter your current whatsapp number");
    } else if (strlen($whatsapp) != 10) {
        echo ("Mobile must have 10 characters");
    } else if (!preg_match("/07[0,1,2,4,5,6,7,8][0-9]/", $whatsapp)) {
        echo ("Invalid Mobile number !!!");
    } else if (empty($office)) {
        echo ("Please Enter current office address");
    } else if (empty($call)) {
        echo ("Please Enter your current phone number");
    } else if (strlen($call) != 10) {
        echo ("Mobile must have 10 characters");
    } else if (!preg_match("/07[0,1,2,4,5,6,7,8][0-9]/", $call)) {
        echo ("Invalid Mobile number !!!");
    } else if (empty($email)) {
        echo ("Please enter your current email address");
    } else if (strlen($email) >= 100) {
        echo ("Email must have less than 100 characters");
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo ("Invalid Email !!!");
    } else {

        Database::insUpdelete("UPDATE `contact` SET `office_address` = '" . $office . "', `call_num` = '" . $call . "', `whatsapp` = '" . $whatsapp . "', `email` = '" . $email . "'
    WHERE `id` = '1';");

        echo ("success");
    }
} else {
    echo ("Please Log in first");
}
