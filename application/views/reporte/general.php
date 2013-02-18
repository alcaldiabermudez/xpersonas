<?php $this->load->view('header') ?>

<table class="table table-striped table-hover">

	<thead>
	<!-- Titulo del listado Para los reportes -->
	<tr>
		<td colspan="10">
			<h3 style="display:inline; margin-left:2em;">Listado Personas</h3>
		</td>
	</tr>
	<!-- nombre de los campos que lleva el listado -->
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

<?php foreach($listapersonas as $persona): ?>



<?php if(isset($persona->idEmpleado)) { ?>
		<tr>
			<td> <?= $persona->empCedula; ?> </td>
			<td> <?= $persona->empNombres; ?> </td>
			<td> <?= $persona->empTelefono; ?> </td>
			<td> <?= $persona->empDireccion; ?> </td>
			<td> <?= $persona->empDependencia; ?> </td>
			<td> <?= $persona->empPSUV; ?> </td>
			<td> <?= $persona->empComandito; ?> </td>
			<td> <?= $persona->empCNE; ?> </td>
			<td> <?= $persona->cenNombre; ?> </td>
		</tr>
<?php } ?>


<?php if(isset($persona->idFamiliar)) { ?>
		<tr>
			<td> <?= $persona->famCedula; ?> </td>
			<td> <?= $persona->famNombres; ?> </td>
			<td> <?= $persona->famTelefono; ?> </td>
			<td> <?= $persona->famDireccion; ?> </td>
			<td> <?= $persona->famDependencia; ?> </td>
			<td> <?= $persona->famPSUV; ?> </td>
			<td> <?= $persona->famComandito; ?> </td>
			<td> <?= $persona->famCNE; ?> </td>
			<td> <?= $persona->cenNombre; ?> </td>
		</tr>
<?php } ?>




<?php endforeach; ?>
</table>



<?php $this->load->view('footer') ?>