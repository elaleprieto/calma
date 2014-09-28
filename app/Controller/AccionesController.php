<?php
App::uses('AppController', 'Controller');
/**
 * Acciones Controller
 *
 * @property Accione $Accione
 * @property PaginatorComponent $Paginator
 */
class AccionesController extends AppController {

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
		$this->Accione->recursive = 0;
		$this->set('acciones', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Accione->exists($id)) {
			throw new NotFoundException(__('Invalid accione'));
		}
		$options = array('conditions' => array('Accione.' . $this->Accione->primaryKey => $id));
		$this->set('accione', $this->Accione->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Accione->create();
			if ($this->Accione->save($this->request->data)) {
				$this->Session->setFlash(__('The accione has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The accione could not be saved. Please, try again.'));
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
		if (!$this->Accione->exists($id)) {
			throw new NotFoundException(__('Invalid accione'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Accione->save($this->request->data)) {
				$this->Session->setFlash(__('The accione has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The accione could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Accione.' . $this->Accione->primaryKey => $id));
			$this->request->data = $this->Accione->find('first', $options);
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
		$this->Accione->id = $id;
		if (!$this->Accione->exists()) {
			throw new NotFoundException(__('Invalid accione'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Accione->delete()) {
			$this->Session->setFlash(__('The accione has been deleted.'));
		} else {
			$this->Session->setFlash(__('The accione could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
