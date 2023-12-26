<!-- Phần giữa -->
<?php
require 'connect.php';
?>

<div class="container">
    <div class="grid_full-width">
        <?php include './partials/menu.php' ?>
        <div class="grid_full-width content">
            <div class="content__brands">
                <?php include './partials/slider.php' ?>
                <div class="grid">
                    <div class="brands__heading">
                        <h1>Điện thoại nổi bật nhất</h1>
                    </div>
                    <?php include './partials/product_tele.php' ?>
                </div>
                <div class="grid">
                    <div class="brands__heading">
                        <h1>Laptop mới</h1>
                    </div>
                </div>
                <?php include './partials/product_laptop.php' ?>
            </div>
            <?php include './partials/slidebar.php' ?>
        </div>
    </div>
</div>