<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Dashboard'), ['action' => 'edit', $dashboard->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Dashboard'), ['action' => 'delete', $dashboard->id], ['confirm' => __('Are you sure you want to delete # {0}?', $dashboard->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Dashboards'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Dashboard'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="dashboards view large-9 medium-8 columns content">
    <h3><?= h($dashboard->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($dashboard->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($dashboard->id) ?></td>
        </tr>
    </table>
</div>
