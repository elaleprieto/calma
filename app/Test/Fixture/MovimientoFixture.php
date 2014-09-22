<?php
/**
 * MovimientoFixture
 *
 */
class MovimientoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 36, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'cantidad' => array('type' => 'float', 'null' => false, 'default' => null, 'unsigned' => false),
		'cantidad_anterior' => array('type' => 'float', 'null' => false, 'default' => null, 'unsigned' => false),
		'observaciones' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'movimiento' => array('type' => 'integer', 'null' => false, 'default' => '0', 'unsigned' => false),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'producto_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'categoria_id' => array('type' => 'integer', 'null' => false, 'default' => '0', 'unsigned' => false),
		'user_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
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
			'id' => '541f7213-ed4c-44ea-ac93-031a55077360',
			'cantidad' => 1,
			'cantidad_anterior' => 1,
			'observaciones' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'movimiento' => 1,
			'created' => '2014-09-21 21:49:23',
			'modified' => '2014-09-21 21:49:23',
			'producto_id' => 1,
			'categoria_id' => 1,
			'user_id' => 1
		),
	);

}
