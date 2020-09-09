<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * SpecialFares Model
 *
 * @method \App\Model\Entity\SpecialFare newEmptyEntity()
 * @method \App\Model\Entity\SpecialFare newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\SpecialFare[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\SpecialFare get($primaryKey, $options = [])
 * @method \App\Model\Entity\SpecialFare findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\SpecialFare patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\SpecialFare[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\SpecialFare|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\SpecialFare saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\SpecialFare[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\SpecialFare[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\SpecialFare[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\SpecialFare[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class SpecialFaresTable extends Table
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

        $this->setTable('special_fares');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
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
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('category')
            ->maxLength('category', 30)
            ->allowEmptyString('category');

        $validator
            ->numeric('discount_percentage')
            ->allowEmptyString('discount_percentage');

        return $validator;
    }
}
