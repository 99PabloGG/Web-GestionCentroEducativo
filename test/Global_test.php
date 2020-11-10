<?php

// Autor : 70ky5e
// Fecha : 02/12/2019
// Descripción : 
//	Fichero de test de unidad de la entidad GLOBAL
//	Saca por pantalla el resultado de los test
// incluir el modelo de la entidad GLOBAL

//testing funcionalidades globales
include '../Model/config.php';

function ExisteBD()
{
	error_reporting(0);
	global $ERRORS_array_test;

// creo array de almacen de test individual
	$global_array_test = array();

// usuario o contraseña no es correcto
//-------------------------------------------------------------------------------
	$global_array_test['entidad'] = 'GLOBAL';	
	$global_array_test['metodo'] = 'BD';
	$global_array_test['error'] = 'Usuario contraseña erronea';
	$global_array_test['error_esperado'] = "Access denied for user 'iu2018'@'localhost' (using password: YES)";
	$global_array_test['error_obtenido'] = '';
	$global_array_test['resultado'] = '';

	$mysqli = new mysqli(host, user, 'aaaa' , BD);
    	
	/* Comprueba la conexión */
	if ($mysqli->connect_errno) {
    	 $global_array_test['error_obtenido'] = $mysqli->connect_error;
    }


   	if ($global_array_test['error_obtenido'] === $global_array_test['error_esperado'])
	{
		$global_array_test['resultado'] = 'OK';
	}
	else
	{
		$global_array_test['resultado'] = 'FALSE';
	}

	array_push($ERRORS_array_test, $global_array_test);


	//NO existe la BD
	//------------------------------------------

	$global_array_test['entidad'] = 'GLOBAL';	
	$global_array_test['metodo'] = 'BD';
	$global_array_test['error'] = 'No existe la bd';
	$global_array_test['error_esperado'] = "Access denied for user 'iu2018'@'localhost' to database ";
	$global_array_test['error_obtenido'] = '';
	$global_array_test['resultado'] = '';

	$mysqli = new mysqli(host, user, pass , 'oo');
    	
	/* Comprueba la conexión */
	if ($mysqli->connect_errno) {
    	 $global_array_test['error_obtenido'] = $mysqli->connect_error;
    }


   	if ((strpos($global_array_test['error_esperado'],$global_array_test['error_obtenido'])) !== false)
	{
		$global_array_test['resultado'] = 'FALSE';
	}
	else
	{
		$global_array_test['resultado'] = 'OK';
	}

	array_push($ERRORS_array_test, $global_array_test);

    

	if ((strpos($mysqli->connect_error,"Name or service not known")) !== false)
    {
    	//la direccion no existe
    }

    if ((strpos($mysqli->connect_error,"Connection refused")) !== false)
    {
    	//el gestor no esta levantado
    }
	error_reporting(-1);

}




