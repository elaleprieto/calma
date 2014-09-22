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

		<?php echo $this -> Html -> meta('icon'); ?>

		<?php
		# Estilos
		echo $this -> Html -> css('bootstrap.min');

		echo $this->fetch('meta');

		# Estilos (Cont.)
		echo $this -> fetch('css');

		?>
	</head>
	<body>
		<!-- Contenido -->
		<div id="container" class="container-fluid">
			<?php echo $this -> Session -> flash('flash', array('element' => 'error_login')); ?>

			<?php echo $content_for_layout; ?>
		</div>

		<?php
		echo $this->Html->script(array('vendors/jquery/jquery-1.11.1.min'
			, 'vendors/bootstrap/3.1.1/bootstrap.min'
		));
		?>
	</body>
</html>
