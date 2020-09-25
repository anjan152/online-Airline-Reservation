<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Flight $flight
 */
?>
<div class="row">
    
    <div class="column-responsive column-80">
        <div class="flights form content">
            <?= $this->Form->create($flight) ?>
            <fieldset>
                <legend><?= __('Add Flight') ?></legend>
                <?php
                    echo $this->Form->control('aircraft_type_id', ['options' => $aircraftTypes, 'empty' => false]);
                    echo $this->Form->control('price');
                    echo $this->Form->control('from_place');
                    echo $this->Form->control('to_place');
                    echo $this->Form->control('counter');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
