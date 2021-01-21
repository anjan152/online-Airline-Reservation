<div class="flightClasses index content">
    
    <h3><?= __('Please select a Flight Class') ?></h3>
  
            
                <?php foreach ($flightClasses as $flightClass): ?>
            
                        <?= $this->Form->postLink(__($flightClass->class), ['controller'=>'FlightSchedules','action' => 'select', $flightId,$flightClass->id], ['confirm' => __('Are you sure  ?', $flightClass->id)]) ?>
                        <br>
                        <p><?= $flightClass->additional_facilities ?></p>
                        <p><?= $flightClass->additional_charge ?></p>
                <br>
                <?php endforeach; ?>
            

    
    </div>
