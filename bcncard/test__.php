<?= form_open("/codigo/recibirdatos") ?>
<?php
	//create $datas with values to inputs
	$nombre = array(
		'name' => 'nombre',
		'placeholder' => 'Escribe tu nombre'
	);
	$video = array(
		'name' => 'videoo',
		'placeholder' => 'Escribe tu video'
	);
	
?>
<?= form_label('Nombre:', 'nombre') ?>
<?= form_input($nombre) ?>
<br/>
<?= form_label('Nombre:', 'video') ?>
<?= form_input($video) ?>
<br/>
<?= form_submit('', 'Subir curso') ?>
<?= form_close() ?>

https://codigofacilito.com/videos/tutorial_codeigniter_activerecord_y_crear_registros