<?php
App::uses('Ordene', 'Model');

/**
 * Ordene Test Case
 *
 */
class OrdeneTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.ordene',
		'app.producto',
		'app.pedido'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Ordene = ClassRegistry::init('Ordene');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Ordene);

		parent::tearDown();
	}

}
