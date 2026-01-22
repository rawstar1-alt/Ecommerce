<?php
session_start();

// Database connection
$Con = mysqli_connect('localhost', 'root', '', 'ecommerce');
if (!$Con) {
    die("Database connection failed: " . mysqli_connect_error());
}

// Check if form data is submitted
if (isset($_POST['name']) && isset($_POST['password'])) {
    $Name = trim($_POST['name']);
    $Password = trim($_POST['password']);

    // ================= PHP Validation =================
    $errors = [];

    if (empty($Name)) {
        $errors[] = "Username or Email is required.";
    }

    if (empty($Password)) {
        $errors[] = "Password is required.";
    }

    if (!empty($errors)) {
        $errMsg = implode("\\n", $errors);
        echo "<script>
                alert('$errMsg');
                window.location.href='login.php';
              </script>";
        exit;
    }

    // Escape special characters to prevent SQL injection
    $Name_safe = mysqli_real_escape_string($Con, $Name);
    $Password_safe = mysqli_real_escape_string($Con, $Password);

    // Query database
    $result = mysqli_query(
        $Con,
        "SELECT * FROM tdluser 
         WHERE (UserName='$Name_safe' OR Email='$Name_safe') 
         AND Password='$Password_safe'"
    );

    if ($result && mysqli_num_rows($result) > 0) {
        $_SESSION['user'] = $Name_safe;
        echo "<script>
                alert('Successfully Logged In');
                window.location.href='../index.php';
              </script>";
        exit;
    } else {
        echo "<script>
                alert('Incorrect username/email or password');
                window.location.href='login.php';
              </script>";
        exit;
    }
} else {
    // Redirect if form is not submitted
    header("Location: login.php");
    exit;
}
?>
