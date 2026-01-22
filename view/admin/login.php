<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login</title>

<!-- External CSS -->
<link rel="stylesheet" href="login.css">

</head>
<body>
<div class="background-container">
<div class="login-page">
    <div class="login-container">

        <p class="login-title">Login</p>

        <form action="login1.php" method="POST">

            <div class="form-group">
                <label>Name:</label>
                <input type="text" name="username" placeholder="Enter username" required>
            </div>

            <div class="form-group">
                <label>Password:</label>
                <input type="password" name="userpassword" placeholder="Enter password" required>
            </div>

            <button type="submit" class="btn-login">Login</button>

        </form>

    </div>
</div>
</div >
</body>
</html>
