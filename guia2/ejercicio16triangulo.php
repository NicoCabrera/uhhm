<?php 
class Rectangulo extends FiguraGeometrica
{
    private $_altura;
    private $_base;
    protected  function CalcularDatos()
    {
        $this->_perimetro=(2*($this->_base+$this->_altura));
        $this->_superficie=($this->_base*$this->_altura);
    }
    public function __construct($l1,$l2)
    {
        $this->_base=$l1;
        $this->_altura=$l2;
        $this->CalcularDatos();
    }

    public function Dibujar()
    {
        $auxStr=NULL;
            for ($i=0; $i<$this->_base ; $i++) 
        { 
            $auxStr=$auxStr.str_repeat("*",$this->_altura);
 
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
?>