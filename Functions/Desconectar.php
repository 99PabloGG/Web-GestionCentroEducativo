<?php
//Funcion : Desconectar
//Creado el : 22-09-2019
//Creado por: 70ky5e

//Definicion: Acciona el session_destroy para salir de la web y abrir el index.php
//-------------------------------------------------------

session_start();
session_destroy();
header('Location:../index.php');

?>
