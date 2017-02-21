<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Performers Controller
 *
 * @property \App\Model\Table\PerformersTable $Performers
 */
class PerformersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'PubStatuses']
        ];
        $performers = $this->paginate($this->Performers);

        $this->set(compact('performers'));
        $this->set('_serialize', ['performers']);
    }

    /**
     * View method
     *
     * @param string|null $id Performer id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $performer = $this->Performers->get($id, [
            'contain' => ['Users', 'PubStatuses', 'Songs']
        ]);

        $this->set('performer', $performer);
        $this->set('_serialize', ['performer']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $performer = $this->Performers->newEntity();
        if ($this->request->is('post')) {
            $performer = $this->Performers->patchEntity($performer, $this->request->data);
            if ($this->Performers->save($performer)) {
                $this->Flash->success(__('The performer has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The performer could not be saved. Please, try again.'));
        }
        $users = $this->Performers->Users->find('list', ['limit' => 200]);
        $pubStatuses = $this->Performers->PubStatuses->find('list', ['limit' => 200]);
        $this->set(compact('performer', 'users', 'pubStatuses'));
        $this->set('_serialize', ['performer']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Performer id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $performer = $this->Performers->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $performer = $this->Performers->patchEntity($performer, $this->request->data);
            if ($this->Performers->save($performer)) {
                $this->Flash->success(__('The performer has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The performer could not be saved. Please, try again.'));
        }
        $users = $this->Performers->Users->find('list', ['limit' => 200]);
        $pubStatuses = $this->Performers->PubStatuses->find('list', ['limit' => 200]);
        $this->set(compact('performer', 'users', 'pubStatuses'));
        $this->set('_serialize', ['performer']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Performer id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $performer = $this->Performers->get($id);
        if ($this->Performers->delete($performer)) {
            $this->Flash->success(__('The performer has been deleted.'));
        } else {
            $this->Flash->error(__('The performer could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
