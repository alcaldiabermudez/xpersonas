<table class="table table-striped table-hover" >

	<!-- nombre de los campos que lleva el listado -->
	<thead>
	<!-- Titulo del listado familiar -->
	<tr>
		<td colspan="10">
			<h3 style="display:inline; margin-left:2em;">Listado de Familiares</h3>
			<a class="btn btn-inverse pull-right" href="javascript:redirec('familiar/agregar/' + empCedula);"><i class="icon-plus icon-white"></i> Agregar Familiar</as>
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

<button class="btn btn-inverse" id="listaFamiliaresToggle">Ocultar Lista</button>
<script>

$(document).ready(function(){
	$('#listaFamiliaresToggle').toggle(
			function() {
				$('#listafamiliares table').hide();
				$('#listaFamiliaresToggle').text('Mostrar Lista');
			},
			function() {
				$('#listafamiliares table').show();
				$('#listaFamiliaresToggle').text('Ocultar Lista');
			}
		);
});
</script>