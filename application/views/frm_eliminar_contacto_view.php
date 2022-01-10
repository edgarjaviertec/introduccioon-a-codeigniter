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


	<div class="card">
		<div class="card-body">
			<h1 class="card-title h3 mb-4">Eliminar contacto</h1>
			<p class="card-text">¿Deseas eliminar el contacto: <?php echo $contacto->con_nombre; ?>?
			<?php echo form_open(); ?>
			<?php echo form_hidden('con_id', $contacto->con_id); ?>
			<div class="d-flex justify-content-between">
				<a href="<?php echo site_url("/contactos") ?>" class="btn btn-secondary">Cancelar</a>
				<button type="submit" class="btn btn-danger">Eliminar</button>
			</div>
			<?php echo form_close(); ?>
			</p>
		</div>
	</div>


</div>


<?php $this->load->view("partials/scripts.php"); ?>

</body>
</html>

