<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='css/profile.css'>
    <link rel='stylesheet' href='css/global.css'>
    <link rel='stylesheet' href='css/media.css'>
</head>
<body>
    <div class='bg-img'></div>

    <div id="preloader">
        <img src="img/logo.png" alt="">
    </div>

    <?php
    include('inc/header.php')
    ?>

    <div class="main">
        <div class="container">
            
            <div class="account">
                <div class="general_info">
                    <div class="avatar">
                        <img src="img/fotograf_cercevesi.png" alt="">
                    </div>

                    <div class="text">
                        <ul>
                            <b><p>Kullanıcı Adı:</p></b>

                            <li>
                                <p class='username'>götelek</p>
                            </li>

                            <b><p>Kimlik Kodu:</p></b>

                            <li>
                                <p class='code'>MG316972</p>
                            </li>
                        </ul>
                    </div>
                </div>
                

                

                <div class="directions">
                    <ul>
                        <li class='subscriber_informations'>
                            <p>Üyelik Bilgilerim</p>
                        </li>

                        <li class='order'>
                            <p>Siparişlerim</p>
                        </li>

                        <li class='succesful_payments'>
                            <p>Başarılı Ödemelerim</p>
                        </li>

                        <li class='promo_codes'>
                            <p>Promo Kodlarım</p>
                        </li>

                        <li class='messages'>
                            <p>Mesajlarım</p>
                        </li>
                    </ul>
                </div>

                <div class="logout">
                    <img src="img/cks_yap_buton.png" alt="">
                </div>
            </div>


            <div class="content">
                
            </div>
        </div>
    </div>

    <script src="js/jquery.js"></script>
    <script src="js/main.js"></script>
    <script src="js/profile.js"></script>
</body>

</html>