<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Products Brand'), ['action' => 'edit', $productsBrand->product_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Products Brand'), ['action' => 'delete', $productsBrand->product_id], ['confirm' => __('Are you sure you want to delete # {0}?', $productsBrand->product_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Products Brands'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Products Brand'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Brands'), ['controller' => 'Brands', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Brand'), ['controller' => 'Brands', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="productsBrands view large-9 medium-8 columns content">
    <h3><?= h($productsBrand->product_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Product') ?></th>
            <td><?= $productsBrand->has('product') ? $this->Html->link($productsBrand->product->name, ['controller' => 'Products', 'action' => 'view', $productsBrand->product->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Brand') ?></th>
            <td><?= $productsBrand->has('brand') ? $this->Html->link($productsBrand->brand->name, ['controller' => 'Brands', 'action' => 'view', $productsBrand->brand->id]) : '' ?></td>
        </tr>
    </table>
</div>
