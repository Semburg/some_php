<?php

include('db/db.php');


$name =  $_POST['name'];
$vorname = $_POST['vorname'];
$firma = $_POST['firma'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$betreff = $_POST['betreff'];
$anruf = $_POST['anruf'];
$message = $_POST['message'];

echo "Your name: " . $name . '</br>' . "Your vorname: " . $vorname .  '</br>' . "Your firma: " . $firma . '</br>';
echo "Your Betreff: " . $betreff . '</br>';
echo "Your anruf: " . $anruf . '</br>';
echo "Your message: " . $message . '</br>';

$add_message = "INSERT INTO 'messages' (name, vorname, firm, email, phone, topic, message) VALUES ($name, $vorname, $firma, $email, $phone, $betreff, $message )";

if ($connenction->query($add_message) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $add_message . "<br>" . $connection->error;
  }
  
  $conn->close();
  ?>






