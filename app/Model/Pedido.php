<?php
App::uses('AppModel', 'Model');
/**
 * Pedido Model
 *
 * @property Ordene $Ordene
 */
class Pedido extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'estado' => array(
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
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Ordene' => array(
			'className' => 'Ordene',
			'foreignKey' => 'pedido_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}