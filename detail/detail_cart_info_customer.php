<div class="grid table_cart-info">
    <div class="row-table_cart row-after">
        <?php
                $id = $_SESSION['id'];
                $sql = "SELECT * FROM `customers` where `id` = '$id'";
                $result_ct = mysqli_query($connect, $sql);
                $each = mysqli_fetch_array($result_ct);
                ?>
        <form class="col-full col-form-order" method="post">
            <div class="row-order">
                <div class="col col-3">
                    <label class="label-address" >Họ và tên(bắt buộc)</label>
                    <input class="form_order" type="text" name="name_receiver" value="<?php echo $each['name'] ?>">
                </div>
                <div class="col col-3">
                    <label class="label-address" >Số điện thoại(bắt buộc)</label>
                    <input class="form_order" type="text" name="phone_receiver" value="<?php echo $each['phone'] ?>">
                </div>
            </div>
            <div class="row-order">
                <div class="col col-full">
                    <label class="label-address" >Địa chỉ người nhận(bắt buộc)</label>
                    <input class="form_order" type="text" name="address_receiver"
                        value="<?php echo $each['address'] ?>">
                </div>
            </div>
            <button class="order-btn" type="submit">Đặt hàng</button>
        </form>
    </div>
</div>