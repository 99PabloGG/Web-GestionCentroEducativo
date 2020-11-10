<?php
// Autor : 70ky5e
// Fecha : 02/12/2019
// Descripción : 
//	Fichero de test de unidad de la entidad CENTRO
//	Saca por pantalla el resultado de los test
// incluir el modelo de la entidad CENTRO
include_once '../Model/CENTRO_Model.php';
include_once '../Model/EDIFICIO_Model.php';


function CENTRO_ADD_test()
{

	global $ERRORS_array_test;
// creo array de almacen de test individual
	$CENTRO_array_test1 = array();

// Comprobar el login existe
	$CENTRO_array_test1['entidad'] = 'CENTRO';	
	$CENTRO_array_test1['metodo'] = 'ADD';
	$CENTRO_array_test1['error'] = 'El centro ya existe';
	$CENTRO_array_test1['error_esperado'] = 'Inserción fallida: el elemento ya existe';
	$CENTRO_array_test1['error_obtenido'] = '';
	$CENTRO_array_test1['resultado'] = '';
	

	$codedificio = '5qphcblk';
	$campusedificio = 'AUGA';
	$nombreedificio = 'Auga';
	$direccionedificio = 'SE015172kdfalkj'; 

	$edificios = new EDIFICIO_Model($codedificio,$nombreedificio,$direccionedificio,$campusedificio);
	$edificios->ADD();

	// Relleno los datos de centro
	$CODCENTRO = 'miusuario';
	$CODEDIFICIO = '5qphcblk';
	$NOMBRECENTRO = 'Auga';
	$DIRECCIONCENTRO = 'minombre'; 
	$RESPONSABLECENTRO = 'miapellido';


// creo el modelo
	$centros = new CENTRO_Model($CODCENTRO,$CODEDIFICIO,$NOMBRECENTRO,$DIRECCIONCENTRO,$RESPONSABLECENTRO);
// inserto la tupla
	$centros->ADD();

	$CENTRO_array_test1['error_obtenido'] = $centros->ADD();
	if ($CENTRO_array_test1['error_obtenido'] === $CENTRO_array_test1['error_esperado'])
	{
		$CENTRO_array_test1['resultado'] = 'OK';
	}
	else
	{
		$CENTRO_array_test1['resultado'] = 'FALSE';
	}

	array_push($ERRORS_array_test, $CENTRO_array_test1);
	$centros->DELETE();	
	$edificios->DELETE();


// Comprobar Inserción realizada con éxito
	$CENTRO_array_test1['entidad'] = 'CENTRO';	
	$CENTRO_array_test1['metodo'] = 'ADD';
	$CENTRO_array_test1['error'] = 'Inserción realizada con éxito';
	$CENTRO_array_test1['error_esperado'] = 'Inserción realizada con éxito';
	$CENTRO_array_test1['error_obtenido'] = '';
	$CENTRO_array_test1['resultado'] = '';
	
	$codedificio = '5qphcblk';
	$campusedificio = 'AGUA';
	$nombreedificio = 'Auga';
	$direccionedificio = 'SE015172kdfalkj'; 

	$edificios = new EDIFICIO_Model($codedificio,$nombreedificio,$direccionedificio,$campusedificio);
	$edificios->ADD();

	$CODCENTRO = 'GNC1517';
	$CODEDIFICIO = '5qphcblk';
	$DIRECCIONCENTRO = 'SE015172'; 
	$RESPONSABLECENTRO = 'Fran';
	$NOMBRECENTRO = 'Auga'; 

	$centros = new CENTRO_Model($CODCENTRO,$CODEDIFICIO,$NOMBRECENTRO,$DIRECCIONCENTRO,$RESPONSABLECENTRO);
	$CENTRO_array_test1['error_obtenido'] = $centros->ADD();
	if ($CENTRO_array_test1['error_obtenido'] === $CENTRO_array_test1['error_esperado'])
	{
		$CENTRO_array_test1['resultado'] = 'OK';
	}
	else
	{
		$CENTRO_array_test1['resultado'] = 'FALSE';
	}

	array_push($ERRORS_array_test, $CENTRO_array_test1);
	$centros->DELETE();
	$edificios->DELETE();


}

