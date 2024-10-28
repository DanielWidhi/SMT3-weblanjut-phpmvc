<div class="container d-flex justify-content-center">
    <h2>Form Input</h2>
</div>

<div class="container bg-body-secondary d-flex rounded-3" style="align-items: center; width: 400px;">
    <div class="container">
        <form action="<?=BASEURL;?>/input/store" method="post" enctype="multipart/form-data">
            <p class="mt-2">Judul</p>
            <input class="form-control" type="text" name="judul" placeholder="Judul" required>
            <p class="mt-2">Sinopsis</p>
            <textarea class="form-control" name="sinopsis" placeholder="Sinopsis" required></textarea>
            <p class="mt-2">Gambar</p>
            <input type="file" name="image" required>
            <div class="container d-flex justify-content-center mt-4 mb-3">
                <input class="btn btn-primary mt-3" type="submit" value="Submit">
            </div>
        </form>
    </div>
</div>
