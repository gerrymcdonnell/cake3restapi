<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * QuestionsTypes Controller
 *
 * @property \App\Model\Table\QuestionsTypesTable $QuestionsTypes
 *
 * @method \App\Model\Entity\QuestionsType[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class QuestionsTypesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $questionsTypes = $this->paginate($this->QuestionsTypes);

        $this->set(compact('questionsTypes'));
    }

    /**
     * View method
     *
     * @param string|null $id Questions Type id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $questionsType = $this->QuestionsTypes->get($id, [
            'contain' => []
        ]);

        $this->set('questionsType', $questionsType);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $questionsType = $this->QuestionsTypes->newEntity();
        if ($this->request->is('post')) {
            $questionsType = $this->QuestionsTypes->patchEntity($questionsType, $this->request->getData());
            if ($this->QuestionsTypes->save($questionsType)) {
                $this->Flash->success(__('The questions type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The questions type could not be saved. Please, try again.'));
        }
        $this->set(compact('questionsType'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Questions Type id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $questionsType = $this->QuestionsTypes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $questionsType = $this->QuestionsTypes->patchEntity($questionsType, $this->request->getData());
            if ($this->QuestionsTypes->save($questionsType)) {
                $this->Flash->success(__('The questions type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The questions type could not be saved. Please, try again.'));
        }
        $this->set(compact('questionsType'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Questions Type id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $questionsType = $this->QuestionsTypes->get($id);
        if ($this->QuestionsTypes->delete($questionsType)) {
            $this->Flash->success(__('The questions type has been deleted.'));
        } else {
            $this->Flash->error(__('The questions type could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
