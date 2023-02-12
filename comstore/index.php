<!DOCTYPE html>
<html lang="en">
<?php
//การนำเข้า file config.php เพื่อใช้งาน database ที่ทำการชื่อมต่อ
include "config.php";
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Computer Store</title>
    <!-- ส่วนของ bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- bootstrap -->
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
                    <!-- แสดงจำนวนสินค้าในตะกร้า -->
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
            <!-- การค้นหาสินค้า -->
            <form action="" class="search-form container-fluid w-100" method="post">
                <input type="search" name="search" id="search" placeholder="Search" class="form-control">
                <button type="submit" name="submit"><i class="bi bi-search" class="btn"></i></button>
            </form>
        </div>
    </nav>
    <!-- function สำหรับการค้นหา -->
    <?php
    if (isset($_POST['submit'])) {
        $key = $_POST['search'];

        if ($key == '') {
            // หากไม่ระบุ key สำหรับค้นหา จะแสดงรายการสินค้าทั้งหมด 
            $result = mysqli_query($con, "SELECT * FROM `products` WHERE 1");
        } else {
            // หากระบุ จะหา สินค้าด้วย key
            $result = mysqli_query($con, "SELECT * FROM `products` WHERE product_id LIKE '%$key%' OR product_name LIKE '%$key%' OR product_brand LIKE '%$key%' OR category LIKE '%$key%' ");
            echo '
            <div class="alert d-flex justify-content-around alert-light alert-dismissible fade show" role="alert">
                <strong>Search for "' . $key . '"</strong>
                <button type="button" class="close close-btn" data-bs-dismiss="alert" aria-bs-label="Close" >
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>';
        }
    } else {
        // หากไม่มีการกดปุ่มค้นหา จะแสดงรายกาารทั้งหมด 
        $result = mysqli_query($con, "SELECT * FROM `products` WHERE 1");
    }
    ?>
    <!-- การแสดงสินค้าโดยใช้ loop foreach -->
    <!-- แสดงรายการ ด้วยการแทรกแท็ก php  -->
    <section class="d-flex flex-md-row flex-wrap justify-content-center">
        <?php
        $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
        foreach ($rows as $row) {
        ?>
            <div class="card align-items-center flex-column justify-content-between m-1" style="width: 18rem;">
                <img src="<?php echo $row['img_source'] ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?php echo substr($row['product_name'], 0, 20) ?></h5>
                    <!-- เมื่อกดปุ่ม จะส่งไปหน้ารายละเอียดสินค้า -->
                    <form action="detail.php" method="post">
                        <!-- input ชนิดซ่อน จะไม่แสดงในหน้าเว็บ แต่สามารถส่งข้อมูลได้ -->
                        <input type="hidden" name="data" value="<?php echo $row['product_name'] ?>">
                        <button type="submit" class="btn btn-outline-dark">Show detail</button>
                    </form>
                </div>
            </div>
        <?php } ?>
    </section>
</body>

</html>