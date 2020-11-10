<?php
//Clase : PROFESOR_Model
//Creado el : 27-09-2017
//Creado por: 70ky5e

//Descripción: Contiene las clases y métodos que se comunican directamente con la base de datos.
//-------------------------------------------------------

class PROFESOR_Model {

	var $DNI;//variable que guarda el DNI del profesor
	var $NOMBREPROFESOR;//variable que guarda el nombre del profesor
	var $APELLIDOSPROFESOR;//variable que guarda los apellidos del profesor
	var $AREAPROFESOR;//variable que guarda el área del profesor
	var $DEPARTAMENTOPROFESOR;//variable que guarda el departamento al que pertenece el profesor
	var $mysqli;//variable que guarda los valores de la base de datos



//Constructor de la clase
//

function __construct($DNI,$NOMBREPROFESOR,$APELLIDOSPROFESOR,$AREAPROFESOR,$DEPARTAMENTOPROFESOR){
	$this->DNI = $DNI;
	$this->NOMBREPROFESOR = $NOMBREPROFESOR;
	$this->APELLIDOSPROFESOR = $APELLIDOSPROFESOR;
	$this->AREAPROFESOR = $AREAPROFESOR;
	$this->DEPARTAMENTOPROFESOR =$DEPARTAMENTOPROFESOR;
	
	$this->erroresdatos = array(); 

	//$this->Comprobar_atributos();

	include_once '../Model/Access_DB.php';
	$this->mysqli = ConnectDB();
}

function Comprobar_atributos()
{
	//realizamos la comprobacion
	if ($this->Comprobar_DNI() &
		$this->Comprobar_nombreprofesor() &
		$this->Comprobar_apellidosprofesor() &
		$this->Comprobar_areaprofesor() &
		$this->Comprobar_departamentoprofesor()
		)
	{
		return true;
	}
	//si no
	else
		{
			return $this->erroresdatos;
		}
}

function Comprobar_DNI()
{
	$correcto = true;

	//realizamos la comprobacion
	if (strlen($this->DNI)!=9)
	{		
		$error = array();
		
		//guardamos el mensaje de error
		array_push($error, "DNI");
		//guardamos el mensaje de error
		array_push($error, "00011");
		//guardamos el mensaje de error
		array_push($error, "Dni no válido");

		//guardamos el mensaje de error
		array_push($this->erroresdatos, $error);
		$correcto = false;
	}

	
	//realizamos la comprobacion
	if ((!preg_match("/^\d{8}[a-zA-Z]$/",$this->DNI)) || (!$this->validar_letra($this->DNI))){
		$error = array();
		
		//guardamos el mensaje de error
		array_push($error, "DNI");
		//guardamos el mensaje de error
		array_push($error, "00011");
		//guardamos el mensaje de error
		array_push($error, "Formato dni erróneo");

		//guardamos el mensaje de error
		array_push($this->erroresdatos, $error);
		$correcto = false;
	}


	return $correcto;
}

function validar_letra($dni){
	$letra = substr($dni, -1);
	$numeros = substr($dni, 0, -1);
	//realizamos la comprobacion
	if ( substr("TRWAGMYFPDXBNJZSQVHLCKE", $numeros%23, 1) == $letra && strlen($letra) == 1 && strlen ($numeros) == 8 ){
		return true;
	}//si no
	else{
		return false;
	}
}
function Comprobar_nombreprofesor()
{
	$correcto = true;

	//realizamos la comprobacion
	if (strlen($this->NOMBREPROFESOR)<3)
	{
		$error = array();
		
		//guardamos el mensaje de error
		array_push($error, "NOMBREPROFESOR");
		//guardamos el mensaje de error
		array_push($error, "00003");
		//guardamos el mensaje de error
		array_push($error, "Valor de atributo no numérico demasiado corto");

		//guardamos el mensaje de error
		array_push($this->erroresdatos, $error);
		$correcto = false;
	}
	//realizamos la comprobacion
	if (strlen($this->NOMBREPROFESOR)>15)
	{
		$error = array();
		
		//guardamos el mensaje de error
		array_push($error, "NOMBREPROFESOR");
		//guardamos el mensaje de error
		array_push($error, "00002");
		//guardamos el mensaje de error
		array_push($error, "Valor de atributo demasiado largo");

		//guardamos el mensaje de error
		array_push($this->erroresdatos, $error);;
		$correcto = false;
	}
	//realizamos la comprobacion
	if (!preg_match("/^[A-Za-zñáéíóúÑÁÉÍÓÚüÜ ]+$/",$this->NOMBREPROFESOR)){
		$error = array();
		
		//guardamos el mensaje de error
		array_push($error, "NOMBREPROFESOR");
		//guardamos el mensaje de error
		array_push($error, "00090");
		//guardamos el mensaje de error
		array_push($error, "Solo se permiten alfabéticos");

		//guardamos el mensaje de error
		array_push($this->erroresdatos, $error);
		$correcto = false;
	}


	
	return $correcto;
}

function Comprobar_apellidosprofesor()
{
	$correcto = true;

	//realizamos la comprobacion
	if (strlen($this->APELLIDOSPROFESOR)<3)
	{
		$error = array();
		
		//guardamos el mensaje de error
		array_push($error, "APELLIDOSPROFESOR");
		//guardamos el mensaje de error
		array_push($error, "00003");
		//guardamos el mensaje de error
		array_push($error, "Valor de atributo no numérico demasiado corto");

		//guardamos el mensaje de error
		array_push($this->erroresdatos, $error);
		$correcto = false;
	}
	//realizamos la comprobacion
	if (strlen($this->APELLIDOSPROFESOR)>30)
	{
		$error = array();
		
		//guardamos el mensaje de error
		array_push($error, "APELLIDOSPROFESOR");
		//guardamos el mensaje de error
		array_push($error, "00002");
		//guardamos el mensaje de error
		array_push($error, "Valor de atributo demasiado largo");

		//guardamos el mensaje de error
		array_push($this->erroresdatos, $error);;
		$correcto = false;
	}
	//realizamos la comprobacion
	if (!preg_match("/^[A-Za-zñáéíóúÑÁÉÍÓÚüÜ ]+$/",$this->APELLIDOSPROFESOR)){
		$error = array();
		
		//guardamos el mensaje de error
		array_push($error, "APELLIDOSPROFESOR");
		//guardamos el mensaje de error
		array_push($error, "00090");
		//guardamos el mensaje de error
		array_push($error, "Solo se permiten alfabéticos");

		//guardamos el mensaje de error
		array_push($this->erroresdatos, $error);
		$correcto = false;
	}

	
	return $correcto;
}



function Comprobar_areaprofesor()
{
	$correcto = true;

	//realizamos la comprobacion
	if (strlen($this->AREAPROFESOR)<3)
	{
		$error = array();
		
		//guardamos el mensaje de error
		array_push($error, "AREAPROFESOR");
		//guardamos el mensaje de error
		array_push($error, "00003");
		//guardamos el mensaje de error
		array_push($error, "Valor de atributo no numérico demasiado corto");

		//guardamos el mensaje de error
		array_push($this->erroresdatos, $error);
		$correcto = false;
	}
	//realizamos la comprobacion
	if (strlen($this->AREAPROFESOR)>60)
	{
		$error = array();
		
		//guardamos el mensaje de error
		array_push($error, "AREAPROFESOR");
		//guardamos el mensaje de error
		array_push($error, "00002");
		//guardamos el mensaje de error
		array_push($error, "Valor de atributo demasiado largo");

		//guardamos el mensaje de error
		array_push($this->erroresdatos, $error);;
		$correcto = false;
	}
	//realizamos la comprobacion
	if (!preg_match("/^[A-Za-zñáéíóúÑÁÉÍÓÚüÜ ]+$/",$this->AREAPROFESOR)){
		$error = array();
		
		//guardamos el mensaje de error
		array_push($error, "AREAPROFESOR");
		//guardamos el mensaje de error
		array_push($error, "00090");
		//guardamos el mensaje de error
		array_push($error, "Solo se permiten alfabéticos");

		//guardamos el mensaje de error
		array_push($this->erroresdatos, $error);
		$correcto = false;
	}

	
	return $correcto;
}


function Comprobar_departamentoprofesor()
{
	$correcto = true;

	//realizamos la comprobacion
	if (strlen($this->DEPARTAMENTOPROFESOR)<3)
	{
		$error = array();
		
		//guardamos el mensaje de error
		array_push($error, "DEPARTAMENTOPROFESOR");
		//guardamos el mensaje de error
		array_push($error, "00003");
		//guardamos el mensaje de error
		array_push($error, "Valor de atributo no numérico demasiado corto");

		//guardamos el mensaje de error
		array_push($this->erroresdatos, $error);
		$correcto = false;
	}
	//realizamos la comprobacion
	if (strlen($this->DEPARTAMENTOPROFESOR)>60)
	{
		$error = array();
		
		//guardamos el mensaje de error
		array_push($error, "DEPARTAMENTOPROFESOR");
		//guardamos el mensaje de error
		array_push($error, "00002");
		//guardamos el mensaje de error
		array_push($error, "Valor de atributo demasiado largo");

		//guardamos el mensaje de error
		array_push($this->erroresdatos, $error);;
		$correcto = false;
	}
	//realizamos la comprobacion
	if (!preg_match("/^[A-Za-zñáéíóúÑÁÉÍÓÚüÜ ]+$/",$this->DEPARTAMENTOPROFESOR)){
		$error = array();
		
		//guardamos el mensaje de error
		array_push($error, "DEPARTAMENTOPROFESOR");
		//guardamos el mensaje de error
		array_push($error, "00090");
		//guardamos el mensaje de error
		array_push($error, "Solo se permiten alfabéticos");

		//guardamos el mensaje de error
		array_push($this->erroresdatos, $error);
		$correcto = false;
	}

	
	return $correcto;
}
//Metodo ADD
//Inserta en la tabla  de la bd  los valores
// de los atributos del objeto. Comprueba si la clave/s esta vacia y si 
//existe ya en la tabla
function ADD()
{
	//realizamos la comprobacion
	if ($this->Comprobar_atributos() === true){
		$sql = "select * from PROFESOR where DNI = '".$this->DNI."'";

		//realizamos la comprobacion
		if (!$result = $this->mysqli->query($sql))
		{
			return 'Error de gestor de base de datos';
		}

		//realizamos la comprobacion
		if ($result->num_rows == 1){  // existe el usuario
				return 'Inserción fallida: el elemento ya existe';
			}

		$sql = "INSERT INTO PROFESOR (
					DNI,
					NOMBREPROFESOR,
					APELLIDOSPROFESOR,
					AREAPROFESOR,
					DEPARTAMENTOPROFESOR) 
				VALUES (
					'$this->DNI',
					'$this->NOMBREPROFESOR',
					'$this->APELLIDOSPROFESOR',
					'$this->AREAPROFESOR',
					'$this->DEPARTAMENTOPROFESOR'
				)";

		//realizamos la comprobacion
		if (!$this->mysqli->query($sql)) {
			return 'Error de gestor de base de datos';
		}
		//si no
		else{
			return 'Inserción realizada con éxito'; //operacion de insertado correcta
		}	
	}//si no
	else{
		return $this->erroresdatos;
	}
}
    

