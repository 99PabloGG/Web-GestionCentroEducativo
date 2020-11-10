<?php 
// Autor : 70ky5e
// Fecha : 02/12/2019
// Descripción : 
//	Fichero de test de unidad de la entidad TITULACION
//	Saca por pantalla el resultado de los test
// incluir el modelo de la entidad TITULACION

include_once '../Model/TITULACION_Model.php';

function TITULACION_VALIDACION_test(){
    
    global $ERRORS_array_test;
// creo array de almacen de test individual
	$TITULACIONES_array_test1 = array();

// Comprobar el login no existe
//-------------------------------------------------------------------------------

	$codtitulacion = 'logine2r';
	$codcentro = 'sad22';
	$nombretitulacion = 'Interfaces de Usuario';
	$responsabletitulacion = 'Javier Fernández';

	$titulaciones = new TITULACION_Model($codtitulacion,$codcentro,$nombretitulacion,$responsabletitulacion);
	
	$TITULACIONES_array_test1['entidad'] = 'TITULACION';	
	$TITULACIONES_array_test1['atributo'] = 'codtitulacion';
	$TITULACIONES_array_test1['error'] = 'El formato de codtitulacion es correcto';
	$TITULACIONES_array_test1['error_esperado'] = 'true';
	$TITULACIONES_array_test1['error_obtenido'] = '';
    $TITULACIONES_array_test1['resultado'] = '';
    
    $TITULACIONES_array_test1['error_obtenido'] = $titulaciones->Comprobar_codtitulacion();

    if (($TITULACIONES_array_test1['error_obtenido'] = $TITULACIONES_array_test1['error_obtenido'] ? 'true' : 'false') === $TITULACIONES_array_test1['error_esperado'])
	{
		$TITULACIONES_array_test1['resultado'] = 'OK';
	}
	else
	{
		$TITULACIONES_array_test1['resultado'] = 'FALSE';
	}

	array_push($ERRORS_array_test, $TITULACIONES_array_test1);


	$TITULACIONES_array_test1['entidad'] = 'TITULACION';	
	$TITULACIONES_array_test1['atributo'] = 'codcentro';
	$TITULACIONES_array_test1['error'] = 'El formato de codcentro es correcto';
	$TITULACIONES_array_test1['error_esperado'] = 'true';
	$TITULACIONES_array_test1['error_obtenido'] = '';
    $TITULACIONES_array_test1['resultado'] = '';
	
	$TITULACIONES_array_test1['error_obtenido'] = $titulaciones->Comprobar_codcentro();

    if (($TITULACIONES_array_test1['error_obtenido'] = $TITULACIONES_array_test1['error_obtenido'] ? 'true' : 'false') === $TITULACIONES_array_test1['error_esperado'])
	{
		$TITULACIONES_array_test1['resultado'] = 'OK';
	}
	else
	{
		$TITULACIONES_array_test1['resultado'] = 'FALSE';
	}

	array_push($ERRORS_array_test, $TITULACIONES_array_test1);

	$TITULACIONES_array_test1['entidad'] = 'TITULACION';	
	$TITULACIONES_array_test1['atributo'] = 'nombretitulacion';
	$TITULACIONES_array_test1['error'] = 'El formato de nombretitulacion es correcto';
	$TITULACIONES_array_test1['error_esperado'] = 'true';
	$TITULACIONES_array_test1['error_obtenido'] = '';
    $TITULACIONES_array_test1['resultado'] = '';
	
	$TITULACIONES_array_test1['error_obtenido'] = $titulaciones->Comprobar_nombretitulacion();

    if (($TITULACIONES_array_test1['error_obtenido'] = $TITULACIONES_array_test1['error_obtenido'] ? 'true' : 'false') === $TITULACIONES_array_test1['error_esperado'])
	{
		$TITULACIONES_array_test1['resultado'] = 'OK';
	}
	else
	{
		$TITULACIONES_array_test1['resultado'] = 'FALSE';
	}

	array_push($ERRORS_array_test, $TITULACIONES_array_test1);
	
	$TITULACIONES_array_test1['entidad'] = 'TITULACION';	
	$TITULACIONES_array_test1['atributo'] = 'responsabletitulacion';
	$TITULACIONES_array_test1['error'] = 'El formato de responsabletitulacion es correcto';
	$TITULACIONES_array_test1['error_esperado'] = 'true';
	$TITULACIONES_array_test1['error_obtenido'] = '';
    $TITULACIONES_array_test1['resultado'] = '';

	$TITULACIONES_array_test1['error_obtenido'] = $titulaciones->Comprobar_responsabletitulacion();

    if (($TITULACIONES_array_test1['error_obtenido'] = $TITULACIONES_array_test1['error_obtenido'] ? 'true' : 'false') === $TITULACIONES_array_test1['error_esperado'])
	{
		$TITULACIONES_array_test1['resultado'] = 'OK';
	}
	else
	{
		$TITULACIONES_array_test1['resultado'] = 'FALSE';
	}

    array_push($ERRORS_array_test, $TITULACIONES_array_test1);

	$TITULACIONES_array_test1['entidad'] = 'TITULACION';	
	$TITULACIONES_array_test1['atributo'] = 'TODOS';
	$TITULACIONES_array_test1['error'] = 'El formato de todos los atributos es correcto';
	$TITULACIONES_array_test1['error_esperado'] = 'true';
	$TITULACIONES_array_test1['error_obtenido'] = '';
    $TITULACIONES_array_test1['resultado'] = '';

	$TITULACIONES_array_test1['error_obtenido'] = $titulaciones->Comprobar_atributos();

    if (($TITULACIONES_array_test1['error_obtenido'] = $TITULACIONES_array_test1['error_obtenido'] ? 'true' : 'false') === $TITULACIONES_array_test1['error_esperado'])
	{
		$TITULACIONES_array_test1['resultado'] = 'OK';
	}
	else
	{
		$TITULACIONES_array_test1['resultado'] = 'FALSE';
	}

	array_push($ERRORS_array_test, $TITULACIONES_array_test1);


	$codtitulacion = 'logine -2rror';
	$codcentro = 'sad2 2';
	$nombretitulacion = 'Interfa2ces de Usuario';
	$responsabletitulacion = 'Javier *Fernández';

    $titulaciones = new TITULACION_Model($codtitulacion,$codcentro,$nombretitulacion,$responsabletitulacion);
	
	
	$TITULACIONES_array_test1['entidad'] = 'TITULACION';	
	$TITULACIONES_array_test1['atributo'] = 'codtitulacion';
	$TITULACIONES_array_test1['error'] = 'El formato de codtitulacion no es correcto';
	$TITULACIONES_array_test1['error_esperado'] = 'false';
	$TITULACIONES_array_test1['error_obtenido'] = '';
    $TITULACIONES_array_test1['resultado'] = '';
    
    $TITULACIONES_array_test1['error_obtenido'] = $titulaciones->Comprobar_codtitulacion();

    if (($TITULACIONES_array_test1['error_obtenido'] = $TITULACIONES_array_test1['error_obtenido'] ? 'true' : 'false') === $TITULACIONES_array_test1['error_esperado'])
	{
		$TITULACIONES_array_test1['resultado'] = 'OK';
	}
	else
	{
		$TITULACIONES_array_test1['resultado'] = 'FALSE';
	}

	array_push($ERRORS_array_test, $TITULACIONES_array_test1);


	$TITULACIONES_array_test1['entidad'] = 'TITULACION';	
	$TITULACIONES_array_test1['atributo'] = 'codcentro';
	$TITULACIONES_array_test1['error'] = 'El formato de codcentro no es correcto';
	$TITULACIONES_array_test1['error_esperado'] = 'false';
	$TITULACIONES_array_test1['error_obtenido'] = '';
    $TITULACIONES_array_test1['resultado'] = '';
	
	$TITULACIONES_array_test1['error_obtenido'] = $titulaciones->Comprobar_codcentro();

    if (($TITULACIONES_array_test1['error_obtenido'] = $TITULACIONES_array_test1['error_obtenido'] ? 'true' : 'false') === $TITULACIONES_array_test1['error_esperado'])
	{
		$TITULACIONES_array_test1['resultado'] = 'OK';
	}
	else
	{
		$TITULACIONES_array_test1['resultado'] = 'FALSE';
	}

	array_push($ERRORS_array_test, $TITULACIONES_array_test1);

	$TITULACIONES_array_test1['entidad'] = 'TITULACION';	
	$TITULACIONES_array_test1['atributo'] = 'nombretitulacion';
	$TITULACIONES_array_test1['error'] = 'El formato de nombretitulacion no es correcto';
	$TITULACIONES_array_test1['error_esperado'] = 'false';
	$TITULACIONES_array_test1['error_obtenido'] = '';
    $TITULACIONES_array_test1['resultado'] = '';
	
	$TITULACIONES_array_test1['error_obtenido'] = $titulaciones->Comprobar_nombretitulacion();

    if (($TITULACIONES_array_test1['error_obtenido'] = $TITULACIONES_array_test1['error_obtenido'] ? 'true' : 'false') === $TITULACIONES_array_test1['error_esperado'])
	{
		$TITULACIONES_array_test1['resultado'] = 'OK';
	}
	else
	{
		$TITULACIONES_array_test1['resultado'] = 'FALSE';
	}

	array_push($ERRORS_array_test, $TITULACIONES_array_test1);
	
	$TITULACIONES_array_test1['entidad'] = 'TITULACION';	
	$TITULACIONES_array_test1['atributo'] = 'responsabletitulacion';
	$TITULACIONES_array_test1['error'] = 'El formato de responsabletitulacion no es correcto';
	$TITULACIONES_array_test1['error_esperado'] = 'false';
	$TITULACIONES_array_test1['error_obtenido'] = '';
    $TITULACIONES_array_test1['resultado'] = '';

	$TITULACIONES_array_test1['error_obtenido'] = $titulaciones->Comprobar_responsabletitulacion();

    if (($TITULACIONES_array_test1['error_obtenido'] = $TITULACIONES_array_test1['error_obtenido'] ? 'true' : 'false') === $TITULACIONES_array_test1['error_esperado'])
	{
		$TITULACIONES_array_test1['resultado'] = 'OK';
	}
	else
	{
		$TITULACIONES_array_test1['resultado'] = 'FALSE';
	}

    array_push($ERRORS_array_test, $TITULACIONES_array_test1);


	$TITULACIONES_array_test1['entidad'] = 'TITULACION';	
	$TITULACIONES_array_test1['atributo'] = 'TODOS';
	$TITULACIONES_array_test1['error'] = 'El formato de los atributos no es correcto';
	$TITULACIONES_array_test1['error_esperado'] = 'array';
	$TITULACIONES_array_test1['error_obtenido'] = '';
    $TITULACIONES_array_test1['resultado'] = '';

	$TITULACIONES_array_test1['error_obtenido'] = gettype($titulaciones->Comprobar_atributos());
    if ($TITULACIONES_array_test1['error_obtenido'] === $TITULACIONES_array_test1['error_esperado'])
	{
		$TITULACIONES_array_test1['resultado'] = 'OK';
	}
	else
	{
		$TITULACIONES_array_test1['resultado'] = 'FALSE';
	}

	array_push($ERRORS_array_test, $TITULACIONES_array_test1);
    
}

TITULACION_VALIDACION_test();
?>