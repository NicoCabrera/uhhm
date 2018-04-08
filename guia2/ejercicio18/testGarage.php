<?php 
include_once "../ejercicio17/auto.php";
include_once "garage.php";

/*En testGarage.php, crear autos y un garage. Probar el buen funcionamiento de todos los métodos. */
$autoUno = new auto("Toyota","Blanco");
$autoDos = new auto("Toyota","Negro");

$autoTres = new auto("Fiat","Rojo",15000);
$autoCuatro = new auto("Fiat","Rojo",20000);

$auxFecha = new DateTime("June 15 1999");
$autoCinco = new auto("Renault","Bordo",11000,$auxFecha);

$miGarage = new garage("RI",35);

$miGarage->add($autoUno);
$miGarage->add($autoDos);
$miGarage->add($autoTres);
$miGarage->add($autoCuatro);
$miGarage->add($autoCinco);
$miGarage->MostrarGarage();
// echo var_dump($miGarage)."<br>"; 
 $miGarage->add($autoUno);
 $miGarage->remove($autoCinco);
 //echo var_dump($miGarage); 
 $miGarage->MostrarGarage();
?>