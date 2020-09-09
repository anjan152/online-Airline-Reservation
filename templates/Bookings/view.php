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
            <?= $this->Html->link(__('Edit Booking'), ['action' => 'edit', $booking->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Booking'), ['action' => 'delete', $booking->id], ['confirm' => __('Are you sure you want to delete # {0}?', $booking->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Bookings'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Booking'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="bookings view content">
            <h3><?= h($booking->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $booking->has('user') ? $this->Html->link($booking->user->id, ['controller' => 'Users', 'action' => 'view', $booking->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Flight') ?></th>
                    <td><?= $booking->has('flight') ? $this->Html->link($booking->flight->id, ['controller' => 'Flights', 'action' => 'view', $booking->flight->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($booking->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= $this->Number->format($booking->status) ?></td>
                </tr>
                <tr>
                    <th><?= __('Frequent Flyer Discount') ?></th>
                    <td><?= $this->Number->format($booking->frequent_flyer_discount) ?></td>
                </tr>
                <tr>
                    <th><?= __('Class Id') ?></th>
                    <td><?= $this->Number->format($booking->class_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Seat No') ?></th>
                    <td><?= $this->Number->format($booking->seat_no) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date') ?></th>
                    <td><?= h($booking->date) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
