<?php

namespace App\Controllers;

use App\Models\UsuarioModel;
use CodeIgniter\Controller;

class LoginController extends Controller
{
    public function __construct()
    {
        helper(['form', 'url']);
    }

    // Muestra el formulario de login
    public function index()
    {
        $data['titulo'] = 'Iniciar Sesión';

        echo view('front/head_view', $data); // Asegúrate de tener esta vista configurada
        echo view('front/navbar_view');      // Asegúrate de tener esta vista configurada
        echo view('front/login');            // Vista ubicada en view/front/login.php
        echo view('front/footer');           // Asegúrate de tener esta vista configurada
    }

    // Autentica al usuario
    public function authenticate()
    {
        $model = new UsuarioModel();
        $correo = $this->request->getPost('correo');
        $password = $this->request->getPost('password');

        $user = $model->where('email', $correo)->first();

        if ($user && password_verify($password, $user['pass'])) {
            // Usuario autenticado correctamente
            session()->set([
                'id_usuario' => $user['id_usuario'],
                'nombre' => $user['nombre'],
                'logged_in' => true
            ]);

            return redirect()->to('/usuarios');
        } else {
            // Error de autenticación
            session()->setFlashdata('error', 'Correo o contraseña incorrectos');
            return redirect()->to('/login');
        }
    }

    // Cierra la sesión del usuario
    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}
