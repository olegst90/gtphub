<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit File Format'), ['action' => 'edit', $fileFormat->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete File Format'), ['action' => 'delete', $fileFormat->id], ['confirm' => __('Are you sure you want to delete # {0}?', $fileFormat->id)]) ?> </li>
        <li><?= $this->Html->link(__('List File Formats'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New File Format'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="fileFormats view large-9 medium-8 columns content">
    <h3><?= h($fileFormat->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($fileFormat->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($fileFormat->id) ?></td>
        </tr>
    </table>
</div>
