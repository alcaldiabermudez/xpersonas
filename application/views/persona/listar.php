<?php $this->load->view('header.php'); ?>

<table class="table table-striped table-hover ">

<thead>
	<tr>
		<td colspan="10">
			<h3 align="center">Listado de personas</h3>
		</td>
	</tr>

	<!-- nombre de los campos que lleva el listado -->
	<tr class="thead">
		<th> Cédula </th>
		<th> Nombres </th>
		<th> Teléfono </th>
		<th> Dependencia </th>
		<th> PSUV </th>
		<th> Comandito </th>
		<th> CNE </th>
		<th class="print"> Opciones </td>
	</tr>
</thead>



	<?php foreach($personas as $persona): ?>
	<tr>
		<td><?= $persona->perCedula; ?> </td>
		<td> <?= $persona->perNombres; ?> </td>
		<td> <?= $persona->perTelefono; ?> </td>
		<td> <?= $persona->perDependencia; ?> </td>
		<td> <?= $persona->perPSUV ? $persona->perPSUV : "N/S" ; ?></td>
		<td> <?= $persona->perComandito ? $persona->perComandito : "N/S" ; ?></td>
		<td> <?= $persona->perCNE ? $persona->perCNE : "N/S" ; ?></td>

		<td class="print">
			<?= anchor('persona/detalles/'.$persona->perCedula ,'<i class="icon-info-sign"></i>', ' rel="tooltip" data-original-title="Detalles"') ?>
			<?= anchor('persona/editar/'.$persona->perCedula ,'<i class="icon-edit"></i>', ' rel="tooltip" data-original-title="Editar"') ?>
			<?= anchor('persona/eliminar/'.$persona->perCedula,'<i class="icon-trash"></i>',  ' rel="tooltip" data-original-title="Eliminar"') ?>
		</td>
	</tr>
	<?php endforeach; ?>
</table>

<?php
$config_pagination = $this->config->item('pagination');
$config_pagination['base_url'] = base_url('persona/listar');
$config_pagination['total_rows'] = $cantidadpersonas;
$config_pagination['per_page'] = $per_pagina;

$this->pagination->initialize($config_pagination); 
echo '<div class="offset4">'
	. $this->pagination->create_links()
	. '</div>';

?>


<?php $this->load->view('footer.php'); ?>