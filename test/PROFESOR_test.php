<?php
// Autor : 70ky5e
// Fecha : 02/12/2019
// Descripción : 
//	Fichero de test de unidad de la entidad PROFESOR
//	Saca por pantalla el resultado de los test
// incluir el modelo de la entidad PROFESOR
	include_once '../Model/PROFESOR_Model.php';

function PROFESOR_ADD_test()
{

	global $ERRORS_array_test;
// creo array de almacen de test individual
	$PROFESOR_array_test1 = array();

// Comprobar el login existe
	$PROFESOR_array_test1['entidad'] = 'PROFESOR';	
	$PROFESOR_array_test1['metodo'] = 'ADD';
	$PROFESOR_array_test1['error'] = 'El elemento ya existe';
	$PROFESOR_array_test1['error_esperado'] = 'Inserción fallida: el elemento ya existe';
	$PROFESOR_array_test1['error_obtenido'] = '';
	$PROFESOR_array_test1['resultado'] = '';
	
	// Relleno los datos de centro
	$DNI = '06869169N';
	$AREAPROFESOR = 'mipassword';
	$NOMBREPROFESOR = 'Auga';
	$APELLIDOSPROFESOR = 'minombre'; 
	$DEPARTAMENTOPROFESOR = 'miapellido';


// creo el modelo
	$profesores = new PROFESOR_Model($DNI,$NOMBREPROFESOR,$APELLIDOSPROFESOR,$AREAPROFESOR,$DEPARTAMENTOPROFESOR);
// inserto la tupla
	$profesores->ADD();

	$PROFESOR_array_test1['error_obtenido'] = $profesores->ADD();
	if ($PROFESOR_array_test1['error_obtenido'] === $PROFESOR_array_test1['error_esperado'])
	{
		$PROFESOR_array_test1['resultado'] = 'OK';
	}
	else
	{
		$PROFESOR_array_test1['resultado'] = 'FALSE';
	}

	array_push($ERRORS_array_test, $PROFESOR_array_test1);

	$profesores->DELETE();	



// Comprobar Inserción realizada con éxito
	$PROFESOR_array_test1['entidad'] = 'PROFESOR';	
	$PROFESOR_array_test1['metodo'] = 'ADD';
	$PROFESOR_array_test1['error'] = 'Inserción realizada con éxito';
	$PROFESOR_array_test1['error_esperado'] = 'Inserción realizada con éxito';
	$PROFESOR_array_test1['error_obtenido'] = '';
	$PROFESOR_array_test1['resultado'] = '';
	
	$DNI = '06869169N';
	$AREAPROFESOR = 'areamia';
	$APELLIDOSPROFESOR = 'miapellidos'; 
	$DEPARTAMENTOPROFESOR = 'Fran';
	$NOMBREPROFESOR = 'Auga';

	$profesores = new PROFESOR_Model($DNI,$NOMBREPROFESOR,$APELLIDOSPROFESOR,$AREAPROFESOR,$DEPARTAMENTOPROFESOR);
	$PROFESOR_array_test1['error_obtenido'] = $profesores->ADD();
	if ($PROFESOR_array_test1['error_obtenido'] === $PROFESOR_array_test1['error_esperado'])
	{
		$PROFESOR_array_test1['resultado'] = 'OK';
	}
	else
	{
		$PROFESOR_array_test1['resultado'] = 'FALSE';
	}

	array_push($ERRORS_array_test, $PROFESOR_array_test1);

	$profesores->DELETE();


}

