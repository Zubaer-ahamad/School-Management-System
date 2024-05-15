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

if ($_GET['teacher_id']) {
    $user_id = $_GET['teacher_id'];
    $sql = "SELECT * FROM teachers WHERE id = '$user_id'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
};

if (isset($_POST['update_teacher'])) {
    $update_name = $_POST['name'];
    $update_message = $_POST['message'];
    $id = $_GET['teacher_id'];
    $mySql = "UPDATE teachers SET name = '$update_name', description = '$update_message' WHERE id = '$id' ";
    $result2 = $conn->query($mySql);
    if ($result2) {
        header('location:view_teacher.php');
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
                    <h1>Update Teacher</h1>
                    <br>
                    <br>
                    <form action="#" method="POST">
                        <div>
                            <input type="text" name="name" id="name-field" value="<?php echo "{$row['name']}"; ?>" class="hero-input">
                        </div>
                        <div>
                            <textarea name="message" class="message-input"><?php echo "{$row['description']}"; ?></textarea>
                        </div>
                        <div>
                        </div>
                        <!-- <div> -->
                            <!-- <img class="teacher-img" src="<?php echo "{$row['image']}"; ?>" alt=""> -->
                            <!-- <input type="file" name="image" placeholder="Image" class="hero-input"> -->
                        <!-- </div> -->
                        <div>
                            <input type="submit" name="update_teacher" value="Update Teacher" class="input-submit update-submit">
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