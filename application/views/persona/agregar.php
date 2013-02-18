<?php $this->load->view('header.php'); ?>

<form method="POST" action="<?= base_url('persona/agregarpersona') ?>">
<table class="form table table-striped table-hover" >

<thead>
	<!-- Titulo del listado persona -->
	<tr>
		<td colspan="2">
			<h3 align="center">Agregar Persona</h3>
		</td>
	</tr>

	<?php if($msj != FALSE) :?>
	<tr>
		<td colspan="2">
			<div class="alert">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
				<strong>Atención!</strong> La persona de la cédula <strong><?=$cedula?></strong> Ya existe.
				Presione <?= anchor('persona/detalles/' . $cedula , 'Aquí' ) ?> para ver la persona.
			</div>
		</td>
	</tr>
	<?php endif; ?>
</thead>


	<tr>
		<th>Cedula</th>
		<td><input type="text" name="cedula" value="<?=$cedula?>" /> </td>
	</tr>
	<tr>
		<th>Nombres Y Apellidos</th>
		<td><input type="text" name="nombres" /> </td>
	</tr>
	<tr>
		<th>Telefono</th>
		<td><input type="text" name="telefono" value="" /> </td>
	</tr>
	<tr>
		<th>Dirección</th>
		<td><textarea class="span4" name="direccion"></textarea></td>
	</tr>
	<tr>
		<th>Mapa</th>
		<td><textarea class="span4" name="mapa"></textarea></td>
	</tr>
	<tr>
		<th>Dependencia</th>
		<td><input type="text" name="dependencia" /></td>
	</tr>
	<tr>	
		<th>Inscrito en el PSUV</th>
		<td>
			<input type="radio" name="psuv" value="si" /> SI
			<input type="radio" name="psuv" value="no" /> NO
		</td>
	</tr>
	<tr>
		<th>Pertenece al Comandito</th>
		<td>
			<input type="radio" name="comandito" value="si" /> SI
			<input type="radio" name="comandito" value="no" /> NO
		</td>
	</tr>
	<tr>
		<th>Trabaja en el CNE</th>
		<td>
			<input type="radio" name="cne" value="si" /> SI
			<input type="radio" name="cne" value="no" /> NO
		</td>
	</tr>

	<tr>
		<th>Parroquia</th>
		<td>
			<select id="parroquia" name="parroquia">
				<option value="0">--SELECCIONAR--</option>
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
			</select>
		</td>
	</tr>

	<tr>
		<td colspan="2">
			<button id="" class="btn btn-primary">Guardar Personal</button>
		</td>
	</tr>

</table>
</form>

<?php $this->load->view('footer.php'); ?>


<script>
	$('#parroquia').change(function(event) {
		var parroquia = $('#parroquia :selected').val();
		$('#centrovotacion').load(base_url + 'persona/listarcentros/' + parroquia)
	});
</script>