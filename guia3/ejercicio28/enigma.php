<?php 
//la cual tendrá la funcionalidad de encriptar/desencriptar los mensajes.
class Enigma
{
    public static function Encriptar($mensaje,$path)
    {
        $aux;
        $len = strlen($mensaje);
        //echo var_dump($mensaje);
        for ($i=0; $i < $len; $i++)//recorro el string por subindices
        {   //echo $mensaje[$i]."<br>";
            $aux[$i] = (ord($mensaje[$i])+200);//tomo el character, lo paso a ascii y le sumo 200
            //echo $aux[$i]."<br>";
        }
        //echo var_dump($mensaje);
        $aux = implode(" ",$aux);
        //echo $aux;
        $escritor = fopen($path,"w");

        if (fwrite($escritor,$aux))
        {
            echo "se guardo con exito<br>";
            return TRUE;
        }
        else
        {
            echo "error<br>";
            return FALSE;
        }
        fclose($escritor);
    }

    public static function Desencriptar($path)
    {
        $auxDese;
        
        $lector = fopen($path,"r");
        
        while (!feof($lector)) 
        {
            $auxLinea = fgets($lector);
            $auxDese = explode(" ",$auxLinea);
        }

    }
}
$men = "asdf";
Enigma::Encriptar($men,"../misArchivos/contrasenia.txt");
?>