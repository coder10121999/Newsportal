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
                <legend><?= __('Register') ?></legend>
                <?php
                    echo $this->Form->control('userimage');
                    echo $this->Form->control('username');
                    echo $this->Form->control('password');
                    echo $this->Form->control('email');
                ?>
                
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
