<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="row">
   
    <div class="column-responsive column-80">
        <div class="users form content">
            <?= $this->Form->create($user) ?>
            <fieldset>
                <legend><?= __('Add User') ?></legend>
                <?php
                    echo $this->Form->control('email');
                    echo $this->Form->control('password');
                    echo $this->Form->control('first_name');
                    echo $this->Form->control('last_name');
                    echo $this->Form->control('address');
                    echo $this->Form->control('passport_details');
                    echo $this->Form->control('state',['options'=>['kerala'=>'kerala','Tamil Nadu'=>'Tamil Nadu','Karnataka'=>'Karnataka'],'empty'=>false]);
                    echo $this->Form->control('country',['options'=>['INDIA'=>'INDIA'],'empty'=>false]);
                
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
