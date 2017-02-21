<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * FileFormats Controller
 *
 * @property \App\Model\Table\FileFormatsTable $FileFormats
 */
class FileFormatsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $fileFormats = $this->paginate($this->FileFormats);

        $this->set(compact('fileFormats'));
        $this->set('_serialize', ['fileFormats']);
    }

    /**
     * View method
     *
     * @param string|null $id File Format id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $fileFormat = $this->FileFormats->get($id, [
            'contain' => []
        ]);

        $this->set('fileFormat', $fileFormat);
        $this->set('_serialize', ['fileFormat']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $fileFormat = $this->FileFormats->newEntity();
        if ($this->request->is('post')) {
            $fileFormat = $this->FileFormats->patchEntity($fileFormat, $this->request->data);
            if ($this->FileFormats->save($fileFormat)) {
                $this->Flash->success(__('The file format has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The file format could not be saved. Please, try again.'));
        }
        $this->set(compact('fileFormat'));
        $this->set('_serialize', ['fileFormat']);
    }

    /**
     * Edit method
     *
     * @param string|null $id File Format id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $fileFormat = $this->FileFormats->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $fileFormat = $this->FileFormats->patchEntity($fileFormat, $this->request->data);
            if ($this->FileFormats->save($fileFormat)) {
                $this->Flash->success(__('The file format has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The file format could not be saved. Please, try again.'));
        }
        $this->set(compact('fileFormat'));
        $this->set('_serialize', ['fileFormat']);
    }

    /**
     * Delete method
     *
     * @param string|null $id File Format id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $fileFormat = $this->FileFormats->get($id);
        if ($this->FileFormats->delete($fileFormat)) {
            $this->Flash->success(__('The file format has been deleted.'));
        } else {
            $this->Flash->error(__('The file format could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
