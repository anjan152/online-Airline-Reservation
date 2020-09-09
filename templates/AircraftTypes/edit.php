<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AircraftType $aircraftType
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $aircraftType->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $aircraftType->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Aircraft Types'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="aircraftTypes form content">
            <?= $this->Form->create($aircraftType) ?>
            <fieldset>
                <legend><?= __('Edit Aircraft Type') ?></legend>
                <?php
                    echo $this->Form->control('seat_capacity');
                    echo $this->Form->control('first_class');
                    echo $this->Form->control('second_class');
                    echo $this->Form->control('third_class');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
