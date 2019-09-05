<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shop car</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="assets/css/estilos.css">
</head>
<body>
    <!-- CABECERA -->
    <div class="w3-card w3-black">
        <div class="w3-row">
            <div class="w3-col" style="width:10%">
                <img src="assets/img/camiseta.png" 
                class="img-fluid margenlogo" 
                width="50"
                alt="Camisetas">
            </div>
            <div class="w3-col" style="width:90%">
                <h1>Camisetas Online</h1>
            </div>
        </div>
      
    </div>

    <!-- MENU -->
    <div class="w3-bar w3-black w3-border-top w3-border-green">
        <a href="#" class="w3-bar-item w3-button">Inicio</a>
        <a href="#" class="w3-bar-item w3-button">Link 1</a>
        <a href="#" class="w3-bar-item w3-button">Link 2</a>
        <div class="w3-dropdown-hover">
            <button class="w3-button">Categorias </button>
            <div class="w3-dropdown-content w3-bar-block w3-border">
                <a href="#" class="w3-bar-item w3-button">Link 1</a>
                <a href="#" class="w3-bar-item w3-button">Link 2</a>
                <a href="#" class="w3-bar-item w3-button">Link 3</a>
            </div>
        </div>
    </div>

    <div class="w3-row w3-container">
        <!-- BARRA LATERAL -->
        <div class="w3-col" style="width: 22%">

            <form class="w3-container w3-card w3-margin"><br>
            <div class="w3-center w3-block w3-tag w3-round w3-black" style="padding:3px">
                <div class="w3-tag w3-round w3-block w3-black w3-border w3-border-blue">
                    Entra a la APP
                </div>
            </div><br><br>
                <label>Email</label>
                <input class="w3-input" type="text">

                <label>Password</label>
                <input class="w3-input" type="text"><br>

                <input type="submit" value="Entrar"
                 class="w3-btn w3-round w3-block w3-green"><br>

            </form>

            <ul class="w3-ul w3-margin">
                <li class="w3-hover-green pointer w3-display-container">
                <img src="assets/img/pedidos.png" 
                class="img-fluid margenlogo" 
                width="30"
                alt="Pedidos">
                    Mis Pedidos
                </li>
                <li class="w3-hover-green pointer w3-display-container">
                <img src="assets/img/category.png" 
                class="img-fluid margenlogo" 
                width="30"
                alt="Pedidos">
                    Gestionar Categorias
                </li>
                <li class="w3-hover-green pointer w3-display-container">
                <img src="assets/img/products.png" 
                class="img-fluid margenlogo" 
                width="30"
                alt="Pedidos">
                    Gestionar Productos
                </li>
            </ul>

        </div>

        <!-- CONETENIDO CENTRAL -->
        <div class="w3-col" style="width: 78%">
            <div class="w3-container w3-margin">

                <div class="w3-section w3-center">
                    <h1>PRODUCTOS DESTACADOS</h1>
                </div><hr>
                <div class="w3-row">

                    <div class="w3-quarter w3-center">
                        <div class="w3-card w3-margin w3-container">
                        <img src="assets/img/products.png" 
                        class="img-fluid margenlogo" 
                        width="100"
                        alt="Pedidos"><br>
                            <h2>Camisa Azul Ancha</h2>
                            <h4 class="w3-text-red w3-round w3-border w3-border-red"><b>$ 56.000</b></h4>
                            <a href="" class="w3-block w3-btn w3-red w3-round">Comprar</a><br>
                        </div>
                    </div>
                    <div class="w3-quarter w3-center">
                        <div class="w3-card w3-margin w3-container">
                        <img src="assets/img/products.png" 
                        class="img-fluid margenlogo" 
                        width="100"
                        alt="Pedidos"><br>
                            <h2>Camisa Azul Ancha</h2>
                            <h4 class="w3-text-red w3-round w3-border w3-border-red"><b>$ 56.000</b></h4>
                            <a href="" class="w3-block w3-btn w3-red w3-round">Comprar</a><br>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
    
   
    <!-- fOOTER -->
    <div class="w3-container w3-black txtfooter w3-border-top w3-border-bottom w3-border-green">
    <h5>Alexander Nova Desings &copy; <?= date('Y')?></h5>
    </div>

</body>
</html>