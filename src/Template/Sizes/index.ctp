

<div class="row">
    <div class="col-md-12">
        <div class="box shadow-2dp">
            <header>
            <h2><?= __('Sizes') ?></h3>
       
           <?= $this->Html->link(__('New Size'), ['controller' => 'Sizes', 'action' => 'add'],['class'=>'btn btn-primary']) ?>
            </header>
            <div class="box-body collapse in">


  
    <table cellpadding="0" cellspacing="0" class="table">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($sizes as $size): ?>
            <tr>
                <td><?= $this->Number->format($size->id) ?></td>
                <td><?= h($size->name) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $size->id],['class'=>'btn btn-success']) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $size->id],['class'=>'btn btn-primary']) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $size->id],['class'=>'btn btn-danger'], ['confirm' => __('Are you sure you want to delete # {0}?', $size->id)]) ?>
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
        </div>
    </div>
</div>
