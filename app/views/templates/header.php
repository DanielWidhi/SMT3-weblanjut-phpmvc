<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman <?=$data['judul'];?></title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> -->
    <link rel="icon" type="image/png" href="<?=BASEURL;?>/image/GDPB.png">
    <link href="<?=BASEURL;?>/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
        <!-- <div class="container-fluid"> -->
            <a class="navbar-brand" href="<?=BASEURL;?>"><img src="<?=BASEURL;?>/image/GDPK.png" class="img-fluid" style="max-width: 40px; height: auto;"></img></a>
            <a class="navbar-brand" href="<?=IG;?>" target="_blank">GDPARTSTUDIO</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link active" aria-current="page" href="<?=BASEURL;?>"><i class="bi bi-house"> </i> Home</a>
                <a class="nav-link" href="<?=BASEURL;?>/about"><i class="bi bi-info"></i> About</a>
                <a class="nav-link" href="<?=BASEURL;?>/galeri"><i class="bi bi-people"></i>Galeri</a>
                <a class="nav-link" href="<?=BASEURL;?>/pengalaman"><i class="bi bi-people"></i>Pengalaman</a>
                <a class="nav-link disabled" aria-disabled="true">UP COMING SOON</a>
            </div>
            </div>
        <!-- </div> -->
  </div>
</nav>