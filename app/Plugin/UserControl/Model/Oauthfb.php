<?php
	App::uses('UserControlAppModel', 'UserControl.Model');

	/**
	 * Oauthfb Model
	 *
	 * @property User $User
	 */
	class Oauthfb extends UserControlAppModel {

		/**
		 * Use table
		 *
		 * @var mixed False or table name
		 */
		public $useTable = 'oauthfb';

		/**
		 * Validation rules
		 *
		 * @var array
		 */
		public $validate = array(
			'fb_id'   => array(
				'notempty' => array(
					'rule' => array('notempty'),
					//'message' => 'Your custom message here',
					//'allowEmpty' => false,
					//'required' => false,
					//'last' => false, // Stop validation after this rule
					//'on' => 'create', // Limit validation to 'create' or 'update' operations
				),
			),
			'user_id' => array(
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
		 * belongsTo associations
		 *
		 * @var array
		 */
		public $belongsTo = array(
			'User' => array(
				'className'  => 'UserControl.User',
				'foreignKey' => 'user_id',
				'conditions' => '',
				'fields'     => '',
				'order'      => ''
			)
		);
	}
