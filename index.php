<?php
error_reporting(0);
session_start();
session_destroy();
if (isset($_SESSION['insert'])) {
    $message = $_SESSION['insert'];
    echo "<script type='text/javascript'>
    alert('$message')
    </script>";
}
?>


<?php include('header.php'); ?>

<!-- main Start Hare -->
<main>
    <!-- hero section start -->
    <section class="container">
        <div class="hero">
            <div class="hero-content">
                <h1>Inspiration, Innovation and Discovery</h1>
                <p>Any successful career starts with good education. Together with us you will have deeper knowledge of the subjects that will be especially useful for you when climbing the career ladder.</p>
                <button class="hero-btn">Learn More</button>
            </div>
            <div class="hero-form">
                <div class="form-hero">
                    <h3>Admission Form</h3>
                    <form action="data_insert.php" method="post">
                        <div>
                            <input type="text" name="name" id="name-field" placeholder="Your Name" class="hero-input">
                        </div>
                        <div>
                            <input type="email" name="email" id="email-field" placeholder="Your Email" class="hero-input">
                        </div>
                        <div>
                            <input type="number" name="number" id="number-field" placeholder="Phone Number" class="hero-input">
                        </div>
                        <div>
                            <textarea name="message" class="message-input" placeholder="Enter A Message" maxlength="50"></textarea>
                        </div>
                        <div>
                            <input type="submit" name="submit" value="Submit Form" class="input-submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- hero section end -->

    <!-- about section start -->
    <section class="container">
        <div class="about-container">
            <div class="offer-content about-content">
                <h2 class="offer-subtitle">About</h2>
                <p class="about-title">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magnam explicabo corrupti perspiciatis, quo hic eaque aspernatur, sint quasi nesciunt accusamus architecto dolorem quisquam. Maiores dignissimos, vero sit, aperiam quidem quis cumque facilis temporibus beatae optio accusamus eius. Ipsa ad ex voluptatem eius saepe porro iste voluptate, adipisci animi dicta ipsam.</p>
                <br>
                <p class="about-title">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eveniet vel blanditiis aut odio necessitatibus aspernatur illo, fugit cum, vero rerum eius libero sed laboriosam maiores facere sunt quibusdam officiis! Cupiditate.</p>
            </div>
            <div class="about-image">
                <img src="assets/images/about.jpg" alt="">
            </div>
        </div>
    </section>
    <!-- about section end -->

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
                <?php for ($i = 0; $i <= 2; $i++) { ?>
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
                <?php } ?>
            </div>
        </div>
    </section>
    <!-- featured section end -->

    <!-- teacher section start -->
    <section class="teacher-section">
        <div class="container">
            <div class="offer-content">
                <h4 class="offer-title">People Behind Our Success</h4>
                <h2 class="offer-subtitle">Our Tutors</h2>
                <p>We employ highly experienced and qualified teachers who set the ground for all our programs and<br> courses. They are aimed to help you achieve more on your path to success</p>
            </div>
            <div class="teacher-card-group">
                <?php for ($i = 0; $i <= 5; $i++) { ?>
                    <!-- card-1 -->
                    <div class="teacher-card">
                        <div class="teacher-image">
                            <img src="assets/images/teacher.jpg" alt="">
                        </div>
                        <div>
                            <h4 class="teacher-name">Leslie Alexander</h4>
                            <h5 class="teacher-position">Tutor</h5>
                            <p class="teacher-sub-title">Leslie joined our team in 2010 as a marketing tutor.</p>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
    <!-- teacher section end -->
</main>
<!-- main end Hare -->

<?php include('footer.php'); ?>