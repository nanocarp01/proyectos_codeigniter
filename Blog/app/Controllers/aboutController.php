<?php

namespace App\Controllers;



class aboutController extends BaseController
{



    public function __construct()
    {


    }

    public function index()
    {


        echo view('template/header');
        echo view('about');
        echo view('template/footer');

    }

    
}
