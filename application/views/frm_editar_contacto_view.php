<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Agregar contacto</title>
	<?php $this->load->view("partials/estilos"); ?>
</head>
<body>


<div class="container py-5">


	<h1 class="mb-4 h3">Editar contacto</h1>

	<?php if (!empty(validation_errors())): ?>
		<div class="alert alert-danger mb-3">
			<ul class="mb-0">
				<?php echo validation_errors("<li>", "</li>"); ?>
			</ul>
		</div>
	<?php endif; ?>


	<?php echo form_open(); ?>

	<?php echo form_hidden('con_id', $contacto->con_id ); ?>


	<div class="mb-3">
		<?php echo form_label("Email:", "con_email", array("class" => "form-label")); ?>
		<?php echo form_input(array(
				"class" => "form-control",
				"id" => "con_email",
				"name" => "con_email",
				"value" => $contacto->con_email
		)); ?>
	</div>

	<div class="mb-3">
		<?php echo form_label("Nombre:", "con_nombre", array("class" => "form-label")); ?>
		<?php echo form_input(array(
				"class" => "form-control",
				"id" => "con_nombre",
				"name" => "con_nombre",
				"value" => $contacto->con_nombre

		)); ?>
	</div>


	<div class="mb-3">
		<?php echo form_label("Teléfono:", "con_telefono", array("class" => "form-label")); ?>
		<?php echo form_input(array(
				"class" => "form-control",
				"id" => "con_telefono",
				"name" => "con_telefono",
				"value" => $contacto->con_telefono
		)); ?>
	</div>

	<div class="mb-3">
		<?php echo form_label("Edad:", "con_edad", array("class" => "form-label")); ?>
		<?php echo form_input(array(
				"class" => "form-control",
				"con_edad" => "con_edad",
				"name" => "con_edad",
				"value" => $contacto->con_edad
		)); ?>
	</div>

	<div class="mb-3">
		<?php echo form_label("Estado:"); ?>
		<?php echo form_dropdown('con_status', array(
				"0" => "Inactivo",
				"1" => "Activo"
		), $contacto->con_status, 'class="form-select"'); ?>
	</div>

	<div class="d-flex justify-content-between">
		<a href="<?php echo site_url("/contactos") ?>" class="btn btn-secondary">Cancelar</a>
		<button type="submit" class="btn btn-danger">Actualizar</button>
	</div>


	<?php echo form_close(); ?>


</div>


<?php $this->load->view("partials/scripts.php"); ?>

</body>
</html>

