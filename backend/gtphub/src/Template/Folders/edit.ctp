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
                ['action' => 'delete', $folder->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $folder->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Folders'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Songs'), ['controller' => 'Songs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Song'), ['controller' => 'Songs', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Files'), ['controller' => 'Files', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New File'), ['controller' => 'Files', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="folders form large-9 medium-8 columns content">
    <?= $this->Form->create($folder) ?>
    <fieldset>
        <legend><?= __('Edit Folder') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('song_id', ['options' => $songs, 'empty' => true]);
            echo $this->Form->input('last_change');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
