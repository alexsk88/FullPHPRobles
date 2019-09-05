<div class="w3-col" style="width: 78%">

    <?php if( isset( $_SESSION['register'])  && $_SESSION['register'] == 'success' ): ?>
    <div class="w3-margin w3-round w3-center w3-animate-zoom w3-section w3-green">
        <h2>Registro Completado Correctamente</h2>
    </div>
    <?php elseif (isset( $_SESSION['register'])): ?>
    <div class="w3-margin w3-round w3-animate-zoom w3-section w3-red">
        <h2>Registro Fallido , Verifica los datos</h2>
    </div>
    <?php endif ?>

    <!-- Borrar session o mensja, porque lo puso en una session -->
    <?php  Utils::DeleteSession('register')?>

    <form class="w3-container w3-margin"
    action="<?=base_url?>usuario/save"
    method="POST"><br>
    
    <h2>Registrar Usuario</h2> <hr>
    <label>Nombre</label>
    <input class="w3-input" name="nombre" type="text" required>

    <label>Apellidos</label>
    <input class="w3-input" name="apellidos" type="text" required>

    <label>Email</label>
    <input class="w3-input" type="email" name="email" required>

    <label>Password</label>
    <input class="w3-input" type="password" name="password" required><br>

    <input type="submit" value="Registrar"
         class="w3-btn w3-round w3-block w3-green"><br>
</form>
</div>