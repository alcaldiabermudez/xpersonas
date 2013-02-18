<?php $this->load->view('header.php'); ?>

<h3 class="title text-center">Agregar familar</h3>

<table class="table table-hover">
<?php foreach($empleado as $e): ?>
	<tr>
		<th>Cédula del Empleado:</th>
		<td><?= $e->empCedula;?></td>
	</tr>
	<tr>
		<th>Nombre del Empleado:</th>
		<td><?= $e->empNombres;?></td>
	</tr>
<?php endforeach; ?>
</table>




<table class="table table-striped table-hover">

	<!-- nombre de los campos que lleva el listado -->
	<thead>
	<!-- Titulo del listado familiar -->
	<tr>
		<td colspan="10">
			<h3 style="display:inline; margin-left:2em;">Listado de Familiares</h3>
			<button id="agregarFamiliar" class="btn btn-inverse pull-right"><i class="icon-plus icon-white"></i> Agregar Familiar</button>
		</td>
	</tr>
		<tr class="thead">
			<th> Cédula </th>
			<th> Nombres </th>
			<th> Teléfono </th>
			<th> Direccion </th>
			<th> Dependencia </th>
			<th> PSUV </th>
			<th> Comandito </th>
			<th> CNE </th>
			<th> Centro Votación </td>
		</tr>
	</thead>
	
	<tr>
	<!-- nombre de los campos que lleva el listado -->
	<?php foreach($familiares as $familiar): ?>
		<!--
			<td> <?= $familiar->idFamiliar; ?> </td>
		-->
		<td> <?= $familiar->famCedula; ?> </td>
		<td> <?= $familiar->famNombres; ?> </td>
		<td> <?= $familiar->famTelefono; ?> </td>
		<td> <?= $familiar->famDireccion; ?> </td>
		<td> <?= $familiar->famDependencia; ?> </td>
		<td> <?= $familiar->famPSUV; ?> </td>
		<td> <?= $familiar->famComandito; ?> </td>
		<td> <?= $familiar->famCNE; ?> </td>
		<td> <?= $familiar->cenNombre; ?> </td>
		</tr>
	<?php endforeach; ?>
</table>


<form method="POST" class="form" action="<?= base_url('familiar/agregarfamiliar') ?>"  style="display:none;">
<input type="hidden" name="cedulaempleado" value="<?= $e->empCedula;?>" />
<table class="table table-striped table-hover">
	<tr>
		<th>Cedula</th>
		<td><input type="text" name="cedula" /> </td>
	</tr>
	<tr>
		<th>Nombres Y Apellidos</th>
		<td><input type="text" name="nombres" /> </td>
	</tr>
	<tr>
		<th>Teléfono</th>
		<td><input type="text" name="telefono" /> </td>
	</tr>
	<tr>
		<th>Dirección</th>
		<td><textarea class="span4" name="direccion"></textarea></td>
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
				<option value="">--SELECCIONAR--</option>
					<?php foreach($parroquias as $parroquia): ?>
					<option value="<?= $parroquia->idParroquia?>"><?= $parroquia->parNombre?> </option>
					<?php endforeach;?>
			</select>
		</td>
	</tr>
	<tr>
		<th>Centro de votación</th>
		<td>
			<select id="centrovotacion" name="centrovotacion"></select>
		</td>
	</tr>
	<tr>
		<td colspan="2" class="well" style="margin: 0 auto 10px;" >
				<button class="btn btn-large btn-block btn-primary">Guardar Familiar</button>
				<button class="btn btn-large btn-block">Calcelar</button> 
		</td>
	</tr>

</table>
</form>


<?php $this->load->view('footer.php'); ?>
<script>
	$('#agregarFamiliar').click(function(){
		$('.form').toggle(500);
	});

	$('#parroquia').change(function(event) {
		var parroquia = $('#parroquia :selected').val();
		$('#centrovotacion').load(base_url + 'empleado/listarcentros/' + parroquia)
	});
</script>

<style>

</style>