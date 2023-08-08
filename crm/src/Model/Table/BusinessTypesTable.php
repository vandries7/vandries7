<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * BusinessTypes Model
 *
 * @method \App\Model\Entity\BusinessType newEmptyEntity()
 * @method \App\Model\Entity\BusinessType newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\BusinessType[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\BusinessType get($primaryKey, $options = [])
 * @method \App\Model\Entity\BusinessType findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\BusinessType patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\BusinessType[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\BusinessType|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\BusinessType saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\BusinessType[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\BusinessType[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\BusinessType[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\BusinessType[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class BusinessTypesTable extends Table
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

        $this->setTable('business_types');
        $this->setDisplayField('type_id');
        $this->setPrimaryKey('type_id');

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
            ->scalar('type_name')
            ->maxLength('type_name', 50)
            ->requirePresence('type_name', 'create')
            ->notEmptyString('type_name');

        $validator
            ->uuid('created_by')
            ->allowEmptyString('created_by');

        $validator
            ->uuid('modified_by')
            ->allowEmptyString('modified_by');

        return $validator;
    }
}
