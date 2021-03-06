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
<body data-ng-app="App">
	<header>
		<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
			<div class="container-fluid">
				<a class="navbar-brand" href="#">
					<?php echo $this->Html->image('calmacapricho.jpg') ?>
					<?php echo $siteTitle; ?>
				</a>
			</div>
		</nav>
	</header>

	<section class="container-fluid">
		<?php echo $this->Session->flash(); ?>
		<?php echo $this->fetch('content'); ?>
	</section>

	<footer class="navbar navbar-inverse navbar-fixed-bottom">
		Sistema de Gestión Calmacapricho
	</footer>

	<?php
	echo $this->Html->script(array('/bower_components/jquery/dist/jquery.min'
		, '/bower_components/bootstrap/dist/js/bootstrap.min.js'
		, '/bower_components/angular/angular.min.js'
		, '/bower_components/angular-route/angular-route.min.js'
		, '/bower_components/angular-resource/angular-resource.min.js'
		, '/bower_components/angular-ui-utils/keypress.min'
		, 'models'
		, 'angular/controllers'
	));
	echo $this->fetch('script');
	?>

	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
