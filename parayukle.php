<!DOCTYPE html>
<html lang="en">

<head>
   
    <meta charset="UTF-8">
    <title>Aski Online Para Yükleme</title>
    <link rel="icon" ” href="img/logoico.ico" />
    <meta name="keywords" content="aski sayaç para yükleme, aski para yükleme, sayaç para yükleme">
    <link rel="stylesheet" href="style.css">
</head>

<body>
<?php
@$baglanti = new mysqli('localhost', 'root', '', 'kullanici_para_yukleme'); // Veritabanı bağlantımızı yapıyoruz.
    if(mysqli_connect_error()) //Eğer hata varsa yazdırıyoruz 
    {
        echo mysqli_connect_error();
        exit; //eğer bağlantıda hata varsa PHP çalışmasını sonlandırıyoruz.
    }
$baglanti->set_charset("utf8"); // Türkçe karakter sorunu olmaması için utf8'e çeviriyoruz.
?>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="home.html">
            <img src="img/logo-aski.png" alt="" width="50%">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

        <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="home.php">Anasayfa <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="parayukle.php">Para Yükle</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="bakiye.php">Bakiye Öğren</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">Hakkımızda</a>
                </li>
            </ul>
        </div>
    </nav>

    <form>
        <fieldset>
            <legend>Online Para Yükleme</legend>

            <div class="form-group">
                <label for="exampleInputEmail1">E-mail</label>
                <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="E-mail giriniz" required>
                <small id="emailHelp" class="form-text text-muted">Dekont göndermek için kullanılacaktır.</small>
            </div>
            <div class="form-group">
                <label for="tcno">T.C. Kimlik Numarası</label>
                <input type="text" class="form-control" name="tcNo" placeholder="TCKN giriniz" required>
            </div>

            <div class="form-group">
                <label for="kartno">Kart Numarası</label>
                <input type="text" class="form-control" name="kartNo" placeholder="Kart Numarası Giriniz" required>
            </div>
            <div class="form-group">
                <label for="exampleSelect1">Yüklenecek Tutar(₺ cinsinden)</label>
                <select class="form-control" name="tutar">
        <option>20₺</option>
        <option>30₺</option>
        <option>40₺</option>
        <option>50₺</option>
        <option>60₺</option>
        <option>70₺</option>
        <option>80₺</option>
        <option>90₺</option>
        <option>100₺</option>
        <option>150₺</option>
        <option>200₺</option>
        <option>300₺</option>
        <option>400₺</option>
        <option>500₺</option>
      </select>
            </div>

            <input type="submit" value="Odemeasdsadad" />
        </fieldset>
    </form>
<?php 
if ($_POST) { // Sayfada post olup olmadığını kontrol ediyoruz.
    // Sayfa yenilendikten sonra post edilen değerleri değişkenlere atıyoruz
    $email = $_POST['email']; 
	$tcNo=$_POST['tcNo'];
    $kartNo = $_POST['kartNo'];
    $tutar = $_POST['tutar'];
         // Veri ekleme sorgumuzu yazıyoruz.
        if ($baglanti->query("INSERT INTO aski_kullanici (email, tc_no, kart_no, tutar) VALUES ('$email','$tcNo','$kartNo','$tutar')")) 
        {
           echo "<font color='#43D1AF'>İçecek Eklendi.</font>"; // Eğer veri eklendiyse eklendi yazmasını sağlıyoruz.
        }
        else
        {
            echo "<font color='#43D1AF'>Hata oluştu.</font>";
        }
    
	
}
?>


    <div class="jumbotron">
        <hr class="my-4">
        <p>© Copyright 2018. askisumatik.co Tüm Hakları Saklıdır.İzinsiz kopyalanamaz, ismi kesinlikle kullanılamaz.</p>
    </div>

</body>

</html>
