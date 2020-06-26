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
       
		<script>
			var num1 = "";
			var num = 1;
			var total = 0;
			var cliente = 0;
			var precio = 0;
			var num2=0;

function limpiaElementos(){
    document.getElementById("nombreCliente").value = "";
    location.reload();
}

function Agregar_Articulo() {
    document.getElementById("numArticulo").innerHTML = (num = (num +1));
}
function Quitar_Articulo() {
    if (num > 1){
        document.getElementById("numArticulo").innerHTML = (num = (num -1));
    }
    else{
        document.getElementById("numArticulo").innerHTML = 1;
    }
}



function bot1() {
    num1= document.getElementById("botonA1").textContent;
    document.getElementById("tipoArticulo").innerHTML = num1;
    precio= document.getElementById("botonA1").value;

}
function bot2() {
    num1= document.getElementById("botonB1").textContent;
    document.getElementById("tipoArticulo").innerHTML = num1;
    precio= document.getElementById("botonB1").value;
}
function bot3() {

    num1= document.getElementById("botonC1").textContent;
    document.getElementById("tipoArticulo").innerHTML = num1;
    precio= document.getElementById("botonC1").value;
}
function bot4() {

    num1= document.getElementById("botonD1").textContent;
    document.getElementById("tipoArticulo").innerHTML = num1;
    precio= document.getElementById("botonD1").value;
}
function bot5() {


    num1= document.getElementById("botonE1").textContent;
    document.getElementById("tipoArticulo").innerHTML = num1;
    precio= document.getElementById("botonE1").value;
}
function bot6() {

	    num1= document.getElementById("botonA2").textContent;
    document.getElementById("tipoArticulo").innerHTML = num1;
    precio= document.getElementById("botonA2").value;
}
function bot7() {

	num1= document.getElementById("botonB2").textContent;
    document.getElementById("tipoArticulo").innerHTML = num1;
    precio= document.getElementById("botonB2").value;
}
function bot8() {
    num1= document.getElementById("botonC2").textContent;
    document.getElementById("tipoArticulo").innerHTML = num1;
    precio= document.getElementById("botonC2").value;
}
function bot9() {

    num1= document.getElementById("botonD2").textContent;
    document.getElementById("tipoArticulo").innerHTML = num1;
    precio= document.getElementById("botonD2").value;
}
function bot10() {

	num1= document.getElementById("botonE2").textContent;
    document.getElementById("tipoArticulo").innerHTML = num1;
    precio= document.getElementById("botonE2").value;
}
function bot11() {

    num1= document.getElementById("botonA3").textContent;
    document.getElementById("tipoArticulo").innerHTML = num1;
    precio= document.getElementById("botonA3").value;
}
function bot12() {

	    num1= document.getElementById("botonB3").textContent;
    document.getElementById("tipoArticulo").innerHTML = num1;
    precio= document.getElementById("botonB3").value;
}
function bot13() {

    num1= document.getElementById("botonC3").textContent;
    document.getElementById("tipoArticulo").innerHTML = num1;
    precio= document.getElementById("botonC3").value;
}
function bot14() {

	    num1= document.getElementById("botonD3").textContent;
    document.getElementById("tipoArticulo").innerHTML = num1;
    precio= document.getElementById("botonD3").value;
}
function bot15() {
    num1= document.getElementById("botonE3").textContent;
    document.getElementById("tipoArticulo").innerHTML = num1;
    precio= document.getElementById("botonE3").value;
}



function calcularPrecio() {

    var precio1= precio * num;
	
	num2=num2+num;
    total = total + precio1;
     var nombre= document.getElementById("nombreCliente").value;
    agregaRenglon( num, precio1, num1, total,num2);


}


function enviarf() {
    var precio1= precio * num;

    
     var nombre= document.getElementById("nombreCliente").value;
	jstophp(nombre);
}


function agregaRenglon( num, precio1, num1, total, num2) {

    var nombre= document.getElementById("nombreCliente").value;


    var tableRef = document.getElementById("tablaClientes");

    var newRow   = tableRef.insertRow(-1);

    for (var i = 1; i <= 6; i++) {
        switch(i){
            case 1:
                var contenido = nombre;
                break;
            case 2:
                var contenido = num1;
                break;
            case 3:
                var contenido = num;
                break;
			case 4:
                var contenido = num2;
                break;
            case 5:
                var contenido = precio1;
                break;
            case 6:
                var contenido = total;
                break;
		
				
        }
        var newCell  = newRow.insertCell(-1);
        if(i>=7){
            newCell.innerHTML =  contenido;
        }else{
            var newText  = document.createTextNode(contenido);
            newCell.appendChild(newText);
        }
    }
}


function jstophp(nombre){
	document.formulario.nombrejs.value=nombre;
	document.formulario.cantidadjs.value=num2;
	document.formulario.totaljs.value=total;
	document.forms["formulario"].submit();

}

