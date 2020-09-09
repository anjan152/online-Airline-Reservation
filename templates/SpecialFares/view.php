<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\SpecialFare $specialFare
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Special Fare'), ['action' => 'edit', $specialFare->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Special Fare'), ['action' => 'delete', $specialFare->id], ['confirm' => __('Are you sure you want to delete # {0}?', $specialFare->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Special Fares'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Special Fare'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="specialFares view content">
            <h3><?= h($specialFare->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Category') ?></th>
                    <td><?= h($specialFare->category) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($specialFare->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Discount Percentage') ?></th>
                    <td><?= $this->Number->format($specialFare->discount_percentage) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
