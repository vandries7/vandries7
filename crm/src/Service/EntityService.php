<?php

namespace App\Service;

use Cake\ORM\Table;

class EntityService
{

    public function populateCreatedByModifiedBy(Table $table, array &$data, $userId)
    {
        if (empty($data['id'])) {
            $data['created_by'] = $userId;
            $data['modified_by'] = $userId;
        } else {
            $data['modified_by'] = $userId;
        }
    }

}
