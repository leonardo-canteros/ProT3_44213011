<?php
namespace App\Models;

use CodeIgniter\Model;

class UsuarioModel extends Model {
    protected $table = 'usuarios';
    protected $primaryKey = 'id_usuario';
    protected $allowedFields = ['nombre', 'apellido', 'usuario', 'email', 'pass', 'perfil_id', 'baja', 'created_at'];

    // Método para obtener todos los usuarios
    public function obtenerUsuarios() {
        return $this->findAll();
    }

    // Método para obtener un usuario por ID
    public function obtenerUsuarioPorId($id) {
        return $this->where(['id_usuario' => $id])->first();
    }

    // Método para agregar un usuario
    public function agregarUsuario($data) {
        return $this->insert($data);
    }

    // Método para actualizar un usuario
    public function actualizarUsuario($id, $data) {
        return $this->update($id, $data);
    }

    // Método para borrar un usuario
    public function borrarUsuario($id) {
        return $this->delete($id);
    }
}


















