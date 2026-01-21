
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
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <div class="d-flex justify-content-end mb-3">
        <a href=".../form/login.php" class="btn btn-danger">Logout</a>
    </div>
    <h2 class="mb-4">All Products</h2>
    <div class="row">
        <?php
        $result = mysqli_query($con, "SELECT * FROM tdlproduct ORDER BY id DESC");

        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){
                ?>
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <img src="<?= $row['PImage'] ?>" class="card-img-top" alt="<?= htmlspecialchars($row['PName']) ?>" style="height:200px; object-fit:cover;">
                        <div class="card-body">
                            <h5 class="card-title"><?= htmlspecialchars($row['PName']) ?></h5>
                            <p class="card-text">Price: ৳<?= number_format($row['PPrice'],2) ?></p>
                            <p class="card-text">Category: <?= htmlspecialchars($row['PCategory']) ?></p>
                        </div>
                    </div>
                </div>
                <?php
            }
        } else {
            echo "<p class='text-center'>No products found.</p>";
        }
        ?>
    </div>

</div>

</body>
</html>
