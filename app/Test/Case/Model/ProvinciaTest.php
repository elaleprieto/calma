<?php
App::uses('Provincia', 'Model');

/**
 * Provincia Test Case
 *
 */
class ProvinciaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.provincia',
		'app.localidade',
		'app.proveedore',
		'app.producto',
		'app.movimiento',
		'app.accione',
		'app.user',
		'app.rol',
		'app.ordene',
		'app.pedido',
		'app.productos_proveedore'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Provincia = ClassRegistry::init('Provincia');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Provincia);

		parent::tearDown();
	}

}
