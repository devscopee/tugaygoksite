<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap');

        * {
            box-sizing: border-box;
            padding: 0;
            margin: 0;
            font-family: 'Poppins', sans-serif;
        }

        footer {
            color: #fff;
            background-color: #010409;
            position: relative;
            width: 100%;
            height: 100%;
            border-top-left-radius: 70px;
            border-top-right-radius: 70px;
            font-size: 0.8rem;
        }

        @media (max-width:960px) {
            footer {
                width: 100%;
                top: 120px;
            }

            .main {
                margin: 50px;
                display: grid;
                grid-template-columns: repeat(2, 1fr);
                grid-template-rows: 1fr 1fr;
            }

            .logo {
                grid-column: 1/3;
            }

            .office {
                grid-column: 3/5;
            }

            .link {
                grid-column: 1/3;
            }
        }

        @media (max-width:660px) {
            .main {
                gap: 10px;
                margin: 0;
            }

            .icons {
                display: flex;
            }

            .row {
                grid-column: 1/4;
            }
        }

        .manik {
            width: 120px;
        }

        .main {
            margin: 50px;
            padding-top: 20px;
            padding-bottom: 50px;
            gap: 50px;
        }

        .row {
            margin-top: 50px;
        }

        .footer-header {
            font-size: 1.5rem;
            margin-bottom: 20px;
        }

        .office-des {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .office a {
            text-decoration: none;
            color: #FF9600;

        }

        .office a:hover {
            color: #fff;
        }

        .num {
            font-size: 1rem;
            font-weight: 500;
        }

        .link-des {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .link-des a {
            color: #fff;
            text-decoration: none;
            font-size: 1rem;
        }

        .link-des a:hover {
            color: #FF9600;
            transition: linear 0.3s;
        }

        .subcribe {
            display: flex;
        }

        input[type=mail] {
            border: none;
            padding-bottom: 5px;
            border-bottom: 1px solid #fff;
            background-color: transparent;
            font-size: 0.8rem;
        }

        .sub-icon {
            margin: 7px;
            margin-right: 15px;
            margin-left: 0;
            font-size: 1.5rem;
        }

        .ri-arrow-right-line {
            margin-left: 0;
        }

        .icons a {
            text-decoration: none;
            color: #fff;
            border: 1px solid #fff;
            justify-content: center;
            padding: 10px;
            border-radius: 50%;
            align-items: center;
            font-size: 1.1rem;
            max-height: 50%;
            max-width: 50%;
        }

        .social-icon {
            position: relative;
            top: 2px;
        }

        .icons a:hover {
            color: #fff;
            background-color: #FF9600;
            border-color: #FF9600;
        }

        .newsletter-des {
            display: flex;
            flex-direction: column;
            gap: 40px;
        }

        .copyright {
            text-align: center;
        }

        hr {
            width: 90%;
            margin: 2px auto;
            opacity: 30%;
            border: 0.01px solid #AAA;
        }

        .copyright p {
            padding: 20px;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
</head>

<body>
    <footer class="footer-sec">
        <div class="main">
            <div class="logo row">
                <div class="footer-header">
                    <img src="logo.png" class="manik" alt="">
                </div>
            </div>
            <div class="office row">
                <div class="footer-header">
                    <h3 style="color: #FF9600;">Bilgiler</h3>
                </div>
                <div class="office-des">
                    <p>Lorem, ipsum dolor.</p>

                    <a href="mailto:example@gmail.com">example@gmail.com</a>

                    <a href="tel:+905300000000">+90 530 000 00 00</a>
                </div>
            </div>
            <div class="link row">
                <div class="footer-header">
                    <h3 style="color: #FF9600;">Sayfalar</h3>
                </div>
                <div class="link-des">
                    <a href="#" class="footer-links">Kullanım Şartları</a>
                    <a href="#" class="footer-links">Gizlilik Politikası</a>
                    <a href="#" class="footer-links">Hakkımızda</a>
                    <a href="#" class="footer-links">Üyelik Sözleşmesi</a>
                </div>
            </div>
            <div class="newsletter row">
                <div class="footer-header">
                    <h3 style="color: #FF9600;">Sosyal Medya</h3>
                </div>
                <div style="padding: 5px;"></div>
                <div class="newsletter-des">
                    <div class="icons">
                        <a href="#"><i class="social-icon ri-facebook-fill"></i></a>
                        <a href="#"><i class="social-icon ri-instagram-line"></i></a>
                        <a href="#"><i class="social-icon ri-discord-fill"></i></a>
                        <a href="#"><i class="social-icon ri-youtube-fill"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright">
            <hr>
            <p>
                Oyunları ucuz fiyatlar ile satın alabileceğin oyun alışveriş sitesidir.
                <br><br>
                Copyright © 2023 Maraz Game Tüm Hakları Saklıdır.
            </p>
        </div>
    </footer>
</body>

</html>