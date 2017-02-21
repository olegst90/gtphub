<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Folder'), ['action' => 'edit', $folder->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Folder'), ['action' => 'delete', $folder->id], ['confirm' => __('Are you sure you want to delete # {0}?', $folder->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Folders'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Folder'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Songs'), ['controller' => 'Songs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Song'), ['controller' => 'Songs', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Files'), ['controller' => 'Files', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New File'), ['controller' => 'Files', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="folders view large-9 medium-8 columns content">
    <h3><?= h($folder->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($folder->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Song') ?></th>
            <td><?= $folder->has('song') ? $this->Html->link($folder->song->name, ['controller' => 'Songs', 'action' => 'view', $folder->song->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($folder->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Last Change') ?></th>
            <td><?= h($folder->last_change) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Files') ?></h4>
        <?php if (!empty($folder->files)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Data') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Format Id') ?></th>
                <th scope="col"><?= __('Folder Id') ?></th>
                <th scope="col"><?= __('Last Change') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($folder->files as $files): ?>
            <tr>
                <td><?= h($files->id) ?></td>
                <td><?= h($files->name) ?></td>
                <td><?= h($files->data) ?></td>
                <td><?= h($files->user_id) ?></td>
                <td><?= h($files->format_id) ?></td>
                <td><?= h($files->folder_id) ?></td>
                <td><?= h($files->last_change) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Files', 'action' => 'view', $files->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Files', 'action' => 'edit', $files->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Files', 'action' => 'delete', $files->id], ['confirm' => __('Are you sure you want to delete # {0}?', $files->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
