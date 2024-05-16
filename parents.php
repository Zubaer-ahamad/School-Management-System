<?php
$conn = new mysqli('localhost', 'root', '', 'schoolmanagement');
if ($conn->connect_error) {
    die('Connection Error');
};


if (isset($_POST['application'])) {
    $name = $_POST['name'];
    $children_name = $_POST['children'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $student_sql = "SELECT username FROM users WHERE username = '$children_name' ";
    $student_result = $conn->query($student_sql);
    while ($info = $student_result->fetch_assoc()) {
        // echo "{$info['username']}";
        if ($children_name == $info['username']) {
            $sql = "INSERT INTO `parents`(name, children_name, login_email, login_password) VALUES ('$name','$children_name','$email','$password')";
            $result = $conn->query($sql);
            if ($result) {
                echo "<script type'text/javascript'>
            alert('Application Sent, Please Wait!');
            </script>";
                sleep(2);
                header('location:parents.php');
            }
        } else {
            echo "<script type'text/javascript'>
            alert('Enter Wrong Children Name');
            </script>";
        }
    }
}
?>


<?php include('header.php'); ?>
<!-- main start -->
<main>
    <section class="container">
        <div class="parents-form">
            <h3>Parents Form</h3>
            <form action="#" method="post">
                <div>
                    <input type="text" name="name" id="name-field" placeholder="Your Name" class="hero-input">
                </div>
                <div>
                    <input type="text" name="children" id="name-field" placeholder="Your Children Name" class="hero-input">
                </div>
                <div>
                    <input type="email" name="email" id="email-field" placeholder="Your Email" class="hero-input">
                </div>
                <div>
                    <input type="text" name="password" id="password-field" placeholder="Your Password" class="hero-input">
                </div>
                <div>
                    <input type="submit" name="application" value="Application Send" class="input-submit">
                </div>
            </form>
        </div>
    </section>
</main>
<!-- main end -->
<?php include('footer.php'); ?>