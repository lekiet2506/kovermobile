<?php
session_start();

require 'connect.php';

$id = isset($_GET['id']) ? $_GET['id'] : '';

$brands = isset($_GET['lap_id']) ? $_GET['lap_id'] : '';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php if (!empty($_GET['id'])) {
      echo $value_mb['name'];
    } else {
      echo $value_lp['name'];
    }
    ?>
    </title>
    <link rel="stylesheet" href="./public/css/rss.css" />
    <link rel="stylesheet" href="./public/css/style.css" />
    <link rel="stylesheet" href="./public/css/view_all.css" />

</head>

<body>
    <div class="wrapper">
        <?php include './partials/header.php' ?>
        <?php
    if (!empty($_GET['id'])) {
      include './detail/detail_product.php';
    }
    ?>
        <?php
    if (!empty($_GET['lap_id'])) {
      include './detail/detail_product_lap.php';
    }
    ?>
        <?php include './partials/footer.php' ?>
    </div>
    <script src="./public/js/js.js"></script>
    <script src="./public/js/slider.js"></script>
    <script src="./public/js/live-searchs.js"></script>
    <script>
    function Onc() {
        return confirm("Bạn phải đăng nhập vào shop mới mua được sản phẩm!")
    }

    function Cmt() {
        return confirm("Bạn phải đăng nhập vào shop mới bình luận được sản phẩm!")
    }
    </script>

</body>

</html>