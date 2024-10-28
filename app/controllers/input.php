<?php
class Input extends Controller
{
    public function index()
    {
        $data['judul'] = 'Form input';
        $this->view('template/header', $data);
        $this->view('input/index');
        $this->view('template/footer');
    }

    public function store()
    {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            header('Location: ' . BASEURL . '/input');
            exit();
        }

        // Validasi input
        if (empty($_POST['judul']) || empty($_POST['sinopsis'])) {
            $_SESSION['error'] = 'Judul dan sinopsis harus diisi';
            header('Location: ' . BASEURL . '/input');
            exit();
        }

        // Validasi file upload
        if (!isset($_FILES['image']) || $_FILES['image']['error'] !== 0) {
            $_SESSION['error'] = 'Harap pilih file gambar yang valid';
            header('Location: ' . BASEURL . '/input');
            exit();
        }

        $judul = htmlspecialchars($_POST['judul']);
        $sinopsis = htmlspecialchars($_POST['sinopsis']);
        $image = $_FILES['image']['name'];
        $tmp_name = $_FILES['image']['tmp_name'];
        $folder = '../public/image/';

        // Validasi tipe file
        $allowed = ['jpg', 'jpeg', 'png', 'gif'];
        $ext = strtolower(pathinfo($image, PATHINFO_EXTENSION));
        if (!in_array($ext, $allowed)) {
            $_SESSION['error'] = 'Format file tidak didukung. Gunakan: ' . implode(', ', $allowed);
            header('Location: ' . BASEURL . '/input');
            exit();
        }

        // Generate unique filename
        $image = uniqid() . '.' . $ext;

        if (!move_uploaded_file($tmp_name, $folder . $image)) {
            $_SESSION['error'] = 'Gagal mengupload file';
            header('Location: ' . BASEURL . '/input');
            exit();
        }

        $model = $this->model('Input_model');
        if (!$model->tambahBuku($judul, $sinopsis, $image)) {
            unlink($folder . $image); // Hapus file jika gagal simpan ke DB
            $_SESSION['error'] = 'Gagal menyimpan data ke database';
            header('Location: ' . BASEURL . '/input');
            exit();
        }

        $_SESSION['success'] = 'Data berhasil disimpan';
        header('Location: ' . BASEURL . '/input');
        exit();
    }
}
