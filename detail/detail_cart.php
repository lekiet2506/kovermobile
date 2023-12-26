<?php

$cart = $_SESSION['cart'] ?? null;
$carts = $_SESSION['carts'] ?? null;

$sum_quantity = 0;
$sum_quantitys = 0;

?>

<div class="container">
    <div class="grid_full-width">
        <?php include './partials/menu.php' ?>
        <div class="grid_full-width content">
            <div class="content__brands">
                <?php include './partials/slider.php' ?>
                <div class="grid">

                    <?php include './detail/detail_cart_tele.php' ?>

                    <?php include './detail/detail_cart_laptop.php' ?>

                    <?php if (empty($_SESSION['carts']) && empty($_SESSION['cart'])) { ?>

                    <div class="row">
                        <div class="col col-full">
                            <div class="grid table_cart-info">
                                <div class="row-table_cart">
                                    <div style="margin: 0 auto;" class="content_cart">
                                        <div class="cart_none">
                                            <img src="./public/img/cart_0.png" alt="">
                                            <h3>Giỏ hàng của bạn còn trống</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } else { ?>
                    <div></div>
                    <?php }  ?>
                </div>
            </div>
            <?php include './partials/slidebar.php' ?>
        </div>
    </div>
</div>