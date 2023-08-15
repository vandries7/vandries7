<?php

namespace App\Service;

use Cake\ORM\TableRegistry;

class AccessControlService
{

    protected $BusinessUsers;

    public function __construct()
    {
        $this->BusinessUsers = TableRegistry::getTableLocator()->get('BusinessUsers');
    }

    public function hasAccess($userId, $businessId)
    {
        // Verifică dacă utilizatorul cu $userId are acces la business-ul cu $businessId
        $businessUser = $this->BusinessUsers->find()
            ->where(['user_id' => $userId, 'business_id' => $businessId])
            ->first();

        return ($businessUser !== null);
    }
}
