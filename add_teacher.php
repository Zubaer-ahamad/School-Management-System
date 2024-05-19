<?php
session_start();
if (!isset($_SESSION['login'])) {
    header('location:login.php');
} elseif ($_SESSION['type'] == 'student') {
    header('location:login.php');
}

$conn = new mysqli('localhost', 'root', '', 'schoolmanagement');
if ($conn->connect_error) {
    die('Connection Error');
}

if (isset($_POST['add_teacher'])) {
    $name = $_POST['name'];
    $message = $_POST['message'];
    $image = $_FILES['image']['name'];
    $dst = "assets/images/teacher/" . $_FILES['image']['name'];
    if (move_uploaded_file($_FILES['image']['tmp_name'], $dst)) {
        $sql = "INSERT INTO teachers (name, description, image) VALUES ('$name','$message','$dst')";
        $result = $conn->query($sql);
        if ($result) {
            header('location:view_teacher.php');
        } else {
            echo "Failed To Update";
        };
    } else {
        echo "Error on uploaded.";
    }
};

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin || Add Teacher</title>
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
                    <h1>Add Teacher</h1>
                    <br>
                    <br>
                    <form action="#" method="POST" enctype="multipart/form-data">
                        <div>
                            <input type="text" name="name" id="name-field" placeholder="Teacher Name" class="hero-input">
                        </div>
                        <div>
                            <textarea rows="" name="message" id="decryption-field" class="tinymce" placeholder="Teacher Decryption" maxlength="200"></textarea>
                        </div>
                        <div>
                            <input type="file" name="image" placeholder="Image" class="hero-input teacher-file-img">
                        </div>
                        <div>
                            <input type="submit" name="add_teacher" value="Add Teacher" class="input-submit">
                        </div>
                    </form>
                </div>
            </center>
        </section>
        <!-- content end -->
    </main>
    <!-- main end -->


    <!-- <script src="assets/js/main.js"></script> -->
    <script src="assets/js/tinymce/tinymce.min.js"></script>
    <script src="assets/js/tinymce/init-tinymce.js"></script>
</body>

</html>