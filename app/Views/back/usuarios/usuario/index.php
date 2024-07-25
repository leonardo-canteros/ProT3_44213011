<h2>Lista de Usuarios</h2>
<a href="<?php echo site_url('UsuarioController/create'); ?>">Agregar Usuario</a>
<table>
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Usuario</th>
        <th>Email</th>
        <th>Acciones</th>
    </tr>
    <?php foreach ($usuarios as $usuario): ?>
        <tr>
            <td><?php echo $usuario['id_usuario']; ?></td>
            <td><?php echo $usuario['nombre']; ?></td>
            <td><?php echo $usuario['apellido']; ?></td>
            <td><?php echo $usuario['usuario']; ?></td>
            <td><?php echo $usuario['email']; ?></td>
            <td>
                <a href="<?php echo site_url('usuario_controller/view/'.$usuario['id_usuario']); ?>">Ver</a>
                <a href="<?php echo site_url('usuario_controller/edit/'.$usuario['id_usuario']); ?>">Editar</a>
                <a href="<?php echo site_url('usuario_controller/delete/'.$usuario['id_usuario']); ?>">Eliminar</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>