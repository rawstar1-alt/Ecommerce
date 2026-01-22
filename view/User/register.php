<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Register</title>

<!-- External CSS -->
<link rel="stylesheet" href="register.css">

</head>

<body>
<div class="background-container">
<div class="register-page">
    <div class="register-container">

        <p class="register-title">User Register</p>

        <form id="registerForm" action="insert.php" method="POST">

            <div class="form-group">
                <label>Username:</label>
                <input type="text" name="name" id="username" placeholder="Enter User Name" required>
                <span id="username-error" class="error-message"></span>
            </div>

            <div class="form-group">
                <label>User Email:</label>
                <input type="email" name="email" id="email" placeholder="Enter User Email" required>
                <span id="email-error" class="error-message"></span>
            </div>

            <div class="form-group">
                <label>User Number:</label>
                <input type="text" name="number" placeholder="Enter User Number" required>
            </div>

            <div class="form-group">
                <label>User Password:</label>
                <input type="password" name="password" placeholder="Enter User Password" required>
            </div>

            <div class="form-group">
                <button name="submit" class="btn-register">REGISTER</button>
            </div>

            <div class="form-group">
                <a href="login.php" class="btn-login">ALREADY ACCOUNT</a>
            </div>

        </form>
    </div>
</div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const username = document.getElementById('username');
    const email = document.getElementById('email');
    const usernameError = document.getElementById('username-error');
    const emailError = document.getElementById('email-error');
    const form = document.getElementById('registerForm');

    // Check username via AJAX
    username.addEventListener('blur', function(){
        fetch('insert.php?check=username&value=' + encodeURIComponent(username.value))
        .then(res => res.text())
        .then(data => {
            usernameError.textContent = (data === 'exists') ? 'Username is already taken' : '';
        });
    });

    // Check email via AJAX
    email.addEventListener('blur', function(){
        fetch('insert.php?check=email&value=' + encodeURIComponent(email.value))
        .then(res => res.text())
        .then(data => {
            emailError.textContent = (data === 'exists') ? 'Email is already taken' : '';
        });
    });

    // Prevent form submission if there are errors
    form.addEventListener('submit', function(e){
        if(usernameError.textContent || emailError.textContent){
            e.preventDefault();
            alert('Please fix the errors before submitting.');
        }
    });
});
</script>

</body>
</html>
