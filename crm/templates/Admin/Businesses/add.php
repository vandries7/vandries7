<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Business $business
 * @var array $businessTypeOptions
 * @var array $allUsers
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
            <?php //debug($business)  ;?>
            <?= $this->Form->create($business) ?>
            <fieldset>
                <legend><?= __('Add Business') ?></legend>
                <?php
                    echo $this->Form->control('business_name');
                    echo $this->Form->select('business_type', $businessTypeOptions , ['empty' => 'Select Business Type']);
                    echo $this->Form->control('address');
                    echo $this->Form->control('contact_name');
                    echo $this->Form->control('contact_email');
                    echo $this->Form->control('contact_phone');
                    echo $this->Form->control('business_description');
                    echo $this->Form->control('establishment_date', [
                        'empty' => true
                    ]);
                    echo $this->Form->control('logo_image');
                    echo $this->Form->control('financial_details');
                    echo $this->Form->control('specific_settings');

                    //echo $this->Form->control('allocated_users');
                    // Input-uri separate pentru fiecare rol
                    echo $this->Form->control('allocated_users', [
                        'type' => 'select',
                        'options' => $allUsers,
                        'multiple' => true
                    ]);
//                    echo $this->Form->control('operator_users', [
//                        'type' => 'select',
//                        'options' => $users
//                    ]);

                    echo $this->Form->control('status');
                    echo $this->Form->control('working_hours');
//                    echo $this->Form->hidden('created_by');
//                    echo $this->Form->hidden('modified_by');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
<style>
    #allocated-users{
        min-height: 200px;
    }
</style>
