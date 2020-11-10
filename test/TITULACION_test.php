<?php
// Autor : 70ky5e
// Fecha : 02/12/2019
// Descripción : 
//	Fichero de test de unidad de la entidad TITULACION
//	Saca por pantalla el resultado de los test
// incluir el modelo de la entidad TITULACION
include_once '../Model/TITULACION_Model.php';
include_once '../Model/EDIFICIO_Model.php';
include_once '../Model/CENTRO_Model.php';


function TITULACION_ADD_test()
{

	global $ERRORS_array_test;
// creo array de almacen de test individual
	$TITULACION_array_test1 = array();

// Comprobar el login existe
	$TITULACION_array_test1['entidad'] = 'TITULACION';	
	$TITULACION_array_test1['metodo'] = 'ADD';
	$TITULACION_array_test1['error'] = 'El elemento ya existe';
	$TITULACION_array_test1['error_esperado'] = 'Inserción fallida: el elemento ya existe';
	$TITULACION_array_test1['error_obtenido'] = '';
	$TITULACION_array_test1['resultado'] = '';

	$codedificio = '5qphcblk';
	$nombreedificio = 'mipassword';
	$direccionedificio = 'Auga';
	$campusedificio = 'minombre'; 


// creo el modelo
	$edificios = new EDIFICIO_Model($codedificio,$nombreedificio,$direccionedificio,$campusedificio);
// inserto la tupla
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

	$CODCENTRO = 'miusuario';
	$CODTITULACION = 'mipassword';
	$NOMBRETITULACION = 'Auga';
	$RESPONSABLETITULACION = 'miapellido';


// creo el modelo
	$titulaciones = new TITULACION_Model($CODTITULACION, $CODCENTRO, $NOMBRETITULACION, $RESPONSABLETITULACION);
// inserto la tupla
	$titulaciones->ADD();

	$TITULACION_array_test1['error_obtenido'] = $titulaciones->ADD();
	if ($TITULACION_array_test1['error_obtenido'] === $TITULACION_array_test1['error_esperado'])
	{
		$TITULACION_array_test1['resultado'] = 'OK';
	}
	else
	{
		$TITULACION_array_test1['resultado'] = 'FALSE';
	}

	array_push($ERRORS_array_test, $TITULACION_array_test1);

	$titulaciones->DELETE();	
	$centros->DELETE();
	$edificios->DELETE();


// Comprobar Inserción realizada con éxito
	$TITULACION_array_test1['entidad'] = 'TITULACION';	
	$TITULACION_array_test1['metodo'] = 'ADD';
	$TITULACION_array_test1['error'] = 'Inserción realizada con éxito';
	$TITULACION_array_test1['error_esperado'] = 'Inserción realizada con éxito';
	$TITULACION_array_test1['error_obtenido'] = '';
	$TITULACION_array_test1['resultado'] = '';

	$codedificio = '5qphcblk';
	$nombreedificio = 'mipassword';
	$direccionedificio = 'Auga';
	$campusedificio = 'minombre'; 


// creo el modelo
	$edificios = new EDIFICIO_Model($codedificio,$nombreedificio,$direccionedificio,$campusedificio);
// inserto la tupla
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

	$CODCENTRO = 'miusuario';
	$CODTITULACION = 'SE015172';
	$RESPONSABLETITULACION = 'Fran';
	$NOMBRETITULACION = 'Auga';

	$titulaciones = new TITULACION_Model($CODTITULACION, $CODCENTRO, $NOMBRETITULACION, $RESPONSABLETITULACION);
	$TITULACION_array_test1['error_obtenido'] = $titulaciones->ADD();
	if ($TITULACION_array_test1['error_obtenido'] === $TITULACION_array_test1['error_esperado'])
	{
		$TITULACION_array_test1['resultado'] = 'OK';
	}
	else
	{
		$TITULACION_array_test1['resultado'] = 'FALSE';
	}

	array_push($ERRORS_array_test, $TITULACION_array_test1);

	$titulaciones->DELETE();
	$centros->DELETE();
	$edificios->DELETE();


}

