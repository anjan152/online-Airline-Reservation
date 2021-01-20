<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\FlightSchedule $flightSchedule
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Flight Schedules'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="flightSchedules form content">
            <?= $this->Form->create($flightSchedule) ?>
            <fieldset>
                <legend><?= __('Add Flight Schedule') ?></legend>
                <?php
                    echo $this->Form->control('flight_id', ['options' => $flights, 'empty' => false]);
                    echo $this->Form->control('day',['options'=>[
                        'Monday'=>'Monday',
                        'Tuesday'=>'Tuesday',
                        'Wednesday'=>'Wednesday',
                        'Thursday'=>'Thursday',
                        'Friday'=>'Friday',
                        'Saturday'=>'Saturday',
                        'Sunday'=>'Sunday',
                    ],'empty'=>false]);
                    echo $this->Form->control('departs', ['empty' => true]);
                    echo $this->Form->control('arrives', ['empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