function CENTRO_DELETE_test()
{

	global $ERRORS_array_test;
// creo array de almacen de test individual
	$CENTRO_array_test1 = array();

// Comprobar el login existe
	$CENTRO_array_test1['entidad'] = 'CENTRO';	
	$CENTRO_array_test1['metodo'] = 'DELETE';
	$CENTRO_array_test1['error'] = 'Borrado realizado con éxito';
	$CENTRO_array_test1['error_esperado'] = 'Borrado realizado con éxito';
	$CENTRO_array_test1['error_obtenido'] = '';
	$CENTRO_array_test1['resultado'] = '';
 
	$codedificio = '5qphcblk';
	$campusedificio = 'SE015172';
	$nombreedificio = 'Auga';
	$direccionedificio = 'SE015172kdfalkj'; 

	$edificios = new EDIFICIO_Model($codedificio,$nombreedificio,$direccionedificio,$campusedificio);
	$edificios->ADD();

 	$CODCENTRO = 'GBC01517';
	$CODEDIFICIO = '5qphcblk';
	$DIRECCIONCENTRO = 'SE32015172'; 
	$RESPONSABLECENTRO = 'Fran';
	$NOMBRECENTRO = 'Auga';


	$centros = new CENTRO_Model($CODCENTRO,$CODEDIFICIO,$NOMBRECENTRO,$DIRECCIONCENTRO,$RESPONSABLECENTRO);
 	$centros->ADD();
 	$CENTRO_array_test1['error_obtenido'] = $centros->DELETE();
 	if ($CENTRO_array_test1['error_obtenido'] === $CENTRO_array_test1['error_esperado'])
	{
		$CENTRO_array_test1['resultado'] = 'OK';
	}
	else
	{
		$CENTRO_array_test1['resultado'] = 'FALSE';
	}

	array_push($ERRORS_array_test, $CENTRO_array_test1);
	$edificios->DELETE();

	$CENTRO_array_test1['entidad'] = 'CENTRO';	
	$CENTRO_array_test1['metodo'] = 'DELETE';
	$CENTRO_array_test1['error'] = 'Error de gestor de base de datos';
	$CENTRO_array_test1['error_esperado'] = 'Error de gestor de base de datos';
	$CENTRO_array_test1['error_obtenido'] = '';
	$CENTRO_array_test1['resultado'] = '';
 
	$codedificio = '5qphcblk';
	$campusedificio = 'SE015172';
	$nombreedificio = 'Auga';
	$direccionedificio = 'SE015172kdfalkj'; 

	$edificios = new EDIFICIO_Model($codedificio,$nombreedificio,$direccionedificio,$campusedificio);
	$edificios->ADD();

 	$CODCENTRO = 'GA01517';
	$CODEDIFICIO = '5qphcblk';
	$DIRECCIONCENTRO = 'SE015172'; 
	$RESPONSABLECENTRO = 'Fran';
	$NOMBRECENTRO = 'Auga';


	$centros = new CENTRO_Model($CODCENTRO,$CODEDIFICIO,$NOMBRECENTRO,$DIRECCIONCENTRO,$RESPONSABLECENTRO);
 	$centros->ADD();
	 $centros->CODCENTRO = 'GA01517\' ,\''; 
	 
 	$CENTRO_array_test1['error_obtenido'] = $centros->DELETE();
 	if ($CENTRO_array_test1['error_obtenido'] === $CENTRO_array_test1['error_esperado'])
	{
		$CENTRO_array_test1['resultado'] = 'OK';
	}
	else
	{
		$CENTRO_array_test1['resultado'] = 'FALSE';
	}

	array_push($ERRORS_array_test, $CENTRO_array_test1);
	$centros->CODCENTRO = 'GA01517';
	$centros->DELETE();
	$edificios->DELETE();
}

