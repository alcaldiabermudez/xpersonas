<?php $this->load->view('header.php'); ?>


<?php foreach($persona as $persona): ?>

<table class="table table-striped table-hover">
<thead>
	<!-- Titulo del modulo de personas -->
	<tr>
		<td colspan="10">
			<h3 class="title text-center">Detalles de Persona</h3>
		</td>
	</tr>
</thead>

	<tr>
		<th> Cédula </th>
		<td><?= $persona->perCedula; ?></td>
	</tr>


	<tr>
		<th> Nombres </th>
		<td><?= $persona->perNombres; ?></td>
	</tr>

	<tr>
		<th> Teléfono </th>
		<td><?= $persona->perTelefono; ?></td>
	</tr>

	<tr>
		<th> Direccion </th>
		<td>
			<?php
				if($persona->perDireccion ==  "")
					echo "No Seleccionado";
				else
					echo $persona->perDireccion;
			?>
		</td>
	</tr>

	<tr>
		<th> Mapa </th>
		<td>
			<textarea class="span4" name="mapa" style="display:none;"><?= $persona->perMapa; ?></textarea>
			<b id="btn-map" class="btn btn-inverse">Ver Mapa</b>
			<div class="well" id="map" style="display:none"></map>
		</td>
	</tr>

	<tr>
		<th> Dependencia </th>
		<td>
			<?php
				if($persona->perDependencia ==  "")
					echo "No Seleccionado";
				else
					echo $persona->perDependencia;
			?>
		</td>
	</tr>

	<tr>
		<th> Registrado en el PSUV </th>
		<td>
			<?php
				if($persona->perPSUV == "si") echo "si";
				elseif($persona->perPSUV == "no") echo "no";
				else echo "No Seleccionado";
			?>
		</td>
	</tr>

	<tr>
		<th> Registrado en el Comandito </th>
		<td>
			<?php
				if($persona->perComandito == "si") echo "si";
				elseif($persona->perComandito == "no") echo "no";
				else echo "No Seleccionado";
			?>
		</td>
	</tr>

	<tr>
		<th> Trabaja en el CNE </th>
		<td>
			<?php
				if($persona->perCNE == "si") echo "si";
				elseif($persona->perCNE == "no") echo "no";
				else echo "No Seleccionado";
			?>
		</td>
	</tr>

	<tr>
		<th> Parroquia </td>
		<td>
			<?php
			if($persona->perIdParroquia ==  0)
				echo "No Seleccionado";
			else
				foreach($this->personam->pc('parroquias', 'idParroquia ',$persona->perIdParroquia) as $p) :
					echo $p->parNombre;
				endforeach;
			?>
		</td>
	</tr>

	<tr>
		<th> Centro Votación </td>
		<td>
			<?php
			if($persona->perIdCentro ==  0)
				echo "No Seleccionado";
				foreach($this->personam->pc('centros', 'idCentro ', $persona->perIdCentro) as $c) :
					echo $c->cenNombre;
				endforeach;
			?>
		</td>
	</tr>

	<!--
	<tr>
		<th> Mapa </th>
		<td><?= $persona->perMapa; ?></td>
	</tr>
	-->

	<?php endforeach; ?>

	<tr>
		<td colspan="2">
			<?= anchor('persona/editar/' . $persona->perCedula ,'<i class="icon-edit icon-white"></i> Editar','class="btn btn-primary"') ?>
			<button id="imprimir" class="btn btn btn-inverse"><i class="icon-print icon-white"></i> Imprimir</button>
			<button id="generarPDF" class="btn btn btn-inverse"><i class="icon-print icon-white"></i> Generar PDF</button>
		</td>
	</tr>

</table>

<div id="listafamiliares">
</div>


<?php $this->load->view('footer.php'); ?>

<script>
$('#imprimir').click(function(){
	print();
});

$('#generarPDF').click(function(){
	print();
});

	$('#btn-map').click(function() {
		var mapa = $('*[name="mapa"]').text();
		$('#map').css({'display':'block'});
		$('#map').html(mapa);
	});

</script>