//funcion de destrucción del objeto: se ejecuta automaticamente
//al finalizar el script
function __destruct()
{

}


//funcion SEARCH: hace una búsqueda en la tabla con
//los datos proporcionados. Si van vacios devuelve todos
function SEARCH()
{

	$sql = "SELECT *
			FROM PROFESOR
			WHERE (
			
				(DNI LIKE '%$this->DNI%')&&
				(NOMBREPROFESOR LIKE '%$this->NOMBREPROFESOR%')&&
				(APELLIDOSPROFESOR LIKE '%$this->APELLIDOSPROFESOR%')&&
				(AREAPROFESOR LIKE '%$this->AREAPROFESOR%')&&
				(DEPARTAMENTOPROFESOR LIKE '%$this->DEPARTAMENTOPROFESOR%')
				
			)";

	
	//realizamos la comprobacion
	if (!$resultado = $this->mysqli->query($sql))
		{
			return 'Error de gestor de base de datos';
		}
	return $resultado;
    
}

//funcion DELETE : comprueba que la tupla a borrar existe y una vez
// verificado la borra
function DELETE()
{
    $sql = "SELECT * FROM PROFESOR WHERE DNI= '" .  $this->DNI ."';";
	
	//realizamos la comprobacion
	if($result = $this->mysqli->query($sql)){
		//realizamos la comprobacion
		if ($result->num_rows == 1)
		{
			$sql = "SELECT * FROM PROF_TITULACION WHERE DNI= '" .  $this->DNI ."';";
			$result = $this->mysqli->query($sql);
				//realizamos la comprobacion
				if ($result->num_rows >= 1)
				{
					$resultado = 'Error de gestor de base de datos';
				}//si no
				else{

					$sql = "SELECT * FROM PROF_ESPACIO WHERE DNI= '" .  $this->DNI ."';";
					$result = $this->mysqli->query($sql);
						//realizamos la comprobacion
						if ($result->num_rows >= 1)
							{
								$resultado = 'Error de gestor de base de datos';
							}//si no
							else{		

										$sql = "	DELETE FROM 
													PROFESOR
													WHERE(
													DNI = '" .  $this->DNI ."'
													)
													";
										//realizamos la comprobacion
										if ($this->mysqli->query($sql)){
											$resultado = 'Borrado realizado con éxito';
											}
						}
				}
		}
		//si no
		else
		{
			$resultado = 'No existe en la base de datos';
		}
	}//si no
	else{
		$resultado = 'Error de gestor de base de datos';
	}
	return $resultado;
}

