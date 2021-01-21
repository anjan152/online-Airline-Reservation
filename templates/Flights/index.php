<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Flight[]|\Cake\Collection\CollectionInterface $flights
 */
?>
<div class="flights index content">
    <?php
    if ($user->is_admin) {



    ?>


        <?= $this->Html->link(__('New Flight'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <?php } ?>
    <h3><?= __('Flights') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('flight_name') ?></th>
                    <th><?= $this->Paginator->sort('aircraft_type_id') ?></th>
                    <th><?= $this->Paginator->sort('price') ?></th>
                    <th><?= $this->Paginator->sort('from_place') ?></th>
                    <th><?= $this->Paginator->sort('to_place') ?></th>
                    <th><?= $this->Paginator->sort('counter') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($flights as $flight) : ?>

                    <tr>
                        <td><?= $this->Number->format($flight->id) ?></td>
                        <td><?= h($flight->flight_name) ?></td>

                        <td><?= $flight->has('aircraft_type') ? $this->Html->link($flight->aircraft_type->aircraft_name, ['controller' => 'AircraftTypes', 'action' => 'view', $flight->aircraft_type->id]) : '' ?></td>
                        <td><?= $this->Number->format($flight->price) ?></td>
                        <td><?= h($flight->from_place) ?></td>
                        <td><?= h($flight->to_place) ?></td>
                        <td><?= h($flight->counter) ?></td>
                        <td class="actions">
                            <?php
                            if ($user->is_admin) { ?>

                                <?= $this->Html->link(__('View'), ['action' => 'view', $flight->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $flight->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $flight->id], ['confirm' => __('Are you sure you want to delete # {0}?', $flight->id)]) ?>
                            <?php } else {


                            ?>
                                <?= $this->Form->postLink(__('Book'), ['controller' => 'FlightClasses', 'action' => 'select', $flight->id], ['confirm' => __('Are you sure you want to book this flight ?')]) ?>
                            <?php  } ?>
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