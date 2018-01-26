<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * QuizzesAnswers Controller
 *
 * @property \App\Model\Table\QuizzesAnswersTable $QuizzesAnswers
 *
 * @method \App\Model\Entity\QuizzesAnswer[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class QuizzesAnswersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Quizzes', 'Questions', 'Users']
        ];
        $quizzesAnswers = $this->paginate($this->QuizzesAnswers);

        $this->set(compact('quizzesAnswers'));
    }

    /**
     * View method
     *
     * @param string|null $id Quizzes Answer id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $quizzesAnswer = $this->QuizzesAnswers->get($id, [
            'contain' => ['Quizzes', 'Questions', 'Users']
        ]);

        $this->set('quizzesAnswer', $quizzesAnswer);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $quizzesAnswer = $this->QuizzesAnswers->newEntity();
        if ($this->request->is('post')) {
            $quizzesAnswer = $this->QuizzesAnswers->patchEntity($quizzesAnswer, $this->request->getData());
            if ($this->QuizzesAnswers->save($quizzesAnswer)) {
                $this->Flash->success(__('The quizzes answer has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The quizzes answer could not be saved. Please, try again.'));
        }
        $quizzes = $this->QuizzesAnswers->Quizzes->find('list', ['limit' => 200]);
        $questions = $this->QuizzesAnswers->Questions->find('list', ['limit' => 200]);
        $users = $this->QuizzesAnswers->Users->find('list', ['limit' => 200]);
        $this->set(compact('quizzesAnswer', 'quizzes', 'questions', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Quizzes Answer id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $quizzesAnswer = $this->QuizzesAnswers->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $quizzesAnswer = $this->QuizzesAnswers->patchEntity($quizzesAnswer, $this->request->getData());
            if ($this->QuizzesAnswers->save($quizzesAnswer)) {
                $this->Flash->success(__('The quizzes answer has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The quizzes answer could not be saved. Please, try again.'));
        }
        $quizzes = $this->QuizzesAnswers->Quizzes->find('list', ['limit' => 200]);
        $questions = $this->QuizzesAnswers->Questions->find('list', ['limit' => 200]);
        $users = $this->QuizzesAnswers->Users->find('list', ['limit' => 200]);
        $this->set(compact('quizzesAnswer', 'quizzes', 'questions', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Quizzes Answer id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $quizzesAnswer = $this->QuizzesAnswers->get($id);
        if ($this->QuizzesAnswers->delete($quizzesAnswer)) {
            $this->Flash->success(__('The quizzes answer has been deleted.'));
        } else {
            $this->Flash->error(__('The quizzes answer could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
