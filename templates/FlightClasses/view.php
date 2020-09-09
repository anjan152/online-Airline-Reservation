<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\FlightClass $flightClass
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Flight Class'), ['action' => 'edit', $flightClass->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Flight Class'), ['action' => 'delete', $flightClass->id], ['confirm' => __('Are you sure you want to delete # {0}?', $flightClass->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Flight Classes'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Flight Class'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="flightClasses view content">
            <h3><?= h($flightClass->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Class') ?></th>
                    <td><?= h($flightClass->class) ?></td>
                </tr>
                <tr>
                    <th><?= __('Additional Facilities') ?></th>
                    <td><?= h($flightClass->additional_facilities) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($flightClass->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Additional Charge') ?></th>
                    <td><?= $this->Number->format($flightClass->additional_charge) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
