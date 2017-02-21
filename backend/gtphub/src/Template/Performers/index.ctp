<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Performer'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Pub Statuses'), ['controller' => 'PubStatuses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pub Status'), ['controller' => 'PubStatuses', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Songs'), ['controller' => 'Songs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Song'), ['controller' => 'Songs', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="performers index large-9 medium-8 columns content">
    <h3><?= __('Performers') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('pub_status_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($performers as $performer): ?>
            <tr>
                <td><?= $this->Number->format($performer->id) ?></td>
                <td><?= h($performer->name) ?></td>
                <td><?= $performer->has('user') ? $this->Html->link($performer->user->name, ['controller' => 'Users', 'action' => 'view', $performer->user->id]) : '' ?></td>
                <td><?= $performer->has('pub_status') ? $this->Html->link($performer->pub_status->name, ['controller' => 'PubStatuses', 'action' => 'view', $performer->pub_status->pub_status_id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $performer->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $performer->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $performer->id], ['confirm' => __('Are you sure you want to delete # {0}?', $performer->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
