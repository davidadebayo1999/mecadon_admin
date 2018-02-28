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
                ['action' => 'delete', $productsHand->product_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $productsHand->product_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Products Hands'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Hands'), ['controller' => 'Hands', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Hand'), ['controller' => 'Hands', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="productsHands form large-9 medium-8 columns content">
    <?= $this->Form->create($productsHand) ?>
    <fieldset>
        <legend><?= __('Edit Products Hand') ?></legend>
        <?php
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
