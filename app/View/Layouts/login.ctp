<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="es">
	<!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>Calmacapricho</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width">

		<?php
		echo $this->Html->meta('icon');
		echo $this->fetch('meta');

		# Estilos
		echo $this->Html->css(array('/bower_components/bootstrap/dist/css/bootstrap.min.css'
			, '/bower_components/bootstrap/dist/css/bootstrap-theme.min.css'
		));
		echo $this->fetch('css');
		?>
	</head>
	<body>
		<!-- Contenido -->
		<div id="container" class="container-fluid">
			<?php echo $this->Session->flash('flash', array('element' => 'error_login')); ?>

			<?php echo $content_for_layout; ?>
		</div>

		<?php
		echo $this->Html->script(array('/bower_components/jquery/dist/jquery.min'
			, '/bower_components/bootstrap/dist/js/bootstrap.min.js'
		));
		?>
	</body>
</html>
