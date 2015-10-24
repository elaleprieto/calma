<?php
App::uses('AppModel', 'Model');
/**
 * Movimiento Model
 *
 * @property Producto $Producto
 * @property Accione $Accione
 * @property User $User
 */
class Movimiento extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'cantidad' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'cantidad_anterior' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'producto_id' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'accione_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Producto' => array(
			'className' => 'Producto',
			'foreignKey' => 'producto_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Accione' => array(
			'className' => 'Accione',
			'foreignKey' => 'accione_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);


/**
 * egresar method
 * Dado un producto y una cantidad, registra el egreso de mercadería y reduce el stock del producto.
 *
 * @return void
 */
	public function egresar($productoId = null, $cantidad = null, $accioneId = null) {
		if($productoId && $cantidad && $accioneId) {
			$this->Producto->id = $productoId;
			$movimiento['producto_id'] = $productoId;
			$movimiento['cantidad_anterior'] = $this->Producto->field('stock');
			$movimiento['precio_compra'] = $this->Producto->field('precio_compra');
			$movimiento['precio_venta'] = $this->Producto->field('precio_venta');
			$movimiento['accione_id'] = $accioneId;
			$movimiento['cantidad'] = $cantidad;

			$this->create();
			if ($this->save($movimiento)) {
				# Se guarda el nuevo stock
				$this->Producto->saveField('stock', $movimiento['cantidad_anterior'] - $cantidad);
				return TRUE;
			}
		}
		return FALSE;
	}
}
