<?php

namespace App\Model\Entity;

use CakeDC\Users\Model\Entity\User;

/**
 * Application specific User Entity with non plugin conform field(s)
 */

class CRMUser extends User
{
    protected $_accessible = [
        '*' => true,
        'id' => false,
        'is_superuser' => false,
    ];
}




