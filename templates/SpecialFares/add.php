<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\SpecialFare $specialFare
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Special Fares'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="specialFares form content">
            <?= $this->Form->create($specialFare) ?>
            <fieldset>
                <legend><?= __('Add Special Fare') ?></legend>
                <?php
                    echo $this->Form->control('category');
                    echo $this->Form->control('discount_percentage');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
