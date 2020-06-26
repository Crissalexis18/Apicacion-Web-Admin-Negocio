<!DOCTYPE html>
<html>
            <head>
            <title>Tacos Vacil&oacute;n</title>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
            <link rel="stylesheet" href="../Estilos/CSS.css">
            <script src="../JavaScript/JS.js"></script>

        </head>

    <body class='Fondo'>
        <div class='container-fluid FondoHeader'>
            <div class="container">
                <p>
                    <span>T</span>
                    <span>V</span>
                </p>
                <p>
                    <span>V</span>
                    <span>T</span>
                </p>
                <p>
                    <span>T</span>
                    <span>V</span>
                </p>
            </div>

            <div>
                <ul class='nav nav-tabs justify-content-end text-white '>
                    <li class='nav-item'>
                        <a class='nav-link' href='PaginaCobro.php'>Cobro</a>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link active' href='PaginaRegArticulos.php'>Registro Artículos</a>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link' href='ListaVentas.php'>Lista Ventas</a>
                    </li>
                </ul>
            </div>
        </div>

        <!--Contenido-->
        <form name="registroClientes" class='text-white form1'  method="post" action="PaginaCobro.php">

            <legend>Ingreso de Clientes</legend>
            <label>Descripcion del Producto</label>
            <input type='text' id='descripcion' name='descripcion' required>
            <label>Precio Unitario del Producto</label>
            <input type='number' id='precioU' name='precioU'  min='1' required>
            <label>Codigo del producto</label>
            <select type='text' id='CodigoP' name='CodigoP' value="A1" >
                <option>A1</option>
                <option>A2</option>
                <option>A3</option>
                <option>B1</option>
                <option>B2</option>
                <option>B3</option>
                <option>C1</option>
                <option>C2</option>
                <option>C3</option>
                <option>D1</option>
                <option>D2</option>
                <option>D3</option>
                <option>E1</option>
                <option>E2</option>
                <option>E3</option>
            </select>
            <input  class='btn-hover color-8' type="submit" value="Enviar"/>
        </form>
    </body>
</html>
