<?php
	$Comuna_codigo=$_POST['Comuna_codigo'];
	require_once('ModelCiudadanos.php');
	$Ciudadanos = new Ciudadanos();
	$listaBarrio=$Ciudadanos->listaBarrio($Comuna_codigo);
?>

<?php echo "<tr><td><label>Barrio</label></td>";?>
<td><select id="Barrio_codigo" name="Barrio_codigo" multiple="multiple">
	<option value="">--Seleccione Barrio-- </option>
<?php foreach($listaBarrio as $fila){ 
		if($fila['Barrio_codigo']>0){?>
<?php echo '<option  value = "'.$fila['Barrio_codigo'].'">'.$fila['Barrio_nombre'];?></option>
<?php } 
}?>
</select></td>
</tr>