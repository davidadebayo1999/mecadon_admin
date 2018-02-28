<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Products Size'), ['action' => 'edit', $productsSize->product_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Products Size'), ['action' => 'delete', $productsSize->product_id], ['confirm' => __('Are you sure you want to delete # {0}?', $productsSize->product_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Products Sizes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Products Size'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Sizes'), ['controller' => 'Sizes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Size'), ['controller' => 'Sizes', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="productsSizes view large-9 medium-8 columns content">
    <h3><?= h($productsSize->product_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Product') ?></th>
            <td><?= $productsSize->has('product') ? $this->Html->link($productsSize->product->name, ['controller' => 'Products', 'action' => 'view', $productsSize->product->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Size') ?></th>
            <td><?= $productsSize->has('size') ? $this->Html->link($productsSize->size->name, ['controller' => 'Sizes', 'action' => 'view', $productsSize->size->id]) : '' ?></td>
        </tr>
    </table>
</div>
