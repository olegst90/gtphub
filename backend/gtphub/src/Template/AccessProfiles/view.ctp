<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Access Profile'), ['action' => 'edit', $accessProfile->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Access Profile'), ['action' => 'delete', $accessProfile->id], ['confirm' => __('Are you sure you want to delete # {0}?', $accessProfile->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Access Profiles'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Access Profile'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="accessProfiles view large-9 medium-8 columns content">
    <h3><?= h($accessProfile->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($accessProfile->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Access') ?></th>
            <td><?= h($accessProfile->access) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($accessProfile->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Users') ?></h4>
        <?php if (!empty($accessProfile->users)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Password') ?></th>
                <th scope="col"><?= __('Access Profile Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($accessProfile->users as $users): ?>
            <tr>
                <td><?= h($users->id) ?></td>
                <td><?= h($users->name) ?></td>
                <td><?= h($users->password) ?></td>
                <td><?= h($users->access_profile_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Users', 'action' => 'view', $users->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Users', 'action' => 'edit', $users->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Users', 'action' => 'delete', $users->id], ['confirm' => __('Are you sure you want to delete # {0}?', $users->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
