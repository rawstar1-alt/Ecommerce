<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    
<nav style="background-color:#f8f9fa; padding:10px 15px;">
  <div style="display:flex; align-items:center; justify-content:space-between; font-family:monospace;">

    <!-- Logo -->
    <a href="#" style="text-decoration:none;">
      <img src="logo.png" alt="Logo" style="height:40px;">
    </a>

    <!-- Right Menu -->
    <div style="display:flex; align-items:center;">

      <a href="index.php" style="color:#ffc107; text-decoration:none; padding-right:12px; font-size:16px;">
        <i class="fas fa-home" style="margin-right:5px;"></i> Home
      </a>

      <a href="viewCart.php" style="color:#ffc107; text-decoration:none; padding-right:12px; font-size:16px;">
        <i class="fas fa-shopping-cart" style="margin-right:5px;"></i> Cart (0)
      </a>

      <span style="color:#ffc107; padding-right:12px; font-size:16px;">
    <i class="fas fa-user-shield" style="margin-right:5px;"></i>
    Hello,
    <?php 
    session_start();
    if (isset($_SESSION['user'])) {
    echo $_SESSION['user'] . " | ";
    echo "<a href='form/logout.php' class='text-warning text-decoration-none'>
            <i class='fas fa-sign-out-alt'></i> Logout
          </a>";
} else {
    echo "<a href='form/login.php' class='text-warning text-decoration-none'>
            <i class='fas fa-sign-in-alt'></i> Login
          </a>";
}
    ?>
    |
</span>


      

      <a href="../admin/mystore.php" style="color:#ffc107; text-decoration:none; font-size:16px;">
        Admin
      </a>

    </div>
  </div>
</nav>

<div style="background-color:#dc3545; font-family:monospace;">
  <ul style="list-style:none; display:flex; justify-content:center; margin:0; padding:10px 0;">

    <li>
      <a href="Ladies.php" 
         style="text-decoration:none; color:#ffffff; font-weight:bold; font-size:22px; padding:0 40px;">
        Ladies
      </a>
    </li>

    <li>
      <a href="Gents.php" 
         style="text-decoration:none; color:#ffffff; font-weight:bold; font-size:22px; padding:0 40px;">
        Gents
      </a>
    </li>

    

  </ul>
</div>


</body>
</html>