function PROFESOR_DELETE_test()
{

	global $ERRORS_array_test;
// creo array de almacen de test individual
	$PROFESOR_array_test1 = array();

// Comprobar el login existe
	$PROFESOR_array_test1['entidad'] = 'PROFESOR';	
	$PROFESOR_array_test1['metodo'] = 'DELETE';
	$PROFESOR_array_test1['error'] = 'Borrado realizado con éxito';
	$PROFESOR_array_test1['error_esperado'] = 'Borrado realizado con éxito';
	$PROFESOR_array_test1['error_obtenido'] = '';
	$PROFESOR_array_test1['resultado'] = '';
 
 	$DNI = '06869169N';
	$AREAPROFESOR = 'miarea';
	$APELLIDOSPROFESOR = 'miapellidos'; 
	$DEPARTAMENTOPROFESOR = 'Fran';
	$NOMBREPROFESOR = 'Auga';

	$profesores = new PROFESOR_Model($DNI,$NOMBREPROFESOR,$APELLIDOSPROFESOR,$AREAPROFESOR,$DEPARTAMENTOPROFESOR);
 	$profesores->ADD();

 	$PROFESOR_array_test1['error_obtenido'] = $profesores->DELETE();
 	if ($PROFESOR_array_test1['error_obtenido'] === $PROFESOR_array_test1['error_esperado'])
	{
		$PROFESOR_array_test1['resultado'] = 'OK';
	}
	else
	{
		$PROFESOR_array_test1['resultado'] = 'FALSE';
	}

	array_push($ERRORS_array_test, $PROFESOR_array_test1);

	$PROFESOR_array_test1['entidad'] = 'PROFESOR';	
	$PROFESOR_array_test1['metodo'] = 'DELETE';
	$PROFESOR_array_test1['error'] = 'Error de gestor de base de datos';
	$PROFESOR_array_test1['error_esperado'] = 'Error de gestor de base de datos';
	$PROFESOR_array_test1['error_obtenido'] = '';
	$PROFESOR_array_test1['resultado'] = '';
 
 	$DNI = 'GA01517';
	$AREAPROFESOR = 'SE015172';
	$APELLIDOSPROFESOR = 'SE015172'; 
	$DEPARTAMENTOPROFESOR = 'Fran';
	$NOMBREPROFESOR = 'Auga';


	$profesores = new PROFESOR_Model($DNI,$NOMBREPROFESOR,$APELLIDOSPROFESOR,$AREAPROFESOR,$DEPARTAMENTOPROFESOR);
 	$profesores->ADD();
 	$profesores->DNI = 'SE015172\' ,\'kdfalkj'; 

 	$PROFESOR_array_test1['error_obtenido'] = $profesores->DELETE();
 	if ($PROFESOR_array_test1['error_obtenido'] === $PROFESOR_array_test1['error_esperado'])
	{
		$PROFESOR_array_test1['resultado'] = 'OK';
	}
	else
	{
		$PROFESOR_array_test1['resultado'] = 'FALSE';
	}

	array_push($ERRORS_array_test, $PROFESOR_array_test1);
	$profesores->DNI = 'GA01517';
	$profesores->DELETE();
}

function PROFESOR_EDIT_test()
{

	global $ERRORS_array_test;
// creo array de almacen de test individual
	$PROFESOR_array_test1 = array();

// Comprobar el login existe
	$PROFESOR_array_test1['entidad'] = 'PROFESOR';	
	$PROFESOR_array_test1['metodo'] = 'EDIT';
	$PROFESOR_array_test1['error'] = 'Actualización realizada con éxito';
	$PROFESOR_array_test1['error_esperado'] = 'Actualización realizada con éxito';
	$PROFESOR_array_test1['error_obtenido'] = '';
	$PROFESOR_array_test1['resultado'] = '';
 
 	$DNI = '06869169N';
	$AREAPROFESOR = 'miarea';
	$APELLIDOSPROFESOR = 'miapellidos'; 
	$DEPARTAMENTOPROFESOR = 'Fran';
	$NOMBREPROFESOR = 'Auga';


	$profesores = new PROFESOR_Model($DNI,$NOMBREPROFESOR,$APELLIDOSPROFESOR,$AREAPROFESOR,$DEPARTAMENTOPROFESOR);
 	$profesores->ADD();

 	$profesores->NOMBREPROFESOR = 'minombre';

 	$PROFESOR_array_test1['error_obtenido'] = $profesores->EDIT();
	if ($PROFESOR_array_test1['error_obtenido'] === $PROFESOR_array_test1['error_esperado'])
	{
		$PROFESOR_array_test1['resultado'] = 'OK';
	}
	else
	{
		$PROFESOR_array_test1['resultado'] = 'FALSE';
	}

	array_push($ERRORS_array_test, $PROFESOR_array_test1);	

	$profesores->DELETE();

}

