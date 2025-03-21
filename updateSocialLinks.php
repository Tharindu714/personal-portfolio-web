<?php

session_start();

require "connection.php";

if (isset($_SESSION["Aduser"])) {

    $facebook = $_POST["facebook"];
    $whatsapp = $_POST["whatsapp"];
    $instagram = $_POST["instagram"];
    $youtube = $_POST["youtube"];
    $linkedin = $_POST["linkedin"];

    if (!empty($facebook)) {
        Database::insUpdelete("UPDATE `social_media` SET `fb` = '" . $facebook . "'");
    }

    if (!empty($whatsapp)) {
        Database::insUpdelete("UPDATE `social_media` SET `whatsapp` = '" . $whatsapp . "'");
    }

    if (!empty($instagram)) {
        Database::insUpdelete("UPDATE `social_media` SET `instagram` = '" . $instagram . "'");
    }

    if (!empty($youtube)) {
        Database::insUpdelete("UPDATE `social_media` SET `youtube` = '" . $youtube . "'");
    }

    if (!empty($linkedin)) {
        Database::insUpdelete("UPDATE `social_media` SET `linkedin` = '" . $linkedin . "'");
    }

    echo ("success");
} else {
    echo ("Please Log in first");
}
