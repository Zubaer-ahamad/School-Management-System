<?php
session_start();
if (!isset($_SESSION['login'])) {
    header('location:login.php');
} elseif ($_SESSION['type'] == 'student') {
    header('location:login.php');
};


if (isset($_POST['add_student'])) {
    $conn = new mysqli('localhost', 'root', '', 'schoolmanagement');

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed");
    }

    $user_name = $_POST['name'];
    $user_number = $_POST['number'];
    $user_email = $_POST['email'];
    $user_password = $_POST['password'];
    $user_type = "student";

    $check = "SELECT * FROM users WHERE username ='$user_name' ";
    $check_user = $conn->query($check);
    $row_count = mysqli_num_rows($check_user);
    if ($row_count) {
        echo "<script type='text/javascript'>
        alert('User Name Already Exist, Try Another One.');
        </script>";
    } else {

        $Sql = "INSERT INTO users(username, phone, email, usertype, password) VALUES ('$user_name','$user_number', '$user_email', '$user_type', '$user_password')";
        $result = $conn->query($Sql);
        if ($result) {
            echo "<script type='text/javascript'>
        alert('Data Update Successfully');
        </script>";
        } else {
            echo "Failed To Update";
        };
    }
};


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin || Home</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/home.css">
    <link rel="stylesheet" href="assets/css/login.css">
    <link rel="stylesheet" href="assets/css/admin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Source+Serif+4:ital,opsz,wght@0,8..60,200..900;1,8..60,200..900&family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>

<body>
    <?php include('sidebar.php'); ?>

    <!-- main start -->
    <main>
        <!-- content start -->
        <section>
            <div class="content">
                <center>
                    <h1>Add Student</h1>
                    <br>
                    <br>
                    <form action="#" method="post">
                        <div>
                            <input type="text" name="name" id="name-field" placeholder="Your Name" class="hero-input">
                        </div>
                        <div>
                            <input type="number" name="number" id="number-field" placeholder="Phone Number" class="hero-input">
                        </div>
                        <div>
                            <input type="email" name="email" id="email-field" placeholder="Your Email" class="hero-input">
                        </div>
                        <div>
                            <input type="text" name="password" id="password-field" placeholder="Your Password" class="hero-input">
                        </div>
                        <div>
                            <input type="submit" name="add_student" value="Add Student" class="input-submit">
                        </div>
                    </form>
                </center>
            </div>
        </section>
        <!-- content end -->
    </main>
    <!-- main end -->
</body>

</html>