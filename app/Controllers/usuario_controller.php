<?php 
namespace App\Controllers;
use App\Models\usuarios_model;
use CodeIgniter\Controller;

class usuario_controler extends Controllers{
    
    public  funcion_construct(){
    helper(['form', 'url']);

    }

    public function create() {
        $dato['titulo']= 'registro';
        echo view('front/head_view',$dato);
        echo view('front/navbar_view');
        echo view('back/usuario/registro');
        echo view('front/footer');
    }


   




}

;?>


























































