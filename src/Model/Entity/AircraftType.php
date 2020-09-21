<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * AircraftType Entity
 *
 * @property int $id
 * @property string|null $aircraft_name
 * @property int|null $first_class
 * @property int|null $second_class
 * @property int|null $third_class
 *
 * @property \App\Model\Entity\Flight[] $flights
 */
class AircraftType extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'aircraft_name' => true,
        'first_class' => true,
        'second_class' => true,
        'third_class' => true,
        'flights' => true,
    ];
}
