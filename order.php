<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='css/order.css'>
    <link rel='stylesheet' href='css/global.css'>
    <link rel='stylesheet' href='css/media.css'>
</head>

<body>
    <div id="preloader">
        <img src="img/logo.png" alt="">
    </div>

    <div class="bg-img"></div>

    <?php
    include('inc/header.php')
    ?>

    <div class="main">
        <div class="container">
            <div class="colorful_order_header">
                <div class="order_header">
                    <img src="img/order_header.png" alt="">
                    <p>Siparişlerim</p>
                </div>
            </div>
            

            <div class="colorful_orders">
                <div class="orders">
                    <div class="table">
                        <div class="row title">
                            <p>Ürün Adı</p>
                            <p>Sipariş Durumu</p>
                            <p>Fiyatı</p>
                        </div>

                        <div class="row order">
                            <div class="name">
                                <img src="img/kasa/1_k_cark.png" alt="" id='order_image'>
                                <p id='order_name'>tugay abinin scope garantili kasası <!---değiştireni skrm---></p>
                            </div>

                            <p>Scope kargoda :D</p>
                            <p>9999$</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="js/jquery.js"></script>
    <script src="js/main.js"></script>
</body>

</html>