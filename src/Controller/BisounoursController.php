<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Bisounours Controller
 *
 * @property \App\Model\Table\BisounoursTable $Bisounours
 */
class BisounoursController extends AppController
{


    public function story() {

        $bisounours = $this->Bisounours->find('all');
        $this->set(compact('bisounours'));
        $this->set('_serialize', ['bisounours']);
    }

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $bisounours = $this->paginate($this->Bisounours);

        $this->set(compact('bisounours'));
        $this->set('_serialize', ['bisounours']);
    }

    /**
     * View method
     *
     * @param string|null $id Bisounour id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $bisounour = $this->Bisounours->get($id, [
            'contain' => []
        ]);

        $this->set('bisounour', $bisounour);
        $this->set('_serialize', ['bisounour']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $bisounour = $this->Bisounours->newEntity();
        if ($this->request->is('post')) {
            $bisounour = $this->Bisounours->patchEntity($bisounour, $this->request->data);
            if ($this->Bisounours->save($bisounour)) {
                $this->Flash->success(__('The bisounour has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The bisounour could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('bisounour'));
        $this->set('_serialize', ['bisounour']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Bisounour id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $bisounour = $this->Bisounours->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $bisounour = $this->Bisounours->patchEntity($bisounour, $this->request->data);
            if ($this->Bisounours->save($bisounour)) {
                $this->Flash->success(__('The bisounour has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The bisounour could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('bisounour'));
        $this->set('_serialize', ['bisounour']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Bisounour id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $bisounour = $this->Bisounours->get($id);
        if ($this->Bisounours->delete($bisounour)) {
            $this->Flash->success(__('The bisounour has been deleted.'));
        } else {
            $this->Flash->error(__('The bisounour could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
