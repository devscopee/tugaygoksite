<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='css/global.css'>
    <link rel='stylesheet' href='css/home.css'>
    <script src='js/main.js'></script>
    <script src="js/script.js"></script>
    <script src="js/jquery.js"></script>
    <title>Maraz Game</title>
</head>

<body>
    <div id="preloder"></div>


    <?php
    include("inc/header.php");
    ?>

    <main class='main'>
        <div class='container'>
            <?php
            include('inc/navbar.php')
            ?>

            <div class="slider-container">
                <div class="image">
                    <img src="img/ggg.png" alt="">
                </div>

                <div class="image">
                    <img src="img/" alt="">
                </div>

                <div class="image">
                    <img src="img/" alt="">
                </div>

                <div class="image">
                    <img src="" alt="">
                </div>

                <div class="image">
                    <img src="" alt="">
                </div>

                <div class="image">
                    <img src="" alt="">
                </div>

                <div class="buttons">
                    <a onclick='nextimage(-1)' class="prev">&#10094;</a>
                    <a onclick="nextimage(+1)" class="next">&#10095;</a>
                </div>
            </div>
            <br><br>
            <p class='text'>Pubg Mobile</p>
            <div class='line'></div>
            <!-- Alt kısım kasalar kısmı -->
            <div class="product-div">
                <div class="gun-images">
                    <img class="gun" src="img/666 (1).png">
                    <img class="case" src="img/78878.png" alt="">
                </div>
                <div class="title">
                    ALEVLİ MUMYA RANDOM UC
                </div>
                <del>
                    <p class="old-price-txt"></p>
                </del>
                <form action="buy.php" method="post">
                    <input type="button" value="₺ 30" id="btn" style="margin-top: 0.5rem;">
                    <input type="submit" value="SATIN AL" id="buy" style="margin-top: 0.5rem; margin-left: 1rem;">
                </form>
            </div>

            <div class="product-div">
                <div class="gun-images">
                    <img class="gun" src="img/090.png">
                    <img class="case" src="img/5656.png" alt="">
                </div>
                <div class="title">
                    ŞANS ARABASI RANDOM UC
                </div>
                <del>
                    <p class="old-price-txt"></p>
                </del>
                <form action="buy.php" method="post">
                    <input type="button" value="₺ 100" id="btn" style="margin-top: 0.5rem;">
                    <input type="submit" value="SATIN AL" id="buy" style="margin-top: 0.5rem; margin-left: 1rem;">
                </form>
            </div>

            <div class="product-div">
                <div class="gun-images">
                    <img class="gun" src="img/gggg.png">
                    <img class="case" src="img/86.png" alt="">
                </div>
                <div class="title" style="margin-left: 3.5rem;">
                    GECE MAVİSİ RANDOM UC
                </div>
                <del>
                    <p class="old-price-txt"></p>
                </del>
                <div class="buy">
                    <form action="buy.php" method="post">
                        <input type="button" value="₺ 150" id="btn" style="margin-left: 3rem; margin-top:0.4rem;">
                        <input type="submit" value="SATIN AL" id="buy" style="margin-left: 1rem; margin-top:0.4rem;">
                    </form>
                </div>
            </div>

            <div class="product-div" style="margin-left: 4rem;">
                <div class="gun-images">
                    <img class="gun" src="img/gggg.png">
                    <img class="case" src="img/86.png" alt="">
                </div>
                <div class="title" style="margin-left: 3.125rem;">
                    GECE MAVİSİ RANDOM UC
                </div>
                <del>
                    <p class="old-price-txt"></p>
                </del>
                <form action="buy.php" method="post">
                    <input type="button" value="₺ 250" id="btn" style="margin-top: 0.5rem;">
                    <input type="submit" value="SATIN AL" id="buy" style="margin-top: 0.5rem; margin-left: 1rem;">
                </form>
            </div>

            <div class="product-div">
                <div class="gun-images">
                    <img class="gun" id="test1" src="img/kupa.png" style="margin-top: -3rem;">
                    <img class="case" src="img/eeee.png" alt="">
                </div>
                <div class="title" style="margin-left: 4rem;">
                    SURREAL RANDOM UC
                </div>
                <del>
                    <p class="old-price-txt"></p>
                </del>
                <form action="buy.php" method="post">
                    <input type="button" value="₺ 500" id="btn">
                    <input type="submit" value="SATIN AL" id="buy" style="margin-top: 0.3rem; margin-left: 1rem;">
                </form>
            </div>
            <!-- ORTA KATEGORİ -->
            <div class="product-div">
                <div class="gun-images">
                    <img class="gun" id="test1" src="img/kupa.png" style="margin-top: -3rem;">
                    <img class="case" src="img/eeee.png" alt="">
                </div>
                <div class="title" style="margin-left: 4rem;">
                    SURREAL RANDOM UC
                </div>
                <del>
                    <p class="old-price-txt"></p>
                </del>
                <form action="buy.php" method="post">
                    <input type="button" value="₺ 500" id="btn">
                    <input type="submit" value="SATIN AL" id="buy" style="margin-top: 0.3rem; margin-left: 1rem;">
                </form>
            </div>

            <div class="product-div">
                <div class="gun-images">
                    <img class="gun" id="test1" src="img/kupa.png" style="margin-top: -3rem;">
                    <img class="case" src="img/eeee.png" alt="">
                </div>
                <div class="title" style="margin-left: 4rem;">
                    SURREAL RANDOM UC
                </div>
                <del>
                    <p class="old-price-txt"></p>
                </del>
                <form action="buy.php" method="post">
                    <input type="button" value="₺ 500" id="btn">
                    <input type="submit" value="SATIN AL" id="buy" style="margin-top: 0.3rem; margin-left: 1rem;">
                </form>
            </div>

            <div class="product-div">
                <div class="gun-images">
                    <img class="gun" id="test1" src="img/kupa.png" style="margin-top: -3rem;">
                    <img class="case" src="img/eeee.png" alt="">
                </div>
                <div class="title" style="margin-left: 4rem;">
                    SURREAL RANDOM UC
                </div>
                <del>
                    <p class="old-price-txt"></p>
                </del>
                <form action="buy.php" method="post">
                    <input type="button" value="₺ 500" id="btn">
                    <input type="submit" value="SATIN AL" id="buy" style="margin-top: 0.3rem; margin-left: 1rem;">
                </form>
            </div>

            <div class="product-div">
                <div class="gun-images">
                    <img class="gun" id="test1" src="img/kupa.png" style="margin-top: -3rem;">
                    <img class="case" src="img/eeee.png" alt="">
                </div>
                <div class="title" style="margin-left: 4rem;">
                    SURREAL RANDOM UC
                </div>
                <del>
                    <p class="old-price-txt"></p>
                </del>
                <form action="buy.php" method="post">
                    <input type="button" value="₺ 500" id="btn">
                    <input type="submit" value="SATIN AL" id="buy" style="margin-top: 0.3rem; margin-left: 1rem;">
                </form>
            </div>
            
            <div class="product-div">
                <div class="gun-images">
                    <img class="gun" id="test1" src="img/kupa.png" style="margin-top: -3rem;">
                    <img class="case" src="img/eeee.png" alt="">
                </div>
                <div class="title" style="margin-left: 4rem;">
                    SURREAL RANDOM UC
                </div>
                <del>
                    <p class="old-price-txt"></p>
                </del>
                <form action="buy.php" method="post">
                    <input type="button" value="₺ 500" id="btn">
                    <input type="submit" value="SATIN AL" id="buy" style="margin-top: 0.3rem; margin-left: 1rem;">
                </form>
            </div>
            <!-- EN ALT KATEGORİ -->
            <div class="product-div">
                <div class="gun-images">
                    <img class="gun" id="test1" src="img/random_4_u.png" style="margin-top: 1rem;">
                    <img class="case" src="img/random_4.png" alt="">
                </div>
                <div class="title" style="margin-left: 1rem;">
                    YARAMAZ ÇOCUK RANDOM HESAP
                </div>
                <del>
                    <p class="old-price-txt"></p>
                </del>
                <form action="buy.php" method="post">
                    <input type="button" value="₺ 500" id="btn">
                    <input type="submit" value="SATIN AL" id="buy" style="margin-top: 0.3rem; margin-left: 1rem;">
                </form>
            </div>

            <div class="product-div">
                <div class="gun-images">
                    <img class="gun" src="img/random_5_u.png" style="margin-top: 1.25rem; margin-left: -1.25rem;">
                    <img class="case" src="img/random_hesap_5.png" alt="">
                </div>
                <div class="title" style="margin-left: 1rem;">
                    MASKENİN LANETİ RANDOM HESAP
                </div>
                <del>
                    <p class="old-price-txt"></p>
                </del>
                <form action="buy.php" method="post">
                    <input type="button" value="₺ 200" id="btn" style="margin-left: 2rem;">
                    <input type="submit" value="SATIN AL" id="buy" style="margin-left: 1.20rem;">
                </form>
            </div>

            <div class="product-div">
                <div class="gun-images">
                    <img class="gun" src="img/7u.png" style="margin-top: 0.625rem;">
                    <img class="case" src="img/67673.png" alt="">
                </div>
                <div class="title" style="margin-left: 3.19rem;">
                    HİPOTERMİ RANDOM HESAP
                </div>
                <del>
                    <p class="old-price-txt"></p>
                </del>
                <form action="buy.php" method="post">
                    <input type="button" value="₺ 200" id="btn">
                    <input type="submit" value="SATIN AL" id="buy" style="margin-top: 0.3rem; margin-left: 1rem;">
                </form>
            </div>

            <div class="product-div">
                <div class="gun-images">
                    <img class="gun" src="img/oo.png" style="margin-left: 3.25rem;">
                    <img class="case" src="img/hyhy.png" alt="" style="margin-left: 2.25rem;">
                </div>
                <div class="title" style="margin-left: 3.90rem;">
                    DESTANSI RANDOM HESAP
                </div>
                <del>
                    <p class="old-price-txt"></p>
                </del>
                <form action="buy.php" method="post">
                    <input type="button" value="₺ 200" id="btn" style="margin-left: 3.25rem;">
                    <input type="submit" value="SATIN AL" id="buy" style="margin-top: 0.3rem; margin-left: 1.20rem;">
                </form>
            </div>

            <div class="product-div">
                <div class="gun-images">
                    <img class="gun" src="img/jj1.png" style="margin-left: 3.25rem;">
                    <img class="case" src="img/555.png" alt="" style="margin-left: 2.25rem;">
                </div>
                <div class="title" style="margin-left: 3.90rem;">
                    İŞGALCİ RANDOM HESAP
                </div>
                <del>
                    <p class="old-price-txt"></p>
                </del>
                <form action="buy.php" method="post">
                    <input type="button" value="₺ 200" id="btn" style="margin-left: 3.25rem;">
                    <input type="submit" value="SATIN AL" id="buy" style="margin-top: 0.3rem; margin-left: 1.20rem;">
                </form>
            </div>
        </div>
    </main>



    <script src="js/jquery.js"></script>
    <script src="js/home.js"></script>
    <script>
        $(window).on('load', function() {
            $(".loader").delay(100).fadeOut();
            $("#preloder").delay(300).fadeOut("slow");

        });
    </script>

</body>

</html>