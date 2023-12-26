<div class="row">
    <div class="col col-full">
        <?php if (!empty($_SESSION['carts'])) { ?>
        <div class="grid table_cart-info">
            <div class="row-table_cart">
                <div class="col-table col-table-5">Thông tin sản phẩm</div>
                <div class="col-table col-table-1">Tùy chọn</div>
                <div class="col-table col-table-2">Giá</div>
                <div class="col-table col-table-2 col-table_np">Tổng tiền</div>
            </div>
            <?php foreach ($carts as $id => $eachs) : ?>
            <div class="row-table_cart">
                <div class="col-table-p col-table-5">
                    <img height="200" src="img/product_laptop/<?php echo $eachs['photo'] ?>" alt="">
                    <p><?php echo $eachs['name'] ?></p>
                </div>
                <div class="col-table-p col-table-1">
                    <a class="cart_type" onclick="return Del('<?php echo $eachs['quantity']; ?>')"
                        href="update_in_cart_laptop.php?id=<?php echo $id ?>&type=decre">-</a>
                    <div class="cart_type cart-quantity"> <?php echo $eachs['quantity'] ?></div>
                    <a class="cart_type" onclick="return Inc('<?php echo $eachs['quantity']; ?>')"
                        href="update_in_cart_laptop.php?id=<?php echo $id ?>&type=incre">+</a>
                </div>
                <div class="col-table-p col-table-2 col-table-price">
                    <span><?php echo currency_format($eachs['price']) ?></span>
                    <a class="cart_type" href="delete_from_cart.php?id=<?php echo $id ?>">Xóa</a>
                </div>
                <div class="col-table-p col-table-2">
                    <div class="table_np">Tổng tiền:</div>
                    <span>
                        <?php
                        $result_quantity = $eachs['price'] * $eachs['quantity'];
                        echo currency_format($result_quantity);
                        $sum_quantitys += $result_quantity;
                        ?>
                    </span>
                </div>
            </div>
            <?php endforeach ?>
            <div class="row-table_cart row-after">
                <div class="col-table col-table-5">Tổng tiền hóa đơn:
                    $<span><?php echo currency_format($sum_quantitys); ?></span> </div>
            </div>
        </div>
        <?php include './detail/detail_cart_info_customer.php' ?>
        <?php } ?>
    </div>
</div>