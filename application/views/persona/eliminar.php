<?php $this->load->view('header.php'); ?>


<?php foreach($persona as $persona): ?>

<form method="post" class="span5 offset3">
<table class="table  well">
	<tr>
		<td colspan="10">
			<h3 class="title text-center">Realmente desea Eliminar a:</h3>
		</td>
	</tr>


	<tr>
		<th> Nombres </th>
		<td><?= $persona->perNombres; ?></td>
	</tr>

	<tr>
		<th> Cédula </th>
		<td><?= $persona->perCedula; ?></td>
	</tr>


	<?php endforeach; ?>
</form>

	<tr>
		<td colspan="2">
			<a OnClick="javascript:history.back(-1);" class="btn"><i class="icon-edit"></i> Cancelar</a>
			<?= anchor('persona/eliminar/' . $persona->perCedula . "/si" ,'<i class="icon-edit icon-white"></i> Eliminar','class="btn btn-danger"') ?>
		</td>
	</tr>

</table>


<?php $this->load->view('footer.php'); ?>