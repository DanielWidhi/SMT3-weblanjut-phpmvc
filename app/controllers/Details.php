<?php
class Details extends Controller
{
    public function index()
    {
        $data['judul'] = 'Details Galeri';
        $data['details'] = $this->model('Details_model')->getAlldetails();
        $this->view('templates/header', $data);
        $this->view('details/index', $data);
        $this->view('templates/footer');
    }
}
