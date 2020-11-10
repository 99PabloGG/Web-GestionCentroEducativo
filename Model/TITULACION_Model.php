<?php
//Clase : TITULACION_Model
//Creado el : 26-09-2017
//Creado por: 70ky5e

//Descripción: Contiene las clases y métodos que se comunican directamente con la base de datos.
//-------------------------------------------------------

class TITULACION_Model {

	//Definimos las variables
	var $CODTITULACION;//variable que guarda el código de la titulación
	var $CODCENTRO;//variable que guarda el código de centro
	var $NOMBRETITULACION;//variable que guarda el nombre de la titulación
	var $RESPONSABLETITULACION;//variable que guarda el responsable de la titulación
	var $mysqli;//variable que guarda los valores de la base de datos
	
	
//Constructor de la clase
//

function __construct($CODTITULACION, $CODCENTRO, $NOMBRETITULACION, $RESPONSABLETITULACION){
	$this->CODTITULACION = $CODTITULACION;
	$this->CODCENTRO = $CODCENTRO;
	$this->NOMBRETITULACION = $NOMBRETITULACION;
	$this->RESPONSABLETITULACION = $RESPONSABLETITULACION;
	
	$this->erroresdatos = array(); 

	//$this->Comprobar_atributos();

	include_once '../Model/Access_DB.php';
	$this->mysqli = ConnectDB();
}

// function Comprobar_atributos()
// Comprueba el formato de atributos
// devuelve un true o un false y rellena en caso de error el array de errores de datos
function Comprobar_atributos()
{
	//realiza la comprobacion
	if ($this->Comprobar_codtitulacion() &
		$this->Comprobar_codcentro() &
		$this->Comprobar_nombretitulacion() &
		$this->Comprobar_responsabletitulacion()
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


// function Comprobar_codtitulacion()
// Comprueba el formato de codtitulacion 
//	alfanumerico
//	no vacio
// devuelve un true o un false y rellena en caso de error el array de errores de datos
function Comprobar_codtitulacion()
{
	$correcto = true;

	//realiza la comprobacion
	if (strlen($this->CODTITULACION)<3)
	{
		$error = array();
		
		//guarda un mensaje de error
		array_push($error, "CODTITULACION");
		//guarda un mensaje de error
		array_push($error, "00003");
		//guarda un mensaje de error
		array_push($error, "Valor de atributo no numérico demasiado corto");

		//guarda un mensaje de error
		array_push($this->erroresdatos, $error);
		$correcto = false;
	}
	//realiza la comprobacion
	if (strlen($this->CODTITULACION)>10)
	{
		$error = array();
		
		//guarda un mensaje de error
		array_push($error, "CODTITULACION");
		//guarda un mensaje de error
		array_push($error, "00002");
		//guarda un mensaje de error
		array_push($error, "Valor de atributo demasiado largo");

		//guarda un mensaje de error
		array_push($this->erroresdatos, $error);
		$correcto = false;
	}
	//realiza la comprobacion
	if (!preg_match("/^[A-Za-zñáéíóúÑÁÉÍÓÚüÜ0-9]+$/",$this->CODTITULACION)){
		$error = array();
		
		//guarda un mensaje de error
		array_push($error, "CODTITULACION");
		//guarda un mensaje de error
		array_push($error, "00040");
		//guarda un mensaje de error
		array_push($error, "Solo están permitidas alfabéticos, números");

		//guarda un mensaje de error
		array_push($this->erroresdatos, $error);
		$correcto = false;
	}

	
	return $correcto;
}
// function Comprobar_codcentro()
// Comprueba el formato de codcentro 
//	alfanumerico
//	no vacio
// devuelve un true o un false y rellena en caso de error el array de errores de datos
function Comprobar_codcentro()
{
	$correcto = true;

	//realiza la comprobacion
	if (strlen($this->CODCENTRO)<3)
	{
		$error = array();
		
		//guarda un mensaje de error
		array_push($error, "CODCENTRO");
		//guarda un mensaje de error
		array_push($error, "00003");
		//guarda un mensaje de error
		array_push($error, "Valor de atributo no numérico demasiado corto");

		//guarda un mensaje de error
		array_push($this->erroresdatos, $error);
		$correcto = false;
	}
	//realiza la comprobacion
	if (strlen($this->CODCENTRO)>10)
	{
		$error = array();
		
		//guarda un mensaje de error
		array_push($error, "CODCENTRO");
		//guarda un mensaje de error
		array_push($error, "00002");
		//guarda un mensaje de error
		array_push($error, "Valor de atributo demasiado largo");

		//guarda un mensaje de error
		array_push($this->erroresdatos, $error);
		$correcto = false;
	}
	//realiza la comprobacion
	if (!preg_match("/^[A-Za-zñáéíóúÑÁÉÍÓÚüÜ\-0-9]+$/",$this->CODCENTRO)){
		$error = array();
		
		//guarda un mensaje de error
		array_push($error, "CODCENTRO");
		//guarda un mensaje de error
		array_push($error, "00040");
		//guarda un mensaje de error
		array_push($error, "Solo están permitidas alfabéticos, números y el “-”");

		//guarda un mensaje de error
		array_push($this->erroresdatos, $error);
		$correcto = false;
	}

	return $correcto;
}
// function Comprobar_nombretitulacion()
// Comprueba el formato de nombretitulacion 
//	alfanumerico
//	no vacio
// devuelve un true o un false y rellena en caso de error el array de errores de datos
function Comprobar_nombretitulacion()
{
	$correcto = true;

	//realiza la comprobacion
	if (strlen($this->NOMBRETITULACION)<3)
	{
		$error = array();
		
		//guarda un mensaje de error
		array_push($error, "NOMBRETITULACION");
		//guarda un mensaje de error
		array_push($error, "00003");
		//guarda un mensaje de error
		array_push($error, "Valor de atributo no numérico demasiado corto");

		//guarda un mensaje de error
		array_push($this->erroresdatos, $error);
		$correcto = false;
	}
	//realiza la comprobacion
	if (strlen($this->NOMBRETITULACION)>50)
	{
		$error = array();
		
		//guarda un mensaje de error
		array_push($error, "NOMBRETITULACION");
		//guarda un mensaje de error
		array_push($error, "00002");
		//guarda un mensaje de error
		array_push($error, "Valor de atributo demasiado largo");

		//guarda un mensaje de error
		array_push($this->erroresdatos, $error);
		$correcto = false;
	}
	//realiza la comprobacion
	if (!preg_match("/^[A-Za-zñáéíóúÑÁÉÍÓÚüÜ ]+$/",$this->NOMBRETITULACION)){
		$error = array();
		
		//guarda un mensaje de error
		array_push($error, "NOMBRETITULACION");
		//guarda un mensaje de error
		array_push($error, "00030");
		//guarda un mensaje de error
		array_push($error, "Solo están permitidas alfabéticos");

		//guarda un mensaje de error
		array_push($this->erroresdatos, $error);
		$correcto = false;
	}

	
	return $correcto;
}
// function Comprobar_responsabletitulacion()
// Comprueba el formato de responsabletitulacion 
//	alfanumerico
//	no vacio
// devuelve un true o un false y rellena en caso de error el array de errores de datos
function Comprobar_responsabletitulacion()
{
	$correcto = true;

	//realiza la comprobacion
	if (strlen($this->RESPONSABLETITULACION)<3)
	{
		$error = array();
		
		//guarda un mensaje de error
		array_push($error, "RESPONSABLETITULACION");
		//guarda un mensaje de error
		array_push($error, "00003");
		//guarda un mensaje de error
		array_push($error, "Valor de atributo no numérico demasiado corto");

		//guarda un mensaje de error
		array_push($this->erroresdatos, $error);
		$correcto = false;
	}
	//realiza la comprobacion
	if (strlen($this->RESPONSABLETITULACION)>60)
	{
		$error = array();
		
		//guarda un mensaje de error
		array_push($error, "RESPONSABLETITULACION");
		//guarda un mensaje de error
		array_push($error, "00002");
		//guarda un mensaje de error
		array_push($error, "Valor de atributo demasiado largo");

		//guarda un mensaje de error
		array_push($this->erroresdatos, $error);
		$correcto = false;
	}
	//realiza la comprobacion
	if (!preg_match("/^[A-Za-zñáéíóúÑÁÉÍÓÚüÜ ]+$/",$this->RESPONSABLETITULACION)){
		$error = array();
		
		//guarda un mensaje de error
		array_push($error, "RESPONSABLETITULACION");
		//guarda un mensaje de error
		array_push($error, "00030");
		//guarda un mensaje de error
		array_push($error, "Solo están permitidas alfabéticos");

		//guarda un mensaje de error
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
	//realiza la comprobacion
	if ($this->Comprobar_atributos() === true){
		//miramos si lo que buscamos está en la base de datos
		$sql = "select * from TITULACION where CODTITULACION = '".$this->CODTITULACION."'";

		//realiza la comprobacion
		if (!$result = $this->mysqli->query($sql))
		{
			return 'Error de gestor de base de datos';
		}

		//realiza la comprobacion
		if ($result->num_rows == 1){  // existe el usuario
				return 'Inserción fallida: el elemento ya existe';
			}

		$sql = "INSERT INTO TITULACION (
					CODTITULACION,
					CODCENTRO,
					NOMBRETITULACION,
					RESPONSABLETITULACION) 
				VALUES (
					'$this->CODTITULACION',
					'$this->CODCENTRO',
					'$this->NOMBRETITULACION',
					'$this->RESPONSABLETITULACION'
				)";

	
	
	
		//realiza la comprobacion
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
			FROM TITULACION
			WHERE (
			
				(CODTITULACION LIKE '%$this->CODTITULACION%')&&
				(CODCENTRO LIKE '%$this->CODCENTRO%')&&
				(NOMBRETITULACION LIKE '%$this->NOMBRETITULACION%')&&
				(RESPONSABLETITULACION LIKE '%$this->RESPONSABLETITULACION%')
				
			)";

	
	//realiza la comprobacion
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
  $sql = "SELECT * FROM TITULACION WHERE CODTITULACION= '$this->CODTITULACION';";
    //realiza la comprobacion
  if($result = $this->mysqli->query($sql)){
    //realiza la comprobacion
    if ($result->num_rows == 1)
    {

				$sql = "SELECT * FROM PROF_TITULACION WHERE CODTITULACION= '$this->CODTITULACION';";
				$result = $this->mysqli->query($sql);
					//realiza la comprobacion
					if ($result->num_rows >= 1)
						{
							$resultado = 'Error de gestor de base de datos';
						}//si no
						else{		
							  	
									$sql = "	DELETE FROM 
												TITULACION
												WHERE(
												CODTITULACION = '$this->CODTITULACION'
												)
												";
									//realiza la comprobacion
									if ($this->mysqli->query($sql)){
										$resultado = 'Borrado realizado con éxito';
										}
					}
					}//si no
					else{
			$resultado = 'Titulacion no existe';
		}
	}
	//si no
	else
	{
		$resultado = 'Error de gestor de base de datos';
	}
	return $resultado;
}

// funcion RellenaDatos: recupera todos los atributos de una tupla a partir de su clave
function RellenaDatos()
{
    $sql = "SELECT *
			FROM TITULACION
			WHERE (
				(CODTITULACION = '$this->CODTITULACION') 
			)";

	//realiza la comprobacion
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

// funcion RellenaDatosPorCentro: recupera todos los atributos de una tupla a partir de su clave
function RellenaDatosPorCentro()
{
		//buscamos todos los atributos de la tupla
    $sql = "SELECT *
			FROM TITULACION
			WHERE (
				(CODCENTRO = '$this->CODCENTRO') 
			)";

	//realiza la comprobacion
	if (!$resultado = $this->mysqli->query($sql))
	{
			return 'Error de gestor de base de datos';
	}
	return $resultado;
}


// funcion Edit: realizar el update de una tupla despues de comprobar que existe
function EDIT()
{
	//realiza la comprobacion
	if ($this->Comprobar_atributos() === true){
	$sql = "UPDATE TITULACION
			SET 
				CODTITULACION='$this->CODTITULACION',
				CODCENTRO='$this->CODCENTRO',
				NOMBRETITULACION='$this->NOMBRETITULACION',
				RESPONSABLETITULACION='$this->RESPONSABLETITULACION'
				
			WHERE (
				CODTITULACION = '$this->CODTITULACION'
			)
			";
	//realiza la comprobacion
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