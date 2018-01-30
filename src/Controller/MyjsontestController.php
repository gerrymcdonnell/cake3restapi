<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Myjsontest Controller
 *
 * @property \App\Model\Table\MyjsontestTable $Myjsontest
 *
 * @method \App\Model\Entity\Myjsontest[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MyjsontestController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Questions']
        ];
        $myjsontest = $this->paginate($this->Myjsontest);

        $this->set(compact('myjsontest'));
    }

    /**
     * View method
     *
     * @param string|null $id Myjsontest id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $myjsontest = $this->Myjsontest->get($id, [
            'contain' => ['Users', 'Questions']
        ]);

        $this->set('myjsontest', $myjsontest);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $myjsontest = $this->Myjsontest->newEntity();
        if ($this->request->is('post')) {
            $myjsontest = $this->Myjsontest->patchEntity($myjsontest, $this->request->getData());
            if ($this->Myjsontest->save($myjsontest)) {
                $this->Flash->success(__('The myjsontest has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The myjsontest could not be saved. Please, try again.'));
        }
        $users = $this->Myjsontest->Users->find('list', ['limit' => 200]);
        $questions = $this->Myjsontest->Questions->find('list', ['limit' => 200]);
        $this->set(compact('myjsontest', 'users', 'questions'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Myjsontest id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $myjsontest = $this->Myjsontest->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $myjsontest = $this->Myjsontest->patchEntity($myjsontest, $this->request->getData());
            if ($this->Myjsontest->save($myjsontest)) {
                $this->Flash->success(__('The myjsontest has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The myjsontest could not be saved. Please, try again.'));
        }
        $users = $this->Myjsontest->Users->find('list', ['limit' => 200]);
        $questions = $this->Myjsontest->Questions->find('list', ['limit' => 200]);
        $this->set(compact('myjsontest', 'users', 'questions'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Myjsontest id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $myjsontest = $this->Myjsontest->get($id);
        if ($this->Myjsontest->delete($myjsontest)) {
            $this->Flash->success(__('The myjsontest has been deleted.'));
        } else {
            $this->Flash->error(__('The myjsontest could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
