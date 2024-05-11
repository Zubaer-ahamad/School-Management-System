<?php

$conn = new mysqli('localhost', 'root', '', 'schoolmanagement');

$sql = "SELECT * FROM students";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        var_dump($row);
        if ($row == false) {
            die;
        } else {
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $name = $_POST["name"];
                $password = $_POST["password"];
                $check = $row['username'] == $name && $row['password'] == $password;
                if($check){
                    if
                }
            };
        };
    };
} else {
    die("No Data Aviable");
}
