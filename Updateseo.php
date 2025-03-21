<?php

session_start();

require "connection.php";

if (isset($_SESSION["Aduser"])) {

    $about = $_POST["about"];
    $customers = $_POST["client"];
    $projects = $_POST["project"];
    $skill = $_POST["skill"];
    $contact = $_POST["contact"];

    if (!empty($about)) {
        Database::insUpdelete("UPDATE `seo_desc` SET `about_me` = '" . $about . "' WHERE `id` = '1';");
    }

    if (!empty($customers)) {
        Database::insUpdelete("UPDATE `seo_desc` SET `clients` = '" . $customers . "' WHERE `id` = '1';");
    }

    if (!empty($projects)) {
        Database::insUpdelete("UPDATE `seo_desc` SET `project` = '" . $projects . "' WHERE `id` = '1';");
    }

    if (!empty($skill)) {
        Database::insUpdelete("UPDATE `seo_desc` SET `skil_desc` = '" . $skill . "' WHERE `id` = '1';");
    }

    if (!empty($contact)) {
        Database::insUpdelete("UPDATE `seo_desc` SET `contact_desc` = '" . $contact . "' WHERE `id` = '1';");
    }

        echo ("success");
    
} else {
    echo ("Please Log in first");
}
