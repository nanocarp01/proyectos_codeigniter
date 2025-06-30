<?php

namespace App\Controllers;
use App\Models\postModel;


class Home extends BaseController
{
    protected $allPost;


    public function __construct()
    {
        $this->allPost = new postModel();

    }

    public function index()
    {
        $allData = $this->allPost->getAllPost(); 
        

        $data =[
            'allData' => $allData
        ];
        echo view('template/header');
        echo view('index', $data);
        echo view('template/footer');

    }

    public function getAllPost(){

    }

    
}
