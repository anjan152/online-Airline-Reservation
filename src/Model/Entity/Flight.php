<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Flight Entity
 *
 * @property int $id
 * @property int|null $aircraft_type_id
 * @property float|null $price
 * @property string|null $date
 * @property string|null $from_date
 * @property string|null $to_date
 * @property string|null $counter
 * @property string|null $departs
 * @property string|null $arrives
 *
 * @property \App\Model\Entity\AircraftType $aircraft_type
 * @property \App\Model\Entity\Booking[] $bookings
 */
class Flight extends Entity
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
        'aircraft_type_id' => true,
        'price' => true,
        'date' => true,
        'from_date' => true,
        'to_date' => true,
        'counter' => true,
        'departs' => true,
        'arrives' => true,
        'aircraft_type' => true,
        'bookings' => true,
    ];
}
