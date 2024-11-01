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

    .gallery-img, .gallery-video {
        height: 250px;
        width: 100%;
        object-fit: cover;
        transition: all 0.5s ease;
    }

    .gallery-card:hover .gallery-img,
    .gallery-card:hover .gallery-video {
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

    .modal-img, .modal-video {
        width: 100%;
        height: auto;
        max-height: 80vh;
        object-fit: contain;
    }
</style>

<div class="container mt-5">
    <div class="gallery-title text-center mb-5">
        <h2 class="display-4 fw-bold">Event Gallery</h2>
        <p class="lead">Photos and videos related to the selected event</p>
    </div>

    <div class="row g-4">
        <?php foreach ($data['photos'] as $photo): ?>
            <div class="col-lg-4 col-md-6">
                <div class="card gallery-card">
                    <div class="overflow-hidden">
                        <?php
$file_extension = strtolower(pathinfo($photo['gambar'], PATHINFO_EXTENSION));
if (in_array($file_extension, ['mp4', 'webm', 'ogg'])): ?>
                            <video class="gallery-video" autoplay muted loop>
                                <source src="<?=$photo['gambar'];?>" type="video/<?=$file_extension?>">
                                Your browser does not support the video tag.
                            </video>
                        <?php else: ?>
                            <img src="<?=$photo['gambar'];?>"
                                 class="gallery-img"
                                 alt="<?=$photo['judul'];?>">
                        <?php endif;?>
                    </div>
                    <div class="card-body">
                        <h4 class="card-title fw-bold mb-3"><?=$photo['judul'];?></h4>
                        <p class="card-text text-muted"><?=$photo['deskripsi'];?></p>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="badge bg-primary">Event: <?=$photo['event_name'];?></span>
                        <button class="btn btn-outline-primary btn-sm" data-bs-toggle="modal" data-bs-target="#galleryModal<?=$photo['id'];?>">View Details</button>
                    </div>
                </div>
            </div>

            <!-- Modal for each image/video -->
            <div class="modal fade" id="galleryModal<?=$photo['id'];?>" tabindex="-1" aria-labelledby="galleryModalLabel<?=$photo['id'];?>" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="galleryModalLabel<?=$photo['id'];?>"><?=$photo['judul'];?></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body text-center">
                            <?php if (in_array($file_extension, ['mp4', 'webm', 'ogg'])): ?>
                                <video class="modal-video" controls autoplay>
                                    <source src="<?=$photo['gambar'];?>" type="video/<?=$file_extension?>">
                                    Your browser does not support the video tag.
                                </video>
                            <?php else: ?>
                                <img src="<?=$photo['gambar'];?>" class="modal-img" alt="<?=$photo['judul'];?>">
                            <?php endif;?>
                            <p class="mt-3"><?=$photo['deskripsi'];?></p>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach;?>
    </div>
</div>
