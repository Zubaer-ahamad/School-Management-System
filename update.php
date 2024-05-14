<?php
session_start();
if (!isset($_SESSION['login'])) {
    header('location:login.php');
} elseif ($_SESSION['type'] == 'student') {
    header('location:login.php');
};

$conn = new mysqli('localhost', 'root', '', 'schoolmanagement');
if ($conn->connect_error) {
    die("Connect Error");
};

if ($_GET['student_id']) {
    $user_id = $_GET['student_id'];
    $sql = "SELECT * FROM users WHERE id = '$user_id'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
};

if (isset($_POST['update_student'])) {
    $update_name = $_POST['name'];
    $update_number = $_POST['number'];
    $update_email = $_POST['email'];
    $update_password = $_POST['password'];
    $id = $_GET['student_id'];
    $mySql = "UPDATE users SET username='$update_name', phone='$update_number', email='$update_email', password='$update_password' WHERE id = '$id' ";
    $result2 = $conn->query($mySql);
    if ($result2) {
        header('location:view_student.php');
    } else {
        echo "Failed To Update";
    };
}

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
                    <h1>Update Student</h1>
                    <br>
                    <br>
                    <form action="#" method="POST">
                        <div>
                            <input type="text" name="name" id="name-field" value="<?php echo "{$row['username']}"; ?>" class="hero-input">
                        </div>
                        <div>
                            <input type="number" name="number" id="number-field" value="<?php echo "{$row['phone']}"; ?>" class="hero-input">
                        </div>
                        <div>
                            <input type="email" name="email" id="email-field" value="<?php echo "{$row['email']}"; ?>" class="hero-input">
                        </div>
                        <div>
                            <input type="text" name="password" id="password-field" value="<?php echo "{$row['password']}"; ?>" class="hero-input">
                        </div>
                        <div>
                            <input type="submit" name="update_student" value="Update Student" class="input-submit update-submit">
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