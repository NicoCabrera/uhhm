<?php 
//require_once "../misArchivos/asas.txt";

/* Generar una aplicación que sea capaz de copiar un archivo de texto 
(su ubicación se ingresará por la página) hacia otro archivo que será creado y alojado en 
./misArchivos/yyyy_mm_dd_hh_ii_ss.txt, dónde yyyy corresponde al año en curso,  
mm al mes, dd al día, hh hora, ii minutos y ss segundos. */
$tiempo = new DateTime('now');
$nombre = $tiempo->format('Y_m_d_H_i_s').".txt";
$directorio = "./misArchivos/";
$archivo = $directorio.$nombre;
if (move_uploaded_file($_FILES["ArchivoASubir"]["tmp_name"],$archivo)) 
{
    echo "El archivo $nombre se a subido con exito<br>";
}
else 
{
    echo "Hubo un error en la subida";
}
?>