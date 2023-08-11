<?php
declare(strict_types=1);

namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * BusinessTypes Controller
 *
 * @property \App\Model\Table\BusinessTypesTable $BusinessTypes
 * @method \App\Model\Entity\BusinessType[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class BusinessTypesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $businessTypes = $this->paginate($this->BusinessTypes);

        $this->set(compact('businessTypes'));
    }

    /**
     * View method
     *
     * @param string|null $id Business Type id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $businessType = $this->BusinessTypes->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('businessType'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $businessType = $this->BusinessTypes->newEmptyEntity();
        if ($this->request->is('post')) {
            $businessType = $this->BusinessTypes->patchEntity($businessType, $this->request->getData());
            if ($this->BusinessTypes->save($businessType)) {
                $this->Flash->success(__('The business type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The business type could not be saved. Please, try again.'));
        }
        $this->set(compact('businessType'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Business Type id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $businessType = $this->BusinessTypes->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $businessType = $this->BusinessTypes->patchEntity($businessType, $this->request->getData());
            if ($this->BusinessTypes->save($businessType)) {
                $this->Flash->success(__('The business type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The business type could not be saved. Please, try again.'));
        }
        $this->set(compact('businessType'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Business Type id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $businessType = $this->BusinessTypes->get($id);
        if ($this->BusinessTypes->delete($businessType)) {
            $this->Flash->success(__('The business type has been deleted.'));
        } else {
            $this->Flash->error(__('The business type could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
