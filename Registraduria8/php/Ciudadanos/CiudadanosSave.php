<?php
	require_once('../php/ModelCiudadanos.php');
		
	$datos = array(
	'ciudadano_cedula'=>$_POST['ciudadano_cedula'],
	'ciudadano_nombres'=>$_POST['ciudadano_nombres'],
	'ciudadano_apellidos'=>$_POST['ciudadano_apellidos'],
	'ciudadano_fecha_nacimiento'=>$_POST['ciudadano_fecha_nacimiento'],
	'ciudadano_telefono'=>$_POST['ciudadano_telefono'],
	'ciudadano_celular'=>$_POST['ciudadano_celular'],
	'ciudadano_direccion'=>$_POST['ciudadano_direccion'],
	'Depa_codigo'=>$_POST['Depa_codigo'],
	'Munici_codigo'=>$_POST['Munici_codigo'],
	'comuna_codigo'=>$_POST['comuna_codigo'],
	'ciudad_codigo'=>$_POST['ciudad_codigo']
	);
	
	$Ciudadanos = new Ciudadanos();
	$Ciudadanos->nuevo($datos);
	
?>