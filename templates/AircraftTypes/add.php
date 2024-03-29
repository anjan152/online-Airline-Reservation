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
            <?= $this->Html->link(__('List Aircraft Types'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="aircraftTypes form content">
            <?= $this->Form->create($aircraftType) ?>
            <fieldset>
                <legend><?= __('Add Aircraft Type') ?></legend>
                <?php
                    echo $this->Form->control('aircraft_name');
                    echo $this->Form->control('first_class', ['label' => "First Class Seats"]);
                    echo $this->Form->control('second_class', ['label' => "Second Class Seats"]);
                    echo $this->Form->control('third_class', ['label' => "Third Class Seats"]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
