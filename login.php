<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel='stylesheet' href='css/global.css'>
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href='css/media.css'>
    <script src="js/script.js"></script>
    <script src="js/jquery.js"></script>
    <title>Maraz Game</title>
</head>
<body>
    <div class='bg-img'>
    <div id="preloder"></div>

    <main class='main'>
        <div class='login-form'>
            <div class="greeting">
                <p>Oturum Aç</p>
            </div>

            <div class="inputs">
                <div class="email-input input">
                    <input type="text" maxlength='35' placeholder='E-posta'>
                </div>

                <div class="password-input input">
                    <input type="password" maxlength='35' placeholder='Şifre'>
                </div>
            </div>

            <div class="login">
                <p class='btn-text'>Giriş Yap</p>
            </div>

            <div class="special-situations">
                <a href="">Şifremi unuttum</a>
                <a href="signup.php">Kayit ol</a>
            </div>

            <div class="quick-login-options">
                <div class="steam-login login-option"><i class="fa-brands fa-steam"></i> <p class='btn-text'>Steam ile giriş yap</p></div>
                <div class="discord-login login-option"><i class="fa-brands fa-discord"></i> <p class='btn-text'>Discord ile giriş yap</p></div>
                <div class="tiktok-login login-option"><img src='img/tiktok.png' alt='' width=18> <p class='btn-text'>TikTok ile giriş yap</p></div>
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