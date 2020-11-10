<?php 
// Autor : 70ky5e
// Fecha : 02/12/2019
// Descripción : 
//	Fichero de test de unidad de la entidad CENTRO
//	Saca por pantalla el resultado de los test
// incluir el modelo de la entidad CENTRO
include_once '../Model/EDIFICIO_Model.php';

function EDIFICIO_VALIDACION_test(){
    
    global $ERRORS_array_test;
// creo array de almacen de test individual
	$EDIFICIOS_array_test1 = array();

// Comprobar el login no existe
//-------------------------------------------------------------------------------

	$codedificio = 'logine-2r';
	$nombreedificio = 'edificio';
	$direccionedificio = 'jaunan 21 1ºA';
    $campusedificio = 'ourense';

	$edificios = new EDIFICIO_Model($codedificio,$nombreedificio,$direccionedificio,$campusedificio);
	
	$EDIFICIOS_array_test1['entidad'] = 'EDIFICIO';	
	$EDIFICIOS_array_test1['atributo'] = 'codedificio';
	$EDIFICIOS_array_test1['error'] = 'El formato de codedificio es correcto';
	$EDIFICIOS_array_test1['error_esperado'] = 'true';
	$EDIFICIOS_array_test1['error_obtenido'] = '';
    $EDIFICIOS_array_test1['resultado'] = '';
    
    $EDIFICIOS_array_test1['error_obtenido'] = $edificios->Comprobar_codedificio();

    if (($EDIFICIOS_array_test1['error_obtenido'] = $EDIFICIOS_array_test1['error_obtenido'] ? 'true' : 'false') === $EDIFICIOS_array_test1['error_esperado'])
	{
		$EDIFICIOS_array_test1['resultado'] = 'OK';
	}
	else
	{
		$EDIFICIOS_array_test1['resultado'] = 'FALSE';
	}

	array_push($ERRORS_array_test, $EDIFICIOS_array_test1);


	$EDIFICIOS_array_test1['entidad'] = 'EDIFICIO';	
	$EDIFICIOS_array_test1['atributo'] = 'nombreedificio';
	$EDIFICIOS_array_test1['error'] = 'El formato de nombreedificio es correcto';
	$EDIFICIOS_array_test1['error_esperado'] = 'true';
	$EDIFICIOS_array_test1['error_obtenido'] = '';
    $EDIFICIOS_array_test1['resultado'] = '';
	
	$EDIFICIOS_array_test1['error_obtenido'] = $edificios->Comprobar_nombreedificio();

    if (($EDIFICIOS_array_test1['error_obtenido'] = $EDIFICIOS_array_test1['error_obtenido'] ? 'true' : 'false') === $EDIFICIOS_array_test1['error_esperado'])
	{
		$EDIFICIOS_array_test1['resultado'] = 'OK';
	}
	else
	{
		$EDIFICIOS_array_test1['resultado'] = 'FALSE';
	}

	array_push($ERRORS_array_test, $EDIFICIOS_array_test1);

	$EDIFICIOS_array_test1['entidad'] = 'EDIFICIO';	
	$EDIFICIOS_array_test1['atributo'] = 'direccionedificio';
	$EDIFICIOS_array_test1['error'] = 'El formato de direccionedificio es correcto';
	$EDIFICIOS_array_test1['error_esperado'] = 'true';
	$EDIFICIOS_array_test1['error_obtenido'] = '';
    $EDIFICIOS_array_test1['resultado'] = '';
	
	$EDIFICIOS_array_test1['error_obtenido'] = $edificios->Comprobar_direccionedificio();

    if (($EDIFICIOS_array_test1['error_obtenido'] = $EDIFICIOS_array_test1['error_obtenido'] ? 'true' : 'false') === $EDIFICIOS_array_test1['error_esperado'])
	{
		$EDIFICIOS_array_test1['resultado'] = 'OK';
	}
	else
	{
		$EDIFICIOS_array_test1['resultado'] = 'FALSE';
	}

	array_push($ERRORS_array_test, $EDIFICIOS_array_test1);
	
	$EDIFICIOS_array_test1['entidad'] = 'EDIFICIO';	
	$EDIFICIOS_array_test1['atributo'] = 'campusedificio';
	$EDIFICIOS_array_test1['error'] = 'El formato de campusedificio es correcto';
	$EDIFICIOS_array_test1['error_esperado'] = 'true';
	$EDIFICIOS_array_test1['error_obtenido'] = '';
    $EDIFICIOS_array_test1['resultado'] = '';

	$EDIFICIOS_array_test1['error_obtenido'] = $edificios->Comprobar_campusedificio();

    if (($EDIFICIOS_array_test1['error_obtenido'] = $EDIFICIOS_array_test1['error_obtenido'] ? 'true' : 'false') === $EDIFICIOS_array_test1['error_esperado'])
	{
		$EDIFICIOS_array_test1['resultado'] = 'OK';
	}
	else
	{
		$EDIFICIOS_array_test1['resultado'] = 'FALSE';
	}

    array_push($ERRORS_array_test, $EDIFICIOS_array_test1);


	$EDIFICIOS_array_test1['entidad'] = 'EDIFICIO';	
	$EDIFICIOS_array_test1['atributo'] = 'TODOS';
	$EDIFICIOS_array_test1['error'] = 'El formato de todos los atributos es correcto';
	$EDIFICIOS_array_test1['error_esperado'] = 'true';
	$EDIFICIOS_array_test1['error_obtenido'] = '';
    $EDIFICIOS_array_test1['resultado'] = '';

	$EDIFICIOS_array_test1['error_obtenido'] = $edificios->Comprobar_atributos();

    if (($EDIFICIOS_array_test1['error_obtenido'] = $EDIFICIOS_array_test1['error_obtenido'] ? 'true' : 'false') === $EDIFICIOS_array_test1['error_esperado'])
	{
		$EDIFICIOS_array_test1['resultado'] = 'OK';
	}
	else
	{
		$EDIFICIOS_array_test1['resultado'] = 'FALSE';
	}

	array_push($ERRORS_array_test, $EDIFICIOS_array_test1);


	$codedificio = 'logine- 2r';
	$nombreedificio = 'sad22';
	$direccionedificio = 'sssas´´ds 233';
    $campusedificio = 'Oure3 nse';

	$edificios = new EDIFICIO_Model($codedificio,$nombreedificio,$direccionedificio,$campusedificio);
	
	
	$EDIFICIOS_array_test1['entidad'] = 'EDIFICIO';	
	$EDIFICIOS_array_test1['atributo'] = 'codedificio';
	$EDIFICIOS_array_test1['error'] = 'El formato de codedificio no es correcto';
	$EDIFICIOS_array_test1['error_esperado'] = 'false';
	$EDIFICIOS_array_test1['error_obtenido'] = '';
    $EDIFICIOS_array_test1['resultado'] = '';
    
    $EDIFICIOS_array_test1['error_obtenido'] = $edificios->Comprobar_codedificio();

    if (($EDIFICIOS_array_test1['error_obtenido'] = $EDIFICIOS_array_test1['error_obtenido'] ? 'true' : 'false') === $EDIFICIOS_array_test1['error_esperado'])
	{
		$EDIFICIOS_array_test1['resultado'] = 'OK';
	}
	else
	{
		$EDIFICIOS_array_test1['resultado'] = 'FALSE';
	}

	array_push($ERRORS_array_test, $EDIFICIOS_array_test1);


	$EDIFICIOS_array_test1['entidad'] = 'EDIFICIO';	
	$EDIFICIOS_array_test1['atributo'] = 'nombreedificio';
	$EDIFICIOS_array_test1['error'] = 'El formato de nombreedificio no es correcto';
	$EDIFICIOS_array_test1['error_esperado'] = 'false';
	$EDIFICIOS_array_test1['error_obtenido'] = '';
    $EDIFICIOS_array_test1['resultado'] = '';
	
	$EDIFICIOS_array_test1['error_obtenido'] = $edificios->Comprobar_nombreedificio();

    if (($EDIFICIOS_array_test1['error_obtenido'] = $EDIFICIOS_array_test1['error_obtenido'] ? 'true' : 'false') === $EDIFICIOS_array_test1['error_esperado'])
	{
		$EDIFICIOS_array_test1['resultado'] = 'OK';
	}
	else
	{
		$EDIFICIOS_array_test1['resultado'] = 'FALSE';
	}

	array_push($ERRORS_array_test, $EDIFICIOS_array_test1);

	$EDIFICIOS_array_test1['entidad'] = 'EDIFICIO';	
	$EDIFICIOS_array_test1['atributo'] = 'direccionedificio';
	$EDIFICIOS_array_test1['error'] = 'El formato de direccionedificio no es correcto';
	$EDIFICIOS_array_test1['error_esperado'] = 'false';
	$EDIFICIOS_array_test1['error_obtenido'] = '';
    $EDIFICIOS_array_test1['resultado'] = '';
	
	$EDIFICIOS_array_test1['error_obtenido'] = $edificios->Comprobar_direccionedificio();

    if (($EDIFICIOS_array_test1['error_obtenido'] = $EDIFICIOS_array_test1['error_obtenido'] ? 'true' : 'false') === $EDIFICIOS_array_test1['error_esperado'])
	{
		$EDIFICIOS_array_test1['resultado'] = 'OK';
	}
	else
	{
		$EDIFICIOS_array_test1['resultado'] = 'FALSE';
	}

	array_push($ERRORS_array_test, $EDIFICIOS_array_test1);
	
	$EDIFICIOS_array_test1['entidad'] = 'EDIFICIO';	
	$EDIFICIOS_array_test1['atributo'] = 'campusedificio';
	$EDIFICIOS_array_test1['error'] = 'El formato de campusedificio no es correcto';
	$EDIFICIOS_array_test1['error_esperado'] = 'false';
	$EDIFICIOS_array_test1['error_obtenido'] = '';
    $EDIFICIOS_array_test1['resultado'] = '';

	$EDIFICIOS_array_test1['error_obtenido'] = $edificios->Comprobar_campusedificio();

    if (($EDIFICIOS_array_test1['error_obtenido'] = $EDIFICIOS_array_test1['error_obtenido'] ? 'true' : 'false') === $EDIFICIOS_array_test1['error_esperado'])
	{
		$EDIFICIOS_array_test1['resultado'] = 'OK';
	}
	else
	{
		$EDIFICIOS_array_test1['resultado'] = 'FALSE';
	}

    array_push($ERRORS_array_test, $EDIFICIOS_array_test1);



	$EDIFICIOS_array_test1['entidad'] = 'EDIFICIO';	
	$EDIFICIOS_array_test1['atributo'] = 'TODOS';
	$EDIFICIOS_array_test1['error'] = 'El formato de los atributos no es correcto';
	$EDIFICIOS_array_test1['error_esperado'] = 'array';
	$EDIFICIOS_array_test1['error_obtenido'] = '';
    $EDIFICIOS_array_test1['resultado'] = '';

	$EDIFICIOS_array_test1['error_obtenido'] = gettype($edificios->Comprobar_atributos());
    if ($EDIFICIOS_array_test1['error_obtenido'] === $EDIFICIOS_array_test1['error_esperado'])
	{
		$EDIFICIOS_array_test1['resultado'] = 'OK';
	}
	else
	{
		$EDIFICIOS_array_test1['resultado'] = 'FALSE';
	}

	array_push($ERRORS_array_test, $EDIFICIOS_array_test1);
    
}

EDIFICIO_VALIDACION_test();
?>