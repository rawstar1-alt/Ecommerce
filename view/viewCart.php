<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>viewCart</title>
</head>
<body>
     <?php
include 'header.php';

?>
        <div class="container">
        <div class="row">
        <div class="col-lg-12 text-center bg-light mb-5 rounded">
        <h1 class="text-warning">MY Cart</h1>
        </div>
        </div>
        </div>  
<div class="container-fluid">
<div class="row justify-content-around">
<div class="col-sm-12 col-md-6 col-lg-9">
<table class="table table-bordered text-center">
<thead class="bg-danger text-white fs-5">

<th>Index No.</th>
<th>Product Name</th>
<th>Product Price</th>
<th>Product Quantity</th>
<th>Total Price</th>
<th>Update</th>
<th>Delete</th>
</thead>
<tbody>
<?php
        
        $ptotal = 0;
        $total = 0;
         if (isset($_SESSION['cart'])) {
          foreach ($_SESSION['cart'] as $key => $value) {
          $price    = (float) $value['productPrice'];
        $quantity = (int)   $value['productQuantity'];

        $ptotal = $price * $quantity;
        $total  += $ptotal;  
            echo "
        <form action = 'Insertcart.php' method='POST'>
        <tr>
        <td>$key</td>
        <td><input type='text' name ='PName' value ='$value[productName]'>{$value['productName']}</td>
        <td><input type='text' name ='PPrice' value ='$value[productPrice]'>{$value['productPrice']}</td>
        <td><input type='text' name ='PQuantity' value ='$value[productQuantity]'>{$value['productQuantity']}</td>
        <td>$ptotal</td>
        <td><button name = 'update' class ='btn-warning'>Update</button></td>
        <td><button name='remove' class ='btn-danger'>Delete</button></td>
        <td><input type ='text' name='item' value='$value[productName]'> </td> 
        
        </tr>
        </form>
        ";
       
          }
        }
?>
</tbody>

</table>
</div>
    
</div>
</div>

<div class="col-lg-12 text-center bg-light mb-5 rounded">
    <h3>Total Ammount</h3>
    <h1><?php echo $total ;?></h1>
</div>

</body>
</html>