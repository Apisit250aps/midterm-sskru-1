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
            <a href="#" class="nav-link text-white">
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
    <section class="container">
        <div class="alert alert-dark" <?php if ((mysqli_num_rows(mysqli_query($con, "SELECT * FROM `cart` WHERE 1"))) > 0) { echo "hidden";} ?>>
            <strong>Cart is Empty!</strong>
            <a href="index.php">Shop here</a>
        </div>
        <div class="cart">
            <?php
            // การแสดง รายการสินค้าในตะกร้า 
            $carts = mysqli_fetch_all(mysqli_query($con, "SELECT * FROM `cart` WHERE 1"), MYSQLI_ASSOC);
            foreach ($carts as $cart) {
            ?>
                <div class="cart-list d-flex flex-column flex-md-row align-items-center align-items-md-start">
                    <?php $product = mysqli_fetch_all(mysqli_query($con, "SELECT * FROM `products` WHERE product_name = '" . $cart['product_name'] . "'"), MYSQLI_ASSOC);
                    foreach ($product as $info) { ?>
                        <img src="<?php echo $info['img_source'] ?>" alt="" srcset="">
                    <?php } ?>
                    <div class="info w-100 d-flex flex-column">
                        <strong class="card-title"><?php echo substr($info['product_name'], 0, 100) ?></strong>
                        <table class="w-100">
                            <tr>
                                <td>Units</td>
                                <td>
                                    <p><?php echo $cart['unit'] ?></p>
                                </td>
                            </tr>
                            <tr>
                                <td>Totals</td>
                                <td>
                                    <p><?php echo $cart['unit'] * $info['price'] ?>$
                                </td>
                                <td class="d-flex flex-row justify-content-end">
                                    <!-- ปุ่ม ลบ สินค้า จะดำเนินการผ่าน file del.php -->
                                    <form action="del.php" method="post">
                                        <input type="hidden" name="key" value="<?php echo $info['product_name']; ?>">
                                        <button class="btn btn-danger" type="submit">Del</button>
                                    </form>
                                    <!-- ปุ่ม ซื้อ สินค้า จะดำเนินการผ่าน file buy.php -->
                                    <form action="buy.php" method="post">
                                        <input type="hidden" name="unit" value="<?php echo $cart['unit']; ?>">
                                        <input type="hidden" name="name" value="<?php echo $info['product_name']; ?>">
                                        <button class="btn btn-success" type="submit">Buy</button>
                                    </form>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            <?php } ?>
        </div>
    </section>
</body>

</html>