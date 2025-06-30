<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class post extends Entity
{
    // Define los campos de la tabla usuarios
    protected $attributes = [
        'id' => null,
        'titulo' => null,
        'subtitulo' => null,
        'contenido' => null,
        'escrito_por' => null,
        'imagen' => null,
        'slug' => null
    ];

    // Opcional: Si tienes campos adicionales en tu tabla, agrégalos aquí o define métodos para acceder a ellos.
}
