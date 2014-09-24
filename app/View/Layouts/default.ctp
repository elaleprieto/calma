<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$siteTitle = 'Calmacapricho';
$cakeVersion = __d('cake_dev', 'Calmacapricho %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $siteTitle ?>:
		<?php echo $title_for_layout; ?>
	</title>

	<?php
		echo $this->Html->meta('icon');
		echo $this->fetch('meta');

		echo $this->Html->css(array('/bower_components/bootstrap/dist/css/bootstrap.min.css'
			, '/bower_components/bootstrap/dist/css/bootstrap-theme.min.css'
			, 'layouts/default'
		));
		echo $this->fetch('css');
	?>
</head>
<body>
	<header>
		<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
			<div class="container-fluid">
				<a class="navbar-brand" href="/">
					<?php echo $this->Html->image('calmacapricho.jpg') ?>
					<?php echo $siteTitle; ?>
				</a>
				<ul class="nav navbar-nav">
					<li class="dropdown">
  					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Productos<b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><?php echo $this->Html->link('Nuevo', array('controller' =>'productos','action' => 'add')); ?></li>
							<li><?php echo $this->Html->link('Listar', array('controller' =>'productos','action' => 'index')); ?></li>
						</ul>
	        </li>
	        <li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Proveedores<b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><?php echo $this->Html->link('Nuevo', array('controller' =>'proveedores','action' => 'add')); ?></li>
							<li><?php echo $this->Html->link('Listar', array('controller' =>'proveedores','action' => 'index')); ?></li>
						</ul>
	        </li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
    			<li><a href="/logout"><span class="glyphicon glyphicon-user"></span> Salir</a></li>
    		</ul>
			</div>
		</nav>
	</header>

	<section class="container-fluid">
		<?php echo $this->Session->flash(); ?>
		<?php echo $this->fetch('content'); ?>
	</section>

	<footer>Sistema de Gestión Calmacapricho</footer>

	<?php
	echo $this->Html->script(array('/bower_components/jquery/dist/jquery.min'
		, '/bower_components/bootstrap/dist/js/bootstrap.min.js'
	));
	echo $this->fetch('script');
	?>

	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
