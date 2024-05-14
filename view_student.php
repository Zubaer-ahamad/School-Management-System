<?php
session_start();
if (!isset($_SESSION['login'])) {
    header('location:login.php');
} elseif ($_SESSION['type'] == 'student') {
    header('location:login.php');
}

$conn = new mysqli('localhost', 'root', '', 'schoolmanagement');

// Check connection
if ($conn->connect_error) {
    die("Connection failed");
}

$sql = "SELECT * FROM users WHERE usertype = 'student' ";

$result = $conn->query($sql);

if (isset($_SESSION['delete'])) {
    echo "<script type='text/javascript'>
    alert('Data Deleted Successfully');
    </script>";
    unset($_SESSION['delete']);
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
            <center>
                <div class="content">
                    <h1>All The Student</h1>
                    <br><br>
                    <table>
                        <tr>
                            <th>User Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Password</th>
                            <th>Action</th>
                        </tr>
                        <?php while ($row = $result->fetch_assoc()) { ?>
                            <tr>
                                <td><?php echo "{$row['username']}"; ?></td>
                                <td><?php echo "{$row['email']}"; ?></td>
                                <td><?php echo "{$row['phone']}"; ?></td>
                                <td><?php echo "{$row['password']}"; ?></td>
                                <td>
                                    <a href='delete.php?student_id=<?php echo "{$row['id']}"; ?>'>
                                        <button class="btn-user">
                                            <i class="fa-solid fa-x"></i>
                                        </button>
                                    </a>
                                    <a href='update.php?student_id=<?php echo "{$row['id']}"; ?>'>
                                        <button class="btn-user btn-eye">
                                            <i class="fa-solid fa-pen"></i>
                                        </button>
                                    </a>
                                </td>
                            </tr>
                        <?php } ?>
                    </table>
                </div>
            </center>
        </section>
        <!-- content end -->
    </main>
    <!-- main end -->

    <script src="assets/js/main.js"></script>
</body>

</html>