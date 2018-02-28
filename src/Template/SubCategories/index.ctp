
<div class="row">
    <div class="col-md-12">

    <div class="box shadow-2dp">
            <header>
            <h2><?= __('Sub Categories') ?></h2>
       
           <?= $this->Html->link(__('New Sub Category'), ['controller' => 'SubCategories', 'action' => 'add'],['class'=>'btn btn-primary']) ?>
            </header>
            <div class="box-body collapse in">
   
    <table  class="table">
        <thead>
            <tr>
            
                <th scope="col"><?= $this->Paginator->sort('categoryname') ?></th>
                <th scope="col"><?= $this->Paginator->sort('main_category_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('category_logo') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($subCategories as $subCategory): ?>
            <tr>
            
                <td><?= h($subCategory->categoryname) ?></td>
                <td><?= $subCategory->has('main_category') ? $this->Html->link($subCategory->main_category->categoryname, ['controller' => 'MainCategories', 'action' => 'view', $subCategory->main_category->id]) : '' ?></td>
                <td> <?=  $this->Html->image('../files/SubCategories/category_logo/thumbnail-'.$subCategory->category_logo,['style'=>'width:220px'])?> </td>
               
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $subCategory->id],['class'=>'btn btn-success']) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $subCategory->id],['class'=>'btn btn-primary']) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $subCategory->id],['class'=>'btn btn-danger'], ['confirm' => __('Are you sure you want to delete # {0}?', $subCategory->id)]) ?>
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


