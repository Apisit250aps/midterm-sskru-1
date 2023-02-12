<!DOCTYPE html>
<html lang="en">
<?php
include "config.php";
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Computer Store</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script>
        $(".alert").alert();
    </script>
</head>

<body class="text-center align-items-center justify-content-center">
    <nav class="navbar navbar-dark bg-transparent text-light d-flex flex-column flex-md-row align-items-center justify-content-around">
        <div class="navbar-brand col-12 col-md-4 d-flex justify-content-around align-items-center ">

            <a href="index.php" class="nav-link text-white">
                <strong>Computer Store</strong>
            </a>

        </div>
        <div class="navbar-menu d-flex flex-row justify-content-around align-items-center col-12 col-md-4">
            <a href="cart.php" class="nav-link text-white">
                <p>Cart</p>
            </a>
            <a href="" class="nav-link text-white">
                <p>
                    Profile
                </p>
            </a>
            <form action="" class="search-form container-fluid w-100" method="post">
                <input type="search" name="search" id="search" placeholder="Search" class="form-control">
                <button type="submit" name="submit"><i class="bi bi-search" class="btn"></i></button>
            </form>
        </div>
    </nav>
    <?php
    session_start();
    if (!isset($_POST['unit'])) {
        echo "emt";
    }
    include "config.php";
    $unit = $_POST['unit'];
    $name = $_POST['name'];
    $pro = mysqli_fetch_array(mysqli_query($con, "SELECT quantity FROM products WHERE product_name = '$name'"));
    if ($pro['quantity'] < $unit) {
        echo ' <div class="alert alert-danger alert-dismissible fade show d-flex flex-column align-items-center justify-content-between"
        role="alert">
        <p>' . $name . '</p>
        <strong>Out of Stock!</strong>
        <a href="http://localhost/comstore/cart.php">Back to cart</a>
    </div>';
        mysqli_close($con);
    } else {
        if (mysqli_query($con, "UPDATE `products` SET quantity = quantity-$unit WHERE product_name = '$name'")) {

            mysqli_query($con, "DELETE FROM `cart` WHERE product_name = '$name'");
            echo ' <div class="alert alert-success alert-dismissible fade show d-flex flex-column align-items-center justify-content-between"
        role="alert">
        <p>' . $name . '</p>
        <strong>Buy successful!</strong>
        <a href="http://localhost/comstore/cart.php">Back to cart</a>
    </div>';
        }
    }
    ?>
</body>

</html>