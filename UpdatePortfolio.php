<?php

session_start();

require "connection.php";

if (isset($_SESSION["Aduser"])) {

    $years = $_POST["years"];
    $customers = $_POST["cus"];
    $projects = $_POST["projects"];
    $date = $_POST["date"];

    if (empty($years)) {
        echo ("Please Enter Number Of Years");
    } else if ($years == "0" | $years < 0) {
        echo ("Invalid Year Count");
    } else if (!is_numeric($years)) {
        echo ("Please input for Correct Year Count");
    } else if (empty($customers)) {
        echo ("Please Enter Customer Count");
    } else if (!is_numeric($customers)) {
        echo ("Please input valid count of Customer");
    } else if (empty($projects)) {
        echo ("Please Enter Finished Project Count");
    } else if (!is_numeric($projects)) {
        echo ("Please input valid project count");
    } else if (empty($date)) {
        echo ("Please Update Date & Time of the new update");
    } else {

        Database::insUpdelete("UPDATE `portfolio` SET `YearOf_Exp` = '" . $years . "', `Satisfied_Customer` = '" . $customers . "', `Succesful_projects` = '" . $projects . "', `updated_date` = '" . $date . "'
    WHERE `id` = '2';");

        echo ("success");
    }
} else {
    echo ("Please Log in first");
}
