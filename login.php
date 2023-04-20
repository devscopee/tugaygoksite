<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel='stylesheet' href='css/global.css'>
    <link rel="stylesheet" href="css/login.css">
    <script src="js/script.js"></script>
    <script src="js/jquery.js"></script>
    <title>MARAZ GAME - Giriş Sayfası</title>
</head>
<body>
    
    <div id="preloder"></div>

    <main class='main'>
        <div class='logo-section'>
            <p>Maraz</p>
            <img src="img/logo.png">
            <p>Game</p>
        </div>

        <div class='login-form'>
            <div class="greeting">
                <p>Tekrardan hoşgeldin, hadi hesabına giriş yapalım!</p>
            </div>

            <div class="inputs">
                <div class="email-input input">
                    <p>E-posta</p>
                    <input type="text" maxlength='35' placeholder='example@gmail.com'>
                </div>

                <div class="password-input input">
                    <p>Şifre</p>
                    <input type="password" maxlength='35' placeholder='tugayabi31çekiyor'>
                </div>
            </div>

            <div class="login">
                <p class='btn-text'>Giriş Yap</p>
            </div>

            <div class="line"></div>

            <div class="special-situations">
                <a href="">Şifremi unuttum</a>
                <a href="">Kayıt ol</a>
            </div>

            <div class="quick-login-options">
                <div class="steam-login login-option"><i class="fa-brands fa-steam"></i> <p class='btn-text'>Steam ile giriş yap</p></div>
                <div class="discord-login login-option"><i class="fa-brands fa-discord"></i> <p class='btn-text'>Discord ile giriş yap</p></div>
            </div>
        </div>
    </main>

    <script>
        $(window).on('load', function() {
            $(".loader").delay(100).fadeOut();
            $("#preloder").delay(300).fadeOut("slow");

        });
    </script>
</body>
</html>