<?php

session_start();

$conn = new mysqli('localhost', 'root', '', 'schoolmanagement');
if ($conn == false) {
    die('Connection Error');
};

$sql = "SELECT * FROM users";
$result = $conn->query($sql);

while ($row = $result->fetch_assoc()) {
    if (isset($_POST['submit'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        if ($email == $row['email'] && $password == $row['password']) {
            $_SESSION['login'] = true;
            if ($row['usertype'] == 'admin') {
                $_SESSION['type'] = 'admin';
                header('location:admin.php');
            } elseif ($row['usertype'] == 'student') {
                $_SESSION['type'] = 'student';
                $_SESSION['email'] = "$email";
                header('location:student.php');
            } elseif ($row['usertype'] == 'parents') {
                $_SESSION['type'] = 'parents';
                $_SESSION['email'] = "$email";
                header('location:parents_home.php');
            }
        }
    };
};
