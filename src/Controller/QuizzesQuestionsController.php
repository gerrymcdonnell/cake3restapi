<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * QuizzesQuestions Controller
 *
 * @property \App\Model\Table\QuizzesQuestionsTable $QuizzesQuestions
 *
 * @method \App\Model\Entity\QuizzesQuestion[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class QuizzesQuestionsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Questions', 'Quizzes']
        ];
        $quizzesQuestions = $this->paginate($this->QuizzesQuestions);

        $this->set(compact('quizzesQuestions'));
    }

    /**
     * View method
     *
     * @param string|null $id Quizzes Question id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $quizzesQuestion = $this->QuizzesQuestions->get($id, [
            'contain' => ['Questions', 'Quizzes']
        ]);

        $this->set('quizzesQuestion', $quizzesQuestion);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $quizzesQuestion = $this->QuizzesQuestions->newEntity();
        if ($this->request->is('post')) {
            $quizzesQuestion = $this->QuizzesQuestions->patchEntity($quizzesQuestion, $this->request->getData());
            if ($this->QuizzesQuestions->save($quizzesQuestion)) {
                $this->Flash->success(__('The quizzes question has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The quizzes question could not be saved. Please, try again.'));
        }
        $questions = $this->QuizzesQuestions->Questions->find('list', ['limit' => 200]);
        $quizzes = $this->QuizzesQuestions->Quizzes->find('list', ['limit' => 200]);
        $this->set(compact('quizzesQuestion', 'questions', 'quizzes'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Quizzes Question id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $quizzesQuestion = $this->QuizzesQuestions->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $quizzesQuestion = $this->QuizzesQuestions->patchEntity($quizzesQuestion, $this->request->getData());
            if ($this->QuizzesQuestions->save($quizzesQuestion)) {
                $this->Flash->success(__('The quizzes question has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The quizzes question could not be saved. Please, try again.'));
        }
        $questions = $this->QuizzesQuestions->Questions->find('list', ['limit' => 200]);
        $quizzes = $this->QuizzesQuestions->Quizzes->find('list', ['limit' => 200]);
        $this->set(compact('quizzesQuestion', 'questions', 'quizzes'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Quizzes Question id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $quizzesQuestion = $this->QuizzesQuestions->get($id);
        if ($this->QuizzesQuestions->delete($quizzesQuestion)) {
            $this->Flash->success(__('The quizzes question has been deleted.'));
        } else {
            $this->Flash->error(__('The quizzes question could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
