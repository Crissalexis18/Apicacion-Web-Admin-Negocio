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
</head>

<body class='Fondo'>

<div class='container-fluid FondoHeader'>
    <div class='p-5 my-0'>
        <h1>Tacos Vacil&oacute;n</h1>
        <h5>"No están buenos, pero quitan el hambre"</h5>
    </div>

    <div>
        <ul class='nav nav-tabs justify-content-end text-white'>
            <li class='nav-item'>
                <a class='nav-link' href='PaginaCobro.php'>Cobro</a>
            </li>
            <li class='nav-item'>
                <a class='nav-link' href='PaginaRegArticulos.html'>Registro Artículos</a>
            </li>
            <li class='nav-item'>
                <a class='nav-link active' href='ListaVentas.php'>Lista Ventas</a>
            </li>
        </ul>
    </div>
</div>

<!--Contenido-->
    <div name="registroClientes" class='text-white form1'>
        <legend>Lista de Ventas</legend>
        <label>Selecciona la fecha para mostrar</label>
        <input type='date' id='fechaventas' name='fechaventas'>
        <button id="enviarVentas" name="enviarVentas" class='btn-hover color-8'>Enviar</button>
    </div>

</body>

</html>