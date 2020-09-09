<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\FlightClass[]|\Cake\Collection\CollectionInterface $flightClasses
 */
?>
<div class="flightClasses index content">
    <?= $this->Html->link(__('New Flight Class'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Flight Classes') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('class') ?></th>
                    <th><?= $this->Paginator->sort('additional_charge') ?></th>
                    <th><?= $this->Paginator->sort('additional_facilities') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($flightClasses as $flightClass): ?>
                <tr>
                    <td><?= $this->Number->format($flightClass->id) ?></td>
                    <td><?= h($flightClass->class) ?></td>
                    <td><?= $this->Number->format($flightClass->additional_charge) ?></td>
                    <td><?= h($flightClass->additional_facilities) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $flightClass->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $flightClass->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $flightClass->id], ['confirm' => __('Are you sure you want to delete # {0}?', $flightClass->id)]) ?>
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