function TITULACION_DELETE_test()
{

	global $ERRORS_array_test;
// creo array de almacen de test individual
	$TITULACION_array_test1 = array();

// Comprobar el login existe
	$TITULACION_array_test1['entidad'] = 'TITULACION';	
	$TITULACION_array_test1['metodo'] = 'DELETE';
	$TITULACION_array_test1['error'] = 'Borrado realizado con éxito';
	$TITULACION_array_test1['error_esperado'] = 'Borrado realizado con éxito';
	$TITULACION_array_test1['error_obtenido'] = '';
	$TITULACION_array_test1['resultado'] = '';

	$codedificio = '5qphcblk';
	$nombreedificio = 'mipassword';
	$direccionedificio = 'Auga';
	$campusedificio = 'minombre'; 


// creo el modelo
	$edificios = new EDIFICIO_Model($codedificio,$nombreedificio,$direccionedificio,$campusedificio);
// inserto la tupla
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

 	$CODCENTRO = 'miusuario';
	$CODTITULACION = 'SE015172';
	$RESPONSABLETITULACION = 'Fran';
	$NOMBRETITULACION = 'Auga';


	$titulaciones = new TITULACION_Model($CODTITULACION, $CODCENTRO, $NOMBRETITULACION, $RESPONSABLETITULACION);
 	$titulaciones->ADD();

 	$TITULACION_array_test1['error_obtenido'] = $titulaciones->DELETE();
 	if ($TITULACION_array_test1['error_obtenido'] === $TITULACION_array_test1['error_esperado'])
	{
		$TITULACION_array_test1['resultado'] = 'OK';
	}
	else
	{
		$TITULACION_array_test1['resultado'] = 'FALSE';
	}

	array_push($ERRORS_array_test, $TITULACION_array_test1);
	$centros->DELETE();
	$edificios->DELETE();

	$TITULACION_array_test1['entidad'] = 'TITULACION';	
	$TITULACION_array_test1['metodo'] = 'DELETE';
	$TITULACION_array_test1['error'] = 'Error de gestor de base de datos';
	$TITULACION_array_test1['error_esperado'] = 'Error de gestor de base de datos';
	$TITULACION_array_test1['error_obtenido'] = '';
	$TITULACION_array_test1['resultado'] = '';

	$codedificio = '5qphcblk';
	$nombreedificio = 'mipassword';
	$direccionedificio = 'Auga';
	$campusedificio = 'minombre'; 


// creo el modelo
	$edificios = new EDIFICIO_Model($codedificio,$nombreedificio,$direccionedificio,$campusedificio);
// inserto la tupla
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

 	$CODCENTRO = 'miusuario';
	$CODTITULACION = 'SE015172'; 
	$RESPONSABLETITULACION = 'Fran';
	$NOMBRETITULACION = 'Auga';


	$titulaciones = new TITULACION_Model($CODTITULACION, $CODCENTRO, $NOMBRETITULACION, $RESPONSABLETITULACION);
 	$titulaciones->ADD();
 	$titulaciones->CODTITULACION = 'SE015172\' ,\'kdfalkj'; 

 	$TITULACION_array_test1['error_obtenido'] = $titulaciones->DELETE();
 	if ($TITULACION_array_test1['error_obtenido'] === $TITULACION_array_test1['error_esperado'])
	{
		$TITULACION_array_test1['resultado'] = 'OK';
	}
	else
	{
		$TITULACION_array_test1['resultado'] = 'FALSE';
	}

	array_push($ERRORS_array_test, $TITULACION_array_test1);
	$titulaciones->CODTITULACION = 'SE015172';
	$titulaciones->DELETE();
	$centros->DELETE();
	$edificios->DELETE();

}

