<?php
$host_db="sql313.epizy.com";
$user_db="epiz_33746197";
$pass_db="aU5D8vRrXRrutvA";
$name_db="epiz_33746197_dbweb1";

$conexion = new mysqli($host_db, $user_db, $pass_db,$name_db);

if($conexion -> connect_error){
    echo "<h1>Error en la conexion de la DB</h1>";
}else {

    echo "<h1>Conexion con exito</h1>";
}


?>

