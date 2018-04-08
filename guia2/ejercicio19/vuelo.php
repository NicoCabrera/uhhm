<?php 
require_once "pasajero.php";
class vuelo extends pasajero
{
    private $_fecha;
    private $_empresa;
    private $_precio;
    private $_listaDePasajeros;
    private $_cantMaxima;

    public function getCantMaxima()
    {
        return $this->_cantMaxima;
    }

    public function __construct($empresa,$precio,$cantidad=0)
    {
        $this->_empresa=$empresa;
        $this->_precio=$precio;
        $this->_cantMaxima=$cantidad;
        $this->_listaDePasajeros=array();
        $this->_fecha= new DateTime("Now");
    }
    
    public function getInfoDelVuelo()
    {
        $auxStr;
        $auxStr =  $this->_fecha->format("d/m/Y")."-".$this->_empresa."-".$this->_precio."-".$this->_cantMaxima;
        
        foreach ($this->_listaDePasajeros as $lt) 
        {
            $auxStr=$auxStr."\n".$lt->GetInfoPasajero();
        }
        return $auxStr;

    }
/* Crear un método de instancia llamado AgregarPasajero, en el caso que no exista en la lista, 
se agregará (utilizar Equals). Además tener en cuenta la capacidad del vuelo. El valor de 
retorno de este método indicará si se agregó o no.  */
    public function AgregarPasajero($p)
    {
        $auxBandera = TRUE;
        foreach ($this->_listaDePasajeros as $lt) 
        {
            //verifico que no este en la lista utilizando equals
            if ($p->Equals($lt)) 
            {
                echo "El pasajero ya existe<br>";
                //si ya existe retorno un false, indico por pantalla y rompo la estructura
                $auxBandera = FALSE;
                //break;
            }

        }
        //aca verifico que el pasajero no exista (bandera TRUE) y que no sobrepase la cant maxima
        if ($auxBandera == TRUE && $this->_cantMaxima>count($this->_listaDePasajeros)) 
        {
            array_push($this->_listaDePasajeros,$p);
            echo "se agrego pasajero<br>";
        }
        else if($this->_cantMaxima<=count($this->_listaDePasajeros))
        {
            echo "no se agreago debido a falta de cupos<br>";
            $auxBandera = FALSE;
        }
        //retorno TRUE si se agrego, FALSE si no se agrego
        return $auxBandera;
    }
/*Agregar un método de instancia llamado MostrarVuelo, que mostrará la información de un vuelo.*/
    public function MostrarVuelo()
    {
        echo $this->getInfoDelVuelo();
    }
/* Crear el método de clase “Add” para que permita sumar dos vuelos. El valor devuelto deberá ser de tipo numérico, 
y representará el valor recaudado por los vuelos. Tener en cuenta que si un pasajero es Plus, 
se le hará un descuento del 20% en el precio del vuelo.  */
    public static function Add($v1,$v2)
    {
        $auxDoub=0;
        $auxNumPlus=0;
        $auxDoub = (count($v1->_listaDePasajeros)*$v1->_precio)+(count($v1->_listaDePasajeros)*$v1->_precio);
        //combino los dos arrays para poder contar los miembros plus mas facilmente
        //$auxArray = array_merge($v1->_listaDePasajeros,$v2->_listaDePasajeros);
        
/*         foreach ($auxArray as $per) 
        {
            if ($per->_esPlus == TRUE) 
            {
                $auxNumPlus++;
            }
        } */
        return $auxDoub;
    }

}
 $mivuelo = new vuelo("AA",200,3);
//echo var_dump($mivuelo);
$pasajero1=new pasajero("p1","ladsdas",323232,TRUE);
$pasajero2=new pasajero("p2f","ladsdas",353432,FALSE);
$pasajero3=new pasajero("p3","ladsdas",3232212,FALSE);
$pasajero4=new pasajero("p4","ladsdas",54334232212,TRUE);
$mivuelo->AgregarPasajero($pasajero1);
$mivuelo->AgregarPasajero($pasajero3);
$mivuelo->AgregarPasajero($pasajero1);
$mivuelo->AgregarPasajero($pasajero2);
$mivuelo->AgregarPasajero($pasajero4);
//echo var_dump($mivuelo); 
//echo $mivuelo->getInfoDelVuelo();
//echo nl2br($mivuelo->getInfoDelVuelo());
$mivuelo2 = new vuelo("BB",300,3);
$mivuelo2->AgregarPasajero($pasajero1);
$mivuelo2->AgregarPasajero($pasajero3);
//echo vuelo::Add($mivuelo,$mivuelo2);
?>