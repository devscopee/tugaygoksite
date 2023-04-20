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
            <p class='text'>Oyunlar</p>
            <div class='line'></div>



            <div class='items'>
                <div class="product">
                    <div class="item-images">
                        <img class="gun" src="img/5676567.png">
                        <img class="case" src="img/78878.png">
                    </div>

                    <div class="product-description">
                        ALEVLİ MUMYA RANDOM UC
                    </div>

                    <div class='purchase'>
                        <div class='buy'>
                            <div class='cost'>
                                <i class="fa-solid fa-heart"></i>
                            </div>
                            <p>200₺</p>
                        </div>
                    </div>
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