<?php
App::uses('ProductosProveedore', 'Model');

/**
 * ProductosProveedore Test Case
 *
 */
class ProductosProveedoreTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.productos_proveedore',
		'app.producto',
		'app.movimiento',
		'app.accione',
		'app.user',
		'app.rol',
		'app.ordene',
		'app.pedido',
		'app.proveedore',
		'app.localidade',
		'app.provincia'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ProductosProveedore = ClassRegistry::init('ProductosProveedore');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ProductosProveedore);

		parent::tearDown();
	}

}
