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
    <div id="preloader">
        <img src="img/logo.png" alt="">
    </div>

    <?php
        include('inc/header.php')
    ?>

    <div class="main">
        <div class="container">
            

            <div class="section">
                <div class="general">
                    <div class="profile">
                        <label class="-label" for="file">
                            <span class="glyphicon glyphicon-camera"></span>
                            <span>Change Image</span>
                        </label>
                        <input id="file" type="file" onchange="loadFile(event)"/>
                        <img src='img/avatar.png'>
                    </div>
                    
                    <div class="account-information">
                        Kullanıcı adı: scope
                        Kimlik kodu: <p class='identification-code'></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="js/jquery.js"></script>
    <script src="js/main.js"></script>
</body>
</html>