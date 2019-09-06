<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shop car</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="<?= base_url?>assets/css/estilos.css">
</head>

<body>
    <!-- CABECERA -->
    <div class="w3-card w3-black">
        <div class="w3-row">
            <div class="w3-col" style="width:10%">
                <img src="<?= base_url?>assets/img/camiseta.png" class="img-fluid margenlogo" width="50" alt="Camisetas">
            </div>
            <div class="w3-col" style="width:90%">
                <h1>Camisetas Online</h1>
            </div>
        </div>

    </div>

    <!-- MENU -->
    <div class="w3-bar w3-black w3-border-top w3-border-green margenopcionmenu">
        <a href="<?= base_url?>" class="w3-bar-item w3-button">Inicio</a>
        <a href="<?= base_url?>usuario/registro" 
                class="w3-bar-item w3-button">Registro</a>
        <a href="#" class="w3-bar-item w3-button">Link 2</a>
        <div class="w3-dropdown-hover">
            <button class="w3-button">Categorias </button>
            <div class="w3-dropdown-content w3-bar-block w3-border">
        
                <a href="#" class="w3-bar-item w3-button">Link 2</a>
                <a href="#" class="w3-bar-item w3-button">Link 3</a>
            </div>
        </div>

        <?php if(isset($_SESSION['identity'])):?>
        <div class="w3-dropdown-hover nombresesioncaja w3-border w3-round w3-border-green">
            <button class="w3-button">
                <span class="namesesion">
                    <?php echo $_SESSION['identity']->nombre.' '.$_SESSION['identity']->apellidos?> 
                    ▼   
                </span>
            </button>
            <div class="w3-dropdown-content w3-bar-block w3-border">
        
                <a href="<?=base_url?>usuario/logout" class="w3-bar-item w3-button">Cerrar Sesion</a>
                <a href="#" class="w3-bar-item w3-button">Link 3</a>
            </div>
        </div>
        <?php endif?>
    </div>