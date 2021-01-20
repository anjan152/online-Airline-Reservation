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
           
            <?= $this->Html->link(__('List Flight Classes'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="flightClasses form content">
            <?= $this->Form->create($flightClass) ?>
            <fieldset>
                <legend><?= __('Edit Flight Class') ?></legend>
                <?php
                    echo $this->Form->control('class');
                    echo $this->Form->control('additional_charge');
                    echo $this->Form->control('additional_facilities');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
