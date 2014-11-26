<?php
	$Munici_codigo=$_POST['Munici_codigo'];
	require_once('ModelCiudadanos.php');
	$Ciudadanos = new Ciudadanos();
	$listaComuna=$Ciudadanos->listaComuna($Munici_codigo);
?>

<?php echo "<tr><td><label>Comuna</label></td>";?>
<td><select id="Comuna_codigo" name="Comuna_codigo" onChange="load3(this.value)" onFocus="load3(this.value)">
	<option value="">--Seleccione Comuna-- </option>
<?php foreach($listaComuna as $fila){ 
		if($fila['Comuna_codigo']>0){?>
<?php echo '<option  value = "'.$fila['Comuna_codigo'].'">'.$fila['Comuna_nombre'];?></option>
<?php } 
}?>
</select></td>
</tr>