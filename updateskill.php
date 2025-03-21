<?php

session_start();

require "connection.php";

if (isset($_SESSION["Aduser"])) {


    $upercentage = $_POST["upercentage"];
    $ulang = $_POST["ulang"];
    $ucolor = $_POST["ucolor"];


    if (!empty($upercentage)) {
        Database::insUpdelete("UPDATE `skills` SET `percentage` = '" . $upercentage . "' WHERE `langauge` = '".$ulang."';");
    }
    
    if (!empty($ucolor)) {
        Database::insUpdelete("UPDATE `skills` SET `color` = '" . $ucolor . "' WHERE `langauge` = '".$ulang."';");
    }
        echo ("success");
} else {
    echo ("Please Log in first");
}
