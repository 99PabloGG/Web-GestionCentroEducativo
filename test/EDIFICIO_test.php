<?php
// Autor : 70ky5e
// Fecha : 02/12/2019
// Descripción : 
//	Fichero de test de unidad de la entidad EDIFICIO
//	Saca por pantalla el resultado de los test
// incluir el modelo de la entidad EDIFICIO
include_once '../Model/EDIFICIO_Model.php';


function EDIFICIO_ADD_test()
{

	global $ERRORS_array_test;
// creo array de almacen de test individual
	$EDIFICIO_array_test1 = array();

// Comprobar el login existe
	$EDIFICIO_array_test1['entidad'] = 'EDIFICIO';	
	$EDIFICIO_array_test1['metodo'] = 'ADD';
	$EDIFICIO_array_test1['error'] = 'El edificio ya existe';
	$EDIFICIO_array_test1['error_esperado'] = 'Inserción fallida: el elemento ya existe';
	$EDIFICIO_array_test1['error_obtenido'] = '';
	$EDIFICIO_array_test1['resultado'] = '';
	
	// Relleno los datos de centro
	$codedificio = 'miusuario';
	$nombreedificio = 'mipassword';
	$direccionedificio = 'Auga';
	$campusedificio = 'minombre'; 


// creo el modelo
	$edificios = new EDIFICIO_Model($codedificio,$nombreedificio,$direccionedificio,$campusedificio);
// inserto la tupla
	$edificios->ADD();

	$EDIFICIO_array_test1['error_obtenido'] = $edificios->ADD();
	if ($EDIFICIO_array_test1['error_obtenido'] === $EDIFICIO_array_test1['error_esperado'])
	{
		$EDIFICIO_array_test1['resultado'] = 'OK';
	}
	else
	{
		$EDIFICIO_array_test1['resultado'] = 'FALSE';
	}

	array_push($ERRORS_array_test, $EDIFICIO_array_test1);

	$edificios->DELETE();	


// Comprobar Inserción realizada con éxito
	$EDIFICIO_array_test1['entidad'] = 'EDIFICIO';	
	$EDIFICIO_array_test1['metodo'] = 'ADD';
	$EDIFICIO_array_test1['error'] = 'Inserción realizada con éxito';
	$EDIFICIO_array_test1['error_esperado'] = 'Inserción realizada con éxito';
	$EDIFICIO_array_test1['error_obtenido'] = '';
	$EDIFICIO_array_test1['resultado'] = '';
	
	$codedificio = 'GA01517';
	$campusedificio = 'AUGA';
	$direccionedificio = 'SE015172'; 
	$nombreedificio = 'Auga';

	$edificios = new EDIFICIO_Model($codedificio,$nombreedificio,$direccionedificio,$campusedificio);
	$EDIFICIO_array_test1['error_obtenido'] = $edificios->ADD();
	if ($EDIFICIO_array_test1['error_obtenido'] === $EDIFICIO_array_test1['error_esperado'])
	{
		$EDIFICIO_array_test1['resultado'] = 'OK';
	}
	else
	{
		$EDIFICIO_array_test1['resultado'] = 'FALSE';
	}

	array_push($ERRORS_array_test, $EDIFICIO_array_test1);

	$edificios->DELETE();


}

