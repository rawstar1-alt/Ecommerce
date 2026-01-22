
<?php
session_start();
include 'Config.php'; // DB connection

// =====================
// Handle Product Upload
// =====================
if(isset($_POST['submit'])) {

    $product_name     = $_POST['pname'];
    $product_price    = $_POST['pprice'];
    $product_category = $_POST['pages'];

    // Handle file upload
    if(isset($_FILES['pimage']) && $_FILES['pimage']['error'] == 0){
        $image_loc  = $_FILES['pimage']['tmp_name'];
        $image_name = $_FILES['pimage']['name'];
        $img_des    = "Uploadimage/" . $image_name;

        move_uploaded_file($image_loc, $img_des);

        // Insert into database
        $query = "INSERT INTO `tdlproduct`(`PName`, `PPrice`, `PImage`, `PCategory`) 
                  VALUES ('$product_name','$product_price','$img_des','$product_category')";

        mysqli_query($con, $query);
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Products</title>
<link rel="stylesheet" href="product.css">
</head>
<body>

    <!-- Product Table -->
    <div class="table-wrapper">
        <table class="product-table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Image</th>
                    <th>Category</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody> 
                <?php include 'Config.php';
                 $Record = mysqli_query($con, "SELECT * FROM tdlproduct "); 
                 while ($row = mysqli_fetch_array($Record))
                  { echo 
                  " <tr> <td>{$row['Id']}</td> 
                  <td>{$row['PName']}</td> 
                  <td>{$row['PPrice']}</td> 
                  <td> <img src='{$row['PImage']}' height='90px' width='120px'> </td>
                   <td>{$row['PCategory']}</td> 
                   <td> <a href='delete.php?id={$row['Id']}'>Delete</a> </td> </tr> "; } 
                   ?> 
                   </tbody>
        </table>
    </div>

</body>
</html>
