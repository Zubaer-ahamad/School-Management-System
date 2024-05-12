<?php include('header.php'); ?>

<!-- main start hare -->
<main>
    <section class="login-section">
        <div class="container">
            <div class="login-box">
                <div class="login-img">
                    <img src="assets/images/login.png" alt="">
                </div>
                <div class="login-form-box">
                    <form action="login_check.php" method="POST" class="login-form">
                        <h3 class="login-title">Please Login</h3>
                        <div>
                            <input type="email" name="email" placeholder="Your Email" class="hero-input">
                        </div>
                        <div>
                            <input type="text" name="password" placeholder="Password" class="hero-input">
                        </div>
                        <div class="login-btn-div">
                            <input type="submit" name="submit" value="Submit Form" class="login-submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>
<!-- main end hare -->

<?php include('footer.php'); ?>