function EDIFICIO_DELETE_test()
{

	global $ERRORS_array_test;
// creo array de almacen de test individual
	$EDIFICIO_array_test1 = array();

// Comprobar el login existe
	$EDIFICIO_array_test1['entidad'] = 'EDIFICIO';	
	$EDIFICIO_array_test1['metodo'] = 'DELETE';
	$EDIFICIO_array_test1['error'] = 'Borrado realizado con éxito';
	$EDIFICIO_array_test1['error_esperado'] = 'Borrado realizado con éxito';
	$EDIFICIO_array_test1['error_obtenido'] = '';
	$EDIFICIO_array_test1['resultado'] = '';
 
 	$codedificio = 'GA01517';
	$campusedificio = 'AUGA';
	$direccionedificio = 'SE015172'; 
	$nombreedificio = 'Auga';


	$edificios = new EDIFICIO_Model($codedificio,$nombreedificio,$direccionedificio,$campusedificio);
 	$edificios->ADD();

 	$EDIFICIO_array_test1['error_obtenido'] = $edificios->DELETE();
 	if ($EDIFICIO_array_test1['error_obtenido'] === $EDIFICIO_array_test1['error_esperado'])
	{
		$EDIFICIO_array_test1['resultado'] = 'OK';
	}
	else
	{
		$EDIFICIO_array_test1['resultado'] = 'FALSE';
	}

	array_push($ERRORS_array_test, $EDIFICIO_array_test1);

	$EDIFICIO_array_test1['entidad'] = 'EDIFICIO';	
	$EDIFICIO_array_test1['metodo'] = 'DELETE';
	$EDIFICIO_array_test1['error'] = 'Error de gestor de base de datos';
	$EDIFICIO_array_test1['error_esperado'] = 'Error de gestor de base de datos';
	$EDIFICIO_array_test1['error_obtenido'] = '';
	$EDIFICIO_array_test1['resultado'] = '';
 
 	$codedificio = 'GA01517';
	$campusedificio = 'SE015172';
	$direccionedificio = 'SE015172'; 
	$nombreedificio = 'Auga';


	$edificios = new EDIFICIO_Model($codedificio,$nombreedificio,$direccionedificio,$campusedificio);
 	$edificios->ADD();
 	$edificios->codedificio = 'SE015172\' ,\'kdfalkj';


 	$EDIFICIO_array_test1['error_obtenido'] = $edificios->DELETE();
 	if ($EDIFICIO_array_test1['error_obtenido'] === $EDIFICIO_array_test1['error_esperado'])
	{
		$EDIFICIO_array_test1['resultado'] = 'OK';
	}
	else
	{
		$EDIFICIO_array_test1['resultado'] = 'FALSE';
	}
	$edificios->codedificio = 'GA01517';
	$edificios->DELETE();
	array_push($ERRORS_array_test, $EDIFICIO_array_test1);

}

function EDIFICIO_EDIT_test()
{

	global $ERRORS_array_test;
// creo array de almacen de test individual
	$EDIFICIO_array_test1 = array();

// Comprobar el login existe
	$EDIFICIO_array_test1['entidad'] = 'EDIFICIO';	
	$EDIFICIO_array_test1['metodo'] = 'EDIT';
	$EDIFICIO_array_test1['error'] = 'Actualización realizada con éxito';
	$EDIFICIO_array_test1['error_esperado'] = 'Actualización realizada con éxito';
	$EDIFICIO_array_test1['error_obtenido'] = '';
	$EDIFICIO_array_test1['resultado'] = '';
 
 	$codedificio = 'GA01517';
	$campusedificio = 'AUGA';
	$direccionedificio = 'SE015172'; 
	$nombreedificio = 'Auga';


	$edificios = new EDIFICIO_Model($codedificio,$nombreedificio,$direccionedificio,$campusedificio);
 	$edificios->ADD();

 	$edificios->nombreedificio = 'Val';

 	$EDIFICIO_array_test1['error_obtenido'] = $edificios->EDIT();
	if ($EDIFICIO_array_test1['error_obtenido'] === $EDIFICIO_array_test1['error_esperado'])
	{
		$EDIFICIO_array_test1['resultado'] = 'OK';
	}
	else
	{
		$EDIFICIO_array_test1['resultado'] = 'FALSE';
	}

	array_push($ERRORS_array_test, $EDIFICIO_array_test1);	

	$edificios->DELETE();

}

