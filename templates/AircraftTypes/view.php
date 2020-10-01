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
            <?= $this->Html->link(__('Edit Aircraft Type'), ['action' => 'edit', $aircraftType->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Aircraft Type'), ['action' => 'delete', $aircraftType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $aircraftType->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Aircraft Types'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Aircraft Type'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="aircraftTypes view content">
            <h3><?= h($aircraftType->aircraft_name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Aircraft Name') ?></th>
                    <td><?= h($aircraftType->aircraft_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($aircraftType->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('First Class') ?></th>
                    <td><?= $this->Number->format($aircraftType->first_class) ?></td>
                </tr>
                <tr>
                    <th><?= __('Second Class') ?></th>
                    <td><?= $this->Number->format($aircraftType->second_class) ?></td>
                </tr>
                <tr>
                    <th><?= __('Third Class') ?></th>
                    <td><?= $this->Number->format($aircraftType->third_class) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Flights') ?></h4>
                <?php if (!empty($aircraftType->flights)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Aircraft Type Id') ?></th>
                            <th><?= __('Price') ?></th>
                            <th><?= __('From Place') ?></th>
                            <th><?= __('To Place') ?></th>
                            <th><?= __('Counter') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($aircraftType->flights as $flights) : ?>
                        <tr>
                            <td><?= h($flights->id) ?></td>
                            <td><?= h($flights->aircraft_type_id) ?></td>
                            <td><?= h($flights->price) ?></td>
                            <td><?= h($flights->from_place) ?></td>
                            <td><?= h($flights->to_place) ?></td>
                            <td><?= h($flights->counter) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Flights', 'action' => 'view', $flights->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Flights', 'action' => 'edit', $flights->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Flights', 'action' => 'delete', $flights->id], ['confirm' => __('Are you sure you want to delete # {0}?', $flights->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
