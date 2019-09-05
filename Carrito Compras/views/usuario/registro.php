<div class="w3-col" style="width: 78%">
    <form class="w3-container w3-margin"
    action="index.php?controller=usuario&action=save"
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