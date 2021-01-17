<div class="flightClasses index content">
    
    <h3><?= __('Please select a Flight Class') ?></h3>
  
            
                <?php foreach ($flightClasses as $flightClass): ?>
            
                        <?= $this->Form->postLink(__($flightClass->class), ['controller'=>'Bookings','action' => 'buy', $flightId,$flightClass->id], ['confirm' => __('Are you sure  ?', $flightClass->id)]) ?>
                    
                <br>
                <?php endforeach; ?>
            

    
    </div>
