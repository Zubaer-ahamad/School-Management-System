<?php

$conn = new mysqli('localhost', 'root', '', 'schoolmanagement');

$sql = "SELECT * FROM student";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        var_dump($row);
    };
} else {
    die('connection error');
}
