<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
	<?php $this->load->view("partials/estilos"); ?>
</head>
<body>
<div class="container py-5">
	<div class="d-flex justify-content-between align-items-center">
		<h1 class="mb-4 h3">Contactos</h1>
		<a class="btn btn-success" href="<?php echo site_url('/contactos/agregar'); ?>">Nuevo</a>
	</div>
	<div class="list-group">
		<?php foreach ($contactos as $contacto): ?>
			<div class="list-group-item d-flex justify-content-between align-items-center">
				<span><?php echo $contacto->con_nombre ?></span>
				<div>
					<a class="btn btn-primary" href="<?php echo site_url('/contactos/editar/' . $contacto->con_id ); ?>">Editar</a>
					<a class="ms-2 btn btn-danger" href="<?php echo site_url('/contactos/eliminar/' . $contacto->con_id ); ?>>">Eliminar</a>
				</div>
			</div>
		<?php endforeach; ?>
	</div>
</div>
</body>
</html>
