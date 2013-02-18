<?php $this->load->view('header.php'); ?>


<div class="submenu span4">
<h3 class="title-menu" style="display:block;">Menu &#8250; Personas</h3>
	<ul>
		<li><i class="icon-plus-sign"></i> <?= anchor('persona/agregar','<i class="icon-chevron-right pull-right"></i> Agregar Persona') ?></li>
		<li><i class="icon-search"></i> <?= anchor('empleado/buscar','<i class="icon-chevron-right pull-right"></i> Buscar Empleado') ?></li>
		<li><i class="icon-list"></i> <?= anchor('empleado/listar','<i class="icon-chevron-right pull-right"></i> Listar Empleados') ?></li>
	</ul>
</div>


<?php $this->load->view('footer.php'); ?>