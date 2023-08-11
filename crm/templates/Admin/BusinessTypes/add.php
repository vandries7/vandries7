<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\BusinessType $businessType
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Business Types'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="businessTypes form content">
            <?= $this->Form->create($businessType) ?>
            <fieldset>
                <legend><?= __('Add Business Type') ?></legend>
                <?php
                    echo $this->Form->control('type_name');
                    echo $this->Form->control('created_by');
                    echo $this->Form->control('modified_by');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
