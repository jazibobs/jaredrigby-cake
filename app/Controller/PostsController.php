<?php
App::uses('AppController', 'Controller');
/**
 * Posts Controller
 *
 * @property Post $Post
 */
class PostsController extends AppController {

	var $uses = array('Post','Category','User');

/**
 * index method
 *
 * @return void
 */
	public function index() {

		$this->set('categories', $this->Category->find('all'));

		$this->Post->recursive = 0;
		$posts = $this->paginate();

		if($this->request->is('requested')) {
			return $posts;
		} else {
			$this->set('posts', $posts);
		}
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {

		if (!$this->Post->exists($id)) {
			throw new NotFoundException(__('Invalid post'));
		}
		$options = array('conditions' => array('Post.' . $this->Post->primaryKey => $id));
		$this->set('post', $this->Post->find('first', $options));
	}

/**	
* viewcategory method
*
*	@throws 
*	@param string $category_id
*	@return void
*/
	public function viewcategory($category_id = null){

		$this->set('categories', $this->Category->find('all'));

		if (!$this->Post->Category->exists($category_id)) {
			throw new NotFoundException(__('Invalid category'));
		}
		$options = array('conditions' => array('Post.category_id' => $category_id));
		$this->set('posts', $this->Post->find('all', $options));
	}

/**	
* viewuser method
*
*	@throws 
*	@param string $user_id
*	@return void
*/
	public function viewuser($user_id = null){

		$this->set('categories', $this->Category->find('all'));

		if (!$this->Post->User->exists($user_id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		$options = array('conditions' => array('Post.user_id' => $user_id));
		$this->set('posts', $this->Post->find('all', $options));
	}


/**
 * bakery_index method
 *
 * @return void
 */
	public function bakery_index() {
		$this->Post->recursive = 0;
		$this->set('posts', $this->paginate());
	}

/**
 * bakery_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function bakery_view($id = null) {
		if (!$this->Post->exists($id)) {
			throw new NotFoundException(__('Invalid post'));
		}
		$options = array('conditions' => array('Post.' . $this->Post->primaryKey => $id));
		$this->set('post', $this->Post->find('first', $options));
	}

/**
 * bakery_add method
 *
 * @return void
 */
	public function bakery_add() {

		$this->set('categories', $this->Category->find('all'));
		$this->set('users', $this->User->find('all'));

		if ($this->request->is('post')) {
			$this->Post->create();
			if ($this->Post->save($this->request->data)) {
				$this->Session->setFlash(__('The post has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The post could not be saved. Please, try again.'));
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

		$this->set('categories', $this->Category->find('all'));
		$this->set('users', $this->User->find('all'));

		if (!$this->Post->exists($id)) {
			throw new NotFoundException(__('Invalid post'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Post->save($this->request->data)) {
				$this->Session->setFlash(__('The post has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The post could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Post.' . $this->Post->primaryKey => $id));
			$this->request->data = $this->Post->find('first', $options);
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
		$this->Post->id = $id;
		if (!$this->Post->exists()) {
			throw new NotFoundException(__('Invalid post'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Post->delete()) {
			$this->Session->setFlash(__('Post deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Post was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
