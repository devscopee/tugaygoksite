<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='css/global.css'>
    <link rel='stylesheet' href='css/home.css'>
    <link rel='stylesheet' href='css/media.css'>
    <script src='js/main.js'></script>
    <script src="js/script.js"></script>
    <script src="js/jquery.js"></script>
    <title>Maraz Game</title>
</head>

<body>
    <div id="preloader">
        <img src="img/logo.png" alt="">
    </div>

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
                    <img src="img/.png" alt="">
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

            <div class="items"> <!---hepsini      items      içine aldım--->


                <div class="product-div pubgm">
                    <div class="gun-images">
                        <img class="gun" src="img/666 (1).png">
                        <img class="case" src="img/78878.png" alt="">
                    </div>
                    <div class="title">
                        ALEVLİ MUMYA RANDOM UC
                    </div>
                    <div class="purchase">
                        <div class="cost">
                            <del></del> 30 TL
                        </div>

                        <div class="buy">
                            SATIN AL
                        </div>
                    </div>
                </div>



                <div class="product-div pubgm">
                    <div class="gun-images">
                        <img class="gun" src="img/090.png">
                        <img class="case" src="img/5656.png" alt="">
                    </div>
                    <div class="title">
                        ŞANS ARABASI RANDOM UC
                    </div>
                    <div class="purchase">
                        <div class="cost">
                            <del></del> 100 TL
                        </div>

                        <div class="buy">
                            SATIN AL
                        </div>
                    </div>
                </div>

                <div class="product-div pubgm">
                    <div class="gun-images">
                        <img class="gun" src="img/gppg.png">
                        <img class="case" src="img/54.png" alt="">
                    </div>
                    <div class="title">
                        GECE MAVİSİ RANDOM UC
                    </div>
                    <div class="purchase">
                        <div class="cost">
                            <del></del> 150 TL
                        </div>

                        <div class="buy">
                            SATIN AL
                        </div>
                    </div>
                </div>

                <div class="product-div pubgm">
                    <div class="gun-images">
                        <img class="gun" src="img/00000.png">
                        <img class="case" src="img/86.png" alt="">
                    </div>
                    <div class="title">
                        KATLİAM KASASI RANDOM UC
                    </div>
                    <div class="purchase">
                        <div class="cost">
                            <del></del> 250 TL
                        </div>

                        <div class="buy">
                            SATIN AL
                        </div>
                    </div>
                </div>

                <div class="product-div pubgm">
                    <div class="gun-images">
                        <img class="gun" id="test1" src="img/kupa.png">
                        <img class="case" src="img/eeee.png" alt="">
                    </div>
                    <div class="title">
                        SURREAL RANDOM UC
                    </div>
                    <div class="purchase">
                        <div class="cost">
                            <del></del> 500 TL
                        </div>

                        <div class="buy">
                            SATIN AL
                        </div>
                    </div>
                </div>
                <!-- ORTA KATEGORİ -->
                <div class="product-div pubgm">
                    <div class="gun-images">
                        <img class="gun" id="test1" src="img/medium-karakter.png">
                        <img class="case" src="img/medium.png" alt="">
                    </div>
                    <div class="title">
                        SON UMUT RANDOM
                    </div>
                    <div class="purchase">
                        <div class="cost">
                            <del></del> 5 TL
                        </div>

                        <div class="buy">
                            SATIN AL
                        </div>
                    </div>
                </div>

                <div class="product-div pubgm">
                    <div class="gun-images">
                        <img class="gun" id="test1" src="img/yeşil-karakter.png">
                        <img class="case" src="img/yeşil-kasa.png" alt="">
                    </div>
                    <div class="title">
                        HAYALET RANDOM HESAP
                    </div>
                    <div class="purchase">
                        <div class="cost">
                            <del></del> 15 TL
                        </div>

                        <div class="buy">
                            SATIN AL
                        </div>
                    </div>
                </div>

                <div class="product-div pubgm">
                    <div class="gun-images">
                        <img class="gun" id="test1" src="img/mor-karakter.png">
                        <img class="case" src="img/mor-kasa.png" alt="">
                    </div>
                    <div class="title">
                        SURREAL RANDOM UC
                    </div>
                    <div class="purchase">
                        <div class="cost">
                            <del></del> 30 TL
                        </div>

                        <div class="buy">
                            SATIN AL
                        </div>
                    </div>
                </div>

                <div class="product-div pubgm">
                    <div class="gun-images">
                        <img class="gun" id="test1" src="img/7u.png">
                        <img class="case" src="img/67673.png" alt="">
                    </div>
                    <div class="title">
                        HİPOTERMİ RANDOM HESAP
                    </div>
                    <div class="purchase">
                        <div class="cost">
                            <del></del> 50 TL
                        </div>

                        <div class="buy">
                            SATIN AL
                        </div>
                    </div>
                </div>

                <div class="product-div pubgm">
                    <div class="gun-images">
                        <img class="gun" id="test1" src="img/jj1.png">
                        <img class="case" src="img/555.png" alt="">
                    </div>
                    <div class="title">
                        İŞGALCİ RANDOM HESAP
                    </div>
                    <div class="purchase">
                        <div class="cost">
                            <del></del> 70 TL
                        </div>

                        <div class="buy">
                            SATIN AL
                        </div>
                    </div>
                </div>

                <div class="product-div pubgm">
                    <div class="gun-images">
                        <img class="gun" id="test1" src="img/random_4_u.png">
                        <img class="case" src="img/dwdwq.png" alt="">
                    </div>
                    <div class="title">
                        YARAMAZ ÇOCUK RANDOM HESAP
                    </div>
                    <div class="purchase">
                        <div class="cost">
                            <del></del> 100 TL
                        </div>

                        <div class="buy">
                            SATIN AL
                        </div>
                    </div>
                </div>
                <!-- EN ALT KATEGORİ -->
                <div class="product-div pubgm">
                    <div class="gun-images">
                        <img class="gun" id="test1" src="img/random_5_u.png">
                        <img class="case" src="img/4fe.png" alt="">
                    </div>
                    <div class="title">
                        MASKENİN LANETİ RANDOM HESAP
                    </div>
                    <div class="purchase">
                        <div class="cost">
                            <del></del> 200 TL
                        </div>

                        <div class="buy">
                            SATIN AL
                        </div>
                    </div>
                </div>

                <div class="product-div pubgm">
                    <div class="gun-images">
                        <img class="gun" src="img/buz-diyarı.png">
                        <img class="case" src="img/buz-kasa.png" alt="">
                    </div>
                    <div class="title">
                        BUZ DİYARI GARANTİLİ RANDOM
                    </div>
                    <div class="purchase">
                        <div class="cost">
                            <del></del> 250 TL
                        </div>

                        <div class="buy">
                            SATIN AL
                        </div>
                    </div>
                </div>

                <div class="product-div pubgm">
                    <div class="gun-images">
                        <img class="gun" src="img/oo.png">
                        <img class="case" src="img/hyhy.png" alt="">
                    </div>
                    <div class="title">
                        DESTANSI RANDOM HESAP
                    </div>
                    <div class="purchase">
                        <div class="cost">
                            <del></del> 450 TL
                        </div>

                        <div class="buy">
                            SATIN AL
                        </div>
                    </div>
                </div>

                <div class="product-div pubgm">
                    <div class="gun-images">
                        <img class="gun" src="img/kırmızı-karakter.png">
                        <img class="case" src="img/kırmızı.kasa.png" alt="">
                    </div>
                    <div class="title">
                        İŞGALCİ RANDOM HESAP
                    </div>
                    <div class="purchase">
                        <div class="cost">
                            <del></del> 500 TL
                        </div>

                        <div class="buy">
                            SATIN AL
                        </div>
                    </div>
                </div>
                <!-- valorant kısmı BAŞLAYIŞ yeri -->
                <div class="product-div valo">
                    <div class="gun-images">
                        <img class="gun" src="img/444.png">
                        <img class="case" src="img/v44.png" alt="">
                    </div>
                    <div class="title">
                        ALTIN RANDOM VP
                    </div>
                    <div class="purchase">
                        <div class="cost">
                            <del></del> 15 TL
                        </div>

                        <div class="buy">
                            SATIN AL
                        </div>
                    </div>
                </div>

                <div class="product-div valo">
                    <div class="gun-images">
                        <img class="gun" src="img/tv4.png">
                        <img class="case" src="img/dia.png" alt="">
                    </div>
                    <div class="title">
                        ELMAS RANDOM VP
                    </div>
                    <div class="purchase">
                        <div class="cost">
                            <del></del> 25 TL
                        </div>

                        <div class="buy">
                            SATIN AL
                        </div>
                    </div>
                </div>

                <div class="product-div valo">
                    <div class="gun-images">
                        <img class="gun" src="img/dd.png">
                        <img class="case" src="img/v673.png" alt="">
                    </div>
                    <div class="title">
                        YÜCELİK RANDOM VP
                    </div>
                    <div class="purchase">
                        <div class="cost">
                            <del></del> 35 TL
                        </div>

                        <div class="buy">
                            SATIN AL
                        </div>
                    </div>
                </div>

                <div class="product-div valo">
                    <div class="gun-images">
                        <img class="gun" src="img/trt.png">
                        <img class="case" src="img/r56.png" alt="">
                    </div>
                    <div class="title">
                        İMMORTAL RANDOM VP
                    </div>
                    <div class="purchase">
                        <div class="cost">
                            <del></del> 50 TL
                        </div>

                        <div class="buy">
                            SATIN AL
                        </div>
                    </div>
                </div>

                <div class="product-div valo">
                    <div class="gun-images">
                        <img class="gun" src="img/Katman_10_kopya.png">
                        <img class="case" src="img/kapak_kenar_cizgisi_kopya_2.png" alt="">
                    </div>
                    <div class="title">
                        RADİANT RANDOM VP
                    </div>
                    <div class="purchase">
                        <div class="cost">
                            <del></del> 100 TL
                        </div>

                        <div class="buy">
                            SATIN AL
                        </div>
                    </div>
                </div>

                <div class="product-div valo">
                    <div class="gun-images">
                        <img class="gun" src="img/gfbdftgh.png">
                        <img class="case" src="img/thrth.png" alt="">
                    </div>
                    <div class="title">
                        RADİANT RANDOM VP
                    </div>
                    <div class="purchase">
                        <div class="cost">
                            <del></del> 50 TL
                        </div>

                        <div class="buy">
                            SATIN AL
                        </div>
                    </div>
                </div>

                <div class="product-div valo">
                    <div class="gun-images">
                        <img class="gun" src="img/saa.png" style="margin-left: 3rem; width: 20rem; margin-top: -1rem;">
                        <img class="case" src="img/marazgame_logo_kopya_2.png" alt="">
                    </div>
                    <div class="title">
                        RADİANT RANDOM VP
                    </div>
                    <div class="purchase">
                        <div class="cost">
                            <del></del> 100 TL
                        </div>

                        <div class="buy">
                            SATIN AL
                        </div>
                    </div>
                </div>

                <div class="product-div valo">
                    <div class="gun-images">
                        <img class="gun" src="img/3424.png">
                        <img class="case" src="img/45453.png" alt="">
                    </div>
                    <div class="title">
                        RADİANT RANDOM VP
                    </div>
                    <div class="purchase">
                        <div class="cost">
                            <del></del> 150 TL
                        </div>

                        <div class="buy">
                            SATIN AL
                        </div>
                    </div>
                </div>

                <div class="product-div valo">
                    <div class="gun-images">
                        <img class="gun" src="img/uwertw.png">
                        <img class="case" src="img/34234.png" alt="">
                    </div>
                    <div class="title">
                        RADİANT RANDOM VP
                    </div>
                    <div class="purchase">
                        <div class="cost">
                            <del></del> 250 TL
                        </div>

                        <div class="buy">
                            SATIN AL
                        </div>
                    </div>
                </div>

                <div class="product-div valo">
                    <div class="gun-images">
                        <img class="gun" src="img/wdwqdqwd.png">
                        <img class="case" src="img/ththt.png" alt="">
                    </div>
                    <div class="title">
                        RADİANT RANDOM VP
                    </div>
                    <div class="purchase">
                        <div class="cost">
                            <del></del> 500 TL
                        </div>

                        <div class="buy">
                            SATIN AL
                        </div>
                    </div>
                </div>
            
                <div class="product-div valo">
                    <div class="gun-images">
                        <img class="gun" src="img/yuyuyu.png">
                        <img class="case" src="img/fee.png" alt="">
                    </div>
                    <div class="title">
                        RADİANT RANDOM VP
                    </div>
                    <div class="purchase">
                        <div class="cost">
                            <del></del> 500 TL
                        </div>

                        <div class="buy">
                            SATIN AL
                        </div>
                    </div>
                </div>

                <div class="product-div valo">
                    <div class="gun-images">
                        <img class="gun" src="img/asdq.png" style="margin-left: 1.150rem; margin-top: -1rem;">
                        <img class="case" src="img/Kavun.png" alt="">
                    </div>
                    <div class="title">
                        RADİANT RANDOM VP
                    </div>
                    <div class="purchase">
                        <div class="cost">
                            <del></del> 500 TL
                        </div>

                        <div class="buy">
                            SATIN AL
                        </div>
                    </div>
                </div>

                <div class="product-div valo">
                    <div class="gun-images">
                        <img class="gun" src="img/kams.png">
                        <img class="case" src="img/pembe_panter.png" alt="">
                    </div>
                    <div class="title">
                        RADİANT RANDOM VP
                    </div>
                    <div class="purchase">
                        <div class="cost">
                            <del></del> 500 TL
                        </div>

                        <div class="buy">
                            SATIN AL
                        </div>
                    </div>
                </div>
                <!-- valorant kısmı BİTİŞ yeri -->
            </div>

            <div class='line'></div>
        </div>
    </main>

    <!-- <?php
    include("inc/footer.php");
    ?> -->

    <script src="js/jquery.js"></script>
    <script src="js/home.js"></script>
    <script>
        $(window).on('load', function() {
            $("#preloader").delay(400).fadeOut("slow");
        });
    </script>

</body>

</html>