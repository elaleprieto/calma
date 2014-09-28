<?php
App::uses('AppController', 'Controller');
/**
 * Movimientos Controller
 *
 * @property Movimiento $Movimiento
 * @property PaginatorComponent $Paginator
 */
class MovimientosController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

	/*****************************************************************************
	* Authentication
	*****************************************************************************/
	public function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->allow();
	}

	public function isAuthorized($user = null) {
		$owner_allowed = array();
		$user_allowed = array();
		$admin_allowed = array_merge($owner_allowed, $user_allowed, array('add'));

		# All registered users can:
		if (in_array($this->action, $user_allowed))
			return true;

		# Admin users can:
		// if ($user['rol'] === 'admin')
		if ($user['Rol']['weight'] >= $this->User->ADMIN)
			if (in_array($this->action, $admin_allowed))
				return true;

		# The owner of an user can:
		if (in_array($this->action, $owner_allowed)) {
			$userId = $this->request->params['pass'][0];
			if ($this->Event->isOwnedBy($userId, $user['id']))
				return true;
		}
		return parent::isAuthorized($user);
	}
	/**************************************************************************
	* /authentication
	**************************************************************************/

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Movimiento->recursive = 0;
		$this->set('movimientos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Movimiento->exists($id)) {
			throw new NotFoundException(__('Invalid movimiento'));
		}
		$options = array('conditions' => array('Movimiento.' . $this->Movimiento->primaryKey => $id));
		$this->set('movimiento', $this->Movimiento->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Movimiento->create();
			if ($this->Movimiento->save($this->request->data)) {
				$this->Session->setFlash(__('The movimiento has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The movimiento could not be saved. Please, try again.'));
			}
		}
		$productos = $this->Movimiento->Producto->find('list');
		$acciones = $this->Movimiento->Accione->find('list');
		$users = $this->Movimiento->User->find('list');
		$this->set(compact('productos', 'acciones', 'users'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Movimiento->exists($id)) {
			throw new NotFoundException(__('Invalid movimiento'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Movimiento->save($this->request->data)) {
				$this->Session->setFlash(__('The movimiento has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The movimiento could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Movimiento.' . $this->Movimiento->primaryKey => $id));
			$this->request->data = $this->Movimiento->find('first', $options);
		}
		$productos = $this->Movimiento->Producto->find('list');
		$acciones = $this->Movimiento->Accione->find('list');
		$users = $this->Movimiento->User->find('list');
		$this->set(compact('productos', 'acciones', 'users'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Movimiento->id = $id;
		if (!$this->Movimiento->exists()) {
			throw new NotFoundException(__('Invalid movimiento'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Movimiento->delete()) {
			$this->Session->setFlash(__('The movimiento has been deleted.'));
		} else {
			$this->Session->setFlash(__('The movimiento could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
