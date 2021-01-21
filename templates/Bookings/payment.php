<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Booking $booking
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Bookings'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="bookings form content">
            <form>
                <input pattern="^[A-Za-z ]{1,}$" title="Invalid Name" placeholder="Name On Card" required>
                <input pattern="^4[0-9]{12}(?:[0-9]{3})?$" title="Invalid Card Number" placeholder="Card Number" required>
                <input pattern="^\d{3}$" title="Invalid CVV" placeholder="CVV" required>
                <input type="date" placeholder="Expiry Date" required>
                <button type="submit">Pay Rs <?= $totalCost ?></button>

            </form>

        </div>
    </div>
</div>

<script>
    let form = document.querySelector("form");
    form.addEventListener("submit", (e) => {
        e.preventDefault();

        let url = new URL(window.location.href);
        url.pathname = `/bookings/buy/<?= $flightId ?>/<?= $classId ?>/<?= $scheduleId ?>`;
        window.location.href = url.href;

    })
</script>