function PROFESOR_SEARCH_test()
{


	global $ERRORS_array_test;
// creo array de almacen de test individual
	$PROFESOR_array_test1 = array();

// Comprobar el login existe
	$PROFESOR_array_test1['entidad'] = 'PROFESOR';	
	$PROFESOR_array_test1['metodo'] = 'SEARCH';
	$PROFESOR_array_test1['error'] = 'Búsqueda realizada correctamente';
	$PROFESOR_array_test1['error_esperado'] = 'object';
	$PROFESOR_array_test1['error_obtenido'] = '';
	$PROFESOR_array_test1['resultado'] = '';
 
 	$DNI = 'GA01517';
	$AREAPROFESOR = 'SE015172';
	$APELLIDOSPROFESOR = 'SE015172'; 
	$DEPARTAMENTOPROFESOR = 'Fran';
	$NOMBREPROFESOR = 'Auga';


	$profesores = new PROFESOR_Model($DNI,$NOMBREPROFESOR,$APELLIDOSPROFESOR,$AREAPROFESOR,$DEPARTAMENTOPROFESOR);
 	$profesores->ADD();

 	$profesores2 = new PROFESOR_Model('','Auga','','','');

 	$PROFESOR_array_test1['error_obtenido'] = gettype($profesores2->SEARCH());

 	if ($PROFESOR_array_test1['error_obtenido'] === $PROFESOR_array_test1['error_esperado'])
	{
		$PROFESOR_array_test1['resultado'] = 'OK';
	}
	else
	{
		$PROFESOR_array_test1['resultado'] = 'FALSE';
	}

	array_push($ERRORS_array_test, $PROFESOR_array_test1);
	$profesores->DELETE();

// creo array de almacen de test individual
	$PROFESOR_array_test1 = array();

// Comprobar el login existe
	$PROFESOR_array_test1['entidad'] = 'PROFESOR';	
	$PROFESOR_array_test1['metodo'] = 'SEARCH';
	$PROFESOR_array_test1['error'] = 'Búsqueda no realizada correctamente';
	$PROFESOR_array_test1['error_esperado'] = 'Error de gestor de base de datos';
	$PROFESOR_array_test1['error_obtenido'] = '';
	$PROFESOR_array_test1['resultado'] = '';
 
 	$DNI = 'GA01517';
	$AREAPROFESOR = 'SE015172';
	$APELLIDOSPROFESOR = 'SE015172'; 
	$DEPARTAMENTOPROFESOR = 'Fran';
	$NOMBREPROFESOR = 'Auga';

	$profesores = new PROFESOR_Model($DNI,$NOMBREPROFESOR,$APELLIDOSPROFESOR,$AREAPROFESOR,$DEPARTAMENTOPROFESOR);
 	$profesores->ADD();

 	$profesores2 = new PROFESOR_Model('','','A\' ,\'uga','','');

 	$PROFESOR_array_test1['error_obtenido'] = $profesores2->SEARCH();

 	if ($PROFESOR_array_test1['error_obtenido'] === $PROFESOR_array_test1['error_esperado'])
	{
		$PROFESOR_array_test1['resultado'] = 'OK';
	}
	else
	{
		$PROFESOR_array_test1['resultado'] = 'FALSE';
	}

	array_push($ERRORS_array_test, $PROFESOR_array_test1);
	$profesores->DELETE();
}

function PROFESOR_RellenaDatos_test()
{

	global $ERRORS_array_test;
// creo array de almacen de test individual
	$PROFESOR_array_test1 = array();

// Comprobar devuelve recordset
//----------------------------------------------
	$PROFESOR_array_test1['entidad'] = 'PROFESOR';	
	$PROFESOR_array_test1['metodo'] = 'RellenaDatos';
	$PROFESOR_array_test1['error'] = 'Devuelve los datos';
	$PROFESOR_array_test1['error_esperado'] = 'array';
	$PROFESOR_array_test1['error_obtenido'] = '';
	$PROFESOR_array_test1['resultado'] = '';
	
 	$DNI = '45144479X';
	$AREAPROFESOR = 'amen';
	$APELLIDOSPROFESOR = 'amen'; 
	$DEPARTAMENTOPROFESOR = 'Fran';
	$NOMBREPROFESOR = 'Auga';

	$profesores = new PROFESOR_Model($DNI,$NOMBREPROFESOR,$APELLIDOSPROFESOR,$AREAPROFESOR,$DEPARTAMENTOPROFESOR);
 	
// inserto la tupla
	$PROFESOR_array_test1['error_obtenido'] = $profesores->ADD();

	$PROFESOR_array_test1['error_obtenido'] = gettype($profesores->RellenaDatos());
	if ($PROFESOR_array_test1['error_obtenido'] === $PROFESOR_array_test1['error_esperado'])
	{
		$PROFESOR_array_test1['resultado'] = 'OK';
	}
	else
	{
		$PROFESOR_array_test1['resultado'] = 'FALSE';
	}

	array_push($ERRORS_array_test, $PROFESOR_array_test1);

	$profesores->DELETE();
}
	PROFESOR_ADD_test();
	PROFESOR_DELETE_test();
	PROFESOR_EDIT_test();
	PROFESOR_SEARCH_test();
	PROFESOR_RellenaDatos_test();

?>