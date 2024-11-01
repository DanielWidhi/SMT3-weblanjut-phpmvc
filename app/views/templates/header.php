<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$data['judul'];?></title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnY6hW+ALEwIH" crossorigin="anonymous"> -->
    <link rel="icon" type="image/png" href="<?=BASEURL;?>/image/Logo1.png">
    <link href="<?=BASEURL;?>/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <a class="navbar-brand" href="<?=BASEURL;?>"><img src="<?=BASEURL;?>/image/Logo1b.png" class="img-fluid" style="max-width: 40px; height: auto;"></img></a>
                <a class="navbar-brand" href="<?=IG;?>" target="_blank">GDPARTSTUDIO</a>
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="<?=BASEURL;?>"><i class="bi bi-house"> </i> Home</a>
                    <a class="nav-link" href="<?=BASEURL;?>/about"><i class="bi bi-info"></i> About</a>
                    <!-- <a class="nav-link" href="<?=BASEURL;?>/galeri"><i class="bi bi-people"></i> Galeri</a> -->
                    <a class="nav-link" href="<?=BASEURL;?>/pengalaman"><i class="bi bi-people"></i> Pengalaman</a>
                    <!-- <a class="nav-link" href="<?=BASEURL;?>/Mahasiswa"><i class="bi bi-people"></i> Pengalaman</a> -->
                    <a class="nav-link" href="<?=BASEURL;?>/Galeri"><i class="bi bi-images"></i> Gallery</a>
                    <a class="nav-link disabled" aria-disabled="true"><i class="bi bi-clock"></i> UP COMING SOON</a>
                </div>
            </div>
        </div>
        <!-- </div> -->
    </div>
</nav>