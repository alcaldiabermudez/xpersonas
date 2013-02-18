<?php $this->load->view('header.php'); ?>

<form action="<?=base_url('persona/editarpersona'); ?>" method="post">

<table class="table table-striped table-hover">
<thead>
	<!-- Titulo del modulo de persona -->
	<tr>
		<td colspan="10">
			<h3 align="center">Editar persona</h3>
		</td>
	</tr>
</thead>

	<?php foreach($persona as $persona): ?>
	<input name="id" type="hidden" value="<?= $persona->idPersona; ?>" />

	<tr>
		<th> Cédula </th>
		<td><input name="cedula" type="text" value="<?= $persona->perCedula; ?>" /></td>
	</tr>


	<tr>
		<th> Nombres </th>
		<td><input name="nombres" type="text" value="<?= $persona->perNombres; ?>" /></td>
	</tr>

	<tr>
		<th> Teléfono </th>
		<td><input name="telefono" type="text" value="<?= $persona->perTelefono; ?>" /></td>
	</tr>

	<tr>
		<th> Direccion </th>
		<td>
			<textarea class="span4" name="direccion"><?= $persona->perDireccion; ?></textarea>
		</td>
	</tr>

	<tr>
		<th> Mapa </th>
		<td>
			<textarea class="span4" name="mapa"><?= $persona->perMapa; ?></textarea>
			<b id="btn-map" >Ver Previo</b>
			<div class="well" id="map"></map>
		</td>
	</tr>

	<tr>
		<th> Dependencia </th>
		<td><input name="dependencia" type="text" value="<?= $persona->perDependencia; ?>" /></td>
	</tr>

	<tr>
		<th> PSUV </th>
		<td>
			<input type="radio" name="psuv" value="si" <? if($persona->perPSUV == "si") echo "checked"; ?>  /> SI
			<input type="radio" name="psuv" value="no" <? if($persona->perPSUV == "no") echo "checked"; ?>  /> NO
		</td>
	</tr>

	<tr>
		<th> Comandito </th>
		<td>
			<input type="radio" name="comandito" value="si" <? if($persona->perComandito == "si") echo "checked"; ?>  /> SI
			<input type="radio" name="comandito" value="no" <? if($persona->perComandito == "no") echo "checked"; ?>  /> NO
		</td>
	</tr>

	<tr>
		<th> CNE </th>
		<td>
			<input type="radio" name="cne" value="si" <? if($persona->perCNE == "si") echo "checked"; ?>  /> SI
			<input type="radio" name="cne" value="no" <? if($persona->perCNE == "no") echo "checked"; ?>  /> NO
		</td>
	</tr>



	<tr>
		<th>Parroquia</th>
		<td>
			<select id="parroquia" name="parroquia">
				<?php
				if($persona->perIdParroquia ==  0) {
					echo '<option value="0">--SELECCIONAR--</option>';
					foreach($parroquias as $parroquia) {
						echo '<option value="' . $parroquia->idParroquia . '"> '.$parroquia->parNombre . ' </option>';
					}
				}
				else {
					foreach($this->personam->pc('parroquias', 'idParroquia ',$persona->perIdParroquia) as $p) :
						echo '<option value="' . $p->idParroquia . '"> '.$p->parNombre . ' </option>';
					endforeach;
					foreach($parroquias as $parroquia) :
						if($parroquia->idParroquia != $p->idParroquia)
							echo '<option value="' . $parroquia->idParroquia . '"> '.$parroquia->parNombre . ' </option>';
					endforeach;
				}
				?>
			</select>
		</td>
	</tr>



	<tr>
		<th>Centro de votación</th>
		<td>
			<select id="centrovotacion" name="centrovotacion">
				<?php
				if(!$persona->perIdCentro ==  0) {
					foreach($this->personam->pc('centros', 'idCentro ',$persona->perIdCentro) as $c) :
						echo '<option value="' . $c->idCentro . '"> '.$c->cenNombre . ' </option>';
					endforeach;
				}
				?>
			</select>
		</td>
	</tr>

	<?php endforeach; ?>

	<tr>
		<td colspan="2">
			<?= anchor('persona/detalles/' . $persona->perCedula,'<i class="icon-remove icon-white"></i> Cancelar','class="btn btn-danger"') ?>
			<button class="btn btn-primary"><i class="icon-ok icon-white"></i> Guardar</button>
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

	$('#btn-map').click(function() {
		var mapa = $('*[name="mapa"]').text();
		$('#map').html(mapa)
	});

</script>