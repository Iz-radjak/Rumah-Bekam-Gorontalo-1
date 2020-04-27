<?php

class Home extends Controller
{
    public function index()
    {
        $data['judul'] = 'Rumah Bekam Gorontalo';
        $this->view('templates/header', $data);
        $this->view('home/index');
        $this->view('templates/footer');
    }
}
