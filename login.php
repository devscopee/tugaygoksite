<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/login.css">
    <title>MARAZ GAME - Giriş Sayfası</title>
</head>
<body bgcolor="#201f28">

    <div class="container">

        <div class="area"> <!--ORTADAKİ ALAN-->

            <div class="infArea"><!--SOLDAKİ BİLGİLENDİRME ALANI-->
                <!--ALTTAKİ DIV'LER DÜZEN İÇİNDİR-->
                
                <div class="boxOne">
                    <img src="img/logo.png" alt="MARAZLOGO" id="logo"><p id="logoText">Maraz Game</p>
                </div>
                <!---->
                <div class="boxTwo">
                    <div class="circle">
                        <i class="fa-solid fa-check"></i>
                    </div>
                    <p id="cap">Kolay ve Ücretsiz Üyelik</p>
                    <p id="text">Binlerce ürün arasından hızlı ve güvenli alışveriş için hemen kolay ve ücretsiz bir şekilde üyelik kaydınızı oluşturabilirsiniz.</p>
                </div>
                <!---->
                <div class="boxThree">
                    <div class="circle">
                        <i class="fa-solid fa-check"></i>
                    </div>
                    <p id="cap">Güvenli Ödeme</p>
                    <p id="text">Kart veya mobil ödemeleriniz de SSL sertifikalı ödeme sayfası ve PCI-DSS uyumluluğu ile müşterilerinizin güvenli bir ortamda ödeme yapmaları için gerekli her türlü önlemi almıştır. Müşterilerinizin ödeme yaparken oluşabilecek endişelerini azaltmakta ve ödeme dönüşüm oranınızı artırmaktadır.</p>
                </div>
                <!---->
                <div class="boxFour">
                    <div class="circle">
                        <i class="fa-solid fa-check"></i>
                    </div>
                    <p id="cap">Alanında Uzman Ve Bilgili Kadromuz İle Destek Hizmeti</p>
                    <p id="text">Siz değerli müşterilerimize daha iyi bir hizmet verebilmek için alanında uzman ve bilgili, teknik destek kadrosu ile 7/24 hizmet vermekteyiz.</p>
                </div>
                <!---->
                <div class="boxFive">
                    <ul>
                        <li><a href="#">Hakkımızda</a></li>
                        <li><a href="#">Kullanım Koşulları</a></li>
                        <li><a href="#">İletişim</a></li>
                    </ul>
                </div>

            </div>

            <div class="regArea"><!--SAĞDAKİ REGISTER FORMU-->
                
                <div class="bigArea">
                    
                    <div class="regOne">
                        <h1 style="margin-top: 10px; color: #436a46;">Hoşgeldin, lütfen giriş yapınız</h1>

                        <button type="button" id="steam"><i style="font-size: 25px;" class="fa-brands fa-steam"></i> &nbsp; Steam ile giriş yap</button> &emsp; <button type="button"  id="discord"><i style="font-size: 25px;" class="fa-brands fa-discord"></i> &nbsp; Discord ile giriş yap</button>
                    </div>
                    <!---->
                    <div class="regTwo">
                        <hr id="hrOne"><p id="text">veya</p><hr id="hrTwo">
                    </div>
                    <!---->
                    <div class="regThree">
                        <label for="eposta" id="epostaLbl">E-posta</label><br>
                        <input type="email" name="eposta" id="em">
                        <br><br>
                        <label for="sifre" id="sifreLbl">Şifre</label><br>
                        <input type="password" name="sifre" id="s">
                    </div>
                    <!---->
                    <div class="regFour">
                        <input type="checkbox" name="checkbox-checked"><p id="near" style="margin-top: -25px; margin-left: 30px; font-size: 18px; color: #00fc12;">Beni Hatırla</p>
                        <p id="pUnRemember"><a href="#">Şifrenizi mi unuttunuz?</a></p>
                    </div>
                    <!---->
                    <input type="submit" value="Giriş Yap" name="login" id="lg">
                    <p id="register">Henüz hesabın yok mu? <a href="#">Buradan kayıt olun</a></p>

                </div>

            </div>

        </div>

    </div>
    <!--Updated By Devilyxrd-->
</body>
</html>