function ExistenTablas()
{
	global $ERRORS_array_test;

// creo array de almacen de test individual
	$global_array_test = array();

	$mysqli = new mysqli(host, user, pass , BD);


	$global_array_test['entidad'] = 'GLOBAL';	
	$global_array_test['metodo'] = 'Tabla CENTRO';
	$global_array_test['error'] = 'Existe CENTRO';
	$global_array_test['error_esperado'] = "Correcto";
	$global_array_test['error_obtenido'] = '';
	$global_array_test['resultado'] = '';


	$sql = "SELECT * 
			FROM information_schema.tables 
			WHERE table_schema = 'IU2018' AND table_name = 'CENTRO';";

	if (!$resultado = $mysqli->query($sql))
	{
		$global_array_test['error_obtenido'] = 'Error de gestor de base de datos';
	}else{
		if ($resultado->num_rows == 1)
	    {
			$global_array_test['error_obtenido'] = 'Correcto';
		}else{
			$global_array_test['error_obtenido'] = 'Incorrecto';
		}
	}

	if ($global_array_test['error_obtenido'] === $global_array_test['error_esperado'])
	{
		$global_array_test['resultado'] = 'OK';
	}
	else
	{
		$global_array_test['resultado'] = 'FALSE';
	}

	array_push($ERRORS_array_test, $global_array_test);

	$global_array_test['entidad'] = 'GLOBAL';	
	$global_array_test['metodo'] = 'Tabla EDIFICIO';
	$global_array_test['error'] = 'Existe EDIFICIO';
	$global_array_test['error_esperado'] = "Correcto";
	$global_array_test['error_obtenido'] = '';
	$global_array_test['resultado'] = '';


	$sql = "SELECT * 
			FROM information_schema.tables 
			WHERE table_schema = 'IU2018' AND table_name = 'EDIFICIO';";

	if (!$resultado = $mysqli->query($sql))
	{
		$global_array_test['error_obtenido'] = 'Error de gestor de base de datos';
	}else{
		if ($resultado->num_rows == 1)
	    {
			$global_array_test['error_obtenido'] = 'Correcto';
		}else{
			$global_array_test['error_obtenido'] = 'Incorrecto';
		}
	}

	if ($global_array_test['error_obtenido'] === $global_array_test['error_esperado'])
	{
		$global_array_test['resultado'] = 'OK';
	}
	else
	{
		$global_array_test['resultado'] = 'FALSE';
	}

	array_push($ERRORS_array_test, $global_array_test);


	$global_array_test['entidad'] = 'GLOBAL';	
	$global_array_test['metodo'] = 'Tabla ESPACIO';
	$global_array_test['error'] = 'Existe ESPACIO';
	$global_array_test['error_esperado'] = "Correcto";
	$global_array_test['error_obtenido'] = '';
	$global_array_test['resultado'] = '';


	$sql = "SELECT * 
			FROM information_schema.tables 
			WHERE table_schema = 'IU2018' AND table_name = 'ESPACIO';";

	if (!$resultado = $mysqli->query($sql))
	{
		$global_array_test['error_obtenido'] = 'Error de gestor de base de datos';
	}else{
		if ($resultado->num_rows == 1)
	    {
			$global_array_test['error_obtenido'] = 'Correcto';
		}else{
			$global_array_test['error_obtenido'] = 'Incorrecto';
		}
	}

	if ($global_array_test['error_obtenido'] === $global_array_test['error_esperado'])
	{
		$global_array_test['resultado'] = 'OK';
	}
	else
	{
		$global_array_test['resultado'] = 'FALSE';
	}

	array_push($ERRORS_array_test, $global_array_test);

	$global_array_test['entidad'] = 'GLOBAL';	
	$global_array_test['metodo'] = 'Tabla PROFESOR';
	$global_array_test['error'] = 'Existe PROFESOR';
	$global_array_test['error_esperado'] = "Correcto";
	$global_array_test['error_obtenido'] = '';
	$global_array_test['resultado'] = '';


	$sql = "SELECT * 
			FROM information_schema.tables 
			WHERE table_schema = 'IU2018' AND table_name = 'PROFESOR';";

	if (!$resultado = $mysqli->query($sql))
	{
		$global_array_test['error_obtenido'] = 'Error de gestor de base de datos';
	}else{
		if ($resultado->num_rows == 1)
	    {
			$global_array_test['error_obtenido'] = 'Correcto';
		}else{
			$global_array_test['error_obtenido'] = 'Incorrecto';
		}
	}

	if ($global_array_test['error_obtenido'] === $global_array_test['error_esperado'])
	{
		$global_array_test['resultado'] = 'OK';
	}
	else
	{
		$global_array_test['resultado'] = 'FALSE';
	}

	array_push($ERRORS_array_test, $global_array_test);

	$global_array_test['entidad'] = 'GLOBAL';	
	$global_array_test['metodo'] = 'Tabla PROF_ESPACIO';
	$global_array_test['error'] = 'Existe PROF_ESPACIO';
	$global_array_test['error_esperado'] = "Correcto";
	$global_array_test['error_obtenido'] = '';
	$global_array_test['resultado'] = '';


	$sql = "SELECT * 
			FROM information_schema.tables 
			WHERE table_schema = 'IU2018' AND table_name = 'PROF_ESPACIO';";

	if (!$resultado = $mysqli->query($sql))
	{
		$global_array_test['error_obtenido'] = 'Error de gestor de base de datos';
	}else{
		if ($resultado->num_rows == 1)
	    {
			$global_array_test['error_obtenido'] = 'Correcto';
		}else{
			$global_array_test['error_obtenido'] = 'Incorrecto';
		}
	}

	if ($global_array_test['error_obtenido'] === $global_array_test['error_esperado'])
	{
		$global_array_test['resultado'] = 'OK';
	}
	else
	{
		$global_array_test['resultado'] = 'FALSE';
	}

	array_push($ERRORS_array_test, $global_array_test);

	$global_array_test['entidad'] = 'GLOBAL';	
	$global_array_test['metodo'] = 'Tabla PROF_TITULACION';
	$global_array_test['error'] = 'Existe PROF_TITULACION';
	$global_array_test['error_esperado'] = "Correcto";
	$global_array_test['error_obtenido'] = '';
	$global_array_test['resultado'] = '';


	$sql = "SELECT * 
			FROM information_schema.tables 
			WHERE table_schema = 'IU2018' AND table_name = 'PROF_TITULACION';";

	if (!$resultado = $mysqli->query($sql))
	{
		$global_array_test['error_obtenido'] = 'Error de gestor de base de datos';
	}else{
		if ($resultado->num_rows == 1)
	    {
			$global_array_test['error_obtenido'] = 'Correcto';
		}else{
			$global_array_test['error_obtenido'] = 'Incorrecto';
		}
	}

	if ($global_array_test['error_obtenido'] === $global_array_test['error_esperado'])
	{
		$global_array_test['resultado'] = 'OK';
	}
	else
	{
		$global_array_test['resultado'] = 'FALSE';
	}

	array_push($ERRORS_array_test, $global_array_test);

	$global_array_test['entidad'] = 'GLOBAL';	
	$global_array_test['metodo'] = 'Tabla TITULACION';
	$global_array_test['error'] = 'Existe TITULACION';
	$global_array_test['error_esperado'] = "Correcto";
	$global_array_test['error_obtenido'] = '';
	$global_array_test['resultado'] = '';


	$sql = "SELECT * 
			FROM information_schema.tables 
			WHERE table_schema = 'IU2018' AND table_name = 'TITULACION';";

	if (!$resultado = $mysqli->query($sql))
	{
		$global_array_test['error_obtenido'] = 'Error de gestor de base de datos';
	}else{
		if ($resultado->num_rows == 1)
	    {
			$global_array_test['error_obtenido'] = 'Correcto';
		}else{
			$global_array_test['error_obtenido'] = 'Incorrecto';
		}
	}

	if ($global_array_test['error_obtenido'] === $global_array_test['error_esperado'])
	{
		$global_array_test['resultado'] = 'OK';
	}
	else
	{
		$global_array_test['resultado'] = 'FALSE';
	}

	array_push($ERRORS_array_test, $global_array_test);

	$global_array_test['entidad'] = 'GLOBAL';	
	$global_array_test['metodo'] = 'Tabla USUARIOS';
	$global_array_test['error'] = 'Existe USUARIOS';
	$global_array_test['error_esperado'] = "Correcto";
	$global_array_test['error_obtenido'] = '';
	$global_array_test['resultado'] = '';


	$sql = "SELECT * 
			FROM information_schema.tables 
			WHERE table_schema = 'IU2018' AND table_name = 'USUARIOS';";

	if (!$resultado = $mysqli->query($sql))
	{
		$global_array_test['error_obtenido'] = 'Error de gestor de base de datos';
	}else{
		if ($resultado->num_rows == 1)
	    {
			$global_array_test['error_obtenido'] = 'Correcto';
		}else{
			$global_array_test['error_obtenido'] = 'Incorrecto';
		}
	}

	if ($global_array_test['error_obtenido'] === $global_array_test['error_esperado'])
	{
		$global_array_test['resultado'] = 'OK';
	}
	else
	{
		$global_array_test['resultado'] = 'FALSE';
	}

	array_push($ERRORS_array_test, $global_array_test);


	$global_array_test['entidad'] = 'GLOBAL';	
	$global_array_test['metodo'] = 'Tabla TABLANULL';
	$global_array_test['error'] = 'Existe TABLANULL';
	$global_array_test['error_esperado'] = "Incorrecto";
	$global_array_test['error_obtenido'] = '';
	$global_array_test['resultado'] = '';


	$sql = "SELECT * 
			FROM information_schema.tables 
			WHERE table_schema = 'IU2018' AND table_name = 'TABLANULL';";

	if (!$resultado = $mysqli->query($sql))
	{
		$global_array_test['error_obtenido'] = 'Error de gestor de base de datos';
	}else{
		if ($resultado->num_rows == 1)
	    {
			$global_array_test['error_obtenido'] = 'Correcto';
		}else{
			$global_array_test['error_obtenido'] = 'Incorrecto';
		}
	}

	if ($global_array_test['error_obtenido'] === $global_array_test['error_esperado'])
	{
		$global_array_test['resultado'] = 'OK';
	}
	else
	{
		$global_array_test['resultado'] = 'FALSE';
	}

	array_push($ERRORS_array_test, $global_array_test);


}

ExisteBD();
ExistenTablas();

?>