<?php
	App::uses('UserControlAppController', 'UserControl.Controller');

	/**
	 * Oauthfbs Controller
	 *
	 */
	class OauthfbsController extends UserControlAppController {

		/**
		 * Scaffold
		 *
		 * @var mixed
		 */
		public $scaffold;

		public function beforeFilter() {
			parent::beforeFilter();
			$this->Auth->allow('checkFBID', 'createRelationship');
		}

		public function checkFBID($fb_id) {
			$fb = $this->Oauthfb->findByFbId($fb_id);
			if($fb) {
				return $fb['Oauthfb']['user_id'];
			} else {
				return false;
			}
		}

		public function createRelationship($fb_id, $user_id) {
			$this->Oauthfb->create();
			if($this->Oauthfb->find('all', array('conditions' => array('Oauthfb.fb_id' => $fb_id, 'Oauthfb.user_id' => $user_id)))) {
				return true;
			} else {
				$oauthfb = array('Oauthfb' => array('fb_id' => $fb_id, 'user_id' => $user_id));
				if($this->Oauthfb->save($oauthfb)) {
					return true;
				} else {
					return false;
				}
			}
		}

	}
