<?php

namespace App\Controllers;

use App\Models\UsuarioModel;
use CodeIgniter\Controller;

class UsuarioController extends Controller {
    public function __construct() {
        helper(['form', 'url']);
    }

    public function index() {
        $model = new UsuarioModel();
        $data['usuarios'] = $model->obtenerUsuarios();
        
        echo view('front/head_view', ['titulo' => 'Lista de Usuarios']);
        echo view('front/navbar_view');
        echo view('back/usuario/index', $data);
        echo view('front/footer');
    }

    public function view($id) {
        $model = new UsuarioModel();
        $data['usuario'] = $model->obtenerUsuarioPorId($id);

        echo view('front/head_view', ['titulo' => 'Detalles del Usuario']);
        echo view('front/navbar_view');
        echo view('back/usuario/view', $data);
        echo view('front/footer');
    }

    public function create() {
        $data['titulo'] = 'Registro';
        $model = new UsuarioModel();

        if ($this->request->getMethod() === 'post' && $this->validate([
            'nombre' => 'required|min_length[3]|max_length[50]',
            'apellido' => 'required|min_length[3]|max_length[50]',
            'usuario' => 'required|min_length[3]|max_length[50]',
            'email' => 'required|valid_email|max_length[100]',
            'pass' => 'required|min_length[6]'
        ])) {
            $model->agregarUsuario([
                'nombre' => $this->request->getPost('nombre'),
                'apellido' => $this->request->getPost('apellido'),
                'usuario' => $this->request->getPost('usuario'),
                'email' => $this->request->getPost('email'),
                'pass' => $this->request->getPost('pass'),
                'perfil_id' => $this->request->getPost('perfil_id'),
                'baja' => $this->request->getPost('baja'),
                'created_at' => date('Y-m-d H:i:s')
            ]);

            return redirect()->to('/usuarios');
        } else {
            echo view('front/head_view', $data);
            echo view('front/navbar_view');
            echo view('back/usuario/registro');
            echo view('front/footer');
        }
    }

    public function edit($id) {
        $model = new UsuarioModel();
        $data['titulo'] = 'Editar Usuario';

        if ($this->request->getMethod() === 'post' && $this->validate([
            'nombre' => 'required|min_length[3]|max_length[50]',
            'apellido' => 'required|min_length[3]|max_length[50]',
            'usuario' => 'required|min_length[3]|max_length[50]',
            'email' => 'required|valid_email|max_length[100]'
        ])) {
            $model->actualizarUsuario($id, [
                'nombre' => $this->request->getPost('nombre'),
                'apellido' => $this->request->getPost('apellido'),
                'usuario' => $this->request->getPost('usuario'),
                'email' => $this->request->getPost('email'),
                'pass' => $this->request->getPost('pass'),
                'perfil_id' => $this->request->getPost('perfil_id'),
                'baja' => $this->request->getPost('baja'),
                'created_at' => date('Y-m-d H:i:s')
            ]);

            return redirect()->to('/usuarios');
        } else {
            $data['usuario'] = $model->obtenerUsuarioPorId($id);
            echo view('front/head_view', $data);
            echo view('front/navbar_view');
            echo view('back/usuario/edit', $data);
            echo view('front/footer');
        }
    }

    public function delete($id) {
        $model = new UsuarioModel();
        $model->borrarUsuario($id);

        return redirect()->to('/usuarios');
    }
}























































