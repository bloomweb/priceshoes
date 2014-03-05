<?php
App::uses('Oauthfb', 'UserControl.Model');

/**
 * Oauthfb Test Case
 *
 */
class OauthfbTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.user_control.oauthfb',
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
		$this->Oauthfb = ClassRegistry::init('UserControl.Oauthfb');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Oauthfb);

		parent::tearDown();
	}

}
