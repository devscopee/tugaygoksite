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
            <div class="profile_page">
                <div class="account">
                    <div class="profile_picture">
                        <img src="img/fotograf_cercevesi.png" alt="" id="frame">
                        <img src="img/avatar.png" alt="" id="account-picture">
                    </div>
                    
                    <div class="account_general_information">
                        <p class="name"><span id="name">Tugay Abi UC</span></p>
                        <p class="account_id">ID: <span id="id">3131313131</span></p>
                    </div>

                    <div class="directions">
                        <ul>
                            <li class='subscription-information active'>
                                <img src="img/satir_isareti.png" alt=""> <p>Üyelik Bilgilerim</p>
                            </li>

                            <li class='orders'>
                                <img src="img/satir_isareti.png" alt=""> <p>Siparişlerim</p>
                            </li>

                            <li class='successful-payments'>
                                <img src="img/satir_isareti.png" alt=""> <p>Başarılı Ödemelerim</p>
                            </li>

                            <li class='promo-codes'>
                                <img src="img/satir_isareti.png" alt=""> <p>Promo Kodlarım</p>
                            </li>

                            <li class='messages'>
                                <img src="img/satir_isareti.png" alt=""> <p>Mesajlarım</p>
                            </li>
                        </ul>
                    </div>

                    <div class="logout">
                        <img src="img/cks_yap_buton.png" alt="">
                    </div>
                </div>

                <div class="content">
                    <div class="subscription-information active">
                        <?php
                            include('inc/subscription-information.php')
                        ?>
                    </div>

                    <div class="orders">
                        <?php
                            include('inc/orders.php')
                        ?>
                    </div>

                    <div class="successful-payments">
                        <?php
                            include('inc/successful-payments.php')
                        ?>
                    </div>

                    <div class="promo-codes">
                        <?php
                            include('inc/promo-codes.php')
                        ?>
                    </div>

                    <div class="messages">
                        <?php
                            include('inc/messages.php')
                        ?>
                    </div>
                </div>
            </div>
        </div> 
    </div>

    <script src="js/jquery.js"></script>
    <script src="js/main.js"></script>
    <script src="js/profile.js"></script>
</body>

</html>