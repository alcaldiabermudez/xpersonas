<?php $this->load->view('header.php'); ?>

<style type="text/css">
  .form-signin {
	background-color: #f5f5f5;
	max-width: 300px;
	padding: 19px 29px 29px;
	margin: 150px auto 20px;
	border: 1px solid #e5e5e5;
	-webkit-border-radius: 5px;
	   -moz-border-radius: 5px;
			border-radius: 5px;
	-webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
	   -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
			box-shadow: 0 1px 2px rgba(0,0,0,.05);
  }
  .form-signin .form-signin-heading,
  .form-signin .checkbox {
	margin-bottom: 10px;
  }
  .form-signin input[type="text"],
  .form-signin input[type="password"] {
	font-size: 16px;
	height: auto;
	margin-bottom: 15px;
	padding: 7px 9px;
  }

</style>



<form class="form-signin" autocomplete="off" method="post" action="<?= base_url('persona/buscar') ?>">

	<?php if(isset($msj)): ?>
	<div class="alert">
		<button type="button" class="close" data-dismiss="alert">&times;</button>
		<strong>Atención!</strong> la persona no existe. Desea agregarlo?.
		precione <?= anchor('persona/agregar/' . $cedula, '<strong>Aquí</strong>')?>
	</div>
	<?php endif; ?>

	
	<h3 class="form-signin-heading  text-center">Búsqueda de Persona</h3>
	<input type="text" class="input-block-level"placeholder="Cédula"  name="cedula" >
	<button class="btn btn-large btn-primary full-width" type="submit">Buscar Empleado</button>
</form>


<?php $this->load->view('footer.php'); ?>