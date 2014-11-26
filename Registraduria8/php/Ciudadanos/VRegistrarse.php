<?php
	require_once('ModelCiudadanos.php');
	$Ciudadanos = new Ciudadanos();
	$listaDepartamento=$Ciudadanos->listaDepartamento();
?>	
<html>
<head>
	<style type="text/css">

		* { font-family: Verdana; font-size: 96%; }

		label { width: 12em; float: left; }

		label.error { float: none; color: red; padding-left: .5em; vertical-align: top; }

		p { clear: both; }

		.submit { margin-left: 12em; }


		em { font-weight: bold; padding-right: 1em; vertical-align: top; }

		input.error { border: 1px solid red; }
	</style>
<link type="text/css" href="css/ui-lightness/jquery-ui-1.8.16.custom.css" rel="stylesheet" />	
<script language="javascript" src="js/jquery-1.6.2.min.js"></script>
<script language="javascript" src="js/jquery.validate.js"></script>
<script language="javascript" src="js/funcionesCiudadano.js"></script>
<script type="text/javascript" src="js/jquery-ui-1.8.16.custom.min.js"></script>
	</head>
	<body>
		<form id="fciudadanos">
			<fieldset><legend>Datos Personales</legend><br><br><br><br><br>
				<table align="center">
					<tr> <td> <label> Numero de Identificacion </label> </td>
						<td> <input type="text" id = "ciudadano_cedula" value ="" name ="ciudadano_cedula" /> </br></td>
					</tr>
					<tr><td></td><td></td></tr>
					<tr> <td> <label> Nombre </label> </td>
						<td> <input type="text" id="ciudadano_nombres" value = "" name="ciudadano_nombres"/></br> </td>
					</tr>
					<tr><td></td><td></td></tr>
					<tr> <td> <label> Apellidos </label> </td>
						<td> <input type="text" id="ciudadano_apellidos" value = "" name="ciudadano_apellidos"/></br> </td>
					</tr>
					<tr><td></td><td></td></tr>					
					<tr> <td> <label>Fecha Nacimiento</label> </td>
						<td> <input name="ciudadano_fecha_nacimiento" id = "ciudadano_fecha_nacimiento" type="text" class="required date"> </br></td
					></tr>
					<tr><td></td><td></td></tr>
					<tr> <td> <label> Telefono </label> </td>
						<td> <input type="text" id="ciudadano_telefono" value = "" name="ciudadano_telefono"/></br> </td>
					</tr>
					<tr><td></td><td></td></tr>
					<tr> <td> <label> Celular </label> </td>
						<td> <input type="text" id="ciudadano_celular" value = "" name="ciudadano_celular"/></br> </td>
					</tr>
					<tr><td></td><td></td></tr>
					<tr> <td> <label> Direccion </label> </td>
						<td> <input type="text" id="ciudadano_direccion" value = "" name="ciudadano_direccion"/> </br></td>
					</tr>
					<tr><td></td><td></td></tr>
					<tr> <td> <label> Departamento </label> </td>
						<td> 
							<select id="Depa_codigo" name="Depa_codigo" 
							onFocus="load(this.value);load2(0);load3(0);" 
							onChange="load(this.value);load2(0);load3(0);">
							<option value="">--Seleccione Departamento-- </option>
								<?php
								foreach($listaDepartamento as $fila){ 
								?>
								<option value="<?php echo $fila['Depa_codigo']; ?>" >
								<?php echo $fila['Depa_nombre']; 		
								?> </option>
								<?php
								} ?>
							</select>														
						</td>
					</tr>

					</table>
</br>
<table>
<div id="myDiv"></div>
</table>
</br>
<table>
<div id="Comuna"></div>
</table>
</br>
<table>
<div id="Barrio"></div>
</table>
</br>
<table>

					<tr> <td> <label for="password">Password</label> </td>
						<td><input id="usuario_contrasena" name="usuario_contrasena" type="password"/> </td>
					</tr>
					<tr> <td> <label for="password_again">De nuevo</label>  </td>
						<td><input class="left" id="password_again" name="password_again" type="password"/> </td>
					</tr>
<tr> <td>Si Acepta la Politica de Tratamiento de Datos presione Registrar  </td>
<td> <input type="button" id="grabar" value="grabar" class="btns"/></td> 
</tr>
</table>
					<input type="hidden" id="estado" value="Inactivo" name="estado"/>
					<input type="hidden" id="nuevo" value="nuevo" name="accion"/>
			</fieldset>
		</form>
</br>
</br>
</body>
</html>