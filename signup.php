<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel='stylesheet' href='css/global.css'>
    <link rel="stylesheet" href="css/signup.css">
    <link rel="stylesheet" href='css/media.css'>
    <script src="js/script.js"></script>
    <script src="js/jquery.js"></script>
    <title>Maraz Game</title>
</head>
<body>
    <div class='bg-img'>
    <div id="preloder"></div>

    <main class='main'>
        <div class='signup-form'>
            <div class="greeting">
                <p>Hesap Oluştur</p>
            </div>

            <div class="inputs">
                <div class="email-input input">
                    <input type="text" maxlength='35' placeholder='E-posta'>
                </div>

                <div class="password-input input">
                    <input type="password" maxlength='35' placeholder='Şifre'>
                </div>

                <div class="password-input input">
                    <input type="password" maxlength='35' placeholder='Şifreyi Tekrar Gir'>
                </div>
            </div>

            <div class="signup">
                <p class='btn-text'>Kayıt Ol</p>
            </div>

            <div class="special-situations">
                <p>Zaten bir hesabın var mı? <a href="login.php">Giriş yap!</a></p>
            </div>

            <div class="quick-signup-options">
                <div class="steam-signup signup-option"><i class="fa-brands fa-steam"></i> <p class='btn-text'>Steam ile kayıt ol</p></div>
                <div class="discord-signup signup-option"><i class="fa-brands fa-discord"></i> <p class='btn-text'>Discord ile kayıt ol</p></div>
                <div class="tiktok-signup signup-option"><img src='img/tiktok.png' alt='' width=18> <p class='btn-text'>TikTok ile kayıt ol</p></div>
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