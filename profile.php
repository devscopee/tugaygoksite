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
    <div class="light"></div>

    <div id="preloader">
        <img src="img/logo.png" alt="">
    </div>

    <?php
    include('inc/header.php')
    ?>

    <div class="main">
        <div class="container">
            <div class="left_side">
                <div class="sidebar_colorful_border">
                    <div class="sidebar">
                        <div class="profile_image">
                            <img id='frame' src="img/profile/profile_frame.png" alt="">
                            <img id='avatar' src="img/avatar.png" alt="">
                        </div>
                        <br>
                        <div class="informations">
                            <p class="name"><span id="name">Tugay Gök</span></p>
                            <p class="id"><span id="id">ID: MG12345678</span></p>
                        </div>

                        <div class="directions">
                            <ul>
                            <a href="order.php">
                                    <li>
                                        <p>Siparişlerim</p>
                                    </li>
                                </a>

                                <a href="#">
                                    <li>
                                        <p>Satın Alım Geçmişi</p>
                                    </li>
                                </a>

                                <a href="#">
                                    <li>
                                        <p>Destek</p>
                                    </li>
                                </a>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="right_side">
                <div class="content">
                    <div class="balance">
                        <div class="balance_button">
                            <a href="add-balance.php">
                                <div>
                                    <p>Bakiye yükle</p>

                                </div>
                            </a>
                        </div>
                        <a href="add-balance.php">
                        <div class="images">
                            <img id='background' src="img/profile/back_div.png" alt="">
                            <img id='effects' src="img/profile/effects.png" alt="">
                        </div>
                        </a>
                    </div>

                    <div class="inputs_container">
                        <p>Kişisel Bilgiler</p>
                        <br>
                        <div class="inputs">
                            <div class="input">
                                <input type="text" placeholder='Kullanıcı Adı'>
                            </div>
                            <br>
                            <div class="input">
                                <input type="text" placeholder='Telefon No'>
                            </div>
                            <br>
                            <div class="input">
                                <input type="text" placeholder='E-Posta'>
                            </div>
                            <br>
                            <div class="input">
                                <input type="text" placeholder='Doğum Tarihi'>
                            </div>
                        </div>
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