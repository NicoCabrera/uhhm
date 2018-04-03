<?php 
class Auto
{
    private $_color;  //(String)  
    private $_precio; //(Double) 
    private $_marca;  //(String). 
    private $_fecha;  //(DateTime) 

/*     public function __construct($marca,$color)
    {
        $this->_marca=$marca;
        $this->_color=$color;
    }
    public function __construct($marca,$color,$precio)
    {
        
        $this->_marca=$marca;
        $this->_color=$color;
        $this->_precio=$precio;
    } */
    public function __construct($marca,$color,$precio=0,$fecha=NULL)
    {

        $this->_marca=$marca;
        $this->_color=$color;
        $this->_precio=$precio;
        $this->_fecha=$fecha;
    }
    public function AgregarImpuestos($doble)
    {
        $this->_precio=$this->_precio+$doble;
    }
    public static function MostrarAuto($Auto)
    {
        //$aux=$Auto->_fecha->format("D-M-Y");
        echo $Auto->_marca."-".$Auto->_color."-".$Auto->_precio."-".$Auto->_fecha->format("d/m/Y");;
    }
}
$hora=new DateTime("now");
$hora2=new DateTime("may 12 1990");
$miauto=new Auto("fiat","blanco",200000,$hora);
$miauto=new Auto("toyota","rojo",2222,$hora2);

echo var_dump($miauto);
Auto::MostrarAuto($miauto);
?>