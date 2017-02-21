<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Performer'), ['action' => 'edit', $performer->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Performer'), ['action' => 'delete', $performer->id], ['confirm' => __('Are you sure you want to delete # {0}?', $performer->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Performers'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Performer'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Pub Statuses'), ['controller' => 'PubStatuses', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pub Status'), ['controller' => 'PubStatuses', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Songs'), ['controller' => 'Songs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Song'), ['controller' => 'Songs', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="performers view large-9 medium-8 columns content">
    <h3><?= h($performer->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($performer->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $performer->has('user') ? $this->Html->link($performer->user->name, ['controller' => 'Users', 'action' => 'view', $performer->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pub Status') ?></th>
            <td><?= $performer->has('pub_status') ? $this->Html->link($performer->pub_status->name, ['controller' => 'PubStatuses', 'action' => 'view', $performer->pub_status->pub_status_id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($performer->id) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($performer->description)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Songs') ?></h4>
        <?php if (!empty($performer->songs)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Performer Id') ?></th>
                <th scope="col"><?= __('Pub Status Id') ?></th>
                <th scope="col"><?= __('Last Change') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($performer->songs as $songs): ?>
            <tr>
                <td><?= h($songs->id) ?></td>
                <td><?= h($songs->name) ?></td>
                <td><?= h($songs->performer_id) ?></td>
                <td><?= h($songs->pub_status_id) ?></td>
                <td><?= h($songs->last_change) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Songs', 'action' => 'view', $songs->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Songs', 'action' => 'edit', $songs->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Songs', 'action' => 'delete', $songs->id], ['confirm' => __('Are you sure you want to delete # {0}?', $songs->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
