<?php $this->load->view('header') ?>

<?php if(!isset($parroquia)): ?>
	<form action="<?=base_url('reporte/empleadosxparroquia');?>" method="post">
		<select name="parroquia" onchange="submit()">
			<option value="">--SELECCIONAR--</option>
			<?php foreach($parroquias as $parroquia): ?>
			<option value="<?=$parroquia->idParroquia?>"><?=$parroquia->parNombre?></option>
			<?php endforeach; ?>
		</select>
	<form>


<?php else: ?>

<table class="table table-striped table-hover">

	<thead>
	<!-- Titulo del listado Para los reportes -->
	<tr>
		<td colspan="10">
			<h3 style="display:inline; margin-left:2em;">Listado Personas</h3>
			<?= anchor('reporte/empleadosxparroquia', '<i class="icon-arrow-left icon-white"></i> Volver', 'class="btn btn-inverse pull-right"'); ?>
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

<?php endforeach; endif;?>
</table>



<?php $this->load->view('footer') ?>