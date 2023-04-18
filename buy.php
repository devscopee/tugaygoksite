<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/buy.css">
    <title>MARAZ GAME - Satın Alım</title>
</head>
<body bgcolor="#201f28">
    <?php
        include("inc/header.php");
    ?>
    <div class="container">
    



    <div class="area">

        <div class="banner">
            <img src="https://predunyam.com/images/gallery/63d06d3b1623879233.jpg" alt="FOTOASKO">
        </div>

        <div class="card">

            <div class="image">
                <img src="https://predunyam.com/images/product_m/631317264ae2c95796.jpg" alt="FOTOCNM">
            </div>

            <div class="stok">
                <div class="circle"><i class="fa-solid fa-check"></i></div>
                <p id="stokTxt">Stoktan hızlı teslimat!</p>
            </div>

            <p id="desc">YÜKSEK HESAP ÇIKMA GARANTİSİ VERİLMEZ. DESTANSI GÖSTERİŞ HESAP ÇIKMA ŞANSI YÜKSEKTİR.</p>

            <div class="price">
                <h1 id="mainSale">%50</h1>
                <p id="saleTxt">İndirim</p>
            </div>

            <p id="mainPrice"><del>1,000.00 TL</del></p>
            <p id="salePrice">500.00 TL</p>

            <input type="submit" value="Hemen Satın Al" id="buyBtn">
        </div>

        <div class="boxs">
            <div class="boxOne">
                <img src="https://predunyam.com/images/product_m/64003edec067e87294.png" alt="FOTO">
                <p id="capOne">Büyük Risk Random Hesap</p>

                <p id="priceOne">300.00 TL</p>
                <p id="buyOne">Satın Al</p>
            </div>

            <div class="boxTwo">
                <img src="https://predunyam.com/images/product_m/5e8aa122accab30586.jpg" alt="FOTO">
                <p id="capTwo">Origin Random Hesap</p>

                <p id="priceTwo">6.00 TL</p>
                <p id="buyTwo">Satın Al</p>
            </div>

            <div class="boxThree">
                <img src="https://predunyam.com/images/product_m/5e8aa598a271443491.jpg" alt="FOTO">
                <p id="capThree">Uplay Random Hesap</p>

                <p id="priceThree">10.00 TL</p>
                <p id="buyThree">Satın Al</p>
            </div>

            <div class="boxFour">
                <img src="https://predunyam.com/images/product_m/5e8aa5999350572645.jpg" alt="FOTO">
                <p id="capFour">Steam Random Hesap</p>

                <p id="priceFour">10.00 TL</p>
                <p id="buyFour">Satın Al</p>
            </div>
        </div>

    </div>


    
    
    </div>
    <?php
        include("inc/footer.php");
    ?>
    <!--Updated By Devilyxrd-->
</body>
</html>