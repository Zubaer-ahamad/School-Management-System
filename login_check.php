<?php

session_start();

$conn = new mysqli('localhost', 'root', '', 'schoolmanagement');
if ($conn == false) {
    die('Connection Error');
};

$sql = "SELECT * FROM student";
$result = $conn->query($sql);

while ($row = $result->fetch_assoc()) {
    // echo '<pre>';
    // var_dump($row);
    // var_dump($row['id']);
    // echo '</pre>';
    if (isset($_POST['submit'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        if ($email == $row['email'] && $password == $row['password']) {
            $_SESSION['login'] = true;
            if ($row['usertype'] == 'admin') {
                header('location:admin.php');
            } elseif ($row['usertype'] == 'student') {
                header('location:student.php');
            }
        }
    } else {
        // $message = "email or password do not match";
        // $_SESSION["errorMessage"] = $message;
        // header('location:login.php');
    }
}