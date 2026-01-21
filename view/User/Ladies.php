<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home-page</title>
    <?php 
    include 'header.php'
    ?>
</head>
<body style="margin:0; padding:0; font-family: monospace;">

<div style="width:100%; padding:20px; box-sizing:border-box;">

    <h1 style="
        text-align:center;
        color:orange;
        margin:20px 0;
    ">
        Ladies
    </h1>

    <div style="
        display:flex;
        flex-wrap:wrap;
        justify-content:center;
        gap:20px;
    ">

    <?php
    include 'Config.php';

    $Record = mysqli_query($con, "SELECT * FROM tdlproduct");

    while ($row = mysqli_fetch_array($Record)) {
        $check_page = $row['PCategory'];

        if ($check_page === 'Ladies') {
        
    ?>

        <!-- Single Product Card -->
        <form action="Insertcart.php" method="POST" style="margin:0;">
            <div style="width:280px; border:1px solid #ddd; border-radius:5px; box-shadow:0 2px 6px rgba(0,0,0,0.1); padding:10px; background-color:white;">

                <img src="../admin/product/<?php echo $row['PImage']; ?>" 
                     style="width:100%; height:200px; object-fit:cover; border-radius:5px;">

                <div style="text-align:center; padding:10px;">
                    <h5 style="color:red; font-size:18px; font-weight:bold; margin:10px 0;">
                        <?php echo $row['PName']; ?>
                    </h5>

                    <p style="color:red; font-size:16px; font-weight:bold; margin:5px 0 10px 0;">
                        Rs: <?php echo $row['PPrice']; ?>
                    </p>

                    <!-- Hidden inputs -->
                    <input type="hidden" name="PName" value="<?php echo $row['PName']; ?>">
                    <input type="hidden" name="PPrice" value="<?php echo $row['PPrice']; ?>">

                    <!-- Quantity input -->
                    <input type="number" name="PQuantity" min="1" max="20" placeholder="Quantity"
                           style="width:100%; padding:8px; margin-bottom:10px; box-sizing:border-box;">

                    <!-- Add to Cart Button -->
                    <input type="submit" name="addCart" value="Add To Cart"
                           style="width:100%; padding:10px; background-color:orange; border:none; color:white; font-size:16px; cursor:pointer;">
                </div>

            </div>
        </form>
    <?php
        }}
    
    ?>

    </div>
</div>

</body>


</body>
</html>