<!--
<div class="col">

  <h2 class="fw-bold text-center pt-5 mb-5">Hola.</h2>
          
    <form action="#">
                
        <div class="mv-4">
                <label for="correo" class="form-lavel">correo</label>
                <input type="correo" class="form-control" name="correo">
         </div>
                    
         <div class="mv-4">
                <label for="password" class="form-lavel">password</label>
                <input type="password" class="form-control" name="password">
          </div>

        <div class="my-4 form-check" >
             <input type="checkbox" name="connected" class="form-check-imput" >
             <label for="connected" class="form-check-label">mantener conectado</label>
        </div>

        <div class="d-grid my-4">
             <button type="submit" class="btn btn-primary">conectar</button>
        </div>
        
        <div class="d-grid ">
             <button type="submit" class="btn btn-primary">cancelar</button>
        </div>

        <div class="my-3">
             <span>no tienes cuenta? <a href="registro">registrate</a></span>
        </div>

    </form>

</div>
-->

<div class="col">
    <h2 class="fw-bold text-center pt-5 mb-5">Hola.</h2>
    
    <!-- Mensaje de error en caso de autenticación fallida -->
    <?php if (session()->getFlashdata('error')): ?>
        <div class="alert alert-danger">
            <?php echo session()->getFlashdata('error'); ?>
        </div>
    <?php endif; ?>

    <!-- Formulario de Login -->
    <form action="<?php echo site_url('login/authenticate'); ?>" method="post">
        <div class="mb-4">
            <label for="correo" class="form-label">Correo</label>
            <input type="email" class="form-control" name="correo" required>
        </div>
                
        <div class="mb-4">
            <label for="password" class="form-label">Contraseña</label>
            <input type="password" class="form-control" name="password" required>
        </div>

        <div class="my-4 form-check">
            <input type="checkbox" name="connected" class="form-check-input">
            <label for="connected" class="form-check-label">Mantener conectado</label>
        </div>

        <div class="d-grid my-4">
            <button type="submit" class="btn btn-primary">Conectar</button>
        </div>
        
        <div class="d-grid">
            <a href="/" class="btn btn-secondary">Cancelar</a>
        </div>

        <div class="my-3">
            <span>No tienes cuenta? <a href="<?php echo site_url('registro'); ?>">Regístrate</a></span>
        </div>
    </form>
</div>




































<script src="assets/js/bootstrap.bundle.min.js" > </script>