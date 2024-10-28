<?php

class About extends Controller
{
    public function index($nama = 'Daniel Widhi', $pekerjaan = 'Fotographer', $umur = 20)
    {
        // echo "Halo, nama Saya $nama, saya adalah seorang $pekerjaan, saya berumur $umur tahun";
        $data['nama'] = $nama;
        $data['pekerjaan'] = $pekerjaan;
        $data['umur'] = $umur;
        $data['judul'] = 'About Daniel';
        $this->view('template/header', $data);
        $this->view('about/index', $data);
        $this->view('template/footer');
    }
    public function page()
    {
        // echo "About/page - Daniel Widhi";
        $data['judul'] = 'Pages';
        $this->view('template/header', $data);
        $this->view('about/page');
        $this->view('template/footer');

    }
}
