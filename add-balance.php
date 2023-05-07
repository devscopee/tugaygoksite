<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='/css/add-balance.css'>
    <link rel='stylesheet' href='/css/global.css'>
    <link rel='stylesheet' href='/css/media.css'>
</head>

<body>
    <div id="preloader">
        <img src="/img/logo.png" alt="">
    </div>

    <?php
    include('inc/header.php')
    ?>

    <div class="main">
        <div class="container">
            <div class="left_side">
                <div class="sidebar_colorful_border">
                    <div class="sidebar">
                        <br>
                        <div class="informations">
                            <p class="name"><span id="name">Ödeme Seçenekleri</span></p>
                            <p class="id"><span id="id">Ödeme Yönteminizi Seçiniz</span></p>
                        </div>

                        <div class="directions">
                            <ul>
                                <li>
                                    <p style="text-align: center;"><i class="fa-solid fa-wallet"></i> &emsp;Kredi/Banka Kartı</p>
                                </li>

                                <li>
                                    <p style="text-align: center;"><i class="fa-solid fa-money-bill-transfer"></i>&emsp; Havale/Eft</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="right_side">
                <div class="content">


                    <div class="inputs_container">

                        <div class="mainArea">

                            <div class="areaOne">
                                <ul>
                                    <li onclick="change1();">25,00 ₺</li>
                                    <li onclick="change2();">50,00 ₺</li>
                                    <li onclick="change3();">100,00 ₺</li>
                                    <li onclick="change4();">250,00 ₺</li>
                                    <li onclick="change5();">500,00 ₺</li>
                                    <li onclick="change6();">1.000,00 ₺</li>
                                </ul>
                            </div>

                            <div class="areaTwo">
                                <ul>
                                    <li><input type="text" name="het" id="price" placeholder="Hesahınıza Eklenecek Tutar:"></li>
                                    <li><input type="text" name="kct" id="kct" placeholder="Kartınızdan Çekilecek Tutar:"></li>
                                </ul>
                            </div>

                        </div>

                    </div>

                    <a href="#"><button type="button" id="doPay" class="do_Pay">Ödeme Yap</button></a>
                </div>
            </div>
        </div>
    </div>

    <script>
        function change1() {
            document.getElementById('price').value = 25;
            return false;
        }

        function change2() {
            document.getElementById('price').value = 50;
            return false;
        }

        function change3() {
            document.getElementById('price').value = 100;
            return false;
        }

        function change4() {
            document.getElementById('price').value = 250;
            return false;
        }

        function change5() {
            document.getElementById('price').value = 500;
            return false;
        }

        function change6() {
            document.getElementById('price').value = 1000;
            return false;
        }
    </script>


    <script src="/js/jquery.js"></script>
    <script src="/js/main.js"></script>
</body>

</html>