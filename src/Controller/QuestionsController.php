<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Questions Controller
 *
 * @property \App\Model\Table\QuestionsTable $Questions
 *
 * @method \App\Model\Entity\Question[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class QuestionsController extends AppController
{

    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('RequestHandler');
    }
	
	/**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    /*public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'QuestionsCategories', 'Questionstypes']
        ];
        $questions = $this->paginate($this->Questions);

        $this->set(compact('questions'));
    }*/
	
	
	/**
	rest index
	**/
	public function index()
    {
        $questions = $this->Questions->find('all');
		
		// Set the view vars that have to be serialized.
        $this->set(compact('questions'));

        //note the removal of [] around Questions
        $this->set('_serialize', 'questions');
		
    }
	
	

    /**
     * View method
     *
     * @param string|null $id Question id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    /*public function view($id = null)
    {
        $question = $this->Questions->get($id, [
            'contain' => ['Users', 'QuestionsCategories', 'Questionstypes', 'QuestionsAnswers']
        ]);

        $this->set('question', $question);
    }*/
	
	
    public function view($id = null){
        
		$question = $this->Questions->get($id, [
            'contain' => ['QuestionsCategories', 'Questionstypes', 'QuestionsAnswers']
        ]);       
        $this->set([
            'question' => $question,
            '_serialize' => 'question'
        ]);		
    }
	
	

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $question = $this->Questions->newEntity();
        if ($this->request->is('post')) {
            $question = $this->Questions->patchEntity($question, $this->request->getData());
            if ($this->Questions->save($question)) {
                $this->Flash->success(__('The question has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The question could not be saved. Please, try again.'));
        }
        $users = $this->Questions->Users->find('list', ['limit' => 200]);
        $questionsCategories = $this->Questions->QuestionsCategories->find('list', ['limit' => 200]);
        $questionstypes = $this->Questions->Questionstypes->find('list', ['limit' => 200]);
        $this->set(compact('question', 'users', 'questionsCategories', 'questionstypes'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Question id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    /*public function edit($id = null)
    {
        $question = $this->Questions->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $question = $this->Questions->patchEntity($question, $this->request->getData());
            if ($this->Questions->save($question)) {
                $this->Flash->success(__('The question has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The question could not be saved. Please, try again.'));
        }
        $users = $this->Questions->Users->find('list', ['limit' => 200]);
        $questionsCategories = $this->Questions->QuestionsCategories->find('list', ['limit' => 200]);
        $questionstypes = $this->Questions->Questionstypes->find('list', ['limit' => 200]);
        $this->set(compact('question', 'users', 'questionsCategories', 'questionstypes'));
    }*/
	
	public function edit($id = null)   {
		
		$question = $this->Questions->get($id);
        if ($this->request->is(['post', 'put'])) {
            $question = $this->Questions->patchEntity($question, $this->request->getData());
            if ($this->Questions->save($question)) {
                $message = 'Saved';
            } else {
                $message = 'Error: Saving updated word';
            }
        }
        $this->set([
            'message' => $message,
            '_serialize' => ['message']
        ]);		
    }
	
	
	
	

    /**
     * Delete method
     *
     * @param string|null $id Question id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $question = $this->Questions->get($id);
        if ($this->Questions->delete($question)) {
            $this->Flash->success(__('The question has been deleted.'));
        } else {
            $this->Flash->error(__('The question could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
