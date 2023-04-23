<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel='stylesheet' href='css/global.css'>
    <link rel='stylesheet' href='css/media.css'>
    <link rel='stylesheet' href='css/products.css'>
    <title>Maraz Game</title>
</head>
<body>
    <div id="preloader">
        <img src="img/logo.png" alt="">
    </div>

    <?php
        include('inc/header.php')
    ?>

    <div class="main">
        <div class="container">
            <div class="greeting">
                <p>
                    <b><span>götelek</span></b> kullanıcısının sepeti
                </p>
            </div>

            <div class="products">
                <div class="bag active">
                    <div class="product">
                        <div class="product-details">
                            <img src="img/avatar.png">
                            <p class="title">tugay abinin kutsal kasası scope garantili</p>
                        </div>
                       
                        <div class="tools">
                            <div class="cost">
                                31 TL
                            </div>

                            <div class="remove">
                                <i class="fa-solid fa-trash"></i>
                            </div>
                        </div>

                    </div>

                    <div class="product">
                        <div class="product-details">
                            <img src="img/avatar.png">
                            <p class="title">tugay abinin kutsal kasası scope garantili</p>
                        </div>
                       
                        <div class="tools">
                            <div class="cost">
                                31 TL
                            </div>

                            <div class="remove">
                                <i class="fa-solid fa-trash"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="there-is-no-product inactive">
                    <p>Henüz ürün eklemediniz. Ürünleri incelemek için <a href="index.php">buraya tıklayın.</a></p>
                </div>
            </div>

            <div class="complete-shopping">
                <p>Sepeti Onayla</p><span class='total'>Toplam: 62 TL</span>
            </div>
        </div>
    </div>

    <script src="js/jquery.js"></script>
    <script src="js/main.js"></script>
</body>
</html>