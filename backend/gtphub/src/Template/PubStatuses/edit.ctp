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
                ['action' => 'delete', $pubStatus->pub_status_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $pubStatus->pub_status_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Pub Statuses'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Pub Statuses'), ['controller' => 'PubStatuses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pub Status'), ['controller' => 'PubStatuses', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="pubStatuses form large-9 medium-8 columns content">
    <?= $this->Form->create($pubStatus) ?>
    <fieldset>
        <legend><?= __('Edit Pub Status') ?></legend>
        <?php
            echo $this->Form->input('name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
