<div class="flightSchedules index content">

     <h3><?= __('Please select a Time And Day') ?></h3>

     <?php if (count($flightSchedules) > 0) { ?>
          <?php foreach ($flightSchedules as $index => $flightSchedule) : ?>

               <?= $index + 1 ?>. <?= $this->Form->postLink(__($flightSchedule->day . " : " . $flightSchedule->departs . " - " .  $flightSchedule->arrives), ['controller' => 'Bookings', 'action' => 'payment', $flightId, $classId, $flightSchedule->id], ['confirm' => __('Are you sure  ?', $flightSchedule->id)]) ?>

               <br>
          <?php endforeach; ?>
     <?php } else { ?>
          This flight is currently unavailable. Please select another.
     <?php } ?>
</div>