<?php
App::uses('AppController', 'Controller');
/**
 * Authors Controller
 *
 * @property Author $Author
 */
class AuthorsController extends AppController {
	
/**
 * bakery_index method
 *
 * @return void
 */
	public function bakery_index() {
		$this->Author->recursive = 0;
		$this->set('authors', $this->paginate());
	}

/**
 * bakery_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function bakery_view($id = null) {
		if (!$this->Author->exists($id)) {
			throw new NotFoundException(__('Invalid author'));
		}
		$options = array('conditions' => array('Author.' . $this->Author->primaryKey => $id));
		$this->set('author', $this->Author->find('first', $options));
	}

/**
 * bakery_add method
 *
 * @return void
 */
	public function bakery_add() {
		if ($this->request->is('post')) {
			$this->Author->create();
			if ($this->Author->save($this->request->data)) {
				$this->Session->setFlash(__('The author has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The author could not be saved. Please, try again.'));
			}
		}
	}

/**
 * bakery_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function bakery_edit($id = null) {
		if (!$this->Author->exists($id)) {
			throw new NotFoundException(__('Invalid author'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Author->save($this->request->data)) {
				$this->Session->setFlash(__('The author has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The author could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Author.' . $this->Author->primaryKey => $id));
			$this->request->data = $this->Author->find('first', $options);
		}
	}

/**
 * bakery_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function bakery_delete($id = null) {
		$this->Author->id = $id;
		if (!$this->Author->exists()) {
			throw new NotFoundException(__('Invalid author'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Author->delete()) {
			$this->Session->setFlash(__('Author deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Author was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
