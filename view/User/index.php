<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home-page</title>

    <?php include 'header.php'; ?>

    <!-- Page CSS -->
    <link rel="stylesheet" href="css/home.css">
</head>

<body>

<div class="page-wrapper">

    <h1 class="page-title">Home</h1>

    <div class="product-container">

        <?php
        include 'Config.php';

        $Record = mysqli_query($con, "SELECT * FROM tdlproduct");

        while ($row = mysqli_fetch_array($Record)) {
            if ($row['PCategory'] === 'Home') {
        ?>

        <!-- Product Card -->
        <form action="Insertcart.php" method="POST" class="product-form">

            <div class="product-card">

                <img src="../admin/product/<?php echo $row['PImage']; ?>" class="product-img">

                <div class="product-info">
                    <h5 class="product-name">
                        <?php echo $row['PName']; ?>
                    </h5>

                    <p class="product-price">
                        Rs: <?php echo $row['PPrice']; ?>
                    </p>

                    <!-- Hidden Inputs -->
                    <input type="hidden" name="PName" value="<?php echo $row['PName']; ?>">
                    <input type="hidden" name="PPrice" value="<?php echo $row['PPrice']; ?>">

                    <!-- Quantity -->
                    <input type="number" name="PQuantity" min="1" max="20"
                           placeholder="Quantity" class="qty-input">

                    <!-- Button -->
                    <input type="submit" name="addCart" value="Add To Cart"
                           class="add-cart-btn">
                </div>

            </div>

        </form>

        <?php
            }
        }
        ?>

    </div>
</div>

</body>
</html>
