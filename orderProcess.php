<?php
require "connection.php";

$m_name = $_POST["mess_name"];
$m_email = $_POST["mess_email"];
$m_mobile = $_POST["mess_mobile"];
$m_subject = $_POST["mess_subject"];
$m_desc = $_POST["message_desc"];


if (empty($m_name)) {
  echo ("Please Enter Your Name");
} else if (empty($m_email)) {
  echo ("Please Enter valid Email");
}else if(strlen($m_email) >= 100){
    echo ("Email must have less than 100 characters");
}else if(!filter_var($m_email,FILTER_VALIDATE_EMAIL)){
    echo ("Invalid Email !!!");
} else if (empty($m_mobile)) {
  echo ("Please Enter Your Mobile Number");
}else if(strlen($m_mobile) != 10){
    echo ("Mobile must have 10 characters");
}else if(!preg_match("/07[0,1,2,4,5,6,7,8][0-9]/",$m_mobile)){
    echo ("Invalid Mobile !!!");
} else if (empty($m_subject)) {
    echo ("Please Enter the reason to message");
} else if (empty($m_desc)) {
    echo ("Describe your requirement is compulsory '<br/>'
    Mind not to use punctuation marks and special characters");
} else {

  Database::insUpdelete("INSERT INTO `orders`
    (`name`,`email`,`mobile`,`subject`,`message`)
    VALUES ('" . $m_name . "' ,'" . $m_email . "' ,'" . $m_mobile . "','" . $m_subject . "' ,'" . $m_desc . "')");

  echo ("Submitted Successfully <br> Check your Email");
}