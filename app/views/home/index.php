

<div class="container mt-5">
    <!-- <div class="jumbotron mt-5">
        <h1 class="display-4">Hello, <?=$data['nama'];?></h1>
    <p class="lead">Hallo, Nama Saya <?=$data['nama'];?>, Saya seorang <?=$data['pekerjaan'];?></p>
    <hr class="my-4">
        <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
        <p class="lead">
        <a class="btn btn-primary btn-lg" href="<?=IG;?>" target="_blank" role="button"><i class="bi bi-instagram"></i> Kepoin Yuk</a>
        </p>
    </div> -->


    <!-- Carousel Full -->
    <!-- <div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-label="Slide 1" aria-current="true"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2" class=""></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3" class=""></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="bd-placeholder-img" src="<?=BASEURL;?>/image/1.jpg" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="var(--bs-secondary-color)"></rect></img>
        <div class="container">
          <div class="carousel-caption text-start">
            <h1>Example headline.</h1>
            <p class="opacity-75">Some representative placeholder content for the first slide of the carousel.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="var(--bs-secondary-color)"></rect></svg>
        <div class="container">
          <div class="carousel-caption">
            <h1>Another example headline.</h1>
            <p>Some representative placeholder content for the second slide of the carousel.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="var(--bs-secondary-color)"></rect></svg>
        <div class="container">
          <div class="carousel-caption text-end">
            <h1>One more for good measure.</h1>
            <p>Some representative placeholder content for the third slide of this carousel.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div> -->
    <!-- Carousel -->
    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2500">
    <!-- Indicators/dots -->
    <ol class="carousel-indicators">
        <li data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"></li>
        <li data-bs-target="#myCarousel" data-bs-slide-to="1"></li>
        <li data-bs-target="#myCarousel" data-bs-slide-to="2"></li>
        <li data-bs-target="#myCarousel" data-bs-slide-to="3"></li>
        <li data-bs-target="#myCarousel" data-bs-slide-to="4"></li>
    </ol>

    <!-- Carousel inner -->
    <div class="carousel-inner">
        <!-- Slide 1 -->
        <div class="carousel-item active">
            <img src="<?=BASEURL;?>/image/1.jpg" class="d-block w-100" alt="Slide 1">
            <div class="carousel-caption d-none d-md-block">
                <h5>The Wedding Of Mekel & Tria</h5>
                <p></p>
            </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item">
            <img src="<?=BASEURL;?>/image/2.jpg" class="d-block w-100" alt="Slide 2">
            <div class="carousel-caption d-none d-md-block">
                <h5>Potret Vol. 12</h5>
                <p>Random Photos From Event UKM Photonity PNB</p>
            </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item">
            <img src="<?=BASEURL;?>/image/3.jpg" class="d-block w-100" alt="Slide 3">
            <div class="carousel-caption d-none d-md-block">
                <h5>Slide 3</h5>
                <p>Description for slide 3.</p>
            </div>
        </div>

        <!-- Slide 4 -->
        <div class="carousel-item">
            <img src="<?=BASEURL;?>/image/4.jpg" class="d-block w-100" alt="Slide 4">
            <div class="carousel-caption d-none d-md-block">
                <h5>Slide 4</h5>
                <p>Description for slide 4.</p>
            </div>
        </div>

        <!-- Slide 5 -->
        <div class="carousel-item">
            <img src="https://via.placeholder.com/800x400" class="d-block w-100" alt="Slide 5">
            <div class="carousel-caption d-none d-md-block">
                <h5>Slide 5</h5>
                <p>Description for slide 5.</p>
            </div>
        </div>
    </div>

    <!-- Controls -->
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>



<!-- Bootstrap JS and dependencies (Popper.js) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>


<div class="mt-5 position-relative m-4 d-flex gap-3 justify-content-center">
    <div class="card" style="width: 18rem;">
        <video src="<?=BASEURL;?>/image/8.mp4" class="card-img-top" autoplay muted loop></video>
        <div class="card-body">
            <h5 class="card-title">Naren Jatuh Cinta</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
    <div class="card" style="width: 18rem;">
        <video src="<?=BASEURL;?>/image/7.mp4" class="card-img-top" autoplay muted loop></video>
        <div class="card-body">
            <h5 class="card-title">Naren Jatuh Cinta</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
    <div class="card" style="width: 18rem;">
        <video src="<?=BASEURL;?>/image/6.mp4" class="card-img-top" autoplay muted loop></video>
        <div class="card-body">
            <h5 class="card-title">Naren Jatuh Cinta</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
    <div class="card" style="width: 18rem;">
        <video src="<?=BASEURL;?>/image/5.mp4" class="card-img-top" autoplay muted loop></video>
        <div class="card-body">
            <h5 class="card-title">Naren Jatuh Cinta</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
</div>

    <div class="mt-5 position-relative m-4 d-flex gap-3 justify-content-center">
        <div class="col-lg-4">
            <img src="<?=BASEURL;?>/image/Daniel.jpg" class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="<?=BASEURL;?>/image/Daniel.jpg" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="<?=BASEURL;?>/image/Daniel.jpg"></rect></img>
            <h2 class="fw-normal"><?=$data['nama'];?></h2>
            <p>Another exciting bit of representative placeholder content. This time, we've moved on to the second column.</p>
            <p><a class="btn btn-secondary" href="#">View details »</a></p>
        </div>
        <div class="col-lg-4">
            <img src="<?=BASEURL;?>/image/Daniel.jpg" class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="<?=BASEURL;?>/image/Daniel.jpg" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="<?=BASEURL;?>/image/Daniel.jpg"></rect></img>
            <h2 class="fw-normal"><?=$data['nama'];?></h2>
            <p>Another exciting bit of representative placeholder content. This time, we've moved on to the second column.</p>
            <p><a class="btn btn-secondary" href="#">View details »</a></p>
        </div>
        <div class="col-lg-4">
            <img src="<?=BASEURL;?>/image/Daniel.jpg" class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="<?=BASEURL;?>/image/Daniel.jpg" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="<?=BASEURL;?>/image/Daniel.jpg"></rect></img>
            <h2 class="fw-normal"><?=$data['nama'];?></h2>
            <p>Another exciting bit of representative placeholder content. This time, we've moved on to the second column.</p>
            <p><a class="btn btn-secondary" href="#">View details »</a></p>
        </div>
        </div>
    </div>
</div>
