<?php $this->load->view('header') ?>

<?php if(!isset($parroquia)): ?>
	<form action="<?=base_url('reporte/xparroquia');?>" method="post">
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
			<?= anchor('reporte/xparroquia', '<i class="icon-arrow-left icon-white"></i> Volver', 'class="btn btn-inverse pull-right"'); ?>
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

<?php foreach($personas as $persona): ?>

<?php if(isset($persona->idPersona)) { ?>
<?php if($persona->perPSUV == 1) $persona->perPSUV = 'si';  else $persona->perPSUV = 'no'; ?>
<?php if($persona->perCNE  == 1) $persona->perCNE  = 'si';  else $persona->perCNE  = 'no'; ?>
<?php if($persona->perComandito  == 1) $persona->perComandito  = 'si';  else $persona->perComandito  = 'no'; ?>
<?php if($persona->cenNombre  == '') $persona->cenNombre  = 'sin datos...'; ?>
		<tr>
			<td> <?= $persona->perCedula; ?> </td>
			<td> <?= $persona->perNombres; ?> </td>
			<td> <?= $persona->perTelefono; ?> </td>
			<td> <?= $persona->perDireccion; ?> </td>
			<td> <?= $persona->perDependencia; ?> </td>
			<td> <?= $persona->perPSUV; ?> </td>
			<td> <?= $persona->perComandito; ?> </td>
			<td> <?= $persona->perCNE; ?> </td>
			<td> <?= $persona->cenNombre; ?> </td>
		</tr>
<?php } ?>


<?php if(isset($persona->idFamiliar)) { ?>
		<tr>
			<td> <?= $persona->famCedula; ?> </td>
			<td> <?= $persona->perNombres; ?> </td>
			<td> <?= $persona->famTelefono; ?> </td>
			<td> <?= $persona->famDireccion; ?> </td>
			<td> <?= $persona->famDependencia; ?> </td>
			<td> <?= $persona->famPSUV; ?> </td>
			<td> <?= $persona->famComandito; ?> </td>
			<td> <?= $persona->famCNE; ?> </td>
			<td> <?= $persona->cenNombre; ?> </td>
		</tr>
<?php } ?>




<?php endforeach; endif;?>
</table>



<?php $this->load->view('footer') ?>
