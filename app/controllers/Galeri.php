<?php
class Galeri extends Controller{
    public function index () {
        $data['judul'] = 'GPART GALERI';
        $data['galeri'] = $this->model('Galeri_model')->getAllgaleri();
        $this->view('templates/header' , $data);
        $this->view('galeri/index' , $data);
        $this->view('templates/footer');
    } 
}