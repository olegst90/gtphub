<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Access Profiles'), ['controller' => 'AccessProfiles', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Access Profile'), ['controller' => 'AccessProfiles', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Files'), ['controller' => 'Files', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New File'), ['controller' => 'Files', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Performers'), ['controller' => 'Performers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Performer'), ['controller' => 'Performers', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="users view large-9 medium-8 columns content">
    <h3><?= h($user->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($user->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Password') ?></th>
            <td><?= h($user->password) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Access Profile') ?></th>
            <td><?= $user->has('access_profile') ? $this->Html->link($user->access_profile->name, ['controller' => 'AccessProfiles', 'action' => 'view', $user->access_profile->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($user->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Files') ?></h4>
        <?php if (!empty($user->files)): ?>
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
            <?php foreach ($user->files as $files): ?>
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
    <div class="related">
        <h4><?= __('Related Performers') ?></h4>
        <?php if (!empty($user->performers)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Pub Status Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->performers as $performers): ?>
            <tr>
                <td><?= h($performers->id) ?></td>
                <td><?= h($performers->name) ?></td>
                <td><?= h($performers->description) ?></td>
                <td><?= h($performers->user_id) ?></td>
                <td><?= h($performers->pub_status_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Performers', 'action' => 'view', $performers->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Performers', 'action' => 'edit', $performers->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Performers', 'action' => 'delete', $performers->id], ['confirm' => __('Are you sure you want to delete # {0}?', $performers->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
