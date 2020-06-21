var num1 = "";
var num = 1;
var total = 0;
var cliente = 0;
var  precio = 0;

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
    num1= document.getElementById("botonA2").textContent;
    document.getElementById("tipoArticulo").innerHTML = num1;
    precio= document.getElementById("botonA2").value;
}
function bot3() {
    num1= document.getElementById("botonA3").textContent;
    document.getElementById("tipoArticulo").innerHTML = num1;
    precio= document.getElementById("botonA3").value;
}
function bot4() {
    num1= document.getElementById("botonB1").textContent;
    document.getElementById("tipoArticulo").innerHTML = num1;
    precio= document.getElementById("botonb1").value;
}
function bot5() {
    num1= document.getElementById("botonB2").textContent;
    document.getElementById("tipoArticulo").innerHTML = num1;
    precio= document.getElementById("botonB2").value;
}
function bot6() {
    num1= document.getElementById("botonB3").textContent;
    document.getElementById("tipoArticulo").innerHTML = num1;
    precio= document.getElementById("botonB3").value;
}
function bot7() {
    num1= document.getElementById("botonC1").textContent;
    document.getElementById("tipoArticulo").innerHTML = num1;
    precio= document.getElementById("botonC1").value;
}
function bot8() {
    num1= document.getElementById("botonC2").textContent;
    document.getElementById("tipoArticulo").innerHTML = num1;
    precio= document.getElementById("botonC2").value;
}
function bot9() {
    num1= document.getElementById("botonC3").textContent;
    document.getElementById("tipoArticulo").innerHTML = num1;
    precio= document.getElementById("botonC3").value;
}
function bot10() {
    num1= document.getElementById("botonD1").textContent;
    document.getElementById("tipoArticulo").innerHTML = num1;
    precio= document.getElementById("botonD1").value;
}
function bot11() {
    num1= document.getElementById("botonD2").textContent;
    document.getElementById("tipoArticulo").innerHTML = num1;
    precio= document.getElementById("botonD2").value;
}
function bot12() {
    num1= document.getElementById("botonD3").textContent;
    document.getElementById("tipoArticulo").innerHTML = num1;
    precio= document.getElementById("botonD3").value;
}
function bot13() {
    num1= document.getElementById("botonE1").textContent;
    document.getElementById("tipoArticulo").innerHTML = num1;
    precio= document.getElementById("botonE1").value;
}
function bot14() {
    num1= document.getElementById("botonE2").textContent;
    document.getElementById("tipoArticulo").innerHTML = num1;
    precio= document.getElementById("botonE2").value;
}
function bot15() {
    num1= document.getElementById("botonE3").textContent;
    document.getElementById("tipoArticulo").innerHTML = num1;
    precio= document.getElementById("botonE3").value;
}



function calcularPrecio() {

    //var precio1= precio * num;

    cliente=cliente+1
    total = precio * num;

    agregaRenglon(cliente, num, precio, num1, total);
	
	
	

}

function agregaRenglon(cliente, num, precio1, num1, total) {

    var nombre= document.getElementById("nombreCliente").value;
	
    // Obtiene una referencia a la tabla
    var tableRef = document.getElementById("tablaClientes");
    // Inserta una fila en la tabla, en el índice 0
    var newRow   = tableRef.insertRow(-1);
    //creacion de celdas
    for (var i = 1; i <= 6; i++) {
        switch(i){
            case 1:
                var contenido = cliente;
                break;
            case 2:
                var contenido = nombre;
                break;
            case 3:
                var contenido = num1;
                break;
            case 4:
                var contenido = num;
                break;
            case 5:
                var contenido = precio1;
                break;
            case 6:
                var contenido = total;
                break;
        }
        // Inserta una celda en la fila, en el índice 0
        var newCell  = newRow.insertCell(-1);
        // Añade un nodo de texto a la celda
        if(i>=7){
            newCell.innerHTML =  contenido;
        }else{
            var newText  = document.createTextNode(contenido);
            newCell.appendChild(newText);
        }
    }
	//corregir valores - conversion de datos entre lenguajes
	document.getElementByName("clientejs").innerHTML="<?php 
	$phpvar='"+cliente+"'; 
	echo $phpvar;?>";
	document.getElementByName("cantidadjs").innerHTML="<?php 
	$phpvar='"+num+"'; 
	echo $phpvar;?>";
	document.getElementByName("preciojs").innerHTML="<?php 
	$phpvar='"+precio+"'; 
	echo $phpvar;?>";
	document.getElementByName("tacojs").innerHTML="<?php 
	$phpvar='"+num1+"'; 
	echo $phpvar;?>";
	document.getElementByName("totaljs").innerHTML="<?php 
	$phpvar='"+total+"'; 
	echo $phpvar;?>";
	document.getElementByName("nombrejs").innerHTML="<?php 
	$phpvar='"+nombre+"'; 
	echo $phpvar;?>";
	document.getElementsByName("totaljs").innerHTML="<?php 
	$phpvar='"+total+"'; 
	echo $phpvar;?>";


}

function enviarForm() {
    limpiaElementos()

}