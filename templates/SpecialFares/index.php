<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\SpecialFare[]|\Cake\Collection\CollectionInterface $specialFares
 */
?>
<div class="specialFares index content">
    <?= $this->Html->link(__('New Special Fare'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Special Fares') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('category') ?></th>
                    <th><?= $this->Paginator->sort('discount_percentage') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($specialFares as $specialFare): ?>
                <tr>
                    <td><?= $this->Number->format($specialFare->id) ?></td>
                    <td><?= h($specialFare->category) ?></td>
                    <td><?= $this->Number->format($specialFare->discount_percentage) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $specialFare->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $specialFare->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $specialFare->id], ['confirm' => __('Are you sure you want to delete # {0}?', $specialFare->id)]) ?>
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
