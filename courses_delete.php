<?php
$conn = new mysqli('localhost', 'root', '', 'schoolmanagement');
if ($conn->connect_error) {
    die('Connection Error');
}

if ($_GET['courses_id']) {
    $id = $_GET['courses_id'];
    $sql = "DELETE FROM courses WHERE id = '$id' ";
    $result = $conn->query($sql);
    if ($result) {
        $_SESSION['delete'] = true;
        header('location: view_courses.php');
    }
}
