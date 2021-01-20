<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Flight $flight
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Flight'), ['action' => 'edit', $flight->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Flight'), ['action' => 'delete', $flight->id], ['confirm' => __('Are you sure you want to delete # {0}?', $flight->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Flights'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Flight'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="flights view content">
            <h3><?= h($flight->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Flight Name') ?></th>
                    <td><?= h($flight->flight_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Aircraft Type') ?></th>
                    <td><?= $flight->has('aircraft_type') ? $this->Html->link($flight->aircraft_type->id, ['controller' => 'AircraftTypes', 'action' => 'view', $flight->aircraft_type->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('From Place') ?></th>
                    <td><?= h($flight->from_place) ?></td>
                </tr>
                <tr>
                    <th><?= __('To Place') ?></th>
                    <td><?= h($flight->to_place) ?></td>
                </tr>
                <tr>
                    <th><?= __('Counter') ?></th>
                    <td><?= h($flight->counter) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($flight->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Price') ?></th>
                    <td><?= $this->Number->format($flight->price) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Bookings') ?></h4>
                <?php if (!empty($flight->bookings)) : ?>
                    <div class="table-responsive">
                        <table>
                            <tr>
                                <th><?= __('Id') ?></th>
                                <th><?= __('User Id') ?></th>
                                <th><?= __('Date') ?></th>
                                <th><?= __('Flight Id') ?></th>
                                <th><?= __('Status') ?></th>
                                <th><?= __('Frequent Flyer Discount') ?></th>
                                <th><?= __('Class Id') ?></th>
                                <th><?= __('Seat No') ?></th>
                                <th class="actions"><?= __('Actions') ?></th>
                            </tr>
                            <?php foreach ($flight->bookings as $bookings) : ?>
                                <tr>
                                    <td><?= h($bookings->id) ?></td>
                                    <td><?= h($bookings->user_id) ?></td>
                                    <td><?= h($bookings->date) ?></td>
                                    <td><?= h($bookings->flight_id) ?></td>
                                    <td><?= h($bookings->status) ?></td>
                                    <td><?= h($bookings->frequent_flyer_discount) ?></td>
                                    <td><?= h($bookings->class_id) ?></td>
                                    <td><?= h($bookings->seat_no) ?></td>
                                    <td class="actions">
                                        <?= $this->Html->link(__('View'), ['controller' => 'Bookings', 'action' => 'view', $bookings->id]) ?>
                                        <?= $this->Html->link(__('Edit'), ['controller' => 'Bookings', 'action' => 'edit', $bookings->id]) ?>
                                        <?= $this->Form->postLink(__('Delete'), ['controller' => 'Bookings', 'action' => 'delete', $bookings->id], ['confirm' => __('Are you sure you want to delete # {0}?', $bookings->id)]) ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </table>
                    </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Flight Schedules') ?></h4>
                <?php if (!empty($flight->flight_schedules)) : ?>
                    <div class="table-responsive">
                        <table>
                            <tr>
                                <th><?= __('Id') ?></th>
                                <th><?= __('Flight Id') ?></th>
                                <th><?= __('Day') ?></th>
                                <th><?= __('Departs') ?></th>
                                <th><?= __('Arrives') ?></th>
                                <th class="actions"><?= __('Actions') ?></th>
                            </tr>
                            <?php foreach ($flight->flight_schedules as $flightSchedules) : ?>
                                <tr>
                                    <td><?= h($flightSchedules->id) ?></td>
                                    <td><?= h($flightSchedules->flight_id) ?></td>
                                    <td><?= h($flightSchedules->day) ?></td>
                                    <td><?= h($flightSchedules->departs) ?></td>
                                    <td><?= h($flightSchedules->arrives) ?></td>
                                    <td class="actions">
                                        <?= $this->Html->link(__('View'), ['controller' => 'FlightSchedules', 'action' => 'view', $flightSchedules->id]) ?>
                                        <?= $this->Html->link(__('Edit'), ['controller' => 'FlightSchedules', 'action' => 'edit', $flightSchedules->id]) ?>
                                        <?= $this->Form->postLink(__('Delete'), ['controller' => 'FlightSchedules', 'action' => 'delete', $flightSchedules->id], ['confirm' => __('Are you sure you want to delete # {0}?', $flightSchedules->id)]) ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </table>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>