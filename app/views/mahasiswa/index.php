<div class="container mt-5">
    <div class="row">
        <div class="col-6">
            <h3>Daftar Pengalaman</h3>
            <?php foreach ($data['mhs'] as $mhs): ?>
                <ul>
                    <!-- <li> <img src="<?=BASEURL;?>/uploads/<?=$mhs['foto'];?>" width="100" alt="Foto Mahasiswa"></li> -->
                    <li><?=$mhs['nama'];?></li>
                    <li><?=$mhs['No_Telp'];?></li>
                    <li><?=$mhs['email'];?></li>
                    <li><?=$mhs['pengalaman'];?></li>
                </ul>
            <?php endforeach;?>
        </div>
    </div>
</div>

