<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/buy.css">
    <title>Maraz Game</title>
</head>

<body>
    <?php
    include("inc/header.php");
    ?>

    <div class="main">
        <div class="container">
            <div class="general">

            <div class="left_side">
                <div class="account_image">
                    <img src="img/banner.png" alt="">
                </div>

                <div class="account_stats account_video">
                    <div class="video">
                        
                    </div>
                    
                    <div class="stats">
                        <div class="order_number indicator">
                        <i class="fa-regular fa-hashtag"></i> <p id="order_number">31</p>
                        </div>

                        <div class="reviews indicator">
                        <i class="fa-solid fa-eye"></i> <p id="reviews">31</p>
                        </div>

                        <div class="stock_status indicator in_stock">
                            <p id="stock_status">Stokta Var</p>
                        </div>

                        <!--- 
                         Stokta var => in_stock
                         Stokta yok => out_stock
                        --->
                    </div>
                </div>
            </div>
                

            <div class="right_side">
                <div class="text_area">
                    <b><p class='title'>tugay abinin özel kasası scope garantili</p></b>
                    <p class='description'>sitede satılan en değerli kasadır. kasanın içinden 3 scope çeşitinden en az biri çıkar. scope çıkar çıkmaz gördüyü ilk şeyi **</p>

                    <p class='order_tag'>Hızlı Teslimat</p>
                </div>

                <div class="purchase">
                    Satın Al
                </div>
            </div>
            </div>
        </div>
    </div>
</body>

</html>