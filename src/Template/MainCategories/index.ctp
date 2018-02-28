<div class="row">
    <div class="col-md-12">
        <div class="box shadow-2dp">
            <header>
                <h2>Main Categories</h2>
       
           <?= $this->Html->link(__('New Main Category'), ['controller' => 'MainCategories', 'action' => 'add'],['class'=>'btn btn-primary']) ?>
            </header>
            <div class="box-body collapse in">
                <table class="table ">
                    <thead>
                        <tr>
                            <th scope="col">
                                <?= $this->Paginator->sort('id') ?>
                            </th>
                            <th scope="col">
                                <?= $this->Paginator->sort('categoryname') ?>
                            </th>
                            <th scope="col">
                                <?= $this->Paginator->sort('category_logo')  ?>
                            </th>

                            <th scope="col" class="actions">
                                <?= __('Actions') ?>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($mainCategories as $mainCategory): ?>
                        <tr>
                            <td>
                                <?= $this->Number->format($mainCategory->id) ?>
                            </td>
                            <td>
                                <?= h($mainCategory->categoryname) ?>
                            </td>
                            <td>
                                <?=  $this->Html->image('../files/MainCategories/category_logo/thumbnail-'.$mainCategory->category_logo,['style'=>'width:200px'])?>
                            </td>

                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['action' => 'view', $mainCategory->id],['class'=>'btn btn-success']) ?>
                                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $mainCategory->id],['class'=>'btn btn-primary']) ?>
                                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $mainCategory->id],['class'=>'btn btn-danger'], ['confirm' => __('Are you sure you want to delete # {0}?', $mainCategory->id)]) ?>
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
                    <p>
                        <?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
