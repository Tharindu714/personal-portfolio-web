<?php
require "connection.php";

$yttut = $_POST["yttut"];

if (empty($yttut)) {
    echo ("Please Enter new playlist title");
} else {
    Database::insUpdelete("INSERT INTO `tutorial_proj`(`tutorial`) VALUES ('" . $yttut . "')");

    echo ("Submitted Successfully");
}
