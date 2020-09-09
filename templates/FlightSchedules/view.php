<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\FlightSchedule $flightSchedule
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Flight Schedule'), ['action' => 'edit', $flightSchedule->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Flight Schedule'), ['action' => 'delete', $flightSchedule->id], ['confirm' => __('Are you sure you want to delete # {0}?', $flightSchedule->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Flight Schedules'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Flight Schedule'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="flightSchedules view content">
            <h3><?= h($flightSchedule->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Flight') ?></th>
                    <td><?= $flightSchedule->has('flight') ? $this->Html->link($flightSchedule->flight->id, ['controller' => 'Flights', 'action' => 'view', $flightSchedule->flight->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Day') ?></th>
                    <td><?= h($flightSchedule->day) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($flightSchedule->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Departs') ?></th>
                    <td><?= h($flightSchedule->departs) ?></td>
                </tr>
                <tr>
                    <th><?= __('Arrives') ?></th>
                    <td><?= h($flightSchedule->arrives) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
