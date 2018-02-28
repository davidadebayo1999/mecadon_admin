<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Products Hand'), ['action' => 'edit', $productsHand->product_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Products Hand'), ['action' => 'delete', $productsHand->product_id], ['confirm' => __('Are you sure you want to delete # {0}?', $productsHand->product_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Products Hands'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Products Hand'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Hands'), ['controller' => 'Hands', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Hand'), ['controller' => 'Hands', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="productsHands view large-9 medium-8 columns content">
    <h3><?= h($productsHand->product_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Product') ?></th>
            <td><?= $productsHand->has('product') ? $this->Html->link($productsHand->product->name, ['controller' => 'Products', 'action' => 'view', $productsHand->product->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Hand') ?></th>
            <td><?= $productsHand->has('hand') ? $this->Html->link($productsHand->hand->name, ['controller' => 'Hands', 'action' => 'view', $productsHand->hand->id]) : '' ?></td>
        </tr>
    </table>
</div>
