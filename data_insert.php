<?php


if (isset($_POST['apply'])) {
    $conn = new mysqli('localhost', 'root', '', 'schoolmanagement');

    if ($conn == false) {
        die('Connection Error');
    } else {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $number = $_POST['number'] ? $_POST['number'] : NULL;
        $type = $_POST['type'];
        $password = $_POST['password'];

        $sql = "INSERT INTO student(`id`, `username`, `phone`, `email`, `usertype`, `password`) VALUES (NULL,'$name ', '$email', $number,'$type', '$password')";

        $result = $conn->query($sql);
    }
}
