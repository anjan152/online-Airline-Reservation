<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * FlightClasses Model
 *
 * @method \App\Model\Entity\FlightClass newEmptyEntity()
 * @method \App\Model\Entity\FlightClass newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\FlightClass[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\FlightClass get($primaryKey, $options = [])
 * @method \App\Model\Entity\FlightClass findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\FlightClass patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\FlightClass[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\FlightClass|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\FlightClass saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\FlightClass[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\FlightClass[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\FlightClass[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\FlightClass[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class FlightClassesTable extends Table
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

        $this->setTable('flight_classes');
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
            ->scalar('class')
            ->maxLength('class', 20)
            ->allowEmptyString('class');

        $validator
            ->numeric('additional_charge')
            ->allowEmptyString('additional_charge');

        $validator
            ->scalar('additional_facilities')
            ->maxLength('additional_facilities', 40)
            ->allowEmptyString('additional_facilities');

        return $validator;
    }
}
