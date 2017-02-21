<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Pub Status'), ['action' => 'edit', $pubStatus->pub_status_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Pub Status'), ['action' => 'delete', $pubStatus->pub_status_id], ['confirm' => __('Are you sure you want to delete # {0}?', $pubStatus->pub_status_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Pub Statuses'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pub Status'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Pub Statuses'), ['controller' => 'PubStatuses', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pub Status'), ['controller' => 'PubStatuses', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="pubStatuses view large-9 medium-8 columns content">
    <h3><?= h($pubStatus->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Pub Status') ?></th>
            <td><?= $pubStatus->has('pub_status') ? $this->Html->link($pubStatus->pub_status->name, ['controller' => 'PubStatuses', 'action' => 'view', $pubStatus->pub_status->pub_status_id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($pubStatus->name) ?></td>
        </tr>
    </table>
</div>
