<?php
	$q=$_POST['q'];
	require_once('ModelCiudadanos.php');
	$Ciudadanos = new Ciudadanos();
	$listaMunicipio=$Ciudadanos->listaMunicipio($q);
?>

<?php echo "<tr><td><label>Ciudad</label></td>";?>
<td><select id="Munici_codigo" name="Munici_codigo" onFocus="load2(this.value);load3(this.value);"  onChange="load2(this.value);load3(this.value);">
	<option value="">--Seleccione Ciudad-- </option>
<?php foreach($listaMunicipio as $fila){ 
		if($fila['Munici_codigo']>0){?>
<?php echo '<option  value = "'.$fila['Munici_codigo'].'">'.$fila['Munici_nombre'];?></option>
<?php } 
}?>
</select></td>
</tr>