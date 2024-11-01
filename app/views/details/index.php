<?php foreach ($events as $event): ?>
        <h2><?=htmlspecialchars($event['name'])?></h2>
        <p>Tanggal: <?=htmlspecialchars($event['date'])?></p>

        <div class="gallery">
            <?php
$eventPhotos = Photo::getPhotosByEventAndRole($event['id'], $role['id']);
foreach ($eventPhotos as $photo): ?>
                <img src="<?=htmlspecialchars($photo['photo_url'])?>" alt="Foto Event">
            <?php endforeach;?>
        </div>
    <?php endforeach;?>