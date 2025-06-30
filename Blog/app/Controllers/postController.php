<?php

namespace App\Controllers;
use App\Models\postModel;


class PostController extends BaseController
{
    protected $allPost;


    public function __construct()
    {
        $this->allPost = new postModel();

    }

    public function post($id)
    {
        $allData = $this->allPost->getPost($id); 
        

        $data =[
            'allData' => $allData
        ];

        echo view('template/header');
        echo view('postView', $data);
        echo view('template/footer');

    }

    
}
