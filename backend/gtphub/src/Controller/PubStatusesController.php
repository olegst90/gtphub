<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * PubStatuses Controller
 *
 * @property \App\Model\Table\PubStatusesTable $PubStatuses
 */
class PubStatusesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['PubStatuses']
        ];
        $pubStatuses = $this->paginate($this->PubStatuses);

        $this->set(compact('pubStatuses'));
        $this->set('_serialize', ['pubStatuses']);
    }

    /**
     * View method
     *
     * @param string|null $id Pub Status id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $pubStatus = $this->PubStatuses->get($id, [
            'contain' => ['PubStatuses']
        ]);

        $this->set('pubStatus', $pubStatus);
        $this->set('_serialize', ['pubStatus']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $pubStatus = $this->PubStatuses->newEntity();
        if ($this->request->is('post')) {
            $pubStatus = $this->PubStatuses->patchEntity($pubStatus, $this->request->data);
            if ($this->PubStatuses->save($pubStatus)) {
                $this->Flash->success(__('The pub status has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The pub status could not be saved. Please, try again.'));
        }
        $pubStatuses = $this->PubStatuses->PubStatuses->find('list', ['limit' => 200]);
        $this->set(compact('pubStatus', 'pubStatuses'));
        $this->set('_serialize', ['pubStatus']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Pub Status id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $pubStatus = $this->PubStatuses->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $pubStatus = $this->PubStatuses->patchEntity($pubStatus, $this->request->data);
            if ($this->PubStatuses->save($pubStatus)) {
                $this->Flash->success(__('The pub status has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The pub status could not be saved. Please, try again.'));
        }
        $pubStatuses = $this->PubStatuses->PubStatuses->find('list', ['limit' => 200]);
        $this->set(compact('pubStatus', 'pubStatuses'));
        $this->set('_serialize', ['pubStatus']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Pub Status id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $pubStatus = $this->PubStatuses->get($id);
        if ($this->PubStatuses->delete($pubStatus)) {
            $this->Flash->success(__('The pub status has been deleted.'));
        } else {
            $this->Flash->error(__('The pub status could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
