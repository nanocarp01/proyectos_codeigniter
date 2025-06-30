<?php

namespace App\Models;

use CodeIgniter\Model;

class postModel extends Model
{
    protected $table = 'escritos';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id','titulo','subtitulo','conteido','escrito_por','imagen', 'slug'];
    protected $returnType = 'App\Entities\post'; // Tipo de entidad que devuelve el modelo


    public function getAllPost(){
        //obtener todos los datos
        $data = $this->select('*')
                     ->where('deleted_at', null)
                     ->findAll();

        return $data;
    }
  
    public function getPost($slug){
        //obtener todos los datos
        $data = $this->select('*')
                     ->where('slug =', $slug)
                     ->where('deleted_at', null)
                     ->findAll();

        return $data;
    }


}