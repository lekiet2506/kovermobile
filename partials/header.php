<!-- Phần đầu -->
<div class="header header-fixed">
    <div class="header-container">
        <header class="header-top">
            <div class="logo">
                <a href="index.php">
                    <img src="./public/img/logo01.png" alt="" class="img" style="width:210px;height:43px;">
                </a>
            </div>
            <div class="header__search">
                <form style="background-color: #fff; border-radius: 3px;" action="search.php" method="post">
                    <input id="project" placeholder="Bạn tìm gì?" type="text" class="header__input" name="search">
                    <button type="submit" class="header__btn">Tìm Kiếm</button>
                </form>
            </div>
            <a href="view_cart.php" class="header__cart">
                <?php
                    $sum = 0;
                    $sums = 0;
                    if (!empty($_SESSION['cart'])) {
                        $cart = $_SESSION['cart'];
                        foreach ($cart as $id => $each) {
                            $sum += $each['quantity'];
                        }
                    }
                    if (!empty($_SESSION['carts'])) {
                        $carts = $_SESSION['carts'];
                        foreach ($carts as $id => $each) {
                            $sums += $each['quantity'];
                        }
                    }
                    $total = $sum + $sums;
                    ?>
                <span class="header__cart-notice"><?php echo $total ?></span>
            </a>
            <div class="header__user">
                <li>
                    <?php if (empty($_SESSION['id'])) { ?>
                    <a style="color: #FFFFFF;" href="./signup.php">Đăng Ký</a> / <a style="color: #FFFFFF;"
                        href="login.php">Đăng Nhập</a>
                    <?php } else { ?>
                    <a style="color: #FFFFFF;" href="#"><?php echo $_SESSION['name'] ?>,</a>
                    <a style="color: #FFFFFF;" href="./logout.php"> Đăng Xuất</a>
                    <?php } ?>
                </li>
                <?php if (!empty($_SESSION['id'])) { ?>
                <?php } ?>
            </div>
            <input hidden type="checkbox" name="" class="header__input" id="header__mobile-input">
            <label for="header__mobile-input" class="header__overlay"></label>
            <nav class="navbar__mobile">
                <ul class="mobile-list">
                    <li class="mobile-item">
                        <a href="view_cart.php" class="mobile-item__link">Giỏ hàng</a>
                    </li>
                    <?php if (empty($_SESSION['id'])) { ?>
                    <li class="mobile-item">
                        <a href="signup.php" class="mobile-item__link">Đăng Ký</a>
                    </li>
                    <li class="mobile-item">
                        <a href="login.php" class="mobile-item__link">Đăng Nhập</a>
                    </li>
                    <?php } else { ?>
                    <li class="mobile-item">
                        <a href="logout.php" class="mobile-item__link">Đăng Xuất</a>
                    </li>
                    <?php } ?>
                </ul>
            </nav>
        </header>
    </div>
</div>