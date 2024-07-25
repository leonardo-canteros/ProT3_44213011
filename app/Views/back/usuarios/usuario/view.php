<h2>Detalles del Usuario</h2>
<p>ID: <?php echo $usuario['id_usuario']; ?></p>
<p>Nombre: <?php echo $usuario['nombre']; ?></p>
<p>Apellido: <?php echo $usuario['apellido']; ?></p>
<p>Usuario: <?php echo $usuario['usuario']; ?></p>
<p>Email: <?php echo $usuario['email']; ?></p>
<a href="<?php echo site_url('usuario_controller/edit/'.$usuario['id_usuario']); ?>">Editar</a>
<a href="<?php echo site_url('usuario_controller/delete/'.$usuario['id_usuario']); ?>">Eliminar</a>
