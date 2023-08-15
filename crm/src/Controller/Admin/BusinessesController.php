<?php
declare(strict_types=1);

namespace App\Controller\Admin;

use App\Controller\AppController;
use App\Service\BusinessService;
use App\Service\EntityService;

/**
 * Businesses Controller
 *
 * @property \App\Model\Table\BusinessesTable $Businesses
 * @method \App\Model\Entity\Business[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class BusinessesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $businesses = $this->paginate($this->Businesses);

        $this->set(compact('businesses'));
    }

    /**
     * View method
     *
     * @param string|null $id Business id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null, $businessName = null)
    {
        $business = $this->Businesses->get($id, [
            'contain' => [],
        ]);
        //debug($business);

        $this->set(compact('business'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     * @param \App\Service\BusinessService $businessService
     * @param \App\Service\EntityService $entityService
     */
    public function add(BusinessService $businessService, EntityService $entityService)
    {
        $business = $businessService->createEntity();
        $user = $this->getAuthenticatedUser();
        $businessTypeOptions = $businessService->getDropdownOptions('BusinessTypes', 'type_id', 'type_name');
        $usersCondition = [
          'role !=' => 'superuser'
        ];
        $allUsers = $businessService->getDropdownOptions('CRMUsers', 'id', 'username', $usersCondition);

        if ($this->request->is('post')) {

            $requestData = $this->request->getData();

            $entityService->populateCreatedByModifiedBy($this->Businesses, $requestData, $user['id']);
            unset($requestData['allocated_users']);
            $business = $businessService->createBusiness($requestData);



            if ($business) {

                $selectedUsers = $this->request->getData('allocated_users');
                //debug($business);exit;

                if (!empty($selectedUsers)) {
                    foreach ($selectedUsers as $userId) {
                        $businessService->createAndSaveBusinessUser($business->business_id, $userId);
                    }
                }

                $this->Flash->success(__('The business has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The business could not be saved. Please, try again.'));
        }
        $this->set(compact('business', 'businessTypeOptions', 'allUsers'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Business id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->getAuthenticatedUser();

        $business = $this->Businesses->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $business = $this->Businesses->patchEntity($business, $this->request->getData());
            if ($this->Businesses->save($business)) {
                $this->Flash->success(__('The business has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The business could not be saved. Please, try again.'));
        }
        $this->set(compact('business'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Business id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $business = $this->Businesses->get($id);
        if ($this->Businesses->delete($business)) {
            $this->Flash->success(__('The business has been deleted.'));
        } else {
            $this->Flash->error(__('The business could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
