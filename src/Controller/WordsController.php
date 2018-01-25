<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Words Controller
 *
 * @property \App\Model\Table\WordsTable $Words
 *
 * @method \App\Model\Entity\Word[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class WordsController extends AppController
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
	
	//problem here as json output is in an array
    public function index()
    {
        $words = $this->Words->find('all');
		
		// Set the view vars that have to be serialized.
        $this->set(compact('words'));

        //note the removal of [] around words
        $this->set('_serialize', 'words');
		
    }

    /**
     * View method
     *
     * @param string|null $id Word id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $word = $this->Words->get($id);

        
        $this->set([
            'word' => $word,
            '_serialize' => 'word'
        ]);
		
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {	
		$word = $this->Words->newEntity($this->request->getData());
        if ($this->Words->save($word)) {
            $message = 'Saved';
        } else {
            $message = 'Error';
        }
        $this->set([
            'message' => $message,
            'word' => $word,
            '_serialize' => ['message', 'word']
        ]);	
    }

    /**
     * Edit method
     *
     * @param string|null $id Word id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)   {
		
		$word = $this->Words->get($id);
        if ($this->request->is(['post', 'put'])) {
            $word = $this->Words->patchEntity($word, $this->request->getData());
            if ($this->Words->save($word)) {
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
     * Delete method REST method
     */
	public function delete($id)
    {
        $word = $this->Words->get($id);
        $message = 'Deleted';
        if (!$this->Words->delete($word)) {
            $message = 'Error';
        }
        $this->set([
            'message' => $message,
            '_serialize' => ['message']
        ]);
    }
	
	


	
	
	
}
