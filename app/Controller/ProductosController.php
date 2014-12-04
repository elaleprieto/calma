<?php
App::uses('AppController', 'Controller');
/**
 * Productos Controller
 *
 * @property Producto $Producto
 * @property PaginatorComponent $Paginator
 */
class ProductosController extends AppController {
	/**************************************************************************************************************
	* Authentication
	**************************************************************************************************************/
	public function beforeFilter() {
		parent::beforeFilter();
	}

	public function isAuthorized($user = null) {
		$owner_allowed = array();
		$user_allowed = array();
		$admin_allowed = array_merge($owner_allowed, $user_allowed, array('add', 'delete', 'edit', 'getByBarCode', 'getByDetalle', 'index', 'search', 'vender', 'view'));

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
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Producto->recursive = 0;
		$this->set('productos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Producto->exists($id)) {
			throw new NotFoundException(__('Invalid producto'));
		}
		$options = array('conditions' => array('Producto.' . $this->Producto->primaryKey => $id));
		$this->set('producto', $this->Producto->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Producto->create();
			if ($this->Producto->save($this->request->data)) {
				$this->Session->setFlash(__('The producto has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The producto could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Producto->exists($id)) {
			throw new NotFoundException(__('Invalid producto'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Producto->save($this->request->data)) {
				$this->Session->setFlash(__('The producto has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The producto could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Producto.' . $this->Producto->primaryKey => $id));
			$this->request->data = $this->Producto->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Producto->id = $id;
		if (!$this->Producto->exists()) {
			throw new NotFoundException(__('Invalid producto'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Producto->delete()) {
			$this->Session->setFlash(__('The producto has been deleted.'));
		} else {
			$this->Session->setFlash(__('The producto could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * getByBarCode method
 *
 * @throws NotFoundException
 * @param string $barCode
 * @return void
 */
	public function getByBarCode() {
		// $this->autoRender = FALSE;
		$this->layout = 'ajax';
		$barCode = $this->request->query['barCode'];
		$options['conditions'] = array('barra LIKE' => "%$barCode%");
		$options['recursive'] = -1;
		$productos = $this->Producto->find('all', $options);
		// debug($productos, $showHtml = null, $showFrom = true);
		// return $productos;
		$this->set(array('productos' => $productos, '_serialize' => array('productos')));
	}

/**
 * getByDetalle method
 *
 * @throws NotFoundException
 * @param string $barCode
 * @return void
 */
	public function getByDetalle() {
		$this->layout = 'ajax';
		$query = $this->request->query['query'];
		$options['conditions'] = array('detalle LIKE' => "%$query%");
		$options['recursive'] = -1;
		$productos = $this->Producto->find('all', $options);
		$this->set(array('productos' => $productos, '_serialize' => array('productos')));
	}

/**
 * vender method
 *
 * @throws NotFoundException
 * @param string $barCode
 * @return void
 */
	public function vender() {
		$this->layout = 'ajax';
		if ($this->request->is(array('post', 'put'))) {
			// if ($this->Producto->save($this->request->data)) {
			// }
			$data = $this->request->input('json_decode');
			$this->Producto->id = $data->id;
			$movimiento['cantidad_anterior'] = $this->Producto->field('stock');
			$movimiento['cantidad'] = $data->cantidad * -1;
			$movimiento['producto_id'] = $data->id;
			$movimiento['accione_id'] = $this->Producto->Movimiento->Accione->field('id', array('name LIKE'=>'Venta%', 'egreso'=>1));

			$this->Producto->Movimiento->create();
			if ($this->Producto->Movimiento->save($movimiento)) {
				$this->Producto->saveField('stock', $this->Producto->field('stock') - $data->cantidad);
			}
		}
		// $query = $this->request->query['query'];
		// $options['conditions'] = array('detalle LIKE' => "%$query%");
		// $options['recursive'] = -1;
		// $productos = $this->Producto->find('all', $options);
		// $this->set(array('productos' => $productos, '_serialize' => array('productos')));
	}

/**
 * search method
 *
 * @throws NotFoundException
 * @param string $barCode
 * @return void
 */
	public function search() {
	}
}
