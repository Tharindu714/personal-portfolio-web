<?php

session_start();

require "connection.php";

if (isset($_SESSION["Aduser"])) {

    $fname = $_POST["fname"];
    $lnmae = $_POST["lname"];

    if (empty($fname)) {
        echo ("Please Enter First name");
    } else if (empty($lnmae)) {
        echo ("Please Enter Last Name");
    } else {

        Database::insUpdelete("UPDATE `admin` SET `fname` = '" . $fname . "', `lname` = '" . $lnmae . "' WHERE `email` = 'tharinduchanaka6@gmail.com';");

        echo ("success");
    }
} else {
    echo ("Please Log in first");
}
