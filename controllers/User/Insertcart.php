<?php
session_start();

if(isset($_SESSION['user'])){
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

/* =========================
   ADD TO CART
========================= */
if (isset($_POST['addCart'])) {

    $product_name     = $_POST['PName'];
    $product_price    = $_POST['PPrice'];
    $product_quantity = $_POST['PQuantity'];

    $check_product = array_column($_SESSION['cart'], 'productName');

    if (in_array($product_name, $check_product)) {
        echo "<script>
                alert('Product already added');
                window.location.href='index.php';
              </script>";
        exit();
    } else {
        $_SESSION['cart'][] = [
            'productName'     => $product_name,
            'productPrice'    => $product_price,
            'productQuantity' => $product_quantity
        ];

        header("Location: viewCart.php");
        exit();
    }
}

/* =========================
   REMOVE FROM CART
========================= */
if (isset($_POST['remove']) && isset($_POST['item'])) {

    foreach ($_SESSION['cart'] as $key => $value) {
        if ($value['productName'] === $_POST['item']) {

            unset($_SESSION['cart'][$key]);

            // Reindex array
            $_SESSION['cart'] = array_values($_SESSION['cart']);

            header("Location: viewCart.php");
            exit();
        }
    }
}

/* =========================
   UPDATE CART
========================= */
if (isset($_POST['update']) && isset($_POST['item'])) {

    $product_quantity = $_POST['PQuantity'];

    foreach ($_SESSION['cart'] as $key => $value) {
        if ($value['productName'] === $_POST['item']) {

            // Update only quantity
            $_SESSION['cart'][$key]['productQuantity'] = $product_quantity;

            header("Location: viewCart.php");
            exit();
        }
    }
}

}

        else{
            header("location:form/login.php");
        }
?>
