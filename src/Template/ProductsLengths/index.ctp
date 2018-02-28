<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Products Length'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Lengths'), ['controller' => 'Lengths', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Length'), ['controller' => 'Lengths', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="productsLengths index large-9 medium-8 columns content">
    <h3><?= __('Products Lengths') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('product_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('length_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($productsLengths as $productsLength): ?>
            <tr>
                <td><?= $productsLength->has('product') ? $this->Html->link($productsLength->product->name, ['controller' => 'Products', 'action' => 'view', $productsLength->product->id]) : '' ?></td>
                <td><?= $productsLength->has('length') ? $this->Html->link($productsLength->length->name, ['controller' => 'Lengths', 'action' => 'view', $productsLength->length->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $productsLength->product_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $productsLength->product_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $productsLength->product_id], ['confirm' => __('Are you sure you want to delete # {0}?', $productsLength->product_id)]) ?>
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
