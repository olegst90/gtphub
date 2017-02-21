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
                ['action' => 'delete', $fileFormat->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $fileFormat->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List File Formats'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="fileFormats form large-9 medium-8 columns content">
    <?= $this->Form->create($fileFormat) ?>
    <fieldset>
        <legend><?= __('Edit File Format') ?></legend>
        <?php
            echo $this->Form->input('name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
