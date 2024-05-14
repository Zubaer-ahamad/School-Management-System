<?php
session_start();
$conn = new mysqli('localhost', 'root', '', 'schoolmanagement');
if ($conn->connect_error) {
    die("Connect Error");
};
if ($_GET['student_id']) {
    $user_id = $_GET['student_id'];
    $sql = "DELETE FROM users WHERE id = '$user_id'";
    $result = $conn->query($sql);
    if ($result) {
        header('location:view_student.php');
        $_SESSION['delete'] = true;
    };
};
