<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Booking Entity
 *
 * @property int $id
 * @property int|null $user_id
 * @property \Cake\I18n\FrozenDate|null $date
 * @property int|null $flight_id
 * @property int|null $status
 * @property float|null $frequent_flyer_discount
 * @property int|null $class_id
 * @property int|null $seat_no
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Flight $flight
 * @property \App\Model\Entity\Class $class
 */
class Booking extends Entity
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
        'user_id' => true,
        'date' => true,
        'flight_id' => true,
        'status' => true,
        'frequent_flyer_discount' => true,
        'class_id' => true,
        'seat_no' => true,
        'user' => true,
        'flight' => true,
        'class' => true,
        'flight_schedule_id' => true,
        'flight_schedule' => true,
        'total_cost' => true,
    ];
}
