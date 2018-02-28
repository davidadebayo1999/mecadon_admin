
<div class="row">
    <div class="col-md-12">
        <div class="box shadow-2dp">
            <header>
            <h2><?= __('Lengths') ?></h3>
       
           <?= $this->Html->link(__('New Length'), ['controller' => 'Lengths', 'action' => 'add'],['class'=>'btn btn-primary']) ?>
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
            <?php foreach ($lengths as $length): ?>
            <tr>
                <td><?= $this->Number->format($length->id) ?></td>
                <td><?= h($length->name) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $length->id],['class'=>'btn btn-success']) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $length->id],['class'=>'btn btn-primary']) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $length->id],['class'=>'btn btn-danger'], ['confirm' => __('Are you sure you want to delete # {0}?', $length->id)]) ?>
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