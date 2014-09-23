<?php
App::uses('AppController', 'Controller');
/**
 * Proveedores Controller
 *
 * @property Proveedore $Proveedore
 * @property PaginatorComponent $Paginator
 */
class ProveedoresController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

	/**************************************************************************************************************
	* Authentication
	**************************************************************************************************************/
	public function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->allow();
	}

	public function isAuthorized($user = null) {
		$owner_allowed = array();
		$user_allowed = array();
		$admin_allowed = array_merge($owner_allowed, $user_allowed, array());

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
	/**************************************************************************************************************
	* /authentication
	**************************************************************************************************************/

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Proveedore->recursive = 0;
		$this->set('proveedores', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Proveedore->exists($id)) {
			throw new NotFoundException(__('Invalid proveedore'));
		}
		$options = array('conditions' => array('Proveedore.' . $this->Proveedore->primaryKey => $id));
		$this->set('proveedore', $this->Proveedore->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Proveedore->create();
			if ($this->Proveedore->save($this->request->data)) {
				$this->Session->setFlash(__('The proveedore has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The proveedore could not be saved. Please, try again.'));
			}
		}
		$localidades = $this->Proveedore->Localidade->find('list');
		$productos = $this->Proveedore->Producto->find('list');
		$this->set(compact('localidades', 'productos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Proveedore->exists($id)) {
			throw new NotFoundException(__('Invalid proveedore'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Proveedore->save($this->request->data)) {
				$this->Session->setFlash(__('The proveedore has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The proveedore could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Proveedore.' . $this->Proveedore->primaryKey => $id));
			$this->request->data = $this->Proveedore->find('first', $options);
		}
		$localidades = $this->Proveedore->Localidade->find('list');
		$productos = $this->Proveedore->Producto->find('list');
		$this->set(compact('localidades', 'productos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Proveedore->id = $id;
		if (!$this->Proveedore->exists()) {
			throw new NotFoundException(__('Invalid proveedore'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Proveedore->delete()) {
			$this->Session->setFlash(__('The proveedore has been deleted.'));
		} else {
			$this->Session->setFlash(__('The proveedore could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
