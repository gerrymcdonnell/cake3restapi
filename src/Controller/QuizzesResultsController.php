<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * QuizzesResults Controller
 *
 * @property \App\Model\Table\QuizzesResultsTable $QuizzesResults
 *
 * @method \App\Model\Entity\QuizzesResult[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class QuizzesResultsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Quizzes', 'Users']
        ];
        $quizzesResults = $this->paginate($this->QuizzesResults);

        $this->set(compact('quizzesResults'));
    }

    /**
     * View method
     *
     * @param string|null $id Quizzes Result id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $quizzesResult = $this->QuizzesResults->get($id, [
            'contain' => ['Quizzes', 'Users']
        ]);

        $this->set('quizzesResult', $quizzesResult);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $quizzesResult = $this->QuizzesResults->newEntity();
        if ($this->request->is('post')) {
            $quizzesResult = $this->QuizzesResults->patchEntity($quizzesResult, $this->request->getData());
            if ($this->QuizzesResults->save($quizzesResult)) {
                $this->Flash->success(__('The quizzes result has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The quizzes result could not be saved. Please, try again.'));
        }
        $quizzes = $this->QuizzesResults->Quizzes->find('list', ['limit' => 200]);
        $users = $this->QuizzesResults->Users->find('list', ['limit' => 200]);
        $this->set(compact('quizzesResult', 'quizzes', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Quizzes Result id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $quizzesResult = $this->QuizzesResults->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $quizzesResult = $this->QuizzesResults->patchEntity($quizzesResult, $this->request->getData());
            if ($this->QuizzesResults->save($quizzesResult)) {
                $this->Flash->success(__('The quizzes result has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The quizzes result could not be saved. Please, try again.'));
        }
        $quizzes = $this->QuizzesResults->Quizzes->find('list', ['limit' => 200]);
        $users = $this->QuizzesResults->Users->find('list', ['limit' => 200]);
        $this->set(compact('quizzesResult', 'quizzes', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Quizzes Result id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $quizzesResult = $this->QuizzesResults->get($id);
        if ($this->QuizzesResults->delete($quizzesResult)) {
            $this->Flash->success(__('The quizzes result has been deleted.'));
        } else {
            $this->Flash->error(__('The quizzes result could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
