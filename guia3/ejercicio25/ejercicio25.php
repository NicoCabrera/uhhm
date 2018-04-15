<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 25 -  Contar Letras</title>
</head>
<body>
    
</body>
</html>
<?php 
/* Se quiere realizar una aplicación que lea un archivo (../misArchivos/palabras.txt) y 
ofrezca estadísticas sobre cuantas palabras de 1, 2, 3, 4 y más de 4 letras hay en el texto. 
No tener en cuenta los espacios en blanco ni saltos de líneas como palabras.
Los resultados mostrarlos en una tabla. */
class ContadorDePalabras
{
    public $auxUno = 0;
    public $auxDos = 0;
    public $auxTres = 0;
    public $auxCuatro = 0;
    public $auxCuatroMas = 0;
    public $listaDePalabras = array();
    public  function Leer()
    {
        $this->listaDePalabras = array();
        $archivo = fopen("../misArchivos/palabras.txt", "r"); //abre el archivo en modo lectura
        while (!feof($archivo)) 
        {
            $renglon = fgets($archivo);//traigo el renglon actual
            $palabra = explode(" ",$renglon);//le quito los espacios vacios entre palabras
            $palabra = trim($palabra[0]);//le quito cualquier espacio vacio que pueda haberle quedado

            if ($palabra[0]!="") //verifico que no este vacio
            {
                $this->listaDePalabras[] = $palabra;//lo guardo en un array
            }
        }
        fclose($archivo);
        return $this->listaDePalabras;

    }
    public function contar($lista)
    {
        $auxLen = 0;

        foreach ($lista as $key => $value) 
        {
            $auxLen = strlen($value);
            //echo $auxLen."<br>";
            switch ($auxLen) 
            {
                case 1:
                    $this->auxUno++;
                    //echo "se agrego 1<br>";
                    break;
                    
                case 2:
                    $this->auxDos++;
                    //echo "se agrego 2<br>";
                    break;

                case 3:
                    $this->auxTres++;
                    //echo "se agrego 3<br>";
                    break;

                case 4:
                    $this->auxCuatro++;
                    //echo "se agrego 4<br>";
                    break;   

                default:
                    $this->auxCuatroMas++;
                    break;
            }
        }
        $Contados=array("uno"=>$this->auxUno,"dos"=>$this->auxDos,"tres"=>$this->auxTres,"cuatro"=>$this->auxCuatro,"mas"=>$this->auxCuatroMas);
        return $Contados;
    }

    public function ConstruirTablas()
    {
        $rows;
        $cols;
        echo "<table border='1'>";
        echo "<tr>";
        echo "<th>1 Letra</th>";
        echo "<th>2 Letras</th>";
        echo "<th>3 Letras</th>"; 
        echo  "<th>4 Letras</th>"; 
        echo "<th>+4 Letras</th>";
        echo "</tr>";
         echo "<tr>
        <td>$this->auxUno</td>
        <td>$this->auxDos</td>
        <td>$this->auxTres</td>
        <td>$this->auxCuatro</td>
        <td>$this->auxCuatroMas</td>
        </tr>"; 
        echo "</table>";

    }
    public function ConstruirTablas2()
    {
      
        $rows = 1; // define number of rows
        $cols = 5;// define number of columns

        echo "<table border='1'>";
        echo "<tr>
         <th>1 Letra</th>
         <th>2 Letras</th>
         <th>3 Letras</th> 
          <th>4 Letras</th> 
         <th>+4 Letras</th>
         </tr>";
        for($tr=1;$tr<=$rows;$tr++)
        {

            echo "<tr>";
                for($td=1;$td<=$cols;$td++){
                    echo "<td>row: ".$tr." column: ".$td."</td>";
                }
            echo "</tr>";
        }

        echo "</table>";

            }
        }

$mi = new ContadorDePalabras();
echo var_dump($mi->Leer());
echo var_dump($mi->contar($mi->Leer()));
$mi->ConstruirTablas();
/* $mi->ConstruirTablas2(); */
?>