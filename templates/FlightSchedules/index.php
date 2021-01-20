<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\FlightSchedule[]|\Cake\Collection\CollectionInterface $flightSchedules
 */
?>
<div class="flightSchedules index content">
    <?= $this->Html->link(__('New Flight Schedule'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Flight Schedules') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('flight_id') ?></th>
                    <th><?= $this->Paginator->sort('day') ?></th>
                    <th><?= $this->Paginator->sort('departs') ?></th>
                    <th><?= $this->Paginator->sort('arrives') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($flightSchedules as $flightSchedule): ?>
                <tr>
                    <td><?= $this->Number->format($flightSchedule->id) ?></td>
                    <td><?= $flightSchedule->has('flight') ? $this->Html->link($flightSchedule->flight->flight_name, ['controller' => 'Flights', 'action' => 'view', $flightSchedule->flight->id]) : '' ?></td>
                    <td><?= h($flightSchedule->day) ?></td>
                    <td><?= h(substr($flightSchedule->departs, 7)) ?></td>
                    <td><?= h(substr($flightSchedule->arrives, 7)) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $flightSchedule->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $flightSchedule->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $flightSchedule->id], ['confirm' => __('Are you sure you want to delete # {0}?', $flightSchedule->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
