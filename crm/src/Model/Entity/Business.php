<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Business Entity
 *
 * @property int $business_id
 * @property string $business_name
 * @property int $business_type
 * @property string|null $address
 * @property string|null $contact_name
 * @property string|null $contact_email
 * @property string|null $contact_phone
 * @property string|null $business_description
 * @property \Cake\I18n\FrozenDate|null $establishment_date
 * @property string|null $logo_image
 * @property string|null $financial_details
 * @property string|null $specific_settings
 * @property string|null $allocated_users
 * @property string|null $status
 * @property string|null $working_hours
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property string|null $created_by
 * @property string|null $modified_by
 */
class Business extends Entity
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
        'business_name' => true,
        'business_type' => true,
        'address' => true,
        'contact_name' => true,
        'contact_email' => true,
        'contact_phone' => true,
        'business_description' => true,
        'establishment_date' => true,
        'logo_image' => true,
        'financial_details' => true,
        'specific_settings' => true,
        'allocated_users' => true,
        'status' => true,
        'working_hours' => true,
        'created' => true,
        'modified' => true,
        'created_by' => true,
        'modified_by' => true,
    ];
}
