<?php 
 function Verificar($palabra,$max)
{
    $buscar="recuperatorio parcial programacion";
    //strlen cuenta la cantidad de caracteres en un string
    if (strlen($palabra)<=$max) 
    {
        echo "No supera el numero de caracteres<br>";
        
        //primero pongo el string con los caracteres y despues mi palabra (needle)
        //me devuelve la posicion del string en la que encontro la palabra y eso me es inutil para verificar
        //si no la encuentra devuelve FALSE, verifico que no devuelva FALSE
        if (strpos($buscar,$palabra) !== FALSE) 
        {
           //echo "palabra encontrada";
           return 1;
        }
        else
        {
            //echo "no se encontro palabra";
            return 0;
        }
    }
    else
    {
        echo "La palabra supera el numero de caracteres<br>";
    
    }
}
$mistring="recuperatorio";
$mimaximo=20;
$resultado=Verificar($mistring,$mimaximo);
if ($resultado==1) 
{
    echo "palabra encontrada!!!";
    
}
else if($resultado==0)
{
    echo "palabra no encontrada";
}
//Verificar($mistring,$mimaximo);
?>