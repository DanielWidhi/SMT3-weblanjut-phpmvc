<?php

class Pengalaman extends Controller
{
    public function index()
    {
        $data['judul'] = 'Our Team';
        $data['exp'] = $this->model('Pengalaman_model')->getAllexp();
        $this->view('templates/header', $data);
        $this->view('pengalaman/index', $data);
        $this->view('templates/footer');
    }

}
