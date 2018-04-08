<?php 

require_once "../ejercicio17/auto.php";
class Garage
{
    private $_razonSocial;
    private $_precioPorHora; 
    private $_Autos;

    /*Realizar un constructor capaz de poder instanciar objetos pasándole como parámetros:   
    i.   La razón social. 
    ii.  La razón social, y el precio por hora. */
    public function __construct($rs,$precio=0)
    {
        $this->_razonSocial=$rs;
        $this->_precioPorHora=$precio;
        //recordar que hay que inicializar el array sino queda en NULL/vacio y da problemas
        $this->_Autos=array();
    }
    /*Realizar un método de instancia llamado “MostrarGarage”, que no recibirá parámetros y 
    que mostrará todos los atributos del objeto. */
    public function MostrarGarage()
    {
        echo "Razon Social: $this->_razonSocial <br> Precio: $this->_precioPorHora <br>";
        foreach ($this->_Autos as $value) 
        {
            Auto::MostrarAuto($value);
        }
    }

    public function Equals($auto)
    {
        foreach ($this->_Autos as $auxAuto) 
        {//comparo cada auto dentro de garage con el auto ingresado
            if ($auto == $auxAuto) 
            {
                return TRUE;
            }
        }
    }

    public function Add($autoADD)
    {
        $bandera=$this->Equals($autoADD);

        if ($bandera != TRUE) 
        {
            array_push($this->_Autos,$autoADD);
        }
        else 
        {
            echo "<br>No se pudo agregar el Auto porque ya existe<br>";
        }
    }
    public function Remove($autoRem)
    {
        $bandera=$this->Equals($autoRem);

        if ($bandera == TRUE) 
        {
            $aux=array_search($autoRem, $this->_Autos);
            unset($this->_Autos[$aux]);
        }
        else 
        {
            echo "<br>No se pudo remover el Auto<br>";
        }
    }
}


?>