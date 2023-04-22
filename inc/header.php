<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel='stylesheet' href='css/global.css'>
    <link rel='stylesheet' href='css/header.css'>
</head>
<body>
    <header class='header'>
        <div class='container'>
            <div class='logo'>
                <img src="img/logo.png" alt=""> <p>Maraz Game</p>
            </div>

            <div class='finder'>
                <div class='input'>
                    <input type="text" maxlength='125' placeholder='Bir şey ara...'>
                    <div class='search'>
                    <i class="fa-solid fa-magnifying-glass"></i>
                    </div>
                </div>
            </div>

            <div class='buttons'>
                <div class='add button'>
                    <p><i class="fa-solid fa-plus"></i> İlan Ekle</p>
                </div>

                <div class='login button inactive'>
                    <a href='login.php'><i class='fa-solid fa-arrow-right'></i> Giriş </a>
                </div>

                <div class='account active'>
                    <a href='profile.php'>
                        <img src="img/avatar.png" alt="">
                    </a>
                </div>

                <div class="shop active">
                    <a href="shopping-bag.php">
                        <i class="fa-solid fa-basket-shopping"></i>
                    </a>
                </div>
            </div>
        </div>
    </header>
</body>
</html>