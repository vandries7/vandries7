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
            <?= $this->Html->link(__('Edit Business Type'), ['action' => 'edit', $businessType->type_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Business Type'), ['action' => 'delete', $businessType->type_id], ['confirm' => __('Are you sure you want to delete # {0}?', $businessType->type_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Business Types'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Business Type'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="businessTypes view content">
            <h3><?= h($businessType->type_id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Type Name') ?></th>
                    <td><?= h($businessType->type_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created By') ?></th>
                    <td><?= h($businessType->created_by) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified By') ?></th>
                    <td><?= h($businessType->modified_by) ?></td>
                </tr>
                <tr>
                    <th><?= __('Type Id') ?></th>
                    <td><?= $this->Number->format($businessType->type_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($businessType->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($businessType->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
