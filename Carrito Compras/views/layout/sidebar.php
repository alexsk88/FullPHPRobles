<div class="w3-row w3-container">
        <!-- BARRA LATERAL -->
        <div class="w3-col" style="width: 22%">

            <?php if(!isset($_SESSION['identity'])):?>
            <form class="w3-container w3-card w3-margin"
            method="POST"
            action="<?= base_url?>usuario/login"><br>
            <div class="w3-center w3-block w3-tag w3-round w3-black" style="padding:3px">
                <div class="w3-tag w3-round w3-block w3-black w3-border w3-border-blue">
                    <?php if ( isset($_SESSION['error_login'] )&&$_SESSION['error_login'] == true) {
                        echo 'Error de user o pass';
                    } else {
                        echo 'Entra a la APP';
                    }?>
                        
                </div>
            </div><br><br>
                <label>Email</label>
                <input class="w3-input" name="email" type="email" required>

                <label>Password</label>
                <input class="w3-input" name="password" type="password" required><br>

                <input type="submit" value="Entrar"
                 class="w3-btn w3-round w3-block w3-green"><br>

            </form>
            <?php else:?>
            <ul class="w3-ul w3-margin">
                <li class="w3-hover-green pointer w3-display-container">
                <img src="<?= base_url?>assets/img/pedidos.png" 
                class="img-fluid margenlogo" 
                width="30"
                alt="Pedidos">
                    Mis Pedidos
                </li>
                
                <?php if(isset($_SESSION['admin'] )):?>
                <li class="w3-hover-green pointer w3-display-container">
                <img src="<?= base_url?>assets/img/category.png" 
                class="img-fluid margenlogo" 
                width="30"
                alt="Pedidos">
                    Gestionar Categorias
                </li>
                <li class="w3-hover-green pointer w3-display-container">
                <img src="<?= base_url?>assets/img/products.png" 
                class="img-fluid margenlogo" 
                width="30"
                alt="Pedidos">
                    Gestionar Productos
                </li>
                <li class="w3-hover-green pointer w3-display-container">
                <img src="<?= base_url?>assets/img/products.png" 
                class="img-fluid margenlogo" 
                width="30"
                alt="Pedidos">
                    Gestionar Pedidos
                </li>
                <?php endif?>
            </ul>
        <?php endif?>
        </div>