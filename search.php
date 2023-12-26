<?php
session_start();

require 'connect.php';
$search_products = $_POST['search'];

if($search_products == ''){
  $search_products = '###';
}

$sql = "SELECT * from products where name like '%$search_products%'";
$result_mobi = mysqli_query($connect, $sql);


$sql = "SELECT * from product_laptop where name like '%$search_products%'";
$result_laptop = mysqli_query($connect, $sql);


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search product</title>
    <link rel="stylesheet" href="./public/css/rss.css" />
    <link rel="stylesheet" href="./public/css/style.css" />
    <link rel="stylesheet" href="./public/css/view_all.css" />
</head>

<body>
    <div class="wrapper">
        <?php include './partials/header.php' ?>
        <?php include './detail/detail_search.php'?>
        <?php include './partials/footer.php' ?>
    </div>
    <script src="./public/js/js.js"></script>
    <script src="./public/js/slider.js"></script>
    <script src="./public/js/live-searchs.js"></script>
</body>

</html>