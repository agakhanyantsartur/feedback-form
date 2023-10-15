<?php

include("config.php");
extract($_POST);

// Use the variables to insert the actual form values
$sql = "INSERT INTO `contact-data`(`firstname`, `lastname`, `phone`,`gender`, `email`, `messages`, `confirmation`) 
        VALUES ('$firstname', '$lastname', '$phone', '$gender', '$email', '$message', '$confirmation')";

$result = $mysqli->query($sql);


if(!$result){
    die("Couldn't enter data: " . $mysqli->error);
}

echo "Thank You For Contacting Us";

$mysqli->close();