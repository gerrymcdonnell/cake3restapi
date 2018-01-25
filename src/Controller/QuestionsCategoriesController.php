<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * QuestionsCategories Controller
 *
 * @property \App\Model\Table\QuestionsCategoriesTable $QuestionsCategories
 *
 * @method \App\Model\Entity\QuestionsCategory[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class QuestionsCategoriesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users']
        ];
        $questionsCategories = $this->paginate($this->QuestionsCategories);

        $this->set(compact('questionsCategories'));
    }

    /**
     * View method
     *
     * @param string|null $id Questions Category id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $questionsCategory = $this->QuestionsCategories->get($id, [
            'contain' => ['Users']
        ]);

        $this->set('questionsCategory', $questionsCategory);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $questionsCategory = $this->QuestionsCategories->newEntity();
        if ($this->request->is('post')) {
            $questionsCategory = $this->QuestionsCategories->patchEntity($questionsCategory, $this->request->getData());
            if ($this->QuestionsCategories->save($questionsCategory)) {
                $this->Flash->success(__('The questions category has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The questions category could not be saved. Please, try again.'));
        }
        $users = $this->QuestionsCategories->Users->find('list', ['limit' => 200]);
        $this->set(compact('questionsCategory', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Questions Category id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $questionsCategory = $this->QuestionsCategories->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $questionsCategory = $this->QuestionsCategories->patchEntity($questionsCategory, $this->request->getData());
            if ($this->QuestionsCategories->save($questionsCategory)) {
                $this->Flash->success(__('The questions category has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The questions category could not be saved. Please, try again.'));
        }
        $users = $this->QuestionsCategories->Users->find('list', ['limit' => 200]);
        $this->set(compact('questionsCategory', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Questions Category id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $questionsCategory = $this->QuestionsCategories->get($id);
        if ($this->QuestionsCategories->delete($questionsCategory)) {
            $this->Flash->success(__('The questions category has been deleted.'));
        } else {
            $this->Flash->error(__('The questions category could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
