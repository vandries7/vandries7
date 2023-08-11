<?php

namespace App\Service;

use Cake\ORM\TableRegistry;

class BusinessService
{

    protected $Businesses;

    public function __construct(){

        $this->Businesses = TableRegistry::getTableLocator()->get('Businesses');
    }

    public function createEntity(){
        return $this->Businesses->newEmptyEntity();
    }

    public function createBusiness(array $businessData)
    {
        $business = $this->Businesses->newEntity($businessData);
        return $this->Businesses->save($business);
    }

    public function updateBusiness($businessId, array $businessData)
    {
        $business = $this->Businesses->get($businessId);
        $business = $this->Businesses->patchEntity($business, $businessData);
        return $this->Businesses->save($business);
    }

    public function getBusiness($businessId)
    {
        return $this->Businesses->get($businessId);
    }

    public function getAllBusinesses()
    {
        return $this->Businesses->find('all')->toArray();
    }

    public function deleteBusiness($businessId)
    {
        $business = $this->Businesses->get($businessId);
        return $this->Businesses->delete($business);
    }

    public function getDropdownOptions($tableName, $keyField, $valueField, array $conditions = []): array
    {
        $table = TableRegistry::getTableLocator()->get($tableName);
        $query = $table->find('list', [
            'keyField' => $keyField,
            'valueField' => $valueField
        ]);
        if (!empty($conditions)) {
            $query->where($conditions);
        }
        return $query->toArray();
    }

    public function createAndSaveBusinessUser($businessId, $userId)
    {
        $businessUsersTable = TableRegistry::getTableLocator()->get('BusinessUsers');
        $businessUser = $businessUsersTable->newEntity([
            'business_id' => $businessId,
            'user_id' => $userId
        ]);


        if ($businessUsersTable->save($businessUser)) {
            return $businessUser;
        }
        debug($businessUser); exit;

        return null;
        // În caz de eroare la salvare
    }


//    public function getAllUsersForBusiness(): array{
//
//        $crmUsersTable = TableRegistry::getTableLocator()->get('CRMUsers');
//        return $crmUsersTable->find('list')->toArray();
//    }




}
