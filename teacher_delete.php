<?php
session_start();
$conn = new mysqli('localhost', 'root', '', 'schoolmanagement');
if ($conn->connect_error) {
    die("Connect Error");
};
if ($_GET['teacher_id']) {
    $user_id = $_GET['teacher_id'];
    $sql = "DELETE FROM teachers WHERE id = '$user_id'";
    $result = $conn->query($sql);
    if ($result) {
        header('location:view_teacher.php');
        $_SESSION['delete'] = true;
    };
};
