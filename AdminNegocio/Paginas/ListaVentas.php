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
                     $fechaven=$_POST['fechaventas'];
					
                }
            }
            else {
            echo '<script language="javascript">alert("Seleccione una fecha");</script>';
        }
        }
	
        ?>

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
		
		<table align="center" class='container table table-hover text-white'>
			<thead>
				<th>ID</th><th>Nombre</th><th>Pago Total</th><th>Fecha</th>
			</thead>
			<tbody>
				<?php
			    	$servername = "idawis-uaz.ddns.net:33060";
			    	$username = "cesarv2001";
			    	$password = "Qkmqd43";
			    	$dbname = "cesarv2001";
			    	// Create connection
				    $conn = mysqli_connect($servername, $username, $password,$dbname);
                    if(isset($_POST['fechaventas'])){
			        $fechaven=$_POST['fechaventas'];
			        $query = "SELECT ID, NOMBRE, PRECIO_TOTAL, FECHA from ORDENES where  FECHA='$fechaven'";
                    }
                    else{
                    $query = "SELECT ID, NOMBRE, PRECIO_TOTAL, FECHA from ORDENES where  FECHA=''";}


                    if($result = mysqli_query($conn, $query)){
                         if(mysqli_num_rows($result) > 0){
                              while ($row = mysqli_fetch_array($result)){
                ?>
    <div  class='container'>
    <tr  class='table table-hover text-white'>
        <th><?php echo htmlentities($row['ID']); ?></td>
        <th><?php echo htmlentities($row['NOMBRE']); ?></td>
        <th><?php echo htmlentities($row['PRECIO_TOTAL']); ?></td>
        <th><?php echo htmlentities($row['FECHA']); ?></td>

    </tr>
    </div>

            
            <?php } ?>
				<?php } else { echo "<p align='center'></p>"; }?>
				<?php } else {
        die("Database query failed. ". mysqli_error($conn));
    } ?>
			</tbody>
		</table>
		
    </body>

</html>