<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Products Length'), ['action' => 'edit', $productsLength->product_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Products Length'), ['action' => 'delete', $productsLength->product_id], ['confirm' => __('Are you sure you want to delete # {0}?', $productsLength->product_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Products Lengths'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Products Length'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Lengths'), ['controller' => 'Lengths', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Length'), ['controller' => 'Lengths', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="productsLengths view large-9 medium-8 columns content">
    <h3><?= h($productsLength->product_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Product') ?></th>
            <td><?= $productsLength->has('product') ? $this->Html->link($productsLength->product->name, ['controller' => 'Products', 'action' => 'view', $productsLength->product->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Length') ?></th>
            <td><?= $productsLength->has('length') ? $this->Html->link($productsLength->length->name, ['controller' => 'Lengths', 'action' => 'view', $productsLength->length->id]) : '' ?></td>
        </tr>
    </table>
</div>
