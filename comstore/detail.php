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
                <span class="d-flex flex-row">
                    <p class="m-1">Cart</p>
                    <?php if (mysqli_num_rows(mysqli_query($con, "SELECT * FROM `cart` WHERE 1")) > 0) {
                        echo mysqli_num_rows(mysqli_query($con, "SELECT * FROM `cart` WHERE 1"));
                    } ?>
                </span>

            </a>
            <a href="#" class="nav-link text-white">
                <span class="d-flex flex-row">
                    <p class="m-1">
                        Profile
                    </p>

                </span>
            </a>
            <form action="" class="search-form container-fluid w-100" method="post">
                <input type="search" name="search" id="search" placeholder="Search" class="form-control">
                <button type="submit" name="submit"><i class="bi bi-search" class="btn"></i></button>
            </form>
        </div>
    </nav>
    <?php
    $dataInfo = $_POST['data'];
    $detail = mysqli_fetch_array(mysqli_query($con, "SELECT * FROM `products` WHERE product_name = '$dataInfo'"));
    ?>
    <section class="container">
        <div class="d-flex flex-column flex-md-row bg-white" id="detail">
            <img src="<?php echo $detail['img_source'] ?>" alt="" class="">
            <div class="text">
                <strong><?php echo $detail['product_name'] ?></strong>
                <p><?php echo $detail['price'] ?>$</p>
                <div class="d-flex flex-row w-25 justify-content-between">
                    <p><?php echo $detail['product_brand'] ?></p>
                    <p><?php echo $detail['category'] ?></p>
                </div>

            </div>
        </div>
        <form action="add-cart.php" method="post" class="bg-white buy">
            <input type="hidden" value="<?php echo $detail['product_name'] ?>" name="name">
            <input type="number" name="unit" min="1" value="1" max="<?php echo $detail['quantity'] ?>" id="" class="form-control mx-1">
            <button class="btn btn-outline-dark">
                <strong>Add cart</strong>
            </button>
        </form>
        <div id="desc" class="bg-white">
            <strong>Detail</strong>
            <p><?php echo $detail['desc']; ?></p>
        </div>
    </section>


</body>

</html>