<?php
 require_once 'ModelCiudadanos.php';
$datos = $_POST;
switch ($_POST['accion']){
    case 'editar':
        $Ciudadanos = new Ciudadanos();
		$Ciudadanos->editar($datos);
        break;
    case 'nuevo':
        $Ciudadanos = new Ciudadanos();
		$Ciudadanos->nuevo($datos);
        break;
    case 'borrar':
		$Ciudadanos = new Ciudadanos();
		$Ciudadanos->borrar($datos['ciudadano_cedula']);
        break;
}
?>
?>