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
        <?php
        $fechaHoy = getdate();
        if (isset($_POST['fechaventas'])) {
            $fechaIngresada = explode('-', $_POST['fechaventas']);
            //print_r($fechaHoy );
            //print_r($fechaIngresada);
            if ($fechaIngresada[0] != null) {
                $diaIngresado = $fechaIngresada[2];
                $mesIngresado = $fechaIngresada[1];
                $añoIngresado = $fechaIngresada[0];
                $diaHoy = $fechaHoy['mday'];
                $mesHoy = $fechaHoy['mon'];
                $añoHoy = $fechaHoy['year'];
                if (($diaIngresado > $diaHoy && $mesIngresado > $mesHoy && $añoIngresado > $añoHoy) || ($añoIngresado > $añoHoy) ||
                        ($mesIngresado > $mesHoy && $añoIngresado > $añoHoy) || ($mesIngresado > $mesHoy && $diaIngresado > $diaHoy) ||
                        ($mesIngresado > $mesHoy) || ($diaIngresado > $diaHoy && $mesIngresado == $mesHoy)) {
                    echo '<script language="javascript">alert("NO EXISTE LA FECHA");</script>';
                } else {
                    echo '<script language="javascript">alert("Fecha correcta");</script>';
                }
            }
            else {
            echo '<script language="javascript">alert("Selecciona fecha");</script>';
        }
        }

        ?>

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
                        <a class='nav-link' href='PaginaRegArticulos.php'>Registro Artículos</a>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link active' href='ListaVentas.php'>Lista Ventas</a>
                    </li>
                </ul>
            </div>
        </div>

        <!--Contenido-->
        <form name="registroClientes" class='text-white form1' action="ListaVentas.php" method="post">
            <legend>Lista de Ventas</legend>
            <label>Selecciona la fecha para mostrar</label>
            <input type='date' id='fechaventas' name='fechaventas'>
            <input type="submit" id="enviarVentas" name="enviarVentas" class='btn-hover color-8' >
        </form>

    </body>

</html>