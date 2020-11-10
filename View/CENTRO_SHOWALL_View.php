<?php
 
//Clase : CENTRO_SHOWALL
//Creado el : 29-09-2019
//Creado por: 70ky5e

//Descripción: Encargada de mostrar la información al usuario, de forma gráfica y legible, de la funcion SHOWALL.
//-------------------------------------------------------

	class CENTRO_SHOWALL{

//Constructor
		function __construct($lista,$datos){
			$this->datos = $datos;
			$this->lista = $lista;	
			$this->render();
		}
//Función que contiene las lineas de codigo que printan la informacion.
		function render(){

			include '../View/Header.php'; //header necesita los strings
?>
			<h1><span key="SHOWALL" class="translate"></span><?php //['SHOWALL']; ?></h1>	
			<br>
			<br>
				<a id='btn' href='../Controller/CENTRO_Controller.php?action=ADD'><img id=icon src='../View/Icons/ADD.png'></a>
				<tab>
				<a id='btn'href='../Controller/CENTRO_Controller.php?action=SEARCH'><img id=icon src='../View/Icons/SEARCH.png'></a>
			<br><br>
		<table>
			<tr>
<?php
		foreach ($this->lista as $titulo) {
?>
				<th key="<?php echo $titulo; ?>" class="translate">&nbsp;&nbsp;&nbsp;&nbsp;</th>
<?php
		}
?>
			</tr>
<?php
		foreach($this->datos as $fila)
		{
?>
			<tr>
<?php
			foreach ($this->lista as $columna) {			
?>
				<td><?php echo $fila[$columna]; ?>&nbsp;&nbsp;&nbsp;&nbsp;</td>
<?php
			}
?>
				<td>
					<a id='btn' href='
						../Controller/CENTRO_Controller.php?action=EDIT&CODCENTRO=
							<?php echo $fila['CODCENTRO']; ?>
							'> <img id=icon src='../View/Icons/EDIT.png'> </a>
				</td>
				<td>
					<a id='btn'href='
						../Controller/CENTRO_Controller.php?action=DELETE&CODCENTRO=
							<?php echo $fila['CODCENTRO']; ?>
							'> <img id=icon src='../View/Icons/DELETE.png'> </a>
				</td>
				<td>
					<a id='btn'href='
						../Controller/CENTRO_Controller.php?action=SHOWCURRENT&CODCENTRO=
							<?php echo $fila['CODCENTRO']; ?>
							'> <img id=icon src='../View/Icons/SHOWCURRENT.png'> </a>
				</td>
			</tr>

<?php

		}
?>


		</table>		
		
					
<?php
			include '../View/Footer.php';
		} //fin metodo render

	} //fin REGISTER

?>

	