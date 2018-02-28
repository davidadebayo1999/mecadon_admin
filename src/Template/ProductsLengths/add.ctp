<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Products Lengths'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Lengths'), ['controller' => 'Lengths', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Length'), ['controller' => 'Lengths', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="productsLengths form large-9 medium-8 columns content">
    <?= $this->Form->create($productsLength) ?>
    <fieldset>
        <legend><?= __('Add Products Length') ?></legend>
        <?php
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
