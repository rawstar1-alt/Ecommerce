
<?php 

$Con =mysqli_connect('localhost','root','','ecommerce')



?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Registered Users</title>

<!-- External CSS -->
<link rel="stylesheet" href="users.css">

</head>
<body>

<div class="users-page">
    <h1 class="page-title">Registered Users</h1>

    <div class="table-wrapper">
        <table class="users-table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Number</th>
                    
                </tr>
            </thead>
            <tbody>
                <?php
                $records = mysqli_query($Con, "SELECT * FROM tdluser");
                while($row = mysqli_fetch_assoc($records)){
                    echo "
                    <tr>
                        <td>{$row['Id']}</td>
                        <td>{$row['UserName']}</td>
                        <td>{$row['Email']}</td>
                        <td>{$row['Number']}</td>
                        
                    </tr>
                    ";
                }
                ?>
            </tbody>
        </table>
    </div>
</div>

</body>
</html>
