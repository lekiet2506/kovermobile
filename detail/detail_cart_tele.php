<div class="row">
    <div class="col col-full">
        <?php if (!empty($_SESSION['cart'])) { ?>
        <div class="grid table_cart-info">
            <div class="row-table_cart">
                <div class="col-table col-table-5">Thông tin sản phẩm</div>
                <div class="col-table col-table-1">Tùy chọn</div>
                <div class="col-table col-table-2">Giá</div>
                <div class="col-table col-table-2 col-table_np">Tổng tiền</div>
            </div>
            <?php foreach ($cart as $id => $each) : ?>
            <div class="row-table_cart">
                <div class="col-table-p col-table-5">
                    <img height="200" src="img/product_tele/<?php echo $each['photo'] ?>" alt="">
                    <p><?php echo $each['name'] ?></p>
                </div>
                <div class="col-table-p col-table-1">
                    <a class="cart_type" onclick="return Del('<?php echo $each['quantity']; ?>')"
                        href="update_in_cart_tele.php?id=<?php echo $id ?>&type=decre">-</a>

                    <div class="cart_type cart-quantity"> <?php echo $each['quantity'] ?></div>

                    <a class="cart_type" onclick="return Inc('<?php echo $each['quantity']; ?>')"
                        href="update_in_cart_tele.php?id=<?php echo $id ?>&type=incre">+</a>
                </div>
                <div class="col-table-p col-table-2 col-table-price">
                    <span><?php echo currency_format($each['price']) ?></span>
                    <a class="cart_type" href="delete_from_cart.php?id=<?php echo $id ?>">Xóa</a>
                </div>
                <div class="col-table-p col-table-2">
                    <div class="table_np">Tổng tiền:</div>
                    <span>
                        <?php
                        $result_quantity = $each['price'] * $each['quantity'];
                        echo currency_format($result_quantity);
                        $sum_quantity += $result_quantity;
                        ?>
                    </span>
                </div>
            </div>
            <?php endforeach ?>
            <div class="row-table_cart row-after">
                <div class="col-table col-table-5">Tổng tiền hóa đơn:
                    $<span><?php echo currency_format($sum_quantity); ?></span> </div>
            </div>
        </div>
        <?php include './detail/detail_cart_info_customer.php' ?>
        <?php } ?>
    </div>
</div>