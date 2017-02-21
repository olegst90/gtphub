<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $file->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $file->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Files'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List File Formats'), ['controller' => 'FileFormats', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New File Format'), ['controller' => 'FileFormats', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Folders'), ['controller' => 'Folders', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Folder'), ['controller' => 'Folders', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="files form large-9 medium-8 columns content">
    <?= $this->Form->create($file) ?>
    <fieldset>
        <legend><?= __('Edit File') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('user_id', ['options' => $users]);
            echo $this->Form->input('format_id', ['options' => $fileFormats]);
            echo $this->Form->input('folder_id', ['options' => $folders, 'empty' => true]);
            echo $this->Form->input('last_change');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
