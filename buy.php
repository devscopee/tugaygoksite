<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/buy.css">
    <link rel='stylesheet' href='css/global.css'>
    <link rel='stylesheet' href='css/media.css'>

    <title>Maraz Game</title>
</head>

<body>
    <div class='bg-img'></div>

    <?php
    include("inc/header.php");
    ?>

    <div class="main">
        <div class="container">
            <div class="general">

                <div class="left_side">
                    <div class="account_image">
                        <img src="img/-1.png" alt="">
                    </div>

                    <div class="account_stats account_video">
                        <div class="video">

                        </div>

                        <div class="stats">
                            <div class="order_number indicator">
                                <i class="fa-regular fa-hashtag"></i>
                                <p id="order_number">31</p>
                            </div>

                            <div class="reviews indicator">
                                <i class="fa-solid fa-eye"></i>
                                <p id="reviews">31</p>
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
                        <b>
                            <p class='title'>tugay abinin özel kasası scope garantili</p>
                        </b>
                        <p class='description'>sitede satılan en değerli kasadır. kasanın içinden 3 scope çeşitinden en az biri çıkar. scope çıkar çıkmaz gördüyü ilk şeyi **</p>

                        <p class='order_tag'>Hızlı Teslimat</p>
                    </div>

                    <div class="purchase">
                        Hemen Satın Al
                    </div>
                </div>
            </div>

            <div class="info-content">
                <div class="title-area">
                    <div class="title">
                        <p onclick="description();" id="desc" class="lead">Ürün Açıklaması</p>
                    </div>
                    <div class="title">
                        <p onclick="faq();" id="faq" class="lead">Sıkça Sorulan Sorular</p>
                    </div>
                    <div class="title">
                        <p onclick="system();" id="system" class="lead">Sistem Gereksinimleri</p>
                    </div>
                </div>
                <div class="box-info">
                    <div id="info-description" class="info-description">
                        Pubg Mobile oynamak istiyorsanız, şimdi tam zamanı! Yeni çıkan Pubg Mobile hesaplarını uygun fiyatlarla satın alarak hemen oynamaya başlayabilirsiniz. <br><br>
                        Hesaba giriş yapmak için Twitter hesabınızı kullanabilirsiniz, ancak alternatif e-posta girişi veya hesap bağlama garantisi verilemez. Ayrıca, hesaba giriş garantisi verilemez. <br><br>
                        Yüksek seviyeli hesapların satın alınması durumunda, destansı görünüşlü hesaplar çıkma ihtimali olsa da, kesin bir yüksek hesap garantisi verilemez. <br>
                    </div>
                    <div id="info-faq" class="info-faq">
                        Hesap satın aldıktan sonra, hesap bilgilerini kontrol etmeniz ve üzerinize kaydetmeniz gerekiyor. <br><br>
                        Hesap yasaklanırsa, ilk girişte yasaklanmamış olacaktır, ancak sonrasında size ait bir ihlal nedeniyle yasaklanırsa, satıcı sorumlu tutulamaz. <br><br>
                        Bu ürün etkinlik kapsamında olduğundan, iade veya değişim yapılamaz. <br>
                    </div>
                    <div id="info-system" class="info-system">
                        Bu oyunu oynamak için en az 4GB RAM ve 2GHz işlemciye sahip bir bilgisayarınız olmalıdır. <br><br>
                        Oyun, en az 1GB boş disk alanı gerektirir ve DirectX 11 uyumlu bir grafik kartına ihtiyaç duyar. <br><br>
                        Oyun, Windows 7, 8 veya 10 işletim sistemlerinde çalışabilir. İnternet bağlantısı, ek özelliklerin kullanımı için gereklidir. <br>
                    </div>
                </div>
                <div style="padding: 5px;"></div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        document.getElementById('info-description').style.display = "flex";
        document.getElementById('info-faq').style.display = "none";
        document.getElementById('info-system').style.display = "none";

        document.getElementById('desc').style.color = "#FF9D00";
        document.getElementById('faq').style.color = "white";
        document.getElementById('system').style.color = "white";

        function description() {
            document.getElementById('info-description').style.display = "flex";
            document.getElementById('info-faq').style.display = "none";
            document.getElementById('info-system').style.display = "none";

            document.getElementById('desc').style.color = "#FF9D00";
            document.getElementById('faq').style.color = "white";
            document.getElementById('system').style.color = "white";
        }

        function faq() {
            document.getElementById('info-description').style.display = "none";
            document.getElementById('info-faq').style.display = "flex";
            document.getElementById('info-system').style.display = "none";

            document.getElementById('desc').style.color = "white";
            document.getElementById('faq').style.color = "#FF9D00";
            document.getElementById('system').style.color = "white";
        }

        function system() {
            document.getElementById('info-description').style.display = "none";
            document.getElementById('info-faq').style.display = "none";
            document.getElementById('info-system').style.display = "flex";

            document.getElementById('desc').style.color = "white";
            document.getElementById('faq').style.color = "white";
            document.getElementById('system').style.color = "#FF9D00";
        }
    </script>
</body>

</html>