<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Businesses Model
 *
 * @method \App\Model\Entity\Business newEmptyEntity()
 * @method \App\Model\Entity\Business newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Business[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Business get($primaryKey, $options = [])
 * @method \App\Model\Entity\Business findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Business patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Business[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Business|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Business saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Business[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Business[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Business[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Business[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class BusinessesTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('businesses');
        $this->setDisplayField('business_id');
        $this->setPrimaryKey('business_id');

        $this->addBehavior('Timestamp');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->scalar('business_name')
            ->maxLength('business_name', 100)
            ->requirePresence('business_name', 'create')
            ->notEmptyString('business_name');

        $validator
            ->integer('business_type')
            ->requirePresence('business_type', 'create')
            ->notEmptyString('business_type');

        $validator
            ->scalar('address')
            ->maxLength('address', 255)
            ->allowEmptyString('address');

        $validator
            ->scalar('contact_name')
            ->maxLength('contact_name', 100)
            ->allowEmptyString('contact_name');

        $validator
            ->scalar('contact_email')
            ->maxLength('contact_email', 100)
            ->allowEmptyString('contact_email');

        $validator
            ->scalar('contact_phone')
            ->maxLength('contact_phone', 15)
            ->allowEmptyString('contact_phone');

        $validator
            ->scalar('business_description')
            ->allowEmptyString('business_description');

        $validator
            ->date('establishment_date')
            ->allowEmptyDate('establishment_date');

        $validator
            ->scalar('logo_image')
            ->maxLength('logo_image', 255)
            ->allowEmptyFile('logo_image');

        $validator
            ->scalar('financial_details')
            ->allowEmptyString('financial_details');

        $validator
            ->scalar('specific_settings')
            ->allowEmptyString('specific_settings');

        $validator
            ->scalar('allocated_users')
            ->allowEmptyString('allocated_users');

        $validator
            ->scalar('status')
            ->allowEmptyString('status');

        $validator
            ->scalar('working_hours')
            ->maxLength('working_hours', 100)
            ->allowEmptyString('working_hours');

        $validator
            ->uuid('created_by')
            ->allowEmptyString('created_by');

        $validator
            ->uuid('modified_by')
            ->allowEmptyString('modified_by');

        return $validator;
    }
}
