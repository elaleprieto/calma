<?php
App::uses('AppController', 'Controller');
/**
 * ProductosProveedores Controller
 *
 * @property ProductosProveedore $ProductosProveedore
 * @property PaginatorComponent $Paginator
 */
class ProductosProveedoresController extends AppController {

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
		$this->ProductosProveedore->recursive = 0;
		$this->set('productosProveedores', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ProductosProveedore->exists($id)) {
			throw new NotFoundException(__('Invalid productos proveedore'));
		}
		$options = array('conditions' => array('ProductosProveedore.' . $this->ProductosProveedore->primaryKey => $id));
		$this->set('productosProveedore', $this->ProductosProveedore->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ProductosProveedore->create();
			if ($this->ProductosProveedore->save($this->request->data)) {
				$this->Session->setFlash(__('The productos proveedore has been saved.'));
				// return $this->redirect(array('action' => 'index'));
				return $this->redirect(array('controller'=>'proveedores'
					, 'action' => 'view'
						, $this->request->data['ProductosProveedore']['proveedore_id']));
			} else {
				$this->Session->setFlash(__('The productos proveedore could not be saved. Please, try again.'));
			}
		}
		$productos = $this->ProductosProveedore->Producto->find('list');
		$proveedores = $this->ProductosProveedore->Proveedore->find('list');
		$this->set(compact('productos', 'proveedores'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->ProductosProveedore->exists($id)) {
			throw new NotFoundException(__('Invalid productos proveedore'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ProductosProveedore->save($this->request->data)) {
				$this->Session->setFlash(__('The productos proveedore has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The productos proveedore could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ProductosProveedore.' . $this->ProductosProveedore->primaryKey => $id));
			$this->request->data = $this->ProductosProveedore->find('first', $options);
		}
		$productos = $this->ProductosProveedore->Producto->find('list');
		$proveedores = $this->ProductosProveedore->Proveedore->find('list');
		$this->set(compact('productos', 'proveedores'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->ProductosProveedore->id = $id;
		if (!$this->ProductosProveedore->exists()) {
			throw new NotFoundException(__('Invalid productos proveedore'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->ProductosProveedore->delete()) {
			$this->Session->setFlash(__('The productos proveedore has been deleted.'));
		} else {
			$this->Session->setFlash(__('The productos proveedore could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
