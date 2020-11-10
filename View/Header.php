<?php
//Header
//Creado el : 26-09-2019
//Creado por: 70ky5e

//Descripcion: Cabecera
//-------------------------------------------------------
	include_once '../Functions/Authentication.php';
?>
<html>
<head>
	<script src="../View/vendor/jquery/jquery.min.js"></script>
	<?php include '../View/js/languages.js';?>
	<script type="text/javascript" src="../View/js/validaciones.js"></script>
	<div id="header">
	<title key="Ejemplo arquitectura IU" class="translate"><?php //Ejemplo arquitectura IU?>
	</title>
	<meta charset="UTF-8">
	<title key="Ejemplo arquitectura IU" class="translate"><?php //['Ejemplo arquitectura IU']; ?>
	</title>
  	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  	<script>
 	 $( function() {
   	 	$( "#datepicker" ).datepicker();
 	 } );
  </script>
		
	 
	<link rel="stylesheet" type="text/css" href="../View/css/css.css" media="screen" />
</head>
<body>
		<div id="modal" style="display:none">
	  		<div id="contenido-interno">
	  			<div id="aviso"><img src="../View/Icons/ERROR.png" name="aviso"/></div>
	  			<div id="mensajeError"></div>
				<a id="cerrar" href="#" onclick="cerrarModal();">
		       		<img style="cursor: pointer" alt="" src="../View/Icons/BACK.png" width="25"/>
				</a>
			</div>
		</div>
<header>
	<p>
		<h1 style="color:#f5f0e3">
			<a href='../Controller/Index_Controller.php'> <span key="Portal de Gestión" class="translate"></span><?php //['Portal de Gestión']; ?></a>
		</h1>
	</p>
	<div id="idiomas">
		<form id="form1" name='form1' action="../Functions/CambioIdioma.php" method="post">
			<span key="idioma" class="translate"></span><?php //['idioma']; ?><br>
			<button id="SPANISH" class ="lang"><img src='../View/Icons/SPANISH.png'></button>
			<button id="GALLAECIAN" class ="lang"><img src='../View/Icons/GALLAECIAN.png'></button>
			<button id="ENGLISH" class ="lang"><img src='../View/Icons/ENGLISH.png'></button>
		</form>
	</div>
	<br>
<?php if (IsAuthenticated()){ ?>
<div id="username">
	<span key="Usuario" class="translate"></span> <?php echo $_SESSION['login'];?>		
		<a href='../Functions/Desconectar.php'><img src='../View/Icons/LOGOUT.png'>
		</a>
</div>
<?php
	}
?>
<div id = 'menu'>
<?php
	//session_start();
	if (IsAuthenticated()){
		include '../View/users_menuLateral.php';
	}
?>
</header>
<article>