function TITULACION_EDIT_test()
{

	global $ERRORS_array_test;
// creo array de almacen de test individual
	$TITULACION_array_test1 = array();

// Comprobar el login existe
	$TITULACION_array_test1['entidad'] = 'TITULACION';	
	$TITULACION_array_test1['metodo'] = 'EDIT';
	$TITULACION_array_test1['error'] = 'Actualización realizada con éxito';
	$TITULACION_array_test1['error_esperado'] = 'Actualización realizada con éxito';
	$TITULACION_array_test1['error_obtenido'] = '';
	$TITULACION_array_test1['resultado'] = '';

	$codedificio = '5qphcblk';
	$nombreedificio = 'mipassword';
	$direccionedificio = 'Auga';
	$campusedificio = 'minombre'; 


// creo el modelo
	$edificios = new EDIFICIO_Model($codedificio,$nombreedificio,$direccionedificio,$campusedificio);
// inserto la tupla
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
 
 	$CODCENTRO = 'miusuario';
	$CODTITULACION = 'SE015172';
	$RESPONSABLETITULACION = 'Fran';
	$NOMBRETITULACION = 'Auga';


	$titulaciones = new TITULACION_Model($CODTITULACION, $CODCENTRO, $NOMBRETITULACION, $RESPONSABLETITULACION);
 	$titulaciones->ADD();

 	$titulaciones->NOMBRETITULACION = 'mititulacion';

 	$TITULACION_array_test1['error_obtenido'] = $titulaciones->EDIT();
	if ($TITULACION_array_test1['error_obtenido'] === $TITULACION_array_test1['error_esperado'])
	{
		$TITULACION_array_test1['resultado'] = 'OK';
	}
	else
	{
		$TITULACION_array_test1['resultado'] = 'FALSE';
	}

	array_push($ERRORS_array_test, $TITULACION_array_test1);	

	$titulaciones->DELETE();
	$centros->DELETE();
	$edificios->DELETE();

}

function TITULACION_SEARCH_test()
{


	global $ERRORS_array_test;
// creo array de almacen de test individual
	$TITULACION_array_test1 = array();

// Comprobar el login existe
	$TITULACION_array_test1['entidad'] = 'TITULACION';	
	$TITULACION_array_test1['metodo'] = 'SEARCH';
	$TITULACION_array_test1['error'] = 'Búsqueda realizada correctamente';
	$TITULACION_array_test1['error_esperado'] = 'object';
	$TITULACION_array_test1['error_obtenido'] = '';
	$TITULACION_array_test1['resultado'] = '';

	$codedificio = '5qphcblk';
	$nombreedificio = 'mipassword';
	$direccionedificio = 'Auga';
	$campusedificio = 'minombre'; 


// creo el modelo
	$edificios = new EDIFICIO_Model($codedificio,$nombreedificio,$direccionedificio,$campusedificio);
// inserto la tupla
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

 	$CODCENTRO = 'miusuario';
	$CODTITULACION = 'SE015172'; 
	$RESPONSABLETITULACION = 'Fran';
	$NOMBRETITULACION = 'Auga';


	$titulaciones = new TITULACION_Model($CODTITULACION, $CODCENTRO, $NOMBRETITULACION, $RESPONSABLETITULACION);
 	$titulaciones->ADD();

 	$titulaciones2 = new TITULACION_Model('','','Auga','','');

 	$TITULACION_array_test1['error_obtenido'] = gettype($titulaciones2->SEARCH());

 	if ($TITULACION_array_test1['error_obtenido'] === $TITULACION_array_test1['error_esperado'])
	{
		$TITULACION_array_test1['resultado'] = 'OK';
	}
	else
	{
		$TITULACION_array_test1['resultado'] = 'FALSE';
	}

	array_push($ERRORS_array_test, $TITULACION_array_test1);
	$titulaciones->DELETE();
	$centros->DELETE();
	$edificios->DELETE();

// creo array de almacen de test individual
	$TITULACION_array_test1 = array();

// Comprobar el login existe
	$TITULACION_array_test1['entidad'] = 'TITULACION';	
	$TITULACION_array_test1['metodo'] = 'SEARCH';
	$TITULACION_array_test1['error'] = 'Búsqueda no realizada correctamente';
	$TITULACION_array_test1['error_esperado'] = 'Error de gestor de base de datos';
	$TITULACION_array_test1['error_obtenido'] = '';
	$TITULACION_array_test1['resultado'] = '';

	$codedificio = '5qphcblk';
	$nombreedificio = 'mipassword';
	$direccionedificio = 'Auga';
	$campusedificio = 'minombre'; 


// creo el modelo
	$edificios = new EDIFICIO_Model($codedificio,$nombreedificio,$direccionedificio,$campusedificio);
// inserto la tupla
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
 
 	$CODCENTRO = 'miusuario';
	$CODTITULACION = 'SE015172'; 
	$RESPONSABLETITULACION = 'Fran';
	$NOMBRETITULACION = 'Auga';

	$titulaciones = new TITULACION_Model($CODTITULACION, $CODCENTRO, $NOMBRETITULACION, $RESPONSABLETITULACION);
 	$titulaciones->ADD();

 	$titulaciones2 = new TITULACION_Model('','','A\' ,\'uga','','');

 	$TITULACION_array_test1['error_obtenido'] = $titulaciones2->SEARCH();

 	if ($TITULACION_array_test1['error_obtenido'] === $TITULACION_array_test1['error_esperado'])
	{
		$TITULACION_array_test1['resultado'] = 'OK';
	}
	else
	{
		$TITULACION_array_test1['resultado'] = 'FALSE';
	}

	array_push($ERRORS_array_test, $TITULACION_array_test1);
	$titulaciones->DELETE();
	$centros->DELETE();
	$edificios->DELETE();
}

