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
                ['action' => 'delete', $dashboard->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $dashboard->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Dashboards'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="dashboards form large-9 medium-8 columns content">
    <?= $this->Form->create($dashboard) ?>
    <fieldset>
        <legend><?= __('Edit Dashboard') ?></legend>
        <?php
            echo $this->Form->input('name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
