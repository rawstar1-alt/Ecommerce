<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Admin Home Page</title>

<!-- External CSS -->
<link rel="stylesheet" href="admin.css">
</head>

<?php
session_start();
if(!isset($_SESSION['admin'])){
     header("location:form/login.php");
     exit;
}
?>

<body>

<!-- HEADER / NAVBAR -->
<header class="admin-header">
    <div class="header-container">
        <div class="logo">
            <h1>Mystore</h1>
        </div>

        <div class="header-right">
            <span class="user-icon">&#128100;</span>
            Hello, <?php echo $_SESSION['admin']; ?>
            <span class="logout-icon">&#10162;</span>
            <a href="form/logout.php" class="logout-link">Logout</a>
            
        </div>
    </div>
</header>

<!-- DASHBOARD TITLE -->
<div class="dashboard-title">
    <h2>Dashboard</h2>
</div>

<!-- DASHBOARD LINKS -->
<div class="dashboard-links">
    <a href="product/index.php" class="dashboard-btn">Add Post</a>
    <a href="view_users.php" class="dashboard-btn">Users</a>
</div>

<div class="dashboard-logo">
    <img src="../user/logo.png" alt="My Logo">
</div>

</body>
</html>
