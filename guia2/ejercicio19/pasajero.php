<?php 
class Pasajero
{
    private $_apellido;
    private $_nombre;
    private $_dni;
    private $_esPlus;

    public function __construct($ape,$nom,$dni,$plus)
    {
        $this->_apellido = $ape;
        $this->_nombre = $nom;
        $this->_dni = $dni;
        $this->_esPlus = $plus;
    }

    public function Equals($p1)
    {
        if ($p1->_dni === $this->_dni) 
        {
            return TRUE;
        }
        else 
        {
            //echo "<br>Los pasajeros no son iguales<br>";
            return FALSE;
        }
    }

    public function GetInfoPasajero()
    {
        $auxStr = /*"\n".*/$this->_apellido."-".$this->_nombre."-".$this->_dni."-".$this->_esPlus;
        return $auxStr;

    }
    //Agregar un método de clase llamado MostrarPasajeroque mostrará los atributos en la página. 
    public static function MostrarPasajero($p)
    {
        echo $p->GetInfoPasajero();
        //echo pasajero::GetInfoPasajero();
    }
}
/* $pasajero1=new pasajero("if","ladsdas",323232,2000);
$pasajero2=new pasajero("if","ladsdas",323232,2000);
$pasajero3=new pasajero("if","ladsdas",3232212,2000);
//$pasajero1->MostrarPasajero();
pasajero::MostrarPasajero($pasajero1);
//pasajero::MostrarPasajero($pasajero1);
echo nl2br($pasajero1->GetInfoPasajero());
if ($pasajero1->Equals($pasajero3)) 
{
    echo "son iguales";
} */

?>