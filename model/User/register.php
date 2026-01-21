
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Register</title>
 
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
 
<body style="background-color:#f2f2f2; min-height:100vh;">
 
<div class="container">
<div class="row">
<div class="col-md-6 mt-5 m-auto bg-white shadow font-monospace border border-info">
 
      <p class="text-warning text-center fs-3 fw-bold my-3">User Register</p>
 
      <form action="insert.php" method="POST">

    <div class="mb-3">
        <label>Username:</label>
        <input type="text" name="name" placeholder="Enter User Name" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>User Email:</label>
        <input type="email" name="email" placeholder="Enter User Email" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>User Number:</label>
        <input type="text" name="number" placeholder="Enter User Number" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>User Password:</label>
        <input type="password" name="password" placeholder="Enter User Password" class="form-control" required>
    </div>

    <div class="mb-3">
        <button name="submit" class="w-100 bg-warning fs-4 text-white border-0">REGISTER</button>
    </div>

    <div class="mb-3">
        <a href="login.php" class="w-100 d-block bg-danger fs-4 text-white text-center text-decoration-none py-2">ALREADY ACCOUNT</a>
    </div>

</form>

 
    </div>
</div>
</div>
 
</body>
</html>

 