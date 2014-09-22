<?php
/**
 * ProductosProveedoreFixture
 *
 */
class ProductosProveedoreFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'producto_id' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 36, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'proveedore_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'codigo' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'precio' => array('type' => 'float', 'null' => true, 'default' => '0', 'unsigned' => false),
		'observaciones' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'detalle' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'fecha_actualizacion' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'bonificacion1' => array('type' => 'float', 'null' => true, 'default' => '0', 'unsigned' => false),
		'bonificacion2' => array('type' => 'float', 'null' => true, 'default' => '0', 'unsigned' => false),
		'bonificacion3' => array('type' => 'float', 'null' => true, 'default' => '0', 'unsigned' => false),
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
			'producto_id' => 'Lorem ipsum dolor sit amet',
			'proveedore_id' => 1,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'precio' => 1,
			'observaciones' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'detalle' => 'Lorem ipsum dolor sit amet',
			'fecha_actualizacion' => '2014-09-21 22:26:22',
			'created' => '2014-09-21 22:26:22',
			'modified' => '2014-09-21 22:26:22',
			'bonificacion1' => 1,
			'bonificacion2' => 1,
			'bonificacion3' => 1
		),
	);

}
