<?php

session_start();

if (isset($_POST['submit'])) {
    $conn = new mysqli('localhost', 'root', '', 'schoolmanagement');

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed");
    }

    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = isset($_POST['number']) ? $_POST['number'] : NULL;
    $message = $_POST['message'];

    // Use backticks or no quotes for column names
    $mySql = "INSERT INTO admission (name, email, phone, message) VALUES ('$name', '$email', '$number', '$message')";

    $result = $conn->query($mySql);

    if ($result) {
        $_SESSION['insert'] = "Your Application Is Sent";
        header('location:index.php');
    } else {
        echo "Failed To Apply: ";
    }
}
