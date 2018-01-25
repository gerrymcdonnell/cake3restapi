<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * QuestionsAnswers Controller
 *
 * @property \App\Model\Table\QuestionsAnswersTable $QuestionsAnswers
 *
 * @method \App\Model\Entity\QuestionsAnswer[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class QuestionsAnswersController extends AppController
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
        $questionsAnswers = $this->paginate($this->QuestionsAnswers);

        $this->set(compact('questionsAnswers'));
    }

    /**
     * View method
     *
     * @param string|null $id Questions Answer id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $questionsAnswer = $this->QuestionsAnswers->get($id, [
            'contain' => ['Questions', 'Users']
        ]);

        $this->set('questionsAnswer', $questionsAnswer);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $questionsAnswer = $this->QuestionsAnswers->newEntity();
        if ($this->request->is('post')) {
            $questionsAnswer = $this->QuestionsAnswers->patchEntity($questionsAnswer, $this->request->getData());
            if ($this->QuestionsAnswers->save($questionsAnswer)) {
                $this->Flash->success(__('The questions answer has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The questions answer could not be saved. Please, try again.'));
        }
        $questions = $this->QuestionsAnswers->Questions->find('list', ['limit' => 200]);
        $users = $this->QuestionsAnswers->Users->find('list', ['limit' => 200]);
        $this->set(compact('questionsAnswer', 'questions', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Questions Answer id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $questionsAnswer = $this->QuestionsAnswers->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $questionsAnswer = $this->QuestionsAnswers->patchEntity($questionsAnswer, $this->request->getData());
            if ($this->QuestionsAnswers->save($questionsAnswer)) {
                $this->Flash->success(__('The questions answer has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The questions answer could not be saved. Please, try again.'));
        }
        $questions = $this->QuestionsAnswers->Questions->find('list', ['limit' => 200]);
        $users = $this->QuestionsAnswers->Users->find('list', ['limit' => 200]);
        $this->set(compact('questionsAnswer', 'questions', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Questions Answer id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $questionsAnswer = $this->QuestionsAnswers->get($id);
        if ($this->QuestionsAnswers->delete($questionsAnswer)) {
            $this->Flash->success(__('The questions answer has been deleted.'));
        } else {
            $this->Flash->error(__('The questions answer could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
