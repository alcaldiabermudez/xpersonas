<?php $this->load->view('header'); ?>

<div class="submenu span4">
<h3 class="title-menu" style="display:block;">Menu &#8250; Reportes</h3>

<h3 class="title">Todos</h3>
	<ul>
		<li> <?= anchor('reporte/general','General <i class="icon-chevron-right pull-right"></i>') ?></li>
		<li> <?= anchor('reporte/todosxparroquia','Por Parroquia <i class="icon-chevron-right pull-right"></i>') ?></li>
		<li> <?= anchor('reporte/','Por  <i class="icon-chevron-right pull-right"></i>') ?></li>
	</ul>
</div>

<div class="clearfix"></div>
<div class="submenu span4">
<h3 class="title">Empleados</h3>
	<ul>
		<li> <?= anchor('reporte/empleadosxparroquia','Por Parroquias <i class="icon-chevron-right pull-right"></i>') ?></li>
		<li> <?= anchor('reporte/','Por  <i class="icon-chevron-right pull-right"></i>') ?></li>
	</ul>
</div>


<div class="clearfix"></div>
<div class="submenu span4">
<h3 class="title">Familiares</h3>
	<ul>
		<li> <?= anchor('reporte/familiaresxparroquia','Por Parroquias <i class="icon-chevron-right pull-right"></i>') ?></li>
		<li> <?= anchor('reporte/','Por  <i class="icon-chevron-right pull-right"></i>') ?></li>
	</ul>
</div>

<?php $this->load->view('footer'); ?>