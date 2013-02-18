<option value="">--SELECCIONAR--</option>
<?php foreach($centros as $centro): ?>
	<option value="<?=$centro->idCentro?>"><?=$centro->cenNombre?></option>
<?php endforeach; ?>
