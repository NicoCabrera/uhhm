<?php 
include_once "auto.php";
$autoUno = new auto("Toyota","Blanco");
$autoDos = new auto("Toyota","Negro");

$autoTres = new auto("Fiat","Rojo",15000);
$autoCuatro = new auto("Fiat","Rojo",20000);

$auxFecha = new DateTime("June 15 1999");
$autoCinco = new auto("Renault","Bordo",11000,$auxFecha);

$autoTres->AgregarImpuestos(1500);
$autoCuatro->AgregarImpuestos(1500);
$autoCinco->AgregarImpuestos(1500);

/* Obtener el importe sumado del primer objeto “Auto” más el segundo y mostrar el 
resultado obtenido. */
echo Auto::Add($autoUno,$autoDos);
//echo Auto::Add($autoTres,$autoCuatro);
    if ($autoTres->Equals($autoUno,$autoDos)) 
    {
        echo "<br>los Autos 1 y 2 son de la misma marca<br>";
    } 
    else 
    {
        echo "no son iguales";
    }

    if ($autoTres->Equals($autoUno,$autoCinco)) 
    {
        echo "<br>los Autos 1 y 5 son de la misma marca<br>";
    } 
    else 
    {
        echo "los Autos 1 y 5 no son iguales<br>";
    }
//puedo agregarlos a un array, hacer un foreach y adentro validar con un if si el indice es inpar
Auto::MostrarAuto($autoUno);
Auto::MostrarAuto($autoTres);
Auto::MostrarAuto($autoCinco);
//echo var_dump($autoCinco);
?>