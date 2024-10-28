<?php

class Home extends Controller
{
    public function index()
    {
        // echo 'home/index - Daniel Widhi';
        // $data['judul'] = 'Home';
        // $this->view('template/header', $data);
        $this->view('home/index');
        // $this->view('template/footer');
    }
}
