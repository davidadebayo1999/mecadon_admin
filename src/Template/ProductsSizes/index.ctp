<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Products Size'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sizes'), ['controller' => 'Sizes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Size'), ['controller' => 'Sizes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="productsSizes index large-9 medium-8 columns content">
    <h3><?= __('Products Sizes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('product_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('size_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($productsSizes as $productsSize): ?>
            <tr>
                <td><?= $productsSize->has('product') ? $this->Html->link($productsSize->product->name, ['controller' => 'Products', 'action' => 'view', $productsSize->product->id]) : '' ?></td>
                <td><?= $productsSize->has('size') ? $this->Html->link($productsSize->size->name, ['controller' => 'Sizes', 'action' => 'view', $productsSize->size->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $productsSize->product_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $productsSize->product_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $productsSize->product_id], ['confirm' => __('Are you sure you want to delete # {0}?', $productsSize->product_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