function CENTRO_EDIT_test()
{

	global $ERRORS_array_test;
// creo array de almacen de test individual
	$CENTRO_array_test1 = array();

// Comprobar el login existe
	$CENTRO_array_test1['entidad'] = 'CENTRO';	
	$CENTRO_array_test1['metodo'] = 'EDIT';
	$CENTRO_array_test1['error'] = 'Actualización realizada con éxito';
	$CENTRO_array_test1['error_esperado'] = 'Actualización realizada con éxito';
	$CENTRO_array_test1['error_obtenido'] = '';
	$CENTRO_array_test1['resultado'] = '';
 
	$codedificio = '5qphcblk';
	$campusedificio = 'SE015172';
	$nombreedificio = 'Auga';
	$direccionedificio = 'SE015172kdfalkj'; 

	$edificios = new EDIFICIO_Model($codedificio,$nombreedificio,$direccionedificio,$campusedificio);
	$edificios->ADD();

 	$CODCENTRO = 'GA01517';
	$CODEDIFICIO = '5qphcblk';
	$DIRECCIONCENTRO = 'SE015172'; 
	$RESPONSABLECENTRO = 'Fran';
	$NOMBRECENTRO = 'Auga';


	$centros = new CENTRO_Model($CODCENTRO,$CODEDIFICIO,$NOMBRECENTRO,$DIRECCIONCENTRO,$RESPONSABLECENTRO);
 	$centros->ADD();

 	$centros->NOMBRECENTRO = 'Vigo';

 	$CENTRO_array_test1['error_obtenido'] = $centros->EDIT();
	if ($CENTRO_array_test1['error_obtenido'] === $CENTRO_array_test1['error_esperado'])
	{
		$CENTRO_array_test1['resultado'] = 'OK';
	}
	else
	{
		$CENTRO_array_test1['resultado'] = 'FALSE';
	}

	array_push($ERRORS_array_test, $CENTRO_array_test1);	
	$centros->DELETE();
	$edificios->DELETE();

}

function CENTRO_SEARCH_test()
{


	global $ERRORS_array_test;
// creo array de almacen de test individual
	$CENTRO_array_test1 = array();

// Comprobar el login existe
	$CENTRO_array_test1['entidad'] = 'CENTRO';	
	$CENTRO_array_test1['metodo'] = 'SEARCH';
	$CENTRO_array_test1['error'] = 'Búsqueda realizada correctamente';
	$CENTRO_array_test1['error_esperado'] = 'object';
	$CENTRO_array_test1['error_obtenido'] = '';
	$CENTRO_array_test1['resultado'] = '';
 
	$codedificio = '5qphcblk';
	$campusedificio = 'SE015172';
	$nombreedificio = 'Auga';
	$direccionedificio = 'SE015172kdfalkj'; 

	$edificios = new EDIFICIO_Model($codedificio,$nombreedificio,$direccionedificio,$campusedificio);
	$edificios->ADD();

 	$CODCENTRO = 'GA01517';
	$CODEDIFICIO = '5qphcblk';
	$DIRECCIONCENTRO = 'SE015172'; 
	$RESPONSABLECENTRO = 'Fran';
	$NOMBRECENTRO = 'Auga';


	$centros = new CENTRO_Model($CODCENTRO,$CODEDIFICIO,$NOMBRECENTRO,$DIRECCIONCENTRO,$RESPONSABLECENTRO);
 	$centros->ADD();

 	$centros2 = new CENTRO_Model('','','Auga','','');

 	$CENTRO_array_test1['error_obtenido'] = gettype($centros2->SEARCH());

 	if ($CENTRO_array_test1['error_obtenido'] === $CENTRO_array_test1['error_esperado'])
	{
		$CENTRO_array_test1['resultado'] = 'OK';
	}
	else
	{
		$CENTRO_array_test1['resultado'] = 'FALSE';
	}

	array_push($ERRORS_array_test, $CENTRO_array_test1);
	$centros->DELETE();
	$edificios->DELETE();

// creo array de almacen de test individual
	$CENTRO_array_test1 = array();

// Comprobar el login existe
	$CENTRO_array_test1['entidad'] = 'CENTRO';	
	$CENTRO_array_test1['metodo'] = 'SEARCH';
	$CENTRO_array_test1['error'] = 'Búsqueda no realizada correctamente';
	$CENTRO_array_test1['error_esperado'] = 'Error de gestor de base de datos';
	$CENTRO_array_test1['error_obtenido'] = '';
	$CENTRO_array_test1['resultado'] = '';
 
	$codedificio = '5qphcblk';
	$campusedificio = 'SE015172';
	$nombreedificio = 'Auga';
	$direccionedificio = 'SE015172kdfalkj'; 

	$edificios = new EDIFICIO_Model($codedificio,$nombreedificio,$direccionedificio,$campusedificio);
	$edificios->ADD();

 	$CODCENTRO = 'GA01517';
	$CODEDIFICIO = '5qphcblk';
	$DIRECCIONCENTRO = 'SE015172'; 
	$RESPONSABLECENTRO = 'Fran';
	$NOMBRECENTRO = 'Auga';

	$centros = new CENTRO_Model($CODCENTRO,$CODEDIFICIO,$NOMBRECENTRO,$DIRECCIONCENTRO,$RESPONSABLECENTRO);
 	$centros->ADD();

 	$centros2 = new CENTRO_Model('','','A\' ,\'uga','','');

 	$CENTRO_array_test1['error_obtenido'] = $centros2->SEARCH();

 	if ($CENTRO_array_test1['error_obtenido'] === $CENTRO_array_test1['error_esperado'])
	{
		$CENTRO_array_test1['resultado'] = 'OK';
	}
	else
	{
		$CENTRO_array_test1['resultado'] = 'FALSE';
	}

	array_push($ERRORS_array_test, $CENTRO_array_test1);
	$centros->DELETE();
	$edificios->DELETE();
}

