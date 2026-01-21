<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin home-page</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<?php
session_start();
if(!$_SESSION['admin'])
{
     header("location:form/login.php");
}

?>
<body style="margin:0; font-family: Arial, sans-serif;">

<!-- HEADER / NAVBAR -->
<header style="background-color:#212529; padding:15px;">
    <div style="
        display:flex;
        justify-content:space-between;
        align-items:center;
        color:white;
    ">
        <div>
            <h1 style="margin:0;">Mystore</h1>
        </div>

        <div style="font-size:16px;">
            <i class="fa-solid fa-user-tie"></i>
            Hello,<?php echo $_SESSION['admin'];?>
            <i class="fa-solid fa-right-to-bracket"></i>
            <a href="form/logout.php" style="color:white; text-decoration:none; margin-left:5px;">Logout</a>
            <a href="#" style="color:white; text-decoration:none; margin-left:15px;">Userpanel</a>
        </div>
    </div>
</header>

<!-- DASHBOARD TITLE -->
<div style="text-align:center; margin:20px 0;">
    <h2>Dashboard</h2>
</div>

<!-- DASHBOARD LINKS -->
<div style="
    width:50%;
    background-color:#dc3545;
    margin:auto;
    padding:20px;
    text-align:center;
">
    <a href="product/index.php" style="
        color:white;
        text-decoration:none;
        font-size:22px;
        font-weight:bold;
        padding:0 20px;
    ">Add Post</a>

    <a href="#" style="
        color:white;
        text-decoration:none;
        font-size:22px;
        font-weight:bold;
        padding:0 20px;
    ">Users</a>
</div>

</body>
</html>