<?php
/**
 * ProductoFixture
 *
 */
class ProductoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => true, 'key' => 'primary'),
		'orden' => array('type' => 'integer', 'null' => false, 'default' => '999999', 'unsigned' => false),
		'detalle' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 250, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'unidad' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'precio_compra' => array('type' => 'float', 'null' => false, 'default' => '0', 'unsigned' => false),
		'precio_venta' => array('type' => 'float', 'null' => false, 'default' => null, 'unsigned' => false),
		'foto' => array('type' => 'string', 'null' => true, 'default' => 'nofoto', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'stock' => array('type' => 'float', 'null' => false, 'default' => '0', 'unsigned' => false),
		'porcentaje' => array('type' => 'float', 'null' => false, 'default' => '0', 'unsigned' => false),
		'stock_minimo' => array('type' => 'float', 'null' => false, 'default' => '0', 'unsigned' => false),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'orden' => 1,
			'detalle' => 'Lorem ipsum dolor sit amet',
			'unidad' => 'Lorem ip',
			'precio_compra' => 1,
			'precio_venta' => 1,
			'foto' => 'Lorem ipsum dolor sit amet',
			'created' => '2014-09-21 21:50:34',
			'modified' => '2014-09-21 21:50:34',
			'stock' => 1,
			'porcentaje' => 1,
			'stock_minimo' => 1
		),
	);

}