// funcion RellenaDatos: recupera todos los atributos de una tupla a partir de su clave
function RellenaDatos()
{
    $sql = "SELECT *
			FROM PROFESOR
			WHERE (
				(DNI = '$this->DNI') 
			)";

	//realizamos la comprobacion
	if (!$resultado = $this->mysqli->query($sql))
	{
			return 'Error de gestor de base de datos';
	}//si no
	else
	{
		$tupla = $resultado->fetch_array();
	}
	return $tupla;
}

// funcion Edit: realizar el update de una tupla despues de comprobar que existe
function EDIT()
{
	//realizamos la comprobacion
	if ($this->Comprobar_atributos() === true){
	$sql = "UPDATE PROFESOR
			SET 
				DNI='$this->DNI',
				NOMBREPROFESOR='$this->NOMBREPROFESOR',
				APELLIDOSPROFESOR='$this->APELLIDOSPROFESOR',
				AREAPROFESOR='$this->AREAPROFESOR',
				DEPARTAMENTOPROFESOR='$this->DEPARTAMENTOPROFESOR'
				
			WHERE (
				DNI = '$this->DNI'
			)
			";
	//realizamos la comprobacion
	if ($this->mysqli->query($sql))
	{
		$resultado = 'Actualización realizada con éxito';
	}
	//si no
	else
	{
		$resultado = 'Error de gestor de base de datos';
	}
	return $resultado;
	}//si no
	else{
		return $this->erroresdatos;
	}
}
	
		

}//fin de clase

?>