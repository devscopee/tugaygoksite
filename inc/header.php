<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link rel='stylesheet' href='css/header.css'>
</head>
<body>
    <header class='header'>
        <div class='container'>
            <div class='logo'>
                <a href="index.php">
                    <img src="img/logo.png" alt=""> <p>Maraz Game</p>
                </a>
            </div>

            <div class='right_side_container'>

            <div class='finder'>
                <div class='input'>
                    <input type="text" maxlength='125' placeholder='Bir şey ara...'>
                    <div class='search'>
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </div>
                </div>
            </div>

            <div class='buttons active'>
                <div class='add-decleration button'>
                    <p><i class="fa-solid fa-plus"></i> İlan Ekle</p>
                </div>

                <div class='add-balance button' id="add_button">
                    <p><a href="../add-balance.php" ><i class="fa-solid fa-plus"></i> Bakiye Yükle</a></p>
                </div>

                

                <div class='account button'>
                    <a href='profile.php'>
                        <img src="img/avatar.png" alt="">
                    </a>
                </div>

                <a href="products.php">
                    <div class="shop button">
                        <i class="fa-solid fa-basket-shopping"></i>
                    </div>
                </a>

            </div>
            <div class='login button inactive'>
                <a href='login.php'><i class='fa-solid fa-arrow-right'></i> Giriş </a>
            </div>
            </div>

        </div>
    </header>
</body>
</html>