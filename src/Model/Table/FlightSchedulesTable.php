<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * FlightSchedules Model
 *
 * @property \App\Model\Table\FlightsTable&\Cake\ORM\Association\BelongsTo $Flights
 *
 * @method \App\Model\Entity\FlightSchedule newEmptyEntity()
 * @method \App\Model\Entity\FlightSchedule newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\FlightSchedule[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\FlightSchedule get($primaryKey, $options = [])
 * @method \App\Model\Entity\FlightSchedule findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\FlightSchedule patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\FlightSchedule[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\FlightSchedule|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\FlightSchedule saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\FlightSchedule[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\FlightSchedule[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\FlightSchedule[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\FlightSchedule[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class FlightSchedulesTable extends Table
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

        $this->setTable('flight_schedules');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Flights', [
            'foreignKey' => 'flight_id',
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
            ->scalar('day')
            ->maxLength('day', 20)
            ;

        $validator
            ->dateTime('departs')
            ;

        $validator
            ->dateTime('arrives')
            ;

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->existsIn(['flight_id'], 'Flights'), ['errorField' => 'flight_id']);

        return $rules;
    }
}
