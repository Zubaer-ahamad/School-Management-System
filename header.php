<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Management System</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/home.css">
    <link rel="stylesheet" href="assets/css/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Source+Serif+4:ital,opsz,wght@0,8..60,200..900;1,8..60,200..900&family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

</head>

<body>
    <!-- header section start -->
    <header class="container">
        <nav>
            <div>
                <a href="index.php">
                    <img class="header-logo" src="assets/images/logo-1.png" alt="">
                </a>
            </div>
            <div>
                <ul class="header-icon" id="header-icon">
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="parents.php">PARENTS</a></li>
                    <li><a href="#">COURSES</a></li>
                    <li><a href="#">FEATURES</a></li>
                    <li><a href="#">EVENTS</a></li>
                    <li><a href="#">CONTACT</a></li>
                    <?php session_start();
                    if (isset($_SESSION['login'])) {
                    ?>
                        <li><a href="#"><button class="btn-user"><i class="fa-regular fa-user"></i></button></a></li>
                        <li><a href="logout.php"><button class="btn-subs">Logout</button></a></li>
                    <?php } else { ?>
                        <li><a href="login.php"><button class="btn-subs">LOG IN</button></a></li>
                    <?php } ?>
                </ul>
            </div>
            <div class="btn-box">
                <button class="nav-btn" onclick="toggleMenu()"><i class="fa-solid fa-bars"></i></button>
            </div>
        </nav>
    </header>
    <!-- header section end -->