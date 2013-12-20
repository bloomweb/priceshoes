<?php
	App::uses('AppModel', 'Model');
	/**
	 * SliderImage Model
	 *
	 */
	class SliderImage extends AppModel {

		public function beforeSave($options = array()) {
			if(!isset($this->data['SliderImage']['position'])) {
				$total = $this->find('count');
				$this->data['SliderImage']['position'] = $total + 1;
			} elseif($this->data['SliderImage']['position'] == 0) {
				$total = $this->find('count');
				$this->data['SliderImage']['position'] = $total + 1;
			}
			return true;
		}

	}
