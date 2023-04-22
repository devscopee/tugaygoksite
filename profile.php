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
                        <img id="profile-picture" src="img/avatar.png">

                        <div class='import-from-this-computer change-profile-image' onclick="selectProfilePicture()">
                            <p>Bu Bilgisayardan</p>
                            <input type="file" id="picture-input" accept="image/*"style="display:none" onchange="displaySelectedPicture(event)">
                        </div>

                        <div class='import-from-the-web change-profile-image' onclick="changeProfilePicture()">
                            <p>Web'de ara</p>
                        </div>
                        
                    </div>

                    <div class="account-information">
                            <p>Kullanıcı adı: <span class='name'>scope</span></p>
                            <p>Kimlik kodu: <span class='identification-code'></span></p>
                        </div>
                </div>
            </div>
        </div>
    </div>

    <script src="js/jquery.js"></script>
    <script src="js/main.js"></script>
    <script src="js/profile.js"></script>
</body>
</html>