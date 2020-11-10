<?php
//Funcion : CambioIdioma
//Creado el : 22-09-2019
//Creado por: 70ky5e

//Definicion: Esta funcion media el cambio de idioma mediante el acceso a los Strings.
//-------------------------------------------------------
session_start();
$idioma = $_POST['idioma'];
$_SESSION['idioma'] = $idioma;
header('Location:' . $_SERVER["HTTP_REFERER"]);
?>