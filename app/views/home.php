<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require('./includes/common/head.php')?>
    <title>Ecomueble</title>
</head>

<body>
    
    <?php
        require('./includes/common/cabecera.php');
        require('./includes/Producto.php');
        require('./includes/Usuario.php');
    ?>
        <div class='container'>
                <div class='ini'> Algunos de los productos subidos</div>
                <div class='productosInicio pad'>
                    <?php echo Producto::mostrarXProductos(20); ?>
                </div> 
        </div> 
        <div class="container"> 
                <div class='ini'> Algunos de los usuarios registrados</div> 

                <div class='usuariosInicio pad'>
                    <?php echo Usuario::mostrarXUsuarios(20); ?>             
                </div>
        </div> 


</body>

</html>