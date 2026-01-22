
<?php
session_start();

$errors = [];
$old = [];

if (isset($_POST['submit'])) {

    $old['pname']  = trim($_POST['pname']);
    $old['pprice'] = trim($_POST['pprice']);
    $old['pages']  = $_POST['pages'];

    /* ========= VALIDATION ========= */

    // Product Name
    if (empty($old['pname'])) {
        $errors['pname'] = "Product name is required";
    } elseif (strlen($old['pname']) < 3) {
        $errors['pname'] = "Minimum 3 characters required";
    }

    // Product Price
    if (empty($old['pprice'])) {
        $errors['pprice'] = "Product price is required";
    } elseif (!is_numeric($old['pprice']) || $old['pprice'] <= 0) {
        $errors['pprice'] = "Invalid price";
    }

    // Category
    if (empty($old['pages'])) {
        $errors['pages'] = "Category is required";
    }

    // Image validation
    if (!isset($_FILES['pimage']) || $_FILES['pimage']['error'] != 0) {
        $errors['pimage'] = "Image is required";
    } else {
        $allowed = ['jpg','jpeg','png','webp'];
        $ext = strtolower(pathinfo($_FILES['pimage']['name'], PATHINFO_EXTENSION));

        if (!in_array($ext, $allowed)) {
            $errors['pimage'] = "Only JPG, PNG, WEBP allowed";
        }
    }

    /* ========= RESULT ========= */

    if (!empty($errors)) {
        $_SESSION['errors'] = $errors;
        $_SESSION['old'] = $old;
        header("Location: index.php");
        exit();
    }

    // Validation passed → go to insert.php
    require 'insert.php';
}
?>
