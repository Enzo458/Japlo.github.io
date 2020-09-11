<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="defaul.css"> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/392639795f.js" crossorigin="anonymous"></script>
    <title>JAPLO</title>
</head>         
<body>
        <header class="encabesado">
            <nav class="navegador">
                
                <ul>
                    <li id="logo">JAPLO</li>
                    <li> <a href="login"><i class="fas fa-address-book"></i>Cuenta</a></li>
                    <li> <a href="prod"><i class="fas fa-shopping-cart"></i>Productos</a></li>
                    <li> <a href="acerca"><i class="fas fa-info"></i> Acerca de nosotros</a></li>
                </ul>
            </nav>
        </header>
        <section >
            <div class="catalogo">
                <div class="productos">
                    <div class="producto">
                        <div class="imagenproducto"></div>
                        <div class="infoproducto"></div>
                    </div>
                </div>
            </div>
            <div class="carrito"></div>
        </section>
    <?php
        include("public/cargarScript.php");
    ?>
</body>
</html>