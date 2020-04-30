<?php

class Home extends Controller
{
    public function index()
    {
        $data['icon'] = 'fa fa-home';
        $data['judul'] = 'Dashboard';
        $this->view('templates/header', $data);
        $this->view('home/index');
        $this->view('templates/footer');
    }
}
