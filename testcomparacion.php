<?php 
class persona
{
    public $nombre;
    public $edad;
    public function __construct($nom,$ed)
    {
        $this->nombre=$nom;
        $this->edad=$ed;
    }
}
/* $p1 = new persona("leo");
$p2 = new persona("Dan");
$p3 = new persona("Noe");
$p4 = new persona("leo");
$p5 = new persona("deni");
$personas=array($p1,$p2,$p3,$p4,$p5); */


$p1 = new persona("leo",22);
$p2 = new persona("Dan",23);
$p3 = new persona("Noe",25);
$p4 = new persona("leon",28);
$p5 = new persona("deni",29);
$personas=array($p1,$p2,$p3,$p4,$p5);
    $p6 = new persona("Leon",28);
    if (Equals($p6,$personas)) 
    {
        echo "se encotnreo";
    }
    function Equals($p,$pers)
    {
        foreach ($pers as $auxAuto) 
        {
            if ($p == $auxAuto) 
            {
                echo "hubo coincidencia con: $p->nombre y $auxAuto->nombre<br>";
                return TRUE;
            }
            else
            {
                echo "no hay coincidencia con: $p->nombre y $auxAuto->nombre<br>";
            }
        }
    }
?>