function EDIFICIO_SEARCH_test()
{


	global $ERRORS_array_test;
// creo array de almacen de test individual
	$EDIFICIO_array_test1 = array();

// Comprobar el login existe
	$EDIFICIO_array_test1['entidad'] = 'EDIFICIO';	
	$EDIFICIO_array_test1['metodo'] = 'SEARCH';
	$EDIFICIO_array_test1['error'] = 'Búsqueda realizada correctamente';
	$EDIFICIO_array_test1['error_esperado'] = 'object';
	$EDIFICIO_array_test1['error_obtenido'] = '';
	$EDIFICIO_array_test1['resultado'] = '';
 
 	$codedificio = 'GA01517';
	$campusedificio = 'SE015172';
	$direccionedificio = 'SE015172'; 
	$nombreedificio = 'Auga';


	$edificios = new EDIFICIO_Model($codedificio,$nombreedificio,$direccionedificio,$campusedificio);
 	$edificios->ADD();

 	$edificios2 = new EDIFICIO_Model('','','','Auga');

 	$EDIFICIO_array_test1['error_obtenido'] = gettype($edificios2->SEARCH());

 	if ($EDIFICIO_array_test1['error_obtenido'] === $EDIFICIO_array_test1['error_esperado'])
	{
		$EDIFICIO_array_test1['resultado'] = 'OK';
	}
	else
	{
		$EDIFICIO_array_test1['resultado'] = 'FALSE';
	}

	array_push($ERRORS_array_test, $EDIFICIO_array_test1);
	$edificios->DELETE();

// creo array de almacen de test individual
	$EDIFICIO_array_test1 = array();

// Comprobar el login existe
	$EDIFICIO_array_test1['entidad'] = 'EDIFICIO';	
	$EDIFICIO_array_test1['metodo'] = 'SEARCH';
	$EDIFICIO_array_test1['error'] = 'Búsqueda no realizada correctamente';
	$EDIFICIO_array_test1['error_esperado'] = 'Error de gestor de base de datos';
	$EDIFICIO_array_test1['error_obtenido'] = '';
	$EDIFICIO_array_test1['resultado'] = '';
 
 	$codedificio = 'GA01517';
	$campusedificio = 'SE015172';
	$direccionedificio = 'SE015172'; 
	$nombreedificio = 'Auga';

	$edificios = new EDIFICIO_Model($codedificio,$nombreedificio,$direccionedificio,$campusedificio);
 	$edificios->ADD();

 	$edificios2 = new EDIFICIO_Model('','','A\' ,\'uga','');

 	$EDIFICIO_array_test1['error_obtenido'] = $edificios2->SEARCH();

 	if ($EDIFICIO_array_test1['error_obtenido'] === $EDIFICIO_array_test1['error_esperado'])
	{
		$EDIFICIO_array_test1['resultado'] = 'OK';
	}
	else
	{
		$EDIFICIO_array_test1['resultado'] = 'FALSE';
	}

	array_push($ERRORS_array_test, $EDIFICIO_array_test1);
	$edificios->DELETE();
}

function EDIFICIO_RellenaDatos_test()
{

	global $ERRORS_array_test;
// creo array de almacen de test individual
	$EDIFICIO_array_test1 = array();

// Comprobar devuelve recordset
//----------------------------------------------
	$EDIFICIO_array_test1['entidad'] = 'EDIFICIO';	
	$EDIFICIO_array_test1['metodo'] = 'RellenaDatos';
	$EDIFICIO_array_test1['error'] = 'Devuelve los datos';
	$EDIFICIO_array_test1['error_esperado'] = 'array';
	$EDIFICIO_array_test1['error_obtenido'] = '';
	$EDIFICIO_array_test1['resultado'] = '';
	
	$codedificio = '5qphcblk';
	$campusedificio = 'AUGA';
	$nombreedificio = 'Auga';
	$direccionedificio = 'SE015172kdfalkj'; 

	$edificios = new EDIFICIO_Model($codedificio,$nombreedificio,$direccionedificio,$campusedificio);
// inserto la tupla
	$EDIFICIO_array_test1['error_obtenido'] = $edificios->ADD();

	$EDIFICIO_array_test1['error_obtenido'] = gettype($edificios->RellenaDatos());
	if ($EDIFICIO_array_test1['error_obtenido'] === $EDIFICIO_array_test1['error_esperado'])
	{
		$EDIFICIO_array_test1['resultado'] = 'OK';
	}
	else
	{
		$EDIFICIO_array_test1['resultado'] = 'FALSE';
	}

	array_push($ERRORS_array_test, $EDIFICIO_array_test1);

	$edificios->DELETE();
}
	EDIFICIO_ADD_test();
	EDIFICIO_DELETE_test();
	EDIFICIO_EDIT_test();
	EDIFICIO_SEARCH_test();
	EDIFICIO_RellenaDatos_test();

?>