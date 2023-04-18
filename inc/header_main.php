<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/header_main.css">
    <script src="js/script.js"></script>
</head>
<body>

    

    <header>

        <div class="header">
        
            <img src="img/logo.png" class="logo" alt="">

            <span>MARAZ GAME</span>
            
            <i class="fa-brands fa-instagram"></i>
            <i class="fa-brands fa-discord"></i>
            
            <div class="search-box">
                <input type="search" placeholder="Hesap ara...">
                <div class="icon-box">
                <i class="fa-solid fa-magnifying-glass"></i>
                </div>
            </div>

           <div class="giris-yap">
                <span>BAKİYE YÜKLE</span>
           </div>

           <div class="ilan-box" onmouseover="ilan_rotate()" onmouseleave="ilan_rotate_off()">
           <i class="fa-solid fa-plus" id="ilan-plus"></i>
            <span>İlan Ekle</span>
           </div>


            <div class="k_info">
                <p class="k_aditxt">KULLANICI ADI</p>
                <p class="k_bakiyetxt">200.00 TL</p>
                <div class="pp">
                    <img src="img/logo.png" alt="">
                </div>
            </div>

            
        </div>

        <div class="header-bottom">
            <div class="boxes">
                <div class="k1" id="k1"><p id="k1-txt">PUBG MOBILE</p></div>
                <div class="k2"><p>LEAGUE OF LEGENDS</p></div>
                <div class="k3"><p>OYUNLAR</p></div>
                <div class="k4"><p>VALORANT</p></div>
                <div class="k5" id="k5"><p id="k5-txt">CS:GO</p></div>
            </div>
        </div>
    </header>
</body>
</html>