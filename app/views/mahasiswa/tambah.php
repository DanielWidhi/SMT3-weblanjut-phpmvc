<div class="container mt-5">
    <div class="row">
        <div class="col-6">
            <h3>Form Tambah Data Mahasiswa</h3>
            <form action="<?=BASEURL;?>/mahasiswa/tambah" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama">
                </div>
                <div class="form-group">
                    <label for="nrp">NRP</label>
                    <input type="text" class="form-control" id="nrp" name="nrp">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" id="email" name="email">
                </div>
                <div class="form-group">
                    <label for="jurusan">Jurusan</label>
                    <input type="text" class="form-control" id="jurusan" name="jurusan">
                </div>
                <div class="form-group">
                    <label for="foto">Foto</label>
                    <input type="file" class="form-control" id="foto" name="foto">
                </div>
                <button type="submit" class="btn btn-primary mt-3">Tambah Data</button>
            </form>
        </div>
    </div>
</div>
