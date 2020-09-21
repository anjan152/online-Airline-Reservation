<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AircraftType[]|\Cake\Collection\CollectionInterface $aircraftTypes
 */
?>
<div class="aircraftTypes index content">
    <?= $this->Html->link(__('New Aircraft Type'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Aircraft Types') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('aircraft_name') ?></th>
                    <th><?= $this->Paginator->sort('first_class') ?></th>
                    <th><?= $this->Paginator->sort('second_class') ?></th>
                    <th><?= $this->Paginator->sort('third_class') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($aircraftTypes as $aircraftType): ?>
                <tr>
                    <td><?= $this->Number->format($aircraftType->id) ?></td>
                    <td><?= h($aircraftType->aircraft_name) ?></td>
                    <td><?= $this->Number->format($aircraftType->first_class) ?></td>
                    <td><?= $this->Number->format($aircraftType->second_class) ?></td>
                    <td><?= $this->Number->format($aircraftType->third_class) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $aircraftType->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $aircraftType->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $aircraftType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $aircraftType->id)]) ?>
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