var element = document.getElementById("clientejs");
element.value = $PrecioA1;
element.formulario.submit();
</script>


    </head>

    <body class='Fondo'>
        <?php
        $PrecioA1 = 7;
        Static $PrecioA2 = 7;
        Static $PrecioA3 = 7;
        Static $PrecioB1 = 7;
        Static $PrecioB2 = 10;
        Static $PrecioB3 = 7;
        Static $PrecioC1 = 7;
        Static $PrecioC2 = 7;
        Static $PrecioC3 = 7;
        Static $PrecioD1 = 15;
        Static $PrecioD2 = 15;
        Static $PrecioD3 = 7;
        Static $PrecioE1 = 7;
        Static $PrecioE2 = 7;
        Static $PrecioE3 = 7;
        Static $DescripcionA1 = "Pastor";
        Static $DescripcionA2 = "Bistec";
        Static $DescripcionA3 = "Ilegal";
        Static $DescripcionB1 = "Carne Asada";
        Static $DescripcionB2 = "Carnitas";
        Static $DescripcionB3 = "Barbacoa";
        Static $DescripcionC1 = "Suadero";
        Static $DescripcionC2 = "Cabeza";
        Static $DescripcionC3 = "Cecina";
        Static $DescripcionD1 = "Arrachera";
        Static $DescripcionD2 = "Envenenados";
        Static $DescripcionD3 = "Cochinita pibil";
        Static $DescripcionE1 = "Alambre";
        Static $DescripcionE2 = "Discada";
        Static $DescripcionE3 = "Adobada";

        if ($_POST != null) {
            extract($_POST);
            if ($CodigoP == "A1") {
                $PrecioA1 = $precioU;
                $DescripcionA1 = $descripcion;
            }
            if ($CodigoP == "A2") {
                $PrecioA2 = $precioU;
                $DescripcionA2 = $descripcion;
            } elseif ($CodigoP == "A3") {
                $PrecioA3 = $precioU;
                $DescripcionA3 = $descripcion;
            } elseif ($CodigoP == "B1") {
                $PrecioB1 = $precioU;
                $DescripcionB1 = $descripcion;
            } elseif ($CodigoP == "B2") {
                $PrecioB2 = $precioU;
                $DescripcionB2 = $descripcion;
            } elseif ($CodigoP == "B3") {
                $PrecioB3 = $precioU;
                $DescripcionB3 = $descripcion;
            } elseif ($CodigoP == "C1") {
                $PrecioC1 = $precioU;
                $DescripcionC1 = $descripcion;
            } elseif ($CodigoP == "C2") {
                $PrecioC2 = $precioU;
                $DescripcionC2 = $descripcion;
            } elseif ($CodigoP == "C3") {
                $PrecioC3 = $precioU;
                $DescripcionC3 = $descripcion;
            } elseif ($CodigoP == "D1") {
                $PrecioD1 = $precioU;
                $DescripcionD1 = $descripcion;
            } elseif ($CodigoP == "D2") {
                $PrecioD2 = $precioU;
                $DescripcionD2 = $descripcion;
            } elseif ($CodigoP == "D3") {
                $PrecioD3 = $precioU;
                $DescripcionD3 = $descripcion;
            } elseif ($CodigoP == "E1") {
                $PrecioE1 = $precioU;
                $DescripcionE1 = $descripcion;
            } elseif ($CodigoP == "E2") {
                $PrecioE2 = $precioU;
                $DescripcionE2 = $descripcion;
            } elseif ($CodigoP == "E3") {
                $PrecioE3 = $precioU;
                $DescripcionE3 = $descripcion;
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
                <ul class='nav nav-tabs justify-content-end text-white '>
                    <li class='nav-item'>
                        <a class='nav-link active' href='PaginaCobro.php'>Cobro</a>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link' href='PaginaRegArticulos.php'>Registro Artículos</a>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link' href='ListaVentas.php'>Lista Ventas</a>
                    </li>
                </ul>
            </div>
        </div>


        <!--Contenido-->

        <div name="registroClientes" class='text-white form1'>

            <legend>Página de Cóbro</legend>
            <label>Nombre</label>
            <input id='nombreCliente' type='text' name='nombreCliente' required>

            <label>Tipo de taco:</label>
            <div class='buttons' id='buttons'>
                <p id="tipoArticulo" >Artículo</p>
                <button id='botonA1' name = 'botonA1' class='btn-hover color-1' onclick='bot1()' value=<?php echo $PrecioA1 ?> > <?php echo 'A1-' . $DescripcionA1 . ' $' . $PrecioA1 . '.00' ?></button>
                <button id='botonB1' name = 'botonB1' class='btn-hover color-2' onclick='bot2()' value=<?php echo $PrecioA2 ?> ><?php echo 'B1-' . $DescripcionA2 . ' $' . $PrecioA2 . '.00' ?></button>
                <button id='botonC1' name = 'botonC1' class='btn-hover color-3' onclick='bot3()' value=<?php echo $PrecioA3 ?> ><?php echo 'C1-' . $DescripcionA3 . ' $' . $PrecioA3 . '.00' ?></button>
                <button id='botonD1' name = 'botonD1' class='btn-hover color-5' onclick='bot4()' value=<?php echo $PrecioB1 ?> ><?php echo 'D1-' . $DescripcionB1 . ' $' . $PrecioB1 . '.00' ?></button>
                <button id='botonE1' name = 'botonE1' class='btn-hover color-6' onclick='bot5()' value=<?php echo $PrecioB2 ?> ><?php echo 'E1-' . $DescripcionB2 . ' $' . $PrecioB2 . '.00' ?></button>
                <button id='botonA2' name = 'botonA2' class='btn-hover color-4' onclick='bot6()' value=<?php echo $PrecioB3 ?> ><?php echo 'A2-' . $DescripcionB3 . ' $' . $PrecioB3 . '.00' ?></button>
                <button id='botonB2' name = 'botonB2' class='btn-hover color-7' onclick='bot7()' value=<?php echo $PrecioC1 ?> ><?php echo 'B2-' . $DescripcionC1 . ' $' . $PrecioC1 . '.00' ?></button>
                <button id='botonC2' name = 'botonC2' class='btn-hover color-9' onclick='bot8()' value=<?php echo $PrecioC2 ?> ><?php echo 'C2-' . $DescripcionC2 . ' $' . $PrecioC2 . '.00' ?></button>
                <button id='botonD2' name = 'botonD2' class='btn-hover color-10'onclick='bot9()' value=<?php echo $PrecioC3 ?> ><?php echo 'D2-' . $DescripcionC3 . ' $' . $PrecioC3 . '.00' ?></button>
                <button id='botonE2' name = 'botonE2' class='btn-hover color-11'onclick='bot10()' value=<?php echo $PrecioD1 ?> ><?php echo 'E2-' . $DescripcionD1 . ' $' . $PrecioD1 . '.00' ?></button>
                <button id='botonA3' name = 'botonA3' class='btn-hover color-1' onclick='bot11()' value=<?php echo $PrecioD2 ?> ><?php echo 'A3-' . $DescripcionD2 . ' $' . $PrecioD2 . '.00' ?></button>
                <button id='botonB3' name = 'botonB3' class='btn-hover color-2' onclick='bot12()'value=<?php echo $PrecioD3 ?> ><?php echo 'B3-' . $DescripcionD3 . ' $' . $PrecioD3 . '.00' ?></button>
                <button id='botonC3' name = 'botonC3' class='btn-hover color-3' onclick='bot13()' value=<?php echo $PrecioE1 ?> ><?php echo 'C3-' . $DescripcionE1 . ' $' . $PrecioE1 . '.00' ?></button>
                <button id='botonD3' name = 'botonD3' class='btn-hover color-6' onclick='bot14()' value=<?php echo $PrecioE2 ?> ><?php echo 'D3-' . $DescripcionE2 . ' $' . $PrecioE2 . '.00' ?></button>
                <button id='botonE3' name = 'botonE3' class='btn-hover color-7' onclick='bot15()' value=<?php echo $PrecioE3 ?> ><?php echo 'E3-' . $DescripcionE3 . ' $' . $PrecioE3 . '.00' ?></button>
            </div>

            <label>Numero de tacos:</label>
            <div class='buttons'>
                <p id="numArticulo" >1</p>
                <button id='agregarArt' name='agregarArt' class='btn-hover color-1' onclick='Quitar_Articulo()'>Quitar</button>
                <button id='quitarArt' name='quitarArt' class='btn-hover color-2' onclick='Agregar_Articulo()'>Agregar</button>
            </div>
            <button id='enviarCliente' name='enviarCliente' class='btn-hover color-8' onclick='calcularPrecio()'>Añadir</button>

        </div>

        <div class='container'>
            <table id='tablaClientes' class='table table-hover text-white'>
                <tr>
                    <th>Nombre</th>
                    <th>Taco</th>
                    <th>Cantidad Por Orden</th>
					<th>Cantidad Total</th>
                    <th>Precio</th>
                    <th>Total</th>
                </tr>
            </table>
        </div>
		
        <div class='form1' >
			<form id="formulario" name="formulario" method="get" action="envio.php" >
				<input type="hidden" id="clientejs"  name="clientejs" value="" />
				<input type="hidden" id="nombrejs"  name="nombrejs" value="" />
				<input type="hidden" id="tacojs"  name="tacojs" value="" />
				<input type="hidden" id="cantidadjs"  name="cantidadjs" value="" />
				<input type="hidden" id="preciojs"  name="preciojs" value="" />
				<input type="hidden" id="totaljs"  name="totaljs" value="" />
            	<button href="#"  class='btn-hover color-8' onClick="enviarf()" >Finalizar</button>

			</form>
        </div>
		

    </body>

</html>