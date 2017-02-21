<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * AccessProfiles Controller
 *
 * @property \App\Model\Table\AccessProfilesTable $AccessProfiles
 */
class AccessProfilesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $accessProfiles = $this->paginate($this->AccessProfiles);

        $this->set(compact('accessProfiles'));
        $this->set('_serialize', ['accessProfiles']);
    }

    /**
     * View method
     *
     * @param string|null $id Access Profile id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $accessProfile = $this->AccessProfiles->get($id, [
            'contain' => ['Users']
        ]);

        $this->set('accessProfile', $accessProfile);
        $this->set('_serialize', ['accessProfile']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $accessProfile = $this->AccessProfiles->newEntity();
        if ($this->request->is('post')) {
            $accessProfile = $this->AccessProfiles->patchEntity($accessProfile, $this->request->data);
            if ($this->AccessProfiles->save($accessProfile)) {
                $this->Flash->success(__('The access profile has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The access profile could not be saved. Please, try again.'));
        }
        $this->set(compact('accessProfile'));
        $this->set('_serialize', ['accessProfile']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Access Profile id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $accessProfile = $this->AccessProfiles->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $accessProfile = $this->AccessProfiles->patchEntity($accessProfile, $this->request->data);
            if ($this->AccessProfiles->save($accessProfile)) {
                $this->Flash->success(__('The access profile has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The access profile could not be saved. Please, try again.'));
        }
        $this->set(compact('accessProfile'));
        $this->set('_serialize', ['accessProfile']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Access Profile id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $accessProfile = $this->AccessProfiles->get($id);
        if ($this->AccessProfiles->delete($accessProfile)) {
            $this->Flash->success(__('The access profile has been deleted.'));
        } else {
            $this->Flash->error(__('The access profile could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
