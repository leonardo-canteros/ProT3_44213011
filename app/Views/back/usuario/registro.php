<h2>Registrar Usuario</h2>
<?php if (isset($validation)): ?>
    <div>
        <?php echo $validation->listErrors(); ?>
    </div>
<?php endif; ?>
<form action="<?php echo site_url('UsuarioController/create'); ?>" method="post">
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" value="<?php echo set_value('nombre'); ?>"><br>

    <label for="apellido">Apellido</label>
    <input type="text" name="apellido" value="<?php echo set_value('apellido'); ?>"><br>

    <label for="usuario">Usuario</label>
    <input type="text" name="usuario" value="<?php echo set_value('usuario'); ?>"><br>

    <label for="email">Email</label>
    <input type="email" name="email" value="<?php echo set_value('email'); ?>"><br>

    <label for="pass">Password</label>
    <input type="password" name="pass"><br>

    <input type="submit" name="submit" value="Registrar">
</form>