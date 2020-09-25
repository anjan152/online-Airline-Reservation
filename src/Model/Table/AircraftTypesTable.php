<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * AircraftTypes Model
 *
 * @property \App\Model\Table\FlightsTable&\Cake\ORM\Association\HasMany $Flights
 *
 * @method \App\Model\Entity\AircraftType newEmptyEntity()
 * @method \App\Model\Entity\AircraftType newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\AircraftType[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\AircraftType get($primaryKey, $options = [])
 * @method \App\Model\Entity\AircraftType findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\AircraftType patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\AircraftType[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\AircraftType|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\AircraftType saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\AircraftType[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\AircraftType[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\AircraftType[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\AircraftType[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class AircraftTypesTable extends Table
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

        $this->setTable('aircraft_types');
        $this->setDisplayField('aircraft_name');
        $this->setPrimaryKey('id');

        $this->hasMany('Flights', [
            'foreignKey' => 'aircraft_type_id',
        ]);
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
            ->scalar('aircraft_name')
            ->maxLength('aircraft_name', 60)
            ->allowEmptyString('aircraft_name');

        $validator
            ->integer('first_class')
            ->allowEmptyString('first_class');

        $validator
            ->integer('second_class')
            ->allowEmptyString('second_class');

        $validator
            ->integer('third_class')
            ->allowEmptyString('third_class');

        return $validator;
    }
}