function CENTRO_RellenaDatos_test()
{

	global $ERRORS_array_test;
// creo array de almacen de test individual
	$CENTRO_array_test1 = array();

// Comprobar devuelve recordset
//----------------------------------------------
	$CENTRO_array_test1['entidad'] = 'CENTRO';	
	$CENTRO_array_test1['metodo'] = 'RellenaDatos';
	$CENTRO_array_test1['error'] = 'Devuelve los datos';
	$CENTRO_array_test1['error_esperado'] = 'array';
	$CENTRO_array_test1['error_obtenido'] = '';
	$CENTRO_array_test1['resultado'] = '';
	
	$codedificio = '5qphcblk';
	$campusedificio = 'AUGA';
	$nombreedificio = 'Auga';
	$direccionedificio = 'SE015172kdfalkj'; 

	$edificios = new EDIFICIO_Model($codedificio,$nombreedificio,$direccionedificio,$campusedificio);
	$edificios->ADD();

	// Relleno los datos de centro
	$CODCENTRO = 'miusuario';
	$CODEDIFICIO = '5qphcblk';
	$NOMBRECENTRO = 'Auga';
	$DIRECCIONCENTRO = 'minombre'; 
	$RESPONSABLECENTRO = 'miapellido';


// creo el modelo
	$centros = new CENTRO_Model($CODCENTRO,$CODEDIFICIO,$NOMBRECENTRO,$DIRECCIONCENTRO,$RESPONSABLECENTRO);
// inserto la tupla
	$CENTRO_array_test1['error_obtenido'] = $centros->ADD();

	$CENTRO_array_test1['error_obtenido'] = gettype($centros->RellenaDatos());
	if ($CENTRO_array_test1['error_obtenido'] === $CENTRO_array_test1['error_esperado'])
	{
		$CENTRO_array_test1['resultado'] = 'OK';
	}
	else
	{
		$CENTRO_array_test1['resultado'] = 'FALSE';
	}

	array_push($ERRORS_array_test, $CENTRO_array_test1);

	$centros->DELETE();
	$edificios->DELETE();
}

	CENTRO_ADD_test();
	CENTRO_DELETE_test();
	CENTRO_EDIT_test();
	CENTRO_SEARCH_test();
    CENTRO_RellenaDatos_test()

?>