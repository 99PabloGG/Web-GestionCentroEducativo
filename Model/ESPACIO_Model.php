<?php

//Clase : ESPACIO_Model
//Creado el : 05-10-2019
//Creado por: 70ky5e
//-------------------------------------------------------

//Descripción: Contiene las clases y métodos que se comunican directamente con la base de datos.
//-------------------------------------------------------


class ESPACIO_Model {

	var $CODESPACIO;//variable que guarda el código de espacio
	var $CODEDIFICIO;//variable que guarda el código de edificio
	var $CODCENTRO;//variable que guarda el código de centro
	var $TIPO;//variable que guarda el tipo
	var $SUPERFICIEESPACIO;//variable que guarda la superficie
	var $NUMINVENTARIOESPACIO;//variable que guarda el número de inventario
    var $mysqli;//variable que guarda los valores de la base de datos
	


//Constructor de la clase
//

function __construct($CODESPACIO, $CODEDIFICIO, $CODCENTRO, $TIPO, $SUPERFICIEESPACIO, $NUMINVENTARIOESPACIO){
	$this->CODESPACIO = $CODESPACIO;
	$this->CODEDIFICIO = $CODEDIFICIO;
	$this->CODCENTRO = $CODCENTRO;
	$this->TIPO = $TIPO;
	$this->SUPERFICIEESPACIO =$SUPERFICIEESPACIO;
	$this->NUMINVENTARIOESPACIO =$NUMINVENTARIOESPACIO;
	
	
	$this->erroresdatos = array(); 

	//$this->Comprobar_atributos();
	
	include_once '../Model/Access_DB.php';
	$this->mysqli = ConnectDB();
}

//funcion comprobar atributos
//alfanumerico
//devuelve un true o un false y rellena en caso de error el array de errores de datos
function Comprobar_atributos()
{
	//si se cumple la condicion
	if ($this->Comprobar_codespacio() &
		$this->Comprobar_codedificio() &
		$this->Comprobar_codcentro() &
		$this->Comprobar_superficieespacio() &
		$this->Comprobar_numinventarioespacio()
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


//funcion comprobar codespacio
//alfanumerico
//devuelve un true o un false y rellena en caso de error el array de errores de datos
function Comprobar_codespacio()
{
	$correcto = true;
	//si se cumple la condicion
	if (strlen($this->CODESPACIO)<3)
	{
		$error = array();
		
		//guarda un mensaje de error
		array_push($error, "CODESPACIO");
		//guarda un mensaje de error
		array_push($error, "00003");
		//guarda un mensaje de error
		array_push($error, "Valor de atributo no numérico demasiado corto");

		//guarda un mensaje de error
		array_push($this->erroresdatos, $error);
		$correcto = false;
	}
	//si se cumple la condicion
	if (strlen($this->CODESPACIO)>10)
	{
		$error = array();
		
		//guarda un mensaje de error
		array_push($error, "CODESPACIO");
		//guarda un mensaje de error
		array_push($error, "00002");
		//guarda un mensaje de error
		array_push($error, "Valor de atributo demasiado largo");

		//guarda un mensaje de error
		array_push($this->erroresdatos, $error);
		$correcto = false;
	}
	//si se cumple la condicion
	if (!preg_match("/^[A-Za-zñáéíóúÑÁÉÍÓÚüÜ\-0-9]+$/",$this->CODESPACIO)){
		$error = array();
		
		//guarda un mensaje de error
		array_push($error, "CODESPACIO");
		//guarda un mensaje de error
		array_push($error, "00040");
		//guarda un mensaje de error
		array_push($error, "Solo están permitidas alfabéticos, números y el “-”");

		//guarda un mensaje de error
		array_push($this->erroresdatos, $error);
		$correcto = false;
	}
	
	return $correcto; //se devuelve el resultado
}


//funcion comprobar codedificio
//alfanumerico
//devuelve un true o un false y rellena en caso de error el array de errores de datos
function Comprobar_codedificio()
{
	$correcto = true;

	//si se cumple la condicion
	if (strlen($this->CODEDIFICIO)<3)
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
	if (strlen($this->CODEDIFICIO)>10)
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
	if (!preg_match("/^[A-Za-zñáéíóúÑÁÉÍÓÚüÜ\-0-9]+$/",$this->CODEDIFICIO)){
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


//funcion comprobar codcentro
//alfanumerico
//devuelve un true o un false y rellena en caso de error el array de errores de datos
function Comprobar_codcentro()
{
	$correcto = true;

	//si se cumple la condicion
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
	//si se cumple la condicion
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
	//si se cumple la condicion
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

	return $correcto;//se devuelve el resultado
}


//funcion comprobar tipo
//alfabetico
//devuelve un true o un false y rellena en caso de error el array de errores de datos
function Comprobar_tipo()
{
	$correcto = true;

	//si se cumple la condicion
	if (($this->TIPO !== 'DESPACHO') && ($this->TIPO !== 'PAS') && ($this->TIPO !== 'LABORATORIO')){
		$error = array();
		
		//guarda un mensaje de error
		array_push($error, "TIPO");
		//guarda un mensaje de error
		array_push($error, "00080");
		//guarda un mensaje de error
		array_push($error, 'Solo se permiten los valores "DESPACHO","LABORATORIO","PAS"');

		//guarda un mensaje de error
		array_push($this->erroresdatos, $error);
		$correcto = false;
	}

	return $correcto;//se devuelve el resultado
}


//funcion comprobar superficie espacio
//numerico
//devuelve un true o un false y rellena en caso de error el array de errores de datos
function Comprobar_superficieespacio()
{
	$correcto = true;

	//si se cumple la condicion
	if (strlen($this->SUPERFICIEESPACIO)<1)
	{
		$error = array();
		
		//guarda un mensaje de error
		array_push($error, "SUPERFICIEESPACIO");
		//guarda un mensaje de error
		array_push($error, "00004");
		//guarda un mensaje de error
		array_push($error, "Valor de atributo numérico demasiado corto");

		//guarda un mensaje de error
		array_push($this->erroresdatos, $error);
		$correcto = false;
	}
	//si se cumple la condicion
	if (strlen($this->SUPERFICIEESPACIO)>4)
	{
		$error = array();
		
		//guarda un mensaje de error
		array_push($error, "SUPERFICIEESPACIO");
		//guarda un mensaje de error
		array_push($error, "00002");
		//guarda un mensaje de error
		array_push($error, "Valor de atributo demasiado largo");

		//guarda un mensaje de error
		array_push($this->erroresdatos, $error);
		$correcto = false;	
	}
	//si se cumple la condicion
	if (!preg_match("/^\d+$/",$this->SUPERFICIEESPACIO)){
		$error = array();
		
		//guarda un mensaje de error
		array_push($error, "SUPERFICIEESPACIO");
		//guarda un mensaje de error
		array_push($error, "00070");
		//guarda un mensaje de error
		array_push($error, "Solo se permiten números");

		//guarda un mensaje de error
		array_push($this->erroresdatos, $error);
		$correcto = false;
	}

	
	return $correcto;//se devuelve el resultado
}

//funcion comprobar num inventario espacio
//numerico
//devuelve un true o un false y rellena en caso de error el array de errores de datos
function Comprobar_numinventarioespacio()
{
	$correcto = true;

	//si se cumple la condicion
	if (strlen($this->NUMINVENTARIOESPACIO)<1)
	{
		$error = array();
		
		//guarda un mensaje de error
		array_push($error, "NUMINVENTARIOESPACIO");
		//guarda un mensaje de error
		array_push($error, "00004");
		//guarda un mensaje de error
		array_push($error, "Valor de atributo numérico demasiado corto");

		//guarda un mensaje de error
		array_push($this->erroresdatos, $error);
		$correcto = false;
	}
	//si se cumple la condicion
	if (strlen($this->NUMINVENTARIOESPACIO)>8)
	{
		$error = array();
		
		//guarda un mensaje de error
		array_push($error, "NUMINVENTARIOESPACIO");
		//guarda un mensaje de error
		array_push($error, "00002");
		//guarda un mensaje de error
		array_push($error, "Valor de atributo demasiado largo");

		//guarda un mensaje de error
		array_push($this->erroresdatos, $error);
		$correcto = false;	
	}
	//si se cumple la condicion
	if (!preg_match("/^\d+$/",$this->NUMINVENTARIOESPACIO)){
		$error = array();
		
		//guarda un mensaje de error
		array_push($error, "NUMINVENTARIOESPACIO");
		//guarda un mensaje de error
		array_push($error, "00070");
		//guarda un mensaje de error
		array_push($error, "Solo se permiten números");

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
		//comprobamos que no exista en la base de datos un esapcio con el código que queremos añadir
		$sql = "select * from ESPACIO where CODESPACIO = '".$this->CODESPACIO."'";

		//si hay un error en la consulta devuelve un mensaje de error
		if (!$result = $this->mysqli->query($sql))
		{
			return 'Error de gestor de base de datos';//se devuelve el mensaje
		}

		//si se cumple la condicion
		if ($result->num_rows == 1){  // existe el espacio devuelve mensaje de que ya existe
				return 'Inserción fallida: el elemento ya existe';
			}
		//si no está se inserta
		$sql = "INSERT INTO ESPACIO (
					CODESPACIO,
					CODEDIFICIO,
					CODCENTRO,
					TIPO,
					SUPERFICIEESPACIO,
					NUMINVENTARIOESPACIO
					) 
				VALUES (
					'$this->CODESPACIO',
					'$this->CODEDIFICIO',
					'$this->CODCENTRO',
					'$this->TIPO',
					'$this->SUPERFICIEESPACIO',
					'$this->NUMINVENTARIOESPACIO'
				)";

		//si hay algún error en la consulta muestra mensaje de error
		if (!$this->mysqli->query($sql)) {
			return 'Error de gestor de base de datos';//se devuelve el mensaje
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
	//miramos si lo que buscamos está en la base de datos
	$sql = "SELECT *
			FROM ESPACIO
			WHERE (
			
				(CODESPACIO LIKE '%$this->CODESPACIO%')&&
				(CODEDIFICIO LIKE '%$this->CODEDIFICIO%')&&
				(CODCENTRO LIKE '%$this->CODCENTRO%')&&
				(TIPO LIKE '%$this->TIPO%')&&
				(SUPERFICIEESPACIO LIKE '%$this->SUPERFICIEESPACIO%')&&
				(NUMINVENTARIOESPACIO LIKE '%$this->NUMINVENTARIOESPACIO%')
				
			)";

	
	//comprobamos que la consulta se haya echo correctamente
		if (!$resultado = $this->mysqli->query($sql))
		{
			return 'Error de gestor de base de datos';//si hay algún error devuelve un mensaje de error
		}
	return $resultado; //si es correcto devuelve las coincidencias
}

//funcion DELETE : comprueba que la tupla a borrar existe y una vez
// verificado la borra
function DELETE()
{
	//comprobamos si existe
	$sql = "SELECT * FROM ESPACIO WHERE CODESPACIO= '$this->CODESPACIO';";
    //si se cumple la condicion
    if($result = $this->mysqli->query($sql)){
    //si se cumple la condicion
    	if ($result->num_rows == 1)
    {
    			//comprobamos existe uno o más
				$sql = "SELECT * FROM PROF_ESPACIO WHERE CODESPACIO= '$this->CODESPACIO';";
				$result = $this->mysqli->query($sql);
					//si se cumple la condicion
				if ($result->num_rows >= 1)
						{//si hay uno o más
							$resultado = 'Error de gestor de base de datos';//guardamos mensaje de error
						}//si no
						else{		
							  	
									$sql = "	DELETE FROM 
												ESPACIO
												WHERE(
												CODESPACIO = '$this->CODESPACIO'
												)
												";
									//si se borra guardamos mensaje de éxito
												if ($this->mysqli->query($sql)){
										$resultado = 'Borrado realizado con éxito';
										}
									}
					}//si no guardamos mensaje de error
					else{
			$resultado = 'Error de gestor de base de datos';
		}
	}
	//si no
	else
	{
		$resultado = 'Error de gestor de base de datos';
	}
	return $resultado;//se devuelve el mensaje
}

// funcion RellenaDatos: recupera todos los atributos de una tupla a partir de su clave
function RellenaDatos()
{
	//buscamos todos los atributos de la tupla
    $sql = "SELECT *
			FROM ESPACIO
			WHERE (
				(CODESPACIO = '$this->CODESPACIO') 
			)";

	//si no se ejecuta con éxito devuelve mensaje de error
			if (!$resultado = $this->mysqli->query($sql))
	{
			return 'Error de gestor de base de datos';//se devuelve el mensaje
	}//si se ejecuta con éxito 
	else
	{
		$tupla = $resultado->fetch_array();//guardamos el resultado de la busqueda en la variable tupla
	}
	return $tupla;//devolvemos la información de ese centro
}

// funcion RellenaDatosPorEdificio: recupera todos los atributos de una tupla a partir de su clave
function RellenaDatosPorEdificio()
{
    $sql = "SELECT *
			FROM ESPACIO
			WHERE (
				(CODEDIFICIO = '$this->CODEDIFICIO') 
			)";
	//si se ha actualizado guardamos un mensaje de éxito en la variable resultado
	//si se cumple la condicion
			if (!$resultado = $this->mysqli->query($sql))
	{
			return 'Error de gestor de base de datos';//se devuelve el mensaje
	}
	return $resultado;//se devuelve el mensaje
}

// funcion RellenaDatosPorCentro: recupera todos los atributos de una tupla a partir de su clave
function RellenaDatosPorCentro()
{
    $sql = "SELECT *
			FROM ESPACIO
			WHERE (
				(CODCENTRO = '$this->CODCENTRO')
			)";
	//si se ha actualizado guardamos un mensaje de éxito en la variable resultado
	//si se cumple la condicion
			if (!$resultado = $this->mysqli->query($sql))
	{
			return 'Error de gestor de base de datos';//se devuelve el mensaje
	}
	return $resultado;//se devuelve el mensaje
}

// funcion Edit: realizar el update de una tupla despues de comprobar que existe
function EDIT()
{
	//si los atributos estan comprobado
	if ($this->Comprobar_atributos() === true){
    //actualizamos los datos
    //si se cumple la condicion
	$sql = "UPDATE ESPACIO
			SET 
				CODESPACIO='$this->CODESPACIO',
				CODEDIFICIO='$this->CODEDIFICIO',
				CODCENTRO='$this->CODCENTRO',
				TIPO='$this->TIPO',
				SUPERFICIEESPACIO='$this->SUPERFICIEESPACIO',
				NUMINVENTARIOESPACIO='$this->NUMINVENTARIOESPACIO'
				
			WHERE (
				CODESPACIO = '$this->CODESPACIO'
			)
			";
		//si se ha actualizado guardamos un mensaje de éxito en la variable resultado
		//si se cumple la condicion
			if ($this->mysqli->query($sql))
	{
		$resultado = 'Actualización realizada con éxito';
	}//si no guardamos un mensaje de error en la variable resultado
	else
	{
		$resultado = 'Error de gestor de base de datos';
	}
	return $resultado;//se devuelve el mensaje
	}//si no
	else{
		return $this->erroresdatos;
	}
}
}//fin de clase

?>