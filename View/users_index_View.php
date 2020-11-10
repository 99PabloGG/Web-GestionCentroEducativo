<?php

//Clase : TITULACION_SHOWCURRENT
//Creado el : 26-09-2019
//Creado por: 70ky5e

//Descripcion: Mensaje de Bienvenida

class Index {
//Constructor
	function __construct(){
		$this->render();
	}
//Función que contiene las lineas de codigo que printan la informacion.
	function render(){
	
		include '../View/Header.php';
?>
		<H1 id=title> <span key="Bienvenido" class="translate"></span><?php //['Bienvenido']; ?> </H1>
		<BR><br><br>
		<h3 id=mensaje><span key="Mensaje" class="translate"></span><?php //['Mensaje'];?></h3>
		<img style="width: 100%;height: 100%;" src='../View/img/gestion_usuarios.png'>
<?php
		include '../View/Footer.php';
	}

}

?>