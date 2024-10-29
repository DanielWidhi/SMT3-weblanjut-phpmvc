<style>
    .card:hover {
        transform: scale(1.05);
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
</style>
<?php
$no = 1;

?>


<div class="container mt-5">
    <h3 class="text-center mb-4">GPART GALERY</h3>
    <div class="row">
        <?php foreach ($data['galeri'] as $galeri) : ?>
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                <div class="card h-100 shadow-sm">
                    <img src="<?= $galeri['gambar']; ?>" class="card-img-top" alt="<?= $galeri['judul']; ?>" style="width: 100%; height: auto;">
                    <div class="card-body">
                        <h5 class="card-title"><?= $galeri['judul']; ?></h5>
                        <p class="card-text"><?= $galeri['deskripsi']; ?></p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">No: <?= $no++; ?></small>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>