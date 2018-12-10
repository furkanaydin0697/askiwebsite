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


    <form>
        <fieldset>
            <legend>Online Bakiye Sorgulama</legend>

            <div class="form-group">
                <label for="tcno">T.C. Kimlik Numarası</label>
                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="TCKN giriniz" required>
            </div>

            <div class="form-group">
                <label for="kartno">Kart Numarası</label>
                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Kart Numarası Giriniz" required>
            </div>


            <button type="submit" class="btn btn-primary">Bakiye Sorgula</button>
        </fieldset>
    </form>

    <div class="modal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
                </div>
                <div class="modal-body">
                    <p>Modal body text goes here.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Kapat</button>
                </div>
            </div>
        </div>
    </div>



    <div class="jumbotron">
        <hr class="my-4">
        <p>© Copyright 2018. askisumatik.co Tüm Hakları Saklıdır.İzinsiz kopyalanamaz, ismi kesinlikle kullanılamaz.</p>
    </div>

</body>

</html>
