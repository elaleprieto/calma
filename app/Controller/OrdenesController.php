<?php
App::uses('AppController', 'Controller');
/**
 * Ordenes Controller
 *
 * @property Ordene $Ordene
 * @property PaginatorComponent $Paginator
 */
class OrdenesController extends AppController {

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
		$this->Ordene->recursive = 0;
		$this->set('ordenes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Ordene->exists($id)) {
			throw new NotFoundException(__('Invalid ordene'));
		}
		$options = array('conditions' => array('Ordene.' . $this->Ordene->primaryKey => $id));
		$this->set('ordene', $this->Ordene->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Ordene->create();
			if ($this->Ordene->save($this->request->data)) {
				$this->Session->setFlash(__('The ordene has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The ordene could not be saved. Please, try again.'));
			}
		}
		$productos = $this->Ordene->Producto->find('list');
		$pedidos = $this->Ordene->Pedido->find('list');
		$this->set(compact('productos', 'pedidos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Ordene->exists($id)) {
			throw new NotFoundException(__('Invalid ordene'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Ordene->save($this->request->data)) {
				$this->Session->setFlash(__('The ordene has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The ordene could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Ordene.' . $this->Ordene->primaryKey => $id));
			$this->request->data = $this->Ordene->find('first', $options);
		}
		$productos = $this->Ordene->Producto->find('list');
		$pedidos = $this->Ordene->Pedido->find('list');
		$this->set(compact('productos', 'pedidos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Ordene->id = $id;
		if (!$this->Ordene->exists()) {
			throw new NotFoundException(__('Invalid ordene'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Ordene->delete()) {
			$this->Session->setFlash(__('The ordene has been deleted.'));
		} else {
			$this->Session->setFlash(__('The ordene could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
