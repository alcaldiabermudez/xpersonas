<?php $this->load->view('header.php'); ?>

<form action="<?=base_url('familiar/editarfamiliar'); ?>" method="post">

<table class="table table-striped table-hover">
	<!-- Titulo del modulo de familiar -->
	<tr>
		<td colspan="10">
			<h3 align="center">Editar Familiar</h3>
		</td>
	</tr>

	<?php foreach($familiar as $familiar): ?>
	<input name="id" type="hidden" value="<?= $familiar->idFamiliar; ?>" />

	<tr>
		<th> Cédula </th>
		<td><input name="cedula" type="text" value="<?= $familiar->famCedula; ?>" /></td>
	</tr>


	<tr>
		<th> Nombres </th>
		<td><input name="nombres" type="text" value="<?= $familiar->famNombres; ?>" /></td>
	</tr>

	<tr>
		<th> Teléfono </th>
		<td><input name="telefono" type="text" value="<?= $familiar->famTelefono; ?>" /></td>
	</tr>

	<tr>
		<th> Direccion </th>
		<td>
			<textarea class="span4" name="direccion"><?= $familiar->famDireccion; ?></textarea>
		</td>
	</tr>

	<tr>
		<th> Dependencia </th>
		<td><input name="dependencia" type="text" value="<?= $familiar->famDependencia; ?>" /></td>
	</tr>

	<tr>
		<th> PSUV </th>
		<td>
			<input type="radio" name="psuv" value="si" <? if($familiar->famPSUV == "si") echo "checked"; ?>  /> SI
			<input type="radio" name="psuv" value="no" <? if($familiar->famPSUV == "no") echo "checked"; ?>  /> NO
		</td>
	</tr>

	<tr>
		<th> Comandito </th>
		<td>
			<input type="radio" name="comandito" value="si" <? if($familiar->famComandito == "si") echo "checked"; ?>  /> SI
			<input type="radio" name="comandito" value="no" <? if($familiar->famComandito == "no") echo "checked"; ?>  /> NO
		</td>
	</tr>

	<tr>
		<th> CNE </th>
		<td>
			<input type="radio" name="cne" value="si" <? if($familiar->famCNE == "si") echo "checked"; ?>  /> SI
			<input type="radio" name="cne" value="no" <? if($familiar->famCNE == "no") echo "checked"; ?>  /> NO
		</td>
	</tr>



	<tr>
		<th>Parroquia</th>
		<td>
			<select id="parroquia" name="parroquia">
				<option value="<?= $familiar->famIdParroquia; ?>"><?= $familiar->parNombre; ?></option>
					<?php foreach($parroquias as $parroquia): ?>
					<option value="<?= $parroquia->idParroquia?>"><?= $parroquia->parNombre?> </option>
					<?php endforeach;?>
			</select>
		</td>
	</tr>

	
	<tr>
		<th>Centro de votación</th>
		<td>
			<select id="centrovotacion" name="centrovotacion">
				<option value="<?= $familiar->famIdCentro; ?>"><?= $familiar->cenNombre; ?></option>
			</select>
		</td>
	</tr>

	<?php endforeach; ?>

	<tr>
		<td colspan="2">
			<?= anchor('familiar/detalles/' . $familiar->famCedula,'<i class="icon-remove icon-white"></i> Cancelar','class="btn btn-danger"') ?>
			<button class="btn btn-primary"><i class="icon-ok icon-white"></i> Guardar</button>
		</td>
	</tr>

</table>
</form>

<?php $this->load->view('footer.php'); ?>


<script>
	$('#parroquia').change(function(event) {
		var parroquia = $('#parroquia :selected').val();
		$('#centrovotacion').load(base_url + 'familiar/listarcentros/' + parroquia)
	});
</script>