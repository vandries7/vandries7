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
            <?= $this->Html->link(__('Edit Business'), ['action' => 'edit', $business->business_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Business'), ['action' => 'delete', $business->business_id], ['confirm' => __('Are you sure you want to delete # {0}?', $business->business_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Businesses'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Business'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="businesses view content">
            <h3><?= h($business->business_id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Business Name') ?></th>
                    <td><?= h($business->business_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Address') ?></th>
                    <td><?= h($business->address) ?></td>
                </tr>
                <tr>
                    <th><?= __('Contact Name') ?></th>
                    <td><?= h($business->contact_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Contact Email') ?></th>
                    <td><?= h($business->contact_email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Contact Phone') ?></th>
                    <td><?= h($business->contact_phone) ?></td>
                </tr>
                <tr>
                    <th><?= __('Logo Image') ?></th>
                    <td><?= h($business->logo_image) ?></td>
                </tr>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= h($business->status) ?></td>
                </tr>
                <tr>
                    <th><?= __('Working Hours') ?></th>
                    <td><?= h($business->working_hours) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created By') ?></th>
                    <td><?= h($business->created_by) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified By') ?></th>
                    <td><?= h($business->modified_by) ?></td>
                </tr>
                <tr>
                    <th><?= __('Business Id') ?></th>
                    <td><?= $this->Number->format($business->business_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Business Type') ?></th>
                    <td><?= $this->Number->format($business->business_type) ?></td>
                </tr>
                <tr>
                    <th><?= __('Establishment Date') ?></th>
                    <td><?= h($business->establishment_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($business->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($business->modified) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Business Description') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($business->business_description)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Financial Details') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($business->financial_details)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Specific Settings') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($business->specific_settings)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Allocated Users') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($business->allocated_users)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
