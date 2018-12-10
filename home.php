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

    <div class="alert alert-dismissible alert-warning">
        <h4 class="alert-heading"><a href="http://www.aski.gov.tr/tr/Anasayfa" class="alert-link">Aski Genel Müdürlüğü Anasayfası için tıklayınız...</a></h4>
        <p class="mb-0"></p>
    </div>


    <div class="anasayfa-resim">
        <img style="height: 500px; width: 100%; display: block;" src="img/sayac.jpg" alt="image">

    </div>

    <div class="jumbotron">
        <section class="parallax section section-text-light section-parallax section-center mt-0 mb-0" data-plugin-parallax data-plugin-options="{'speed': 1.5}" data-image-src="../assets/img/parallax-2.jpg">
            <div class="container">
                <div class="row counters counters-text-light">
                    <div class="col-sm-6 col-lg-3 mb-4 mb-lg-0">
                        <div class="counter">
                            <i class="fa fa-tint"></i>
                            <strong id="BarajOrani" data-to-size="0">0</strong>

                            <label><a style="color: black" href="http://www.aski.gov.tr/tr/Baraj.aspx">Barajlarımızdaki Doluluk Oranı</a></label>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 mb-4 mb-lg-0">
                        <div class="counter">
                            <i class="fa fa-users"></i>
                            <strong id="AboneSayisi" data-to-size="0">0</strong>

                            <label>Aski Toplam Abone Sayısı</label>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 mb-4 mb-sm-0">
                        <div class="counter">
                            <i class="fa fa-user"></i>
                            <strong id="YeniAboneSayisi" data-to-size="0">0</strong>
                            <label>Kişi Bugün Abone Oldu</label>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 mb-4 mb-sm-0">
                        <div class="counter">
                            <i class="icon-drop icons"></i>
                            <strong id="TuketilenM3" data-to-size="0">0</strong>
                            <label>Kişi Başı Günlük Tüketilen Su Miktarı (Litre)</label>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>


    <div class="list-group">
        <a href="http://www.aski.gov.tr/tr/Baraj.aspx" class="list-group-item list-group-item-action">
    Baraj Doluluk Oranları
  </a>
        <a href="http://www.aski.gov.tr/tr/Kesinti.aspx" class="list-group-item list-group-item-action">Su Kesintileri
  </a>
        <a href="http://www.aski.gov.tr/TR/ICERIK/Abonelik-Islemleri/37" class="list-group-item list-group-item-action disabled">Abonelik İşlemleri
  </a>
    </div>
    
    <br>



    <div class="card text-white bg-success mb-3" style="max-width: 20rem;">
        <div class="card-header">Mobil Uygulama</div>
        <div class="card-body">
            <h4 class="card-title">Aski Android Uygulamamızı Denediniz mi?</h4>
            <p class="card-text">
                <a href="https://play.google.com/store/apps/details?id=org.uygulama.aski">
            <img src="img/PlayStoreIcon.png" alt="">
        </a>
            </p>
        </div>
    </div>

   <a href="http://www.aski.gov.tr/tr/Kesinti.aspx" target="frameadi">!!SU KESİNTİLERİNİ GÖRMEK İÇİN TIKLAYINIZ.</a>
   
   <br>
    
    
    <iframe width="100%" height="1000" name="frameadi"></iframe>
 




    <div class="jumbotron">
        <hr class="my-4">
        <p>© Copyright 2018. askisumatik.co Tüm Hakları Saklıdır.İzinsiz kopyalanamaz, ismi kesinlikle kullanılamaz.</p>
    </div>


</body>

</html>
