<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\BusinessType> $businessTypes
 */
?>
<div class="businessTypes index content">
    <?= $this->Html->link(__('New Business Type'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Business Types') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('type_id') ?></th>
                    <th><?= $this->Paginator->sort('type_name') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th><?= $this->Paginator->sort('created_by') ?></th>
                    <th><?= $this->Paginator->sort('modified_by') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($businessTypes as $businessType): ?>
                <tr>
                    <td><?= $this->Number->format($businessType->type_id) ?></td>
                    <td><?= h($businessType->type_name) ?></td>
                    <td><?= h($businessType->created) ?></td>
                    <td><?= h($businessType->modified) ?></td>
                    <td><?= h($businessType->created_by) ?></td>
                    <td><?= h($businessType->modified_by) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $businessType->type_id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $businessType->type_id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $businessType->type_id], ['confirm' => __('Are you sure you want to delete # {0}?', $businessType->type_id)]) ?>
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
