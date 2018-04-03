<?php 
/* 
La clase 
FiguraGeometrica
 posee: todos sus atributos protegidos, un constructor por defecto, 
un método getter y setter para el atributo 
_color
, un método virtual (
ToString
) y dos 
métodos abstractos: 
Dibujar
 (público) y 
CalcularDatos
 (protegido). 
CalcularDatos será invocado en el constructor de la clase derivada que corresponda, su 
funcionalidad será la de inicializar los atributos _superficie y _perimetro. 
Dibujar, retornará un string (con el color que corresponda) formando la figura geométrica del 
objeto que lo invoque (retornar una serie de asteriscos que modele el objeto).  
*/
abstract class FiguraGeometrica 
{
    private $_color;
    protected $_perimetro;
    protected $_superficie;
    function getColor()
    {
        return $this->_color;
    }
    function setColor($valor)
    {
        $this->_color=$valor;
    }
    function __construct()
    {
        //$this->_color=$color;
    }
    public abstract function Dibujar();
    protected  abstract function CalcularDatos();
    public function tostring()
    {
        $strAux;
        $strAux=$this->_color."-".$this->_perimetro."-".$this->_superficie;
        return $strAux;
    }
 
}
class Rectangulo extends FiguraGeometrica
{
    private $_ladoDos;
    private $_ladoUno;
    protected  function CalcularDatos()
    {
        $this->_perimetro=(2*($this->_ladoUno+$this->_ladoDos));
        $this->_superficie=($this->_ladoUno*$this->_ladoDos);
    }
    public function __construct($l1,$l2)
    {
        $this->_ladoUno=$l1;
        $this->_ladoDos=$l2;
        $this->CalcularDatos();
    }

    public function Dibujar()
    {
        $auxStr=NULL;
            for ($i=0; $i<$this->_ladoUno ; $i++) 
        { 
            $auxStr=$auxStr.str_repeat("*",$this->_ladoDos);
 
            $auxStr= $auxStr."<br>";
        } 
        return $auxStr;

    }

    public function tostring()
    {
        $color=parent::getColor();
    echo '<i style="color:'.$color.';">'.$this->Dibujar().'</i> ';
    }
}

$rectangulo=new Rectangulo(3,4);
$rectangulo->setColor("red");
$rectangulo->tostring();
?>