function TITULACION_RellenaDatos_test()
{

	global $ERRORS_array_test;
// creo array de almacen de test individual
	$CENTRO_array_test1 = array();

// Comprobar devuelve recordset
//----------------------------------------------
	$TITULACION_array_test1['entidad'] = 'TITULACION';	
	$TITULACION_array_test1['metodo'] = 'RellenaDatos';
	$TITULACION_array_test1['error'] = 'Devuelve los datos';
	$TITULACION_array_test1['error_esperado'] = 'array';
	$TITULACION_array_test1['error_obtenido'] = '';
	$TITULACION_array_test1['resultado'] = '';
	
	$CODCENTRO = 'miusuario';
	$CODEDIFICIO = '5qphcblk';
	$NOMBRECENTRO = 'Auga';
	$DIRECCIONCENTRO = 'minombre'; 
	$RESPONSABLECENTRO = 'miapellido';


// creo el modelo
	$centros = new CENTRO_Model($CODCENTRO,$CODEDIFICIO,$NOMBRECENTRO,$DIRECCIONCENTRO,$RESPONSABLECENTRO);
	$centros->ADD();
	
	$CODCENTRO = 'miusuario';
	$CODTITULACION = 'SE015172'; 
	$RESPONSABLETITULACION = 'Fran';
	$NOMBRETITULACION = 'Auga';

	$titulaciones = new TITULACION_Model($CODTITULACION, $CODCENTRO, $NOMBRETITULACION, $RESPONSABLETITULACION);
 	
// inserto la tupla
	$TITULACION_array_test1['error_obtenido'] = $titulaciones->ADD();

	$TITULACION_array_test1['error_obtenido'] = gettype($titulaciones->RellenaDatos());
	if ($TITULACION_array_test1['error_obtenido'] === $TITULACION_array_test1['error_esperado'])
	{
		$TITULACION_array_test1['resultado'] = 'OK';
	}
	else
	{
		$TITULACION_array_test1['resultado'] = 'FALSE';
	}

	array_push($ERRORS_array_test, $TITULACION_array_test1);
	$titulaciones->DELETE();
	$centros->DELETE();
}
	TITULACION_ADD_test();
	TITULACION_DELETE_test();
	TITULACION_EDIT_test();
	TITULACION_SEARCH_test();
	TITULACION_RellenaDatos_test();

?>