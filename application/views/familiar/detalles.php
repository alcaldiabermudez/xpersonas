<?php $this->load->view('header.php'); ?>


<table class="table table-striped table-hover">
	<!-- Titulo del modulo de familiar -->
	<tr>
		<td colspan="10">
			<h3 class="title text-center">Detalles de familiar</h3>
		</td>
	</tr>

	<?php foreach($familiar as $familiar): ?>

	<tr>
		<th> Cédula </th>
		<td><?= $familiar->famCedula; ?></td>
	</tr>


	<tr>
		<th> Nombres </th>
		<td><?= $familiar->famNombres; ?></td>
	</tr>

	<tr>
		<th> Teléfono </th>
		<td><?= $familiar->famTelefono; ?></td>
	</tr>

	<tr>
		<th> Direccion </th>
		<td><?= $familiar->famDireccion; ?></td>
	</tr>

	<tr>
		<th> Dependencia </th>
		<td><?= $familiar->famDependencia; ?></td>
	</tr>

	<tr>
		<th> Registrado en el PSUV </th>
		<td><?= $familiar->famPSUV ?></td>
	</tr>

	<tr>
		<th> Registrado en el Comandito </th>
		<td><?= $familiar->famComandito ?></td>
	</tr>

	<tr>
		<th> Trabaja en el CNE </th>
		<td><?= $familiar->famCNE ?></td>
	</tr>

	<tr>
		<th> Parroquia </td>
		<td> <?= $familiar->parNombre; ?> </td>
	</tr>

	<tr>
		<th> Centro Votación </td>
		<td> <?= $familiar->cenNombre; ?> </td>
	</tr>
	<?php endforeach; ?>

	<tr>
		<td colspan="2">
			<?= anchor('familiar/editar/' . $familiar->famCedula ,'<i class="icon-edit icon-white"></i> Editar','class="btn btn-primary"') ?>
		</td>
	</tr>

</table>

<div id="listafamiliares">
</div>


<?php $this->load->view('footer.php'); ?>