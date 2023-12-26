<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" href="./public/css/rss.css" />
    <link rel="stylesheet" href="./public/css/style.css" />
    <style>
    label.error {
        color: red;
    }

    .h1 {
        flex: 4;
        color: #ffff;
    }

    .sign {
        width: 500px;
        min-height: 600px;
        margin: 0 auto;
        padding-top: 80px;
        background-color: #cce6ff;
    }

    .text-status {
        font-size: 2rem;
        font-weight: 400;
        text-align: center;
        padding: 12px;
    }

    .text-status.text-error {
        color: red;
    }

    .text-status.text-success {
        color: green;
    }

    .sign form {
        max-width: 500px;
        margin: 0 auto;
        padding: 45px 20px;
    }

    .sign form label {
        display: block;
        font-size: 1.7rem;
        padding: 10px;
    }

    .sign form input {
        display: block;
        width: 100%;
        height: 34px;
        outline: none;
        border: none;
        padding-left: 10px;
        background-color: #ffff;

    }

    .sign form button {
        float: right;
        margin-top: 10px;
        padding: 10px;
        outline: none;
        border: none;
        background-color: #1a75ff;
        color: #ffff;
        font-size: 1.5rem;
    }

    .sign form a {
        display: block;
        float: right;
        padding: 10px;
        color: #1a75ff;
        font-size: 1.5rem;
    }

    #gender {
        padding: 6px 12px;
        font-size: 1.4rem;
        outline: none;
        border: none;
        cursor: pointer;
        border-radius: 3px;
    }
    </style>
</head>

<body>
    <div class="wrapper">
        <!-- Đầu -->
        <div class="header header-fixed">
            <div class="header-container">
                <header class="header-top">
                    <div class="logo">
                        <a href="index.php">
                            <img src="./public/img/logo01.png" alt="" class="img" style="width:210px;height:43px;"></a>
                    </div>
                    <div class="h1">
                        <h1>Đăng Ký</h1>
                    </div>
                </header>
            </div>
        </div>
        <!-- Giữa -->
        <div class="container">
            <div class="grid_full-width">
                <div class="sign">
                    <?php if (isset($_SESSION['error'])) { ?>
                    <h5 class="text-status text-error">
                        <?php
                            echo $_SESSION['error'];
                            unset($_SESSION['error']);
                            ?>
                    </h5>
                    <?php } ?>

                    <?php if (isset($_SESSION['success'])) { ?>
                    <h5 class="text-status text-success">
                        <?php
                            echo $_SESSION['success'];
                            unset($_SESSION['success']);
                            ?>
                    </h5>
                    <?php } ?>
                    <form id="form_signup" method="post" action="process_signup.php">
                        <a href="login.php">Đăng Nhập</a>
                        <label for="">Tên Đăng Ký:</label>
                        <input type="text" name="name" id="name">
                        <label for="">Mail:</label>
                        <input type="email" name="email" id="email">
                        <label for="">Mật Khẩu:</label>
                        <input type="password" name="password" id="password">
                        <label for="">Số Điện Thoại:</label>
                        <input type="text" name="phone" id="phone">
                        <label for="">Địa Chỉ:</label>
                        <input type="text" name="address" id="address">
                        <label for="">Giới Tính:</label>
                        <select id="gender" name="gender">
                            <option selected="selected" value="1">Nam</option>
                            <option value="0">Nữ</option>
                        </select>
                        <button type="submit">Đăng ký</button>
                    </form>
                </div>
                <div class="footer">
                    <div class="grid_full-width">
                        <div class="grid">
                            <div class="row">
                                <div class="col col-4 col-mobi">
                                    <div class="logo logo-bottom ml-mobi">
                                        <img src="./public/img/logo2.png" alt="" class="img">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include './partials/footer.php' ?>
    </div>
</body>

</html>