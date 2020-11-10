<?php

//Clase : EDIFICIO_Model
//Creado el : 27-09-2019
//Creado por: 70ky5e
//-------------------------------------------------------
//Descripción: Contiene las clases y métodos que se comunican directamente con la base de datos.
//-------------------------------------------------------

class EDIFICIO_Model {
        //Definimos las variables
        var $codedificio;//variable que guarda el código del edificio
        var $nombreedificio;//variable que guarda el nombre del edificio
        var $direccionedificio;//variable que guarda la dirección del edificio
        var $campusedificio;//variable que guarda el campus
        var $mysqli;//variable que guarda los valores de la base de datos

		function __construct($codedificio,$nombreedificio,$direccionedificio,$campusedificio){ //Constructor de la clase
			
            $this->codedificio = $codedificio;
            $this->nombreedificio = $nombreedificio;
            $this->direccionedificio = $direccionedificio;
            $this->campusedificio = $campusedificio;
			$this->erroresdatos = array(); 

	//$this->Comprobar_atributos();

	include_once '../Model/Access_DB.php';
	$this->mysqli = ConnectDB(); //Realizamos la conexion con la base de datos
}

//funcion comprobar atributos
//alfanumerico
//devuelve un true o un false y rellena en caso de error el array de errores de datos
function Comprobar_atributos()
{
	//si se cumple la condicion
	if ($this->Comprobar_codedificio() &
		$this->Comprobar_nombreedificio() &
		$this->Comprobar_direccionedificio() &
		$this->Comprobar_campusedificio()
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

//funcion comprobar codedificio
//alfanumerico
//devuelve un true o un false y rellena en caso de error el array de errores de datos
function Comprobar_codedificio()
{
	$correcto = true;

	//si se cumple la condicion
	if (strlen($this->codedificio)<3)
	{
		$error = array();
		
		//guarda un mensaje de error
		array_push($error, "CODEDIFICIO");
		//guarda un mensaje de error
		array_push($error, "00003");
		//guarda un mensaje de error
		array_push($error, "Valor de atributo no numérico demasiado corto");

		//guarda un mensaje de error
		array_push($this->erroresdatos, $error);
		$correcto = false;
	}
	//si se cumple la condicion
	if (strlen($this->codedificio)>10)
	{
		$error = array();
		
		//guarda un mensaje de error
		array_push($error, "CODEDIFICIO");
		//guarda un mensaje de error
		array_push($error, "00002");
		//guarda un mensaje de error
		array_push($error, "Valor de atributo demasiado largo");

		//guarda un mensaje de error
		array_push($this->erroresdatos, $error);
		$correcto = false;
	}
	//si se cumple la condicion
	if (!preg_match("/^[A-Za-zñáéíóúÑÁÉÍÓÚüÜ\-0-9]+$/",$this->codedificio)){
		$error = array();
		
		//guarda un mensaje de error
		array_push($error, "CODEDIFICIO");
		//guarda un mensaje de error
		array_push($error, "00040");
		//guarda un mensaje de error
		array_push($error, "Solo están permitidas alfabéticos, números y el “-”");

		//guarda un mensaje de error
		array_push($this->erroresdatos, $error);
		$correcto = false;
	}

	
	return $correcto;//se devuelve el resultado
}

//funcion comprobar nombre edificio
//alfabetico
//devuelve un true o un false y rellena en caso de error el array de errores de datos
function Comprobar_nombreedificio()
{
	$correcto = true;

	//si se cumple la condicion
	if (strlen($this->nombreedificio)<3)
	{
		$error = array();
		
		//guarda un mensaje de error
		array_push($error, "nombreedificio");
		//guarda un mensaje de error
		array_push($error, "00003");
		//guarda un mensaje de error
		array_push($error, "Valor de atributo no numérico demasiado corto");

		//guarda un mensaje de error
		array_push($this->erroresdatos, $error);
		$correcto = false;
	}
	//si se cumple la condicion
	if (strlen($this->nombreedificio)>50)
	{
		$error = array();
		
		//guarda un mensaje de error
		array_push($error, "nombreedificio");
		//guarda un mensaje de error
		array_push($error, "00002");
		//guarda un mensaje de error
		array_push($error, "Valor de atributo demasiado largo");

		//guarda un mensaje de error
		array_push($this->erroresdatos, $error);
		$correcto = false;
	}
	//si se cumple la condicion
	if (!preg_match("/^[A-Za-zñáéíóúÑÁÉÍÓÚüÜ ]+$/",$this->nombreedificio)){
		$error = array();
		
		//guarda un mensaje de error
		array_push($error, "nombreedificio");
		//guarda un mensaje de error
		array_push($error, "00030");
		//guarda un mensaje de error
		array_push($error, "Solo están permitidas alfabéticos");

		//guarda un mensaje de error
		array_push($this->erroresdatos, $error);
		$correcto = false;
	}

	
	return $correcto;//se devuelve el resultado
}


//funcion comprobar direccion edificio
//alfanumerico
//devuelve un true o un false y rellena en caso de error el array de errores de datos
function Comprobar_direccionedificio()
{
	$correcto = true;

	//si se cumple la condicion
	if (strlen($this->direccionedificio)<3)
	{
		$error = array();
		
		//guarda un mensaje de error
		array_push($error, "direccionedificio");
		//guarda un mensaje de error
		array_push($error, "00003");
		//guarda un mensaje de error
		array_push($error, "Valor de atributo no numérico demasiado corto");

		//guarda un mensaje de error
		array_push($this->erroresdatos, $error);
		$correcto = false;
	}
	//si se cumple la condicion
	if (strlen($this->direccionedificio)>150)
	{
		$error = array();
		
		//guarda un mensaje de error
		array_push($error, "direccionedificio");
		//guarda un mensaje de error
		array_push($error, "00002");
		//guarda un mensaje de error
		array_push($error, "Valor de atributo demasiado largo");

		//guarda un mensaje de error
		array_push($this->erroresdatos, $error);
		$correcto = false;
	}
	//si se cumple la condicion
	if (!preg_match("/^[A-Za-zñáéíóúÑÁÉÍÓÚüÜ\-0-9 ºª\/]+$/",$this->direccionedificio)){
		$error = array();
		
		//guarda un mensaje de error
		array_push($error, "direccionedificio");
		//guarda un mensaje de error
		array_push($error, "00050");
		//guarda un mensaje de error
		array_push($error, "Solo están permitidas alfabéticos y espacios, números y los símbolos  “- / º ª”");

		//guarda un mensaje de error
		array_push($this->erroresdatos, $error);
		$correcto = false;
	}

	
	return $correcto;//se devuelve el resultado
}

//funcion comprobar campus edificio
//alfabetico
//devuelve un true o un false y rellena en caso de error el array de errores de datos
function Comprobar_campusedificio()
{
	$correcto = true;

	//si se cumple la condicion
	if (strlen($this->campusedificio)<3)
	{
		$error = array();
		
		//guarda un mensaje de error
		array_push($error, "campusedificio");
		//guarda un mensaje de error
		array_push($error, "00003");
		//guarda un mensaje de error
		array_push($error, "Valor de atributo no numérico demasiado corto");

		//guarda un mensaje de error
		array_push($this->erroresdatos, $error);
		$correcto = false;
	}
	//si se cumple la condicion
	if (strlen($this->campusedificio)>10)
	{
		$error = array();
		
		//guarda un mensaje de error
		array_push($error, "campusedificio");
		//guarda un mensaje de error
		array_push($error, "00002");
		//guarda un mensaje de error
		array_push($error, "Valor de atributo demasiado largo");

		//guarda un mensaje de error
		array_push($this->erroresdatos, $error);
		$correcto = false;
	}
	//si se cumple la condicion
	if (!preg_match("/^[A-Za-zñáéíóúÑÁÉÍÓÚüÜ ]+$/",$this->campusedificio)){
		$error = array();
		
		//guarda un mensaje de error
		array_push($error, "campusedificio");
		//guarda un mensaje de error
		array_push($error, "00030");
		//guarda un mensaje de error
		array_push($error, "Solo están permitidas alfabéticos");

		//guarda un mensaje de error
		array_push($this->erroresdatos, $error);
		$correcto = false;
	}

	
	return $correcto;//se devuelve el resultado
}

//Metodo ADD
//Inserta en la tabla  de la bd  los valores
// de los atributos del objeto. Comprueba si la clave/s esta vacia y si 
//existe ya en la tabla
function ADD() 
{
	//si se cumple la condicion
	if ($this->Comprobar_atributos() === true){
		//comprobamos que no exista en la base de datos un edificio con el código que queremos añadir
		$sql = "select * from EDIFICIO where CODEDIFICIO = '$this->codedificio'";

		//si hay un error en la consulta devuelve un mensaje de error
		if (!$result = $this->mysqli->query($sql))
		{
			return 'Error de gestor de base de datos';
		}

		// si existe el edificio devuelve mensaje de que ya existe
		if ($result->num_rows == 1){  // Si existe el edificio, mostramos el mensaje de error de que ya existe.
				return 'Inserción fallida: el elemento ya existe';
			}

		$sql = "INSERT INTO EDIFICIO (		 			
						CODEDIFICIO,
                        NOMBREEDIFICIO,
                        DIRECCIONEDIFICIO,
                        CAMPUSEDIFICIO) 
				VALUES (
                        '$this->codedificio',
                        '$this->nombreedificio',
                        '$this->direccionedificio',
                        '$this->campusedificio')";

		//si hay algún error en la consulta muestra mensaje de error
		if (!$this->mysqli->query($sql)) { //Si la consulta no se ha realizado correctamente, mostramos mensaje de error
			return 'Error de gestor de base de datos';
		}
		//si no
		else{
			return 'Inserción realizada con éxito'; //Si la consulta ha sido existosa, mostramos mensaje de operacion de insertado correcta
		}
	}//si no
	else{
		return  $this->erroresdatos;
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
	//miramos si lo que buscamos está en la base de datos
	$sql = "SELECT *
			FROM EDIFICIO
			WHERE (
                    (CODEDIFICIO LIKE '%$this->codedificio%')&&
                    (NOMBREEDIFICIO LIKE '%$this->nombreedificio%')&&
                    (DIRECCIONEDIFICIO LIKE '%$this->direccionedificio%')&&
                    (CAMPUSEDIFICIO LIKE '%$this->campusedificio%')
					
				  )";
	//comprobamos que la consulta se haya echo correctamente
	if (!$resultado = $this->mysqli->query($sql)) //Si la consulta no se ha realizado correctamente, mostramos mensaje de error
		{
			return 'Error de gestor de base de datos';//si hay algún error devuelve un mensaje de error
		}
	return $resultado; //Devolvemos los datos
    
}

//funcion DELETE : comprueba que la tupla a borrar existe y una vez
// verificado la borra
function DELETE()
{
	//comprobamos si existe 
	$sql = "SELECT * FROM EDIFICIO WHERE CODEDIFICIO= '$this->codedificio';";
    //si se cumple la condicion
    if($result = $this->mysqli->query($sql)){
	    //si se cumple la condicion
	    if ($result->num_rows == 1) //Comprobamos si ya existe el edificio
	    {
			$sql = "SELECT * FROM ESPACIO WHERE CODEDIFICIO= '$this->codedificio';";
			$result = $this->mysqli->query($sql);
			
			//si se cumple la condicion
			if ($result->num_rows >= 1) //Comprobamos si existen espacios asignados a ese edificio
			{
				$resultado = 'Error de gestor de base de datos';
			}//si no
			else{		//
			  	$sql = "SELECT * FROM CENTRO WHERE CODEDIFICIO= '$this->codedificio';"; //Buscamos los centros que pertenece a un edificio
				$result = $this->mysqli->query($sql);
				
	
				//si se cumple la condicion
				if ($result->num_rows >= 1) //Si existe, mostramos mensaje de error
				{
					$resultado = 'Error de gestor de base de datos';
					
				}//si no
				else{ //Si existe, eliminamos el edificio
					$sql = "	DELETE FROM 
								EDIFICIO
								WHERE(
								CODEDIFICIO = '$this->codedificio'
								)
								";
					//si se cumple la condicion
					if ($this->mysqli->query($sql)){ //Si la consulta se ha realizado correctamente, mostramos mensaje 

						$resultado = 'Borrado realizado con éxito';
					}
					else //Si la consulta no se ha realizado correctamente, mostramos mensaje de error
					{
						$resultado = 'Error de gestor de base de datos';//devolvemos el mensaje
					}
				}
			}					
				
		}//si no
		else{
			   $resultado = 'Edificio no existe';
		 }
}//si no
else{
	$resultado = 'Error de gestor de base de datos';
	
		}
		return $resultado;//devolvemos el mensaje	
}

	
//funcion obtenerCentros()
//Devuelve el código de los centros que pertenecen al edificio
function obtenerCentros()
{
	$sql = "SELECT CODCENTRO FROM CENTRO WHERE CODEDIFICIO= '$this->codedificio';";
	$resultado = $this->mysqli->query($sql); //Ejecutamos la consulta en la BD
	return $resultado;
	
}
// funcion RellenaDatos: recupera todos los atributos de una tupla a partir de su clave
function RellenaDatos()
{
	//buscamos todos los atributos de la tupla
    $sql = "SELECT *
			FROM EDIFICIO
			WHERE (
				(CODEDIFICIO = '$this->codedificio') 
			)";

	//si no se ejecuta con éxito devuelve mensaje de error
	if (!$resultado = $this->mysqli->query($sql)) //Si la consulta no se ha realizado correctamente, mostramos mensaje de error
	{
			return 'Error de gestor de base de datos';//devolvemos el mensaje
	}
	else //Si no, convierte el resultado en array
	{
		$tupla = $resultado->fetch_array(); //guardamos el resultado de la busqueda en la variable tupla
	}
	return $tupla;//devolvemos la información de ese centro
}

// funcion Edit: realizar el update de una tupla despues de comprobar que existe
function EDIT()
{
	//si se cumple la condicion
	if ($this->Comprobar_atributos() === true){
	$sql = "SELECT * FROM EDIFICIO WHERE CODEDIFICIO= '$this->codedificio'";
    

    $result = $this->mysqli->query($sql);
    
    //si se cumple la condicion
    if ($result->num_rows == 1) { //Si existe el edificio lo editamos
    //actualizamos los datos
	$sql = "UPDATE EDIFICIO
			SET 
			CODEDIFICIO = '$this->codedificio',
			NOMBREEDIFICIO = '$this->nombreedificio',
			DIRECCIONEDIFICIO = '$this->direccionedificio',
			CAMPUSEDIFICIO = '$this->campusedificio' 
			WHERE 
			CODEDIFICIO= '$this->codedificio'";
	//si se ha actualizado guardamos un mensaje de éxito en la variable resultado
	if ($this->mysqli->query($sql)) //Si la consulta se ha realizado correctamente, mostramos mensaje 
	{
		$resultado = 'Actualización realizada con éxito';
	}
	//si no
	else //Si no, mostramos mensaje de error
	{
		$resultado = 'Error de gestor de base de datos';
	}
	return $resultado;//devolvemos el mensaje
}
	}//si no
	else{
		return  $this->erroresdatos;
	}
}
}//fin de clase

?>