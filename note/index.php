<!DOCTYPE html>
<html lang="en">
<?php

$homepage = true;
include "config.php";
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Note</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <style>
        .icon {
            font-size: 32px;
        }

        .note {
            margin: 0.25rem;
            display: flex;
            flex-direction: column;
        }
    </style>
</head>

<body class="bg-light">
    <?php include "navbar.php" ?>
    
    <section class="d-flex flex-wrap-reverse justify-content-start align-items-center container">
        <!-- การแสดงรายการข้อมูล database ด้วย foreach  -->
        <?php foreach (mysqli_fetch_all(mysqli_query($con, "SELECT * FROM `note` WHERE 1"), MYSQLI_ASSOC) as $note) { ?>
            <div class="note bg-white p-3 border rounded" style="width: 20rem;">
                <div class="d-flex flex-row justify-content-center align-items-center">
                    <i><?php echo $note['date'] ?></i>
                </div>
                <div class="d-flex flex-row justify-content-between align-items-center">
                    <strong><?php echo $note['title'] ?></strong>
                    <div class="btn-group">
                        <button class="btn btn-outline-dark btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        </button>
                        <div class="dropdown-menu p-1">
                            <form action="edit.php" method="post" class="form-group w-100">
                                <input type="hidden" name="id" value="<?php echo $note['id'];?>" >
                                <button type="submit" class="btn btn-outline-dark w-100">edit</button>
                            </form>
                            <form action="del.php" method="post" class="form-group w-100">
                                <input type="hidden" name="id" value="<?php echo $note['id'];?>">
                                <button type="submit" class="btn btn-outline-danger w-100">del</button>
                            </form>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="">
                    <p><?php echo $note['note']?></p>
                </div>

            </div>
        <?php } ?>
        <!-- วงเล็บปิด loop -->
    </section>

</body>

</html>