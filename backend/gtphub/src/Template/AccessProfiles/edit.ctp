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
                ['action' => 'delete', $accessProfile->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $accessProfile->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Access Profiles'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="accessProfiles form large-9 medium-8 columns content">
    <?= $this->Form->create($accessProfile) ?>
    <fieldset>
        <legend><?= __('Edit Access Profile') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('access');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
