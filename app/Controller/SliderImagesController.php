<?php
	App::uses('AppController', 'Controller');
	/**
	 * SliderImages Controller
	 *
	 * @property SliderImage $SliderImage
	 */
	class SliderImagesController extends AppController {

		public $components = array('Attachment');

		public function beforeFilter() {
			parent::beforeFilter();
			$this -> Auth -> allow('uploadify_add', 'getSlides', 'reOrder');
		}

		public function getSlides() {
			return $this->SliderImage->find('all', array('order' => array('SliderImage.position' => 'ASC')));
		}

		public function reOrder() {
			$this -> autoRender = false;
			$success = true;
			$this -> SliderImage -> recursive = -1;
			foreach($this -> request -> data['SliderImage'] as $id => $position) {
				$item = $this -> SliderImage -> findById($id);
				$item['SliderImage']['position'] = $position;
				if(!$this -> SliderImage -> save($item)) {
					$success = false;
				}
			}
			if($success) {
				echo 'yes';
			} else {
				echo 'no';
			}
		}

		/**
		 * admin_index method
		 *
		 * @return void
		 */
		public function admin_index() {
			$this->SliderImage->recursive = 0;
			$this->paginate = array(
				'order' => array('position' => 'ASC'),
				'limit' => 50
			);
			$this->set('sliderImages', $this->paginate());
		}

		/**
		 * admin_add method
		 *
		 * @return void
		 */
		public function admin_add() {
			if($this->request->is('post')) {
				$this->SliderImage->create();
				if($this->SliderImage->save($this->request->data)) {
					$this->Session->setFlash(__('Se guardó la imagen del slider'));
					$this->redirect(array('action' => 'index'));
				} else {
					$this->Session->setFlash(__('No se pudo guardar la imagen del slider. Por favor, intente de nuevo.'));
				}
			}
		}

		/**
		 * admin_delete method
		 *
		 * @throws MethodNotAllowedException
		 * @throws NotFoundException
		 *
		 * @param string $id
		 *
		 * @return void
		 */
		public function admin_delete($id = null) {
			if(!$this->request->is('post')) {
				throw new MethodNotAllowedException();
			}
			$this->SliderImage->id = $id;
			if(!$this->SliderImage->exists()) {
				throw new NotFoundException(__('Imagen de slider no válida'));
			}
			if($this->SliderImage->delete()) {
				$this->Session->setFlash(__('Se eliminó la imagen de slider'));
				$this->redirect(array('action' => 'index'));
			}
			$this->Session->setFlash(__('No se eliminó la imagen de slider'));
			$this->redirect(array('action' => 'index'));
		}

		function uploadify_add() {
			$this -> autoRender = false;
			//Configure::write("debug", 0);

			if ($_POST['name'] && $_POST['folder']) {

				$fileName = $_POST['name'];
				$folder = $_POST['folder'];

				if(!$this -> Attachment -> resize_image('resize', $folder . '/' . $fileName, $folder . '/50x50', $fileName, 50,	50)) {
					echo
					"
				Error al tratar de redimensionar imagen 50x50
				Folder : $folder
				Archivo : $fileName
				";
					exit(0);
				}
				if(!$this -> Attachment -> resize_image("resize", $folder . "/" . $fileName, $folder . "/100x100", $fileName, 100, 100)) {
					echo
					"
				Error al tratar de redimensionar imagen 100x100
				Folder : $folder
				Archivo : $fileName
				";
					exit(0);
				}
				if(!$this -> Attachment -> resize_image("resize", $folder . "/" . $fileName, $folder . "/150x150", $fileName, 150, 150)) {
					echo
					"
				Error al tratar de redimensionar imagen 150x150
				Folder : $folder
				Archivo : $fileName
				";
					exit(0);
				}
				if(!$this -> Attachment -> resize_image("resize", $folder . "/" . $fileName, $folder . "/215x215", $fileName, 215, 215)) {
					echo
					"
				Error al tratar de redimensionar imagen 215x215
				Folder : $folder
				Archivo : $fileName
				";
					exit(0);
				}
				if(!$this -> Attachment -> resize_image("resize", $folder . "/" . $fileName, $folder . "/360x360", $fileName, 360, 360)) {
					echo
					"
				Error al tratar de redimensionar imagen 360x360
				Folder : $folder
				Archivo : $fileName
				";
					exit(0);
				}
				if(!$this -> Attachment -> resize_image("resize", $folder . "/" . $fileName, $folder . "/750x750", $fileName, 750, 750)) {
					echo
					"
				Error al tratar de redimensionar imagen 750x750
				Folder : $folder
				Archivo : $fileName
				";
					exit(0);
				}

			}

			echo true;
			exit(0);

		}

	}
