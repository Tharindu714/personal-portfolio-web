<?php

session_start();

require "connection.php";

if (isset($_SESSION["Aduser"])) {


    $title = $_POST["utitle"];
    $price = $_POST["uprice"];
    $desc = $_POST["udesc"];
    $img = $_POST["uimg"];


    if (!empty($price)) {
        Database::insUpdelete("UPDATE `service` SET `price` = '" . $price . "' WHERE `title` = '" . $title . "';");
    }

    if (!empty($desc)) {
        Database::insUpdelete("UPDATE `service` SET `description` = '" . $desc . "' WHERE `title` = '" . $title . "';");
    }

    if (!empty($img)) {
        Database::insUpdelete("UPDATE `service` SET `image_icon` = '" . $img . "' WHERE `title` = '" . $title . "';");
    }
    echo ("success");
} else {
    echo ("Please Log in first");
}
