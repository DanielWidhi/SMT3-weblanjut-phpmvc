<div class="mt-5 position-relative m-4 d-flex gap-3 justify-content-center">
    <?php foreach ($data['exp'] as $exp) : ?>
        <div class="col-lg-4">
            <img src="<?= $exp['gambar']; ?>" class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="<?= $exp['gambar']; ?>"  role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="<?= $exp['gambar']; ?>" ></rect></img>
            <h2 class="fw-normal"><?=$exp['nama'];?></h2>
            <p2 class="fw-normal"><?=$exp['pengalaman'];?></p2>
            <p2 class="fw-normal"><?=$exp['no_telpon'];?></p2>
            <!-- <p><a class="btn btn-secondary" href="#">View details »</a></p> -->
        </div>
    <?php endforeach; ?>
</div>
