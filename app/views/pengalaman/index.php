<style>
    .gallery-card {
        transition: all 0.3s ease;
        border: none;
        border-radius: 15px;
        overflow: hidden;
    }

    .gallery-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 30px rgba(0,0,0,0.15);
    }

    .gallery-img {
        height: 250px;
        object-fit: cover;
        transition: all 0.5s ease;
    }

    .gallery-card:hover .gallery-img {
        transform: scale(1.1);
    }

    .gallery-title {
        background: linear-gradient(45deg, #2193b0, #6dd5ed);
        color: white;
        padding: 20px;
        margin: -20px;
        margin-bottom: 20px;
        border-radius: 15px 15px 0 0;
    }

    .card-body {
        padding: 25px;
    }

    .gallery-footer {
        background-color: #f8f9fa;
        border-top: 1px solid rgba(0,0,0,0.05);
        padding: 15px 25px;
    }

    .logo-title {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 15px;
    }

    .logo-img {
        height: 70px;
        width: auto;
    }
</style>

<div class="container mt-5">
    <div class="gallery-title text-center mb-5">
        <div class="logo-title">
            <!-- <img src="<?=BASEURL;?>/image/GDPB.png" alt="GPART Logo" class="logo-img"> -->
            <h2 class="display-4 fw-bold">OUR TEAM</h2>
        </div>
        <p class="lead">Meet Our Amazing Team Members</p>
    </div>

    <div class="row justify-content-center">
        <?php foreach ($data['exp'] as $exp): ?>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="team-member text-center">
                    <img src="<?=empty($exp['gambar']) ? IMGD . '/1.jpg' : $exp['gambar'];?>" class="rounded-circle mb-3 shadow-sm" width="180" height="180" alt="Team Member">
                    <h3 class="fw-bold mb-1"><?=$exp['nama'];?></h3>
                    <p class="text-muted mb-2"><?=$exp['no_telpon'];?></p>
                    <div class="px-4">
                        <p class="team-bio"><?=$exp['pengalaman'];?></p>
                    </div>
                    <div class="social-links mt-3">
                        <a href="#" class="text-dark mx-2"><i class="fab fa-linkedin"></i></a>
                        <a href="#" class="text-dark mx-2"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-dark mx-2"><i class="fab fa-github"></i></a>
                    </div>
                </div>
            </div>
        <?php endforeach;?>
    </div>
</div>
