<?php 
class Auto
{
    private $_color;  //(String)  
    private $_precio; //(Double) 
    private $_marca;  //(String). 
    private $_fecha;  //(DateTime) 

    public function __construct($marca,$color,$precio=0,$fecha=NULL)
    {

        $this->_marca = $marca;
        $this->_color = $color;
        $this->_precio = $precio;
        $this->_fecha = $fecha;
    }
    public function AgregarImpuestos($doble)
    {
        $this->_precio = $this->_precio+$doble;
    }
    public static function MostrarAuto($Auto)
    {
        //$aux=$Auto->_fecha->format("D-M-Y");
        if (isset($Auto->_fecha)) 
        {
            echo $Auto->_marca."-".$Auto->_color."-".$Auto->_precio."-".$Auto->_fecha->format("d/m/Y")."<br>";
        }
        else 
        {
            echo $Auto->_marca."-".$Auto->_color."-".$Auto->_precio."<br>";
        }
        
    }
    /* Crear el método de instancia “Equals” que permita comparar dos objetos de tipo “Auto”. 
    Sólo devolverá TRUE si ambos “Autos” son de la misma marca.  */
    public function Equals($a1,$a2)
    {
        if ($a1->_marca === $a2->_marca) 
        {
            return TRUE;
        }
        else 
        {
            return FALSE;
        }
    }
    /* Crear un método de clase, llamado “Add” que permita sumar dos objetos “Auto” 
    (sólo si son de la misma marca, y del mismo color, de lo contrario informarlo)
     y que retorne un Double con la suma de los precios o cero si no se pudo realizar la operación. 
     Ejemplo: $importeDouble = Auto::Add($autoUno, $autoDos);  */
     public static function Add($a1,$a2)
     {  //Compruebo que el precio este seteado en ambos
         //if (isset($a1->_precio) && isset($a2->_precio)) 
         if ($a1->_precio!=0 && $a2->_precio!=0) 
         {//me fijo que la marca y el color de ambos ajutos sean iguales
            if ((Auto::Equals($a1,$a2) == TRUE) && $a1->_color == $a2->_color ) 
            {
               return $a1->_precio+$a2->_precio;
            }
            else
            { 
                return 0;
            }
         }
         else
         {
             echo "<br>uno de los precios no fue seteado<br>";
         }
     }

}
/* $hora = new DateTime("now");
$hora2 = new DateTime("may 12 1990");
$miauto = new Auto("fiat","blanco",200000,$hora);
$miauto2 = new Auto("fiat","blanco",120000,$hora2); */

//echo var_dump($miauto);
/* Auto::MostrarAuto($miauto);
 *//* if ($miauto->Equals($miauto,$miauto2)) 
{
    echo "<br>las marcas son iguales";
}  */
/* $precion= $miauto->Add($miauto,$miauto2);
echo "<br>".$precion; */
?>