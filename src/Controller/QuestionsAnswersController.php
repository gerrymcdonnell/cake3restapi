<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Questionsanswers Controller
 *
 * @property \App\Model\Table\QuestionsanswersTable $Questionsanswers
 *
 * @method \App\Model\Entity\Questionsanswer[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class QuestionsanswersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    /*public function index()
    {
        $this->paginate = [
            'contain' => ['Questions', 'Users']
        ];
        $questionsanswers = $this->paginate($this->Questionsanswers);

        $this->set(compact('questionsanswers'));
    }*/
	
	
	
	public function index()
    {
        $questionsanswers = $this->paginate($this->Questionsanswers);
        $this->set(
		['questionsanswers'=>$questionsanswers,
		'_serialize'=>['questionsanswers']
		]);	
    }
	

    /**
     * View method
     *
     * @param string|null $id Questionsanswer id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $questionsanswer = $this->Questionsanswers->get($id, [
            'contain' => ['Questions', 'Users']
        ]);

        $this->set('questionsanswer', $questionsanswer);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $questionsanswer = $this->Questionsanswers->newEntity();
        if ($this->request->is('post')) {
            $questionsanswer = $this->Questionsanswers->patchEntity($questionsanswer, $this->request->getData());
            if ($this->Questionsanswers->save($questionsanswer)) {
                $this->Flash->success(__('The questionsanswer has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The questionsanswer could not be saved. Please, try again.'));
        }
        $questions = $this->Questionsanswers->Questions->find('list', ['limit' => 200]);
        $users = $this->Questionsanswers->Users->find('list', ['limit' => 200]);
        $this->set(compact('questionsanswer', 'questions', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Questionsanswer id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $questionsanswer = $this->Questionsanswers->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $questionsanswer = $this->Questionsanswers->patchEntity($questionsanswer, $this->request->getData());
            if ($this->Questionsanswers->save($questionsanswer)) {
                $this->Flash->success(__('The questionsanswer has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The questionsanswer could not be saved. Please, try again.'));
        }
        $questions = $this->Questionsanswers->Questions->find('list', ['limit' => 200]);
        $users = $this->Questionsanswers->Users->find('list', ['limit' => 200]);
        $this->set(compact('questionsanswer', 'questions', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Questionsanswer id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $questionsanswer = $this->Questionsanswers->get($id);
        if ($this->Questionsanswers->delete($questionsanswer)) {
            $this->Flash->success(__('The questionsanswer has been deleted.'));
        } else {
            $this->Flash->error(__('The questionsanswer could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
