<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Flights Model
 *
 * @property \App\Model\Table\AircraftTypesTable&\Cake\ORM\Association\BelongsTo $AircraftTypes
 * @property \App\Model\Table\BookingsTable&\Cake\ORM\Association\HasMany $Bookings
 * @property \App\Model\Table\FlightSchedulesTable&\Cake\ORM\Association\HasMany $FlightSchedules
 *
 * @method \App\Model\Entity\Flight newEmptyEntity()
 * @method \App\Model\Entity\Flight newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Flight[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Flight get($primaryKey, $options = [])
 * @method \App\Model\Entity\Flight findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Flight patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Flight[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Flight|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Flight saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Flight[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Flight[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Flight[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Flight[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class FlightsTable extends Table
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

        $this->setTable('flights');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('AircraftTypes', [
            'foreignKey' => 'aircraft_type_id',
        ]);
        $this->hasMany('Bookings', [
            'foreignKey' => 'flight_id',
        ]);
        $this->hasMany('FlightSchedules', [
            'foreignKey' => 'flight_id',
            'dependent' => true,
            'cascadeCallbacks' => true,
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
            ->numeric('price')
            ->add('price',[
                'minPrice'=>[
                    'rule'=>['comparison','>=',0],
                    'message'=>'Must Be At Least 0'
                ]
            ]);

        $validator
            ->scalar('from_place')
            ->maxLength('from_place', 50)
           ;

        $validator
            ->scalar('to_place')
            ->maxLength('to_place', 50)
            ;

        $validator
            ->scalar('counter')
            ->maxLength('counter', 30)
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
        $rules->add($rules->existsIn(['aircraft_type_id'], 'AircraftTypes'), ['errorField' => 'aircraft_type_id']);

        return $rules;
    }
}
