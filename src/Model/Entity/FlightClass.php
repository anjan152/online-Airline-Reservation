<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * FlightClass Entity
 *
 * @property int $id
 * @property string|null $class
 * @property float|null $additional_charge
 * @property string|null $additional_facilities
 */
class FlightClass extends Entity
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
        'class' => true,
        'additional_charge' => true,
        'additional_facilities' => true,
    ];
}
