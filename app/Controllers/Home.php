<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo view('templates/header');
        echo view('welcome_message');
        echo view('templates/footer');
    }

    public function about()
    {
        echo view('templates/header');
        echo view('about');
        echo view('templates/footer');
    }

    public function contact()
    {
        echo view('templates/header');
        echo view('contact');
        echo view('templates/footer');
    }
}
