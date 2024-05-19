<?php
session_start();
if (!isset($_SESSION['login'])) {
    header('location:login.php');
} elseif ($_SESSION['type'] == 'admin') {
    header('location:login.php');
}

$conn = new mysqli('localhost', 'root', '', 'schoolmanagement');

// Check connection
if ($conn->connect_error) {
    die("Connection failed");
}

$sql = "SELECT * FROM courses";

$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student || Profile</title>
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
    <?php include 'student_sidebar.php'; ?>

    <!-- main start -->
    <main>
        <!-- content start -->
        <section>
            <center>
                <div class="content">
                    <h1>My All Courses</h1>
                    <br><br>
                    <table cellspacing="0" cellpadding="0">
                        <tr>
                            <th>Courses Name</th>
                            <th>Courses Description</th>
                            <th>Courses Image</th>
                        </tr>
                        <?php while ($row = $result->fetch_assoc()) { ?>
                            <tr>
                                <td><?php echo "{$row['course_name']}"; ?></td>
                                <td><?php echo "{$row['course_detailes']}"; ?></td>
                                <td><img class="teacher-img" src="<?php echo "{$row['course_image']}"; ?>" alt=""></td>
                            </tr>
                        <?php } ?>
                    </table>
                </div>
            </center>
        </section>
        <!-- content end -->
    </main>
    <!-- main end -->
</body>

</html>