<?php
// Autor : 70ky5e
// Fecha : 02/12/2019
// Descripción : 
//  Fichero de test de unidad de la entidad GENERAL
//  Saca por pantalla el resultado de los test
// incluir el modelo de la entidad GENERAL

// crear el array principal de test
//S	$ERRORS_array_test = array();
	$ERRORS_array_test = array();
// incluimos aqui tantos ficheros de test como entidades
include_once '../test/Global_test.php';
include_once '../test/USUARIOS_test.php';
include_once '../test/CENTRO_test.php';
include_once '../test/EDIFICIO_test.php';
include_once '../test/ESPACIO_test.php';
include_once '../test/PROFESOR_test.php';
include_once '../test/TITULACION_test.php';
include_once '../test/PROF_TITULACION_test.php';
include_once '../test/PROF_ESPACIO_test.php';
include_once '../test/USUARIOS_VALIDACION_test.php';
include_once '../test/TITULACION_VALIDACION_test.php';
include_once '../test/PROFESOR_VALIDACION_test.php';
include_once '../test/ESPACIO_VALIDACION_test.php';
include_once '../test/EDIFICIO_VALIDACION_test.php';
include_once '../test/CENTRO_VALIDACION_test.php';


?>
<?php 
	error_reporting(0);
	$errores = 0;
	foreach($ERRORS_array_test as $test){
		if($test['resultado'] === 'FALSE'){
			$errores += 1;
		}	
	}
	?>
<h1>RESUMEN</h1>
<br>
<h3>Número pruebas: <?php echo count($ERRORS_array_test); ?> - Número errores: <?php echo $errores; ?> </h3>
<br>
<h1>DETALLE</h1>
<br>
<?php
// presentacion de resultados
?>
<h1>Pruebas Globales</h1>
<table>
    <tr>
        <th>
            Error testeado
        </th>
        <th>
            Error Esperado
        </th>
        <th>
            Error Obtenido
        </th>
        <th>
            Resultado
        </th>
    </tr>
    <?php
	foreach ($ERRORS_array_test as $test)
	{
		if($test['entidad'] === 'GLOBAL'){
?>
    <tr <?php if($test['resultado'] === 'FALSE'){ ?> style="color: red;" <?php }else{ ?> style="color: green;"
        <?php } ?>>
        <td>
            <?php echo $test['error']; ?>
        </td>
        <td>
            <?php echo $test['error_esperado']; ?>
        </td>
        <td>
            <?php echo $test['error_obtenido']; ?>
        </td>
        <td>
            <?php echo $test['resultado']; ?>
        </td>
    </tr>
    <?php	
		}
	}
?>
</table>

<h1>Pruebas Unitarias</h1>
<table>
    <tr>
        <th>
            Entidad
        </th>
        <th>
            Método
        </th>
        <th>
            Error testeado
        </th>
        <th>
            Error Esperado
        </th>
        <th>
            Error Obtenido
        </th>
        <th>
            Resultado
        </th>
    </tr>
    <?php
	foreach ($ERRORS_array_test as $test)
	{
		if(($test['entidad'] != 'GLOBAL') && (!isset($test['atributo']))){
?>
    <tr <?php if($test['resultado'] === 'FALSE'){ ?> style="color: red;" <?php }else{ ?> style="color: green;"
        <?php } ?>>
        <td>
            <?php echo $test['entidad'];?>
        </td>
        <td>
            <?php echo $test['metodo']; ?>
        </td>
        <td>
            <?php echo $test['error']; ?>
        </td>
        <td>
            <?php echo $test['error_esperado']; ?>
        </td>
        <td>
            <?php echo $test['error_obtenido']; ?>
        </td>
        <td>
            <?php echo $test['resultado']; ?>
        </td>
    </tr>
    <?php	
		}
	}
?>
</table>

<h1>Pruebas Validación</h1>
<table>
    <tr>
        <th>
            Entidad
        </th>
        <th>
            Atributo
        </th>
        <th>
            Error testeado
        </th>
        <th>
            Error Esperado
        </th>
        <th>
            Error Obtenido
        </th>
        <th>
            Resultado
        </th>
    </tr>
    <?php
	foreach ($ERRORS_array_test as $test)
	{
		if(($test['entidad'] != 'GLOBAL') && (isset($test['atributo']))){
?>
    <tr <?php if($test['resultado'] === 'FALSE'){ ?> style="color: red;" <?php }else{ ?> style="color: green;"
        <?php } ?>>
        <td>
            <?php echo $test['entidad'];?>
        </td>
        <td>
            <?php echo $test['atributo']; ?>
        </td>
        <td>
            <?php echo $test['error']; ?>
        </td>
        <td>
            <?php echo $test['error_esperado']; ?>
        </td>
        <td>
            <?php echo $test['error_obtenido']; ?>
        </td>
        <td>
            <?php echo $test['resultado']; ?>
        </td>
    </tr>
    <?php	
		}
	}
	error_reporting(-1);
?>
</table>