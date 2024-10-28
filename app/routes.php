// index.php atau routes.php

// Asumsi Anda menggunakan $database sebagai koneksi DB
$galleryController = new GalleryController($database);

if ($_SERVER['REQUEST_URI'] === '/gallery') {
    $galleryController->index();
} elseif ($_SERVER['REQUEST_URI'] === '/gallery/add') {
    $galleryController->add();
} elseif (strpos($_SERVER['REQUEST_URI'], '/gallery/delete/') === 0) {
    $id = intval(basename($_SERVER['REQUEST_URI']));
    $galleryController->delete($id);
}
