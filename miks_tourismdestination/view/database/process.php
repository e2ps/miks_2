<?php
$conn = mysqli_connect("localhost", "root", "", "intro_php_mysql_db") or die('connection error');



if (isset($_POST['button'])) {
    $email = $_POST['Email'];      // or $_POST['email'] based on input name
    $pass = $_POST['pass'];

    $sql = "SELECT * FROM users_tb WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);
    $user = mysqli_fetch_array($result, MYSQLI_ASSOC);

    if ($user) {
        if (password_verify($pass, $user["password"])) {
            session_start();
            $_SESSION["user"] = "yess";
            header("Location: http://localhost/Sabillo/miks_tourismdestination/Admin/view/index.php?page=Dashboard");
            die();
        } else {
            echo "<script>alert ('Password does not match')</script>";
        }
    } else {
        echo "<div class='alert alert-danger'>Email does not exist</div>";
    }
}

        if (isset($_POST['btnSubmit'])) {
        // Get and sanitize inputs
        $FullName = htmlspecialchars(trim($_POST['fullname']), ENT_QUOTES, 'UTF-8');
        $email = htmlspecialchars(trim($_POST['Email']), ENT_QUOTES, 'UTF-8');
        $Message = htmlspecialchars(trim($_POST['message']), ENT_QUOTES, 'UTF-8');
        $txtPhone = htmlspecialchars(trim($_POST['txtPhone']), ENT_QUOTES, 'UTF-8');

        // Validate inputs
        if (!empty($email) && !empty($Message) && !empty($txtPhone)) {

            // Validate email format
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo "<div class='alert alert-danger'>Invalid email format.</div>";
            } else {
                $sql = "INSERT INTO msg_tb(fullname, Email, message, txtPhone) VALUES (?, ?, ?, ?)";
                $stmt = mysqli_stmt_init($conn);

                if (mysqli_stmt_prepare($stmt, $sql)) {
                    mysqli_stmt_bind_param($stmt, "sssi", $FullName, $email, $Message, $txtPhone);
                    mysqli_stmt_execute($stmt);

                    // Optional: send email notification
                    // mail("your@email.com", "New message from $FullName", $Message, "From: $email");

                    echo "<div class='alert alert-success'>Message sent successfully.</div>";
                            header("Location: contact.php");
                    // Prevent form resubmission on refresh
                } else {
                    die("<div class='alert alert-danger'>Something went wrong with the SQL statement.</div>");
                }
            }
        } else {
            echo "<div class='alert alert-danger'>Please fill out all fields.</div>";
        }
    }
?>