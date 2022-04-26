<?php

namespace App\Controllers;

class Home extends BaseController
{
    public $data = [];

    public function index()
    {
        echo view('templates/header', $this->data);
        echo view('templates/slider', $this->data);
        echo view('home', $this->data);
        echo view('templates/footer', $this->data);
    }
    public function about()
    {
        echo view('templates/header', $this->data);
        echo view('about', $this->data);
        echo view('templates/footer', $this->data);
    }

    public function manuals()
    {
        $this->data['dir_map'] = directory_map('./uploads/manuals');
        echo view('templates/header', $this->data);
        echo view('manuals', $this->data);
        echo view('templates/footer', $this->data);
    }
}
