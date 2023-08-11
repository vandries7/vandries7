<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Business> $businesses
 */
?>
<div class="businesses index content">
    <?= $this->Html->link(__('New Business'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Businesses') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('business_id') ?></th>
                    <th><?= $this->Paginator->sort('business_name') ?></th>
                    <th><?= $this->Paginator->sort('business_type') ?></th>
                    <th><?= $this->Paginator->sort('address') ?></th>
                    <th><?= $this->Paginator->sort('contact_name') ?></th>
                    <th><?= $this->Paginator->sort('contact_email') ?></th>
                    <th><?= $this->Paginator->sort('contact_phone') ?></th>
                    <th><?= $this->Paginator->sort('establishment_date') ?></th>
                    <th><?= $this->Paginator->sort('logo_image') ?></th>
                    <th><?= $this->Paginator->sort('status') ?></th>
                    <th><?= $this->Paginator->sort('working_hours') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th><?= $this->Paginator->sort('created_by') ?></th>
                    <th><?= $this->Paginator->sort('modified_by') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($businesses as $business): ?>
                <tr>
                    <td><?= $this->Number->format($business->business_id) ?></td>
                    <td><?= h($business->business_name) ?></td>
                    <td><?= $this->Number->format($business->business_type) ?></td>
                    <td><?= h($business->address) ?></td>
                    <td><?= h($business->contact_name) ?></td>
                    <td><?= h($business->contact_email) ?></td>
                    <td><?= h($business->contact_phone) ?></td>
                    <td><?= h($business->establishment_date) ?></td>
                    <td><?= h($business->logo_image) ?></td>
                    <td><?= h($business->status) ?></td>
                    <td><?= h($business->working_hours) ?></td>
                    <td><?= h($business->created) ?></td>
                    <td><?= h($business->modified) ?></td>
                    <td><?= h($business->created_by) ?></td>
                    <td><?= h($business->modified_by) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $business->business_id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $business->business_id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $business->business_id], ['confirm' => __('Are you sure you want to delete # {0}?', $business->business_id)]) ?>
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
