<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {
  public $uses = array('User');

	public $components = array(
		'RequestHandler',
		'Session',
		'Auth' => array(
			'loginAction' => array(
				'admin' => FALSE,
				'controller' => 'users',
				'action' => 'login'
			),
			'loginRedirect' => array(
				'controller' => 'productos',
				'action' => 'index'
			),
			'logoutRedirect' => array(
				'admin' => FALSE,
				'controller' => 'users',
				'action' => 'login'
			),
			'authorize' => array('Controller'),
		),
	);

	public function beforeFilter() {
		# Using the session's user id is fine because it doesn't change/update
		$id = $this->Auth->user('id');
		$userData = $this->User->findById($id);

		$this -> layout = 'default';
		$this->set('userData', $userData);
	}

	public function beforeRender() {
		parent::beforeRender();
		if($this->name == 'CakeError') $this->layout = 'default_error';
	}

	public function isAuthorized($user = null) {
		# Admin users can:
		if ($user['Rol']['weight'] >= User::ADMIN)
			# Access to actions that start with admin_
			if (strpos($this->action, 'admin_') === 0) return true;

		# Default deny
		return false;
	}
}
