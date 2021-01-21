<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Booking[]|\Cake\Collection\CollectionInterface $bookings
 */
?>
<div class="bookings index content">

    <h3><?= __('Bookings') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('user_id') ?></th>
                    <th><?= $this->Paginator->sort('seat_no') ?></th>
                    <th><?= $this->Paginator->sort('flight_id') ?></th>
                    <th><?= $this->Paginator->sort('class_id') ?></th>
                    <th><?= $this->Paginator->sort('frequent_flyer_discount') ?></th>
                    <th><?= $this->Paginator->sort('date') ?></th>
                    <th><?= $this->Paginator->sort('status') ?></th>



                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($bookings as $booking) : ?>
                    <tr>
                        <td><?= $this->Number->format($booking->id) ?></td>
                        <td><?= $booking->has('user') ? $this->Html->link($booking->user->first_name . " " . $booking->user->last_name, ['controller' => 'Users', 'action' => 'view', $booking->user->id]) : '' ?></td>
                        <td>Seat <?= $this->Number->format($booking->seat_no) ?></td>
                        <td><?= $booking->has('flight') ? $this->Html->link($booking->flight->flight_name, ['controller' => 'Flights', 'action' => 'view', $booking->flight->id]) : '' ?></td>

                        <td><?= $booking->flight_class->class ?></td>
                        <td>Rs<?= $this->Number->format($booking->frequent_flyer_discount) ?></td>
                        <td><?= h($booking->date) ?></td>
                        <td><?= h($booking->status === null || $booking->status === 1 ? "Active" : "Cancelled") ?></td>

                        <td class="actions">
                            <?php if ($booking->status === null || $booking->status === 1) { ?>
                                <?= $this->Form->postLink(__('Cancel'), ['action' => 'cancel', $booking->id], ['confirm' => __('Are you sure you want to cancel? (No refunds will be given)', $booking->id)]) ?>
                            <?php } ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>