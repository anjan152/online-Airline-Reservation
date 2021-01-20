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
 * @property string|null $from_place
 * @property string|null $to_place
 * @property string|null $counter
 *
 * @property \App\Model\Entity\AircraftType $aircraft_type
 * @property \App\Model\Entity\Booking[] $bookings
 * @property \App\Model\Entity\FlightSchedule[] $flight_schedules
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
        'flight_name' => true,
        'from_place' => true,
        'to_place' => true,
        'counter' => true,
        'aircraft_type' => true,
        'bookings' => true,
        'flight_schedules' => true,
    ];
}
