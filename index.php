<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Management System</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/home.css">
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
                <a href="#">
                    <img class="header-logo" src="assets/images/logo-1.png" alt="">
                </a>
            </div>
            <div>
                <ul class="header-icon" id="header-icon">
                    <li><a href="#">HOME</a></li>
                    <li><a href="#">COURSES</a></li>
                    <li><a href="#">FEATURES</a></li>
                    <li><a href="#">EVENTS</a></li>
                    <li><a href="#">BLOG</a></li>
                    <li><a href="#">CONTACT</a></li>
                    <li><a href="login.php"><button class="btn-subs">Login</button></a></li>
                </ul>
            </div>
            <div class="btn-box">
                <button class="nav-btn" onclick="toggleMenu()"><i class="fa-solid fa-bars"></i></button>
            </div>
        </nav>
    </header>
    <!-- header section end -->

    <!-- main Start Hare -->
    <main>
        <!-- hear section start -->
        <section class="container">
            <div class="hero">
                <div class="hero-content">
                    <h1>Inspiration, Innovation and Discovery</h1>
                    <p>Any successful career starts with good education. Together with us you will have deeper knowledge of the subjects that will be especially useful for you when climbing the career ladder.</p>
                    <button class="hero-btn">Learn More</button>
                </div>
                <div class="hero-form">
                    <form>
                        <h3>Admission Form</h3>
                        <div>
                            <input type="text" name="name" id="name-field" placeholder="Your Name" class="hero-input">
                            <!-- <label for="name-field">Your Name</label> -->
                        </div>
                        <div>
                            <input type="email" name="email" id="email-field" placeholder="Your Email" class="hero-input">
                            <!-- <label for="email-field">Your Email</label> -->
                        </div>
                        <div>
                            <input type="number" name="number" id="number-field" placeholder="Phone Number" class="hero-input">
                            <!-- <label for="number-field">Phone Number</label> -->
                        </div>
                        <div>
                            <input type="text" name="class" id="class-field" placeholder="Your Class" class="hero-input">
                            <!-- <label for="class-field">Your Class</label> -->
                        </div>
                        <div>
                            <input type="submit" value="Submit Form" class="input-submit">
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <!-- hear section start -->

        <!-- offer section start -->
        <section class="container">
            <div class="offer-content">
                <h4 class="offer-title">Guaranteed Success</h4>
                <h2 class="offer-subtitle">What We Offer</h2>
                <p>EMP offers students the best of education and entertainment opportunities available in the area. <br> We are glad to take care of every student and university entrant</p>
            </div>
            <div class="offer-card-group">
                <!-- card-1 -->
                <div class="offer-card">
                    <div class="offer-card-img">
                        <img src="assets/images/education.png" alt="">
                    </div>
                    <div class="offer-card-content">
                        <h3 class="offer-card-content-title">Online Education</h3>
                        <p>EMP provides online education services with all learning materials and lectures available to you.</p>
                    </div>
                </div>
                <!-- card-2 -->
                <div class="offer-card">
                    <div class="offer-card-img">
                        <img src="assets/images/certificate.png" alt="">
                    </div>
                    <div class="offer-card-content">
                        <h3 class="offer-card-content-title">Programs & Courses</h3>
                        <p>We offer a wide range of courses and programs that encompass lots of knowledge spheres.</p>
                    </div>
                </div>
                <!-- card-3 -->
                <div class="offer-card">
                    <div class="offer-card-img">
                        <img src="assets/images/campus.png" alt="">
                    </div>
                    <div class="offer-card-content">
                        <h3 class="offer-card-content-title">Campus Events</h3>
                        <p>Our campus is the hub to a talented and diverse student community that turns opportunities into success.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- offer section end -->

        <!-- featured section start -->
        <section class="featured-container">
            <div class="container">
                <div class="offer-content">
                    <h2 class="offer-subtitle">Our Featured Courses</h2>
                    <p>Our featured courses are selected through a rigorous process and uniquely created for each semester.<br> They cover a lot of topics and are available both online and offline.</p>
                </div>
                <div class="featured-card-group">
                    <!-- card-1 -->
                    <div class="featured-card">
                        <div class="featured-card-image">
                            <img src="assets/images/marketing.jpg" alt="">
                        </div>
                        <div class="featured-card-content">
                            <h3 class="offer-card-content-title">Online Marketing</h3>
                            <p>Ronal Richard</p>
                        </div>
                    </div>
                    <!-- card-2 -->
                    <div class="featured-card">
                        <div class="featured-card-image">
                            <img src="assets/images/hr.jpg" alt="">
                        </div>
                        <div class="featured-card-content">
                            <h3 class="offer-card-content-title">HR Management</h3>
                            <p>Ralph Edward</p>
                        </div>
                    </div>
                    <!-- card-3 -->
                    <div class="featured-card">
                        <div class="featured-card-image">
                            <img src="assets/images/finance.jpg" alt="">
                        </div>
                        <div class="featured-card-content">
                            <h3 class="offer-card-content-title">Financial Analysis</h3>
                            <p>Emma Smith</p>
                        </div>
                    </div>
                    <!-- card-4 -->
                    <div class="featured-card">
                        <div class="featured-card-image">
                            <img src="assets/images/web.jpg" alt="">
                        </div>
                        <div class="featured-card-content">
                            <h3 class="offer-card-content-title">Web Technology</h3>
                            <p>Karyn Murphy</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- featured section end -->
    </main>
    <!-- main end Hare -->
    <footer></footer>


    <script src="assets/js/main.js"></script>
</body>

</html>