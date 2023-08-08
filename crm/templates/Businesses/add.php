<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Business $business
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Businesses'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="businesses form content">
            <?= $this->Form->create($business) ?>
            <fieldset>
                <legend><?= __('Add Business') ?></legend>
                <?php
                    echo $this->Form->control('business_name');
                    echo $this->Form->control('business_type');
                    echo $this->Form->control('address');
                    echo $this->Form->control('contact_name');
                    echo $this->Form->control('contact_email');
                    echo $this->Form->control('contact_phone');
                    echo $this->Form->control('business_description');
                    echo $this->Form->control('establishment_date', ['empty' => true]);
                    echo $this->Form->control('logo_image');
                    echo $this->Form->control('financial_details');
                    echo $this->Form->control('specific_settings');
                    echo $this->Form->control('allocated_users');
                    echo $this->Form->control('status');
                    echo $this->Form->control('working_hours');
                    echo $this->Form->control('created_by');
                    echo $this->Form->control('modified_by');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
