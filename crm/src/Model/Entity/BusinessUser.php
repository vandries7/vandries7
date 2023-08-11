<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * BusinessUser Entity
 *
 * @property int $id
 * @property int $business_id
 * @property string $user_id
 * @property \Cake\I18n\FrozenTime $created_at
 * @property \Cake\I18n\FrozenTime|null $updated_at
 *
 * @property \App\Model\Entity\Business $business
 * @property \App\Model\Entity\CRMUser $user
 */
class BusinessUser extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected $_accessible = [
        'business_id' => true,
        'user_id' => true,
        'created_at' => true,
        'updated_at' => true,
        'business' => true,
        'user' => true,
    ];
}
