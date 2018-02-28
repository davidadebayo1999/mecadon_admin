

<div class="row">
    <div class="col-md-12">


    

    <div class="box shadow-2dp">
            <header>
            <h2><?= __('Products') ?></h2>
       
           <?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add'],['class'=>'btn btn-primary']) ?>
            </header>
            <div class="box-body collapse in">
    <table  class="table">
        <thead>
            <tr>
              
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('price') ?></th>
                <th scope="col"><?= $this->Paginator->sort('quantity') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sub_category_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('rating') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($products as $product): ?>
            <tr>
              
                <td><?= h($product->name) ?></td>
                <td><?= $this->Number->format($product->price) ?></td>
              
                <td><?= $this->Number->format($product->quantity) ?></td>
                <td><?= $product->has('sub_category') ? $this->Html->link($product->sub_category->categoryname, ['controller' => 'SubCategories', 'action' => 'view', $product->sub_category->id]) : '' ?></td>
                <td><?= $this->Number->format($product->rating) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $product->id],['class'=>'btn btn-success']) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $product->id],['class'=>'btn btn-primary']) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $product->id],['class'=>'btn btn-danger'], ['confirm' => __('Are you sure you want to delete # {0}?', $product->id)]) ?>
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