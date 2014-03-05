<?php
App::uses('Facebook', 'UserControl.Model');

/**
 * Facebook Test Case
 *
 */
class FacebookTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.user_control.facebook',
		'plugin.user_control.fb',
		'plugin.user_control.user'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Facebook = ClassRegistry::init('UserControl.Facebook');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Facebook);

		parent::tearDown();
	}

}
