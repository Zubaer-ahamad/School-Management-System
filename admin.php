<?php
session_start();
if (!isset($_SESSION['login'])) {
    header('location:login.php');
} elseif ($_SESSION['type'] == 'student') {
    header('location:login.php');
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
    <!-- header start -->
    <header class="admin-nav">
        <nav class="container">
            <div>
                <a class="admin-title" href="admin.php">Admin Dashboard</a>
            </div>
            <div>
                <a href="logout.php"><button class="btn-subs">Log Out</button></a>
            </div>
        </nav>
    </header>
    <!-- header start -->

    <!-- aside start -->
    <aside>
        <ul>
            <li><a href="">Admission</a></li>
            <li><a href="">Add Student</a></li>
            <li><a href="">View Student</a></li>
            <li><a href="">Add Teacher</a></li>
            <li><a href="">View Teacher</a></li>
            <li><a href="">Add Courses</a></li>
            <li><a href="">View Courses</a></li>
        </ul>
    </aside>
    <!-- aside end -->

    <!-- main start -->
    <main>
        <!-- content start -->
        <section>
            <div class="content">
                <h1>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis, molestiae!</h1>
                <br>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sint alias deleniti aspernatur delectus dolore nam laboriosam maiores corporis animi quaerat ad ipsum tempore suscipit culpa officia ut, nihil commodi consequuntur?</p>
            </div>
        </section>
        <!-- content end -->
    </main>
    <!-- main end -->
</body>

</html>