<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 */
class UsersController extends AppController
{

	
    public function initialize() {
        parent::initialize();		
		$this->loadComponent('RequestHandler');
		
		
		//allow adding user
		$this->Auth->allow(['add']);
		
		//deny public non-logged in actions		
		//$this->Auth->deny(['view','edit','delete','index']);	
		
		$this->Auth->config('authError','Auth Error: Invalid Ownership Permission');
    }

	
	
    /**
        only allow the owner or admin to edit or delete
    **/
    public function isAuthorized($user){	
		
		// The owner of an question can edit and delete it
        if (in_array($this->request->action, ['edit', 'delete','view'])) {
			
            $userid = (int)$this->request->params['pass'][0];	
			
			if($userid==$user['id'] || $user['role']=='admin') {
				
                return true;
            }
			else{
				$this->Flash->error(__('Error: invalid Permission.'));
				return false;	
			}
        }

       return parent::isAuthorized($user);
    }
    
	
	
	
	/**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $users = $this->paginate($this->Users);
		
		//$this->render('index');

        $this->set(compact('users'));
        $this->set('_serialize', ['users']);
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => ['Questions']
        ]);

        $this->set('user', $user);
        $this->set('_serialize', ['user']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->data);
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The user could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('user'));
        $this->set('_serialize', ['user']);
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->data);
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The user could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('user'));
        $this->set('_serialize', ['user']);
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
	
	
	public function login()
	{
		if ($this->request->is('post')) {
			$user = $this->Auth->identify();
			if ($user) {
				$this->Auth->setUser($user);

                //stoire user object
                 $this->set('userData', $this->Auth->user());

				return $this->redirect($this->Auth->redirectUrl());
			}
			$this->Flash->error('Your username or password is incorrect.');
		}
	}
	
		
	public function logout(){
		$this->Flash->success('You are now logged out.');
		return $this->redirect($this->Auth->logout());
	}
	
	
	
	
	//test ajax plugin
	public function testajax() {
		//$this->request->allowMethod(['ajax']);
		$this->viewClass = 'Ajax.Ajax'; // Only necessary without the Ajax component
		
		$msg="gfdgdfgdfhs";
		
		$this->set(compact('msg'));
        $this->set('_serialize', ['msg']);
	}
	
	
	
}
