<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Quizzes Controller
 *
 * @property \App\Model\Table\QuizzesTable $Quizzes
 *
 * @method \App\Model\Entity\Quiz[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class QuizzesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    /*public function index()
    {
        $this->paginate = [
            'contain' => 'Questions'
        ];
        $quizzes = $this->paginate($this->Quizzes);

        $this->set(compact('quizzes'));
    }*/
	
	
	//new version of index
	public function index()
    {
        $quizzes = $this->Quizzes->find('all');
		
		// Set the view vars that have to be serialized.
        $this->set(compact('quizzes'));

        //note the removal of [] around words
        $this->set('_serialize', 'quizzes');		
    }

    /**
     * View method
     *
     * @param string|null $id Quiz id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $quiz = $this->Quizzes->get($id, [
            'contain' => ['Users', 'Questions', 'QuizzesAnswers', 'QuizzesResults']
        ]);

        $this->set('quiz', $quiz);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $quiz = $this->Quizzes->newEntity();
        if ($this->request->is('post')) {
            $quiz = $this->Quizzes->patchEntity($quiz, $this->request->getData());
            if ($this->Quizzes->save($quiz)) {
                $this->Flash->success(__('The quiz has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The quiz could not be saved. Please, try again.'));
        }
        $users = $this->Quizzes->Users->find('list', ['limit' => 200]);
        $questions = $this->Quizzes->Questions->find('list', ['limit' => 200]);
        $this->set(compact('quiz', 'users', 'questions'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Quiz id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $quiz = $this->Quizzes->get($id, [
            'contain' => ['Questions']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $quiz = $this->Quizzes->patchEntity($quiz, $this->request->getData());
            if ($this->Quizzes->save($quiz)) {
                $this->Flash->success(__('The quiz has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The quiz could not be saved. Please, try again.'));
        }
        $users = $this->Quizzes->Users->find('list', ['limit' => 200]);
        $questions = $this->Quizzes->Questions->find('list', ['limit' => 200]);
        $this->set(compact('quiz', 'users', 'questions'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Quiz id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $quiz = $this->Quizzes->get($id);
        if ($this->Quizzes->delete($quiz)) {
            $this->Flash->success(__('The quiz has been deleted.'));
        } else {
            $this->Flash->error(__('The quiz could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
