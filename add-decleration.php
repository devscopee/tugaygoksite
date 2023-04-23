<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='css/add-decleration.css'>
    <link rel='stylesheet' href='css/global.css'>
    <link rel='stylesheet' href='css/media.css'>
    <title>Maraz Game</title>
</head>
<body>


    <?php
        include('inc/header.php')
    ?>

    <div class="main">
        <div class="container">
            <div class="greeting">
                <p>İlan Oluşturma Formu</p>
            </div>

            <div class="adding-decleration-form">
                <div class="account-general-information">
                    <input type="text" maxlength='60' placeholder='Hesap İsmini Girin'>
                    <input type="text" maxlength='240' placeholder='Hesap Açıklamasını Girin'>
                </div>

                <div class="account-images">
                    <div class='import-from-this-computer change-profile-image' onclick="selectProfilePicture()">
                        <p>Bu Bilgisayardan</p>
                        <input type="file" id="picture-input" accept="image/*" style="display:none" onchange="displaySelectedPicture(event)">
                    </div>

                    <div class='import-from-this-computer change-profile-image' onclick="selectProfilePicture()">
                        <p>Bu Bilgisayardan</p>
                        <input type="file" id="picture-input" accept="image/*" style="display:none" onchange="displaySelectedPicture(event)">
                    </div>

                    <div class='import-from-this-computer change-profile-image' onclick="selectProfilePicture()">
                        <p>Bu Bilgisayardan</p>
                        <input type="file" id="picture-input" accept="image/*" style="display:none" onchange="displaySelectedPicture(event)">
                    </div>


                    <div class='import-from-this-computer change-profile-image' onclick="selectProfilePicture()">
                        <p>Bu Bilgisayardan</p>
                        <input type="file" id="picture-input" accept="image/*" style="display:none" onchange="displaySelectedPicture(event)">
                    </div>

                    <div class='import-from-this-computer change-profile-image' onclick="selectProfilePicture()">                            <p>Bu Bilgisayardan</p>
                        <input type="file" id="picture-input" accept="image/*" style="display:none" onchange="displaySelectedPicture(event)">
                    </div>

                    <div class='import-from-this-computer change-profile-image' onclick="selectProfilePicture()">
                        <p>Bu Bilgisayardan</p>
                        <input type="file" id="picture-input" accept="image/*" style="display:none" onchange="displaySelectedPicture(event)">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="js/main.js"></script>
    <script src="js/jquery.js"></script>
</body>
</html>