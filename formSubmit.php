<?php

if (isset($_POST['submit'])) {
  $personName = $_POST['personName'];
  $company = $_POST['company'];
  $uMail = $_POST['uMail'];
  $phone = $_POST['phone'];
  $message = $_POST['message'];

  $mailTo = "joao@jdantas.com";
  $header = "From: " .$uMail;
  $txt = "Name: ".$personName. 
  " \n Company: " .$company.
  " \n phone: " .$phone.
  " \n message: " .$message;
  mail($mailTo,"Portfolio msg",$txt,$header);
  header("location: contact.php?mailsent");
}
