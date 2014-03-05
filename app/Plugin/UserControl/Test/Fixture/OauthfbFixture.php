<?php
/**
 * OauthfbFixture
 *
 */
class OauthfbFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'oauthfb';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'fb_id' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
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
			'fb_id' => 'Lorem ipsum dolor sit amet',
			'user_id' => 1,
			'created' => '2014-03-04 19:38:47',
			'modified' => '2014-03-04 19:38:47'
		),
	);

}
