<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>User Login</title>

<!-- External CSS -->
<link rel="stylesheet" href="register.css">

</head>
<body>
<div class="background-container">
<div class="register-page">
    <div class="register-container">

        <p class="register-title">User LOGIN</p>

        <form action="login1.php" method="POST">

            <div class="form-group">
                <label>Username:</label>
                <input type="text" name="name" placeholder="Enter User Name" required>
            </div>

            <div class="form-group">
                <label>User Password:</label>
                <input type="password" name="password" placeholder="Enter User Password" required>
            </div>

            <div class="form-group">
                <button class="btn-register">LOGIN</button>
            </div>

            <div class="form-group">
                <a href="register.php" class="btn-login">REGISTER</a>
            </div>

        </form>

    </div>
</div>
</div>
</body>
</html>
