<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Myanswers Controller
 *
 * @property \App\Model\Table\MyanswersTable $Myanswers
 *
 * @method \App\Model\Entity\Myanswer[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MyanswersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Questions', 'Users']
        ];
        $myanswers = $this->paginate($this->Myanswers);

        $this->set(compact('myanswers'));
    }

    /**
     * View method
     *
     * @param string|null $id Myanswer id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $myanswer = $this->Myanswers->get($id, [
            'contain' => ['Questions', 'Users']
        ]);

        $this->set('myanswer', $myanswer);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $myanswer = $this->Myanswers->newEntity();
        if ($this->request->is('post')) {
            $myanswer = $this->Myanswers->patchEntity($myanswer, $this->request->getData());
            if ($this->Myanswers->save($myanswer)) {
                $this->Flash->success(__('The myanswer has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The myanswer could not be saved. Please, try again.'));
        }
        $questions = $this->Myanswers->Questions->find('list', ['limit' => 200]);
        $users = $this->Myanswers->Users->find('list', ['limit' => 200]);
        $this->set(compact('myanswer', 'questions', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Myanswer id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $myanswer = $this->Myanswers->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $myanswer = $this->Myanswers->patchEntity($myanswer, $this->request->getData());
            if ($this->Myanswers->save($myanswer)) {
                $this->Flash->success(__('The myanswer has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The myanswer could not be saved. Please, try again.'));
        }
        $questions = $this->Myanswers->Questions->find('list', ['limit' => 200]);
        $users = $this->Myanswers->Users->find('list', ['limit' => 200]);
        $this->set(compact('myanswer', 'questions', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Myanswer id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $myanswer = $this->Myanswers->get($id);
        if ($this->Myanswers->delete($myanswer)) {
            $this->Flash->success(__('The myanswer has been deleted.'));
        } else {
            $this->Flash->error(__('The myanswer could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
