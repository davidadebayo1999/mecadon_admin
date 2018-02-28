
<div class="row">
    <div class="col-md-12">
        <div class="box shadow-2dp">
            <header>
                <h2><?= h($mainCategory->categoryname) ?></h2>
              
            </header>
            <div class="box-body collapse in">
            <table class="table">
     
        <tr>
            
            <td> <?= $this->Html->image('../files/MainCategories/category_logo/'.$mainCategory->category_logo,['class'=>'img img-responsive']) ?></td>
        </tr>
      
        <tr>
            <th scope="row"><?= __('Created') ?>  <?= h($mainCategory->created) ?></th>
            
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?>  <?= h($mainCategory->modified) ?></th>
            
        </tr>
    </table>

    <hr>

    <div class="related">
        <h2><?= __('Sub Categories') ?></h2>
        <?php if (!empty($mainCategory->sub_categories)): ?>
        <table cellpadding="0" cellspacing="0" class="table">
            <tr>
            
                <th scope="col"><?= __('Categoryname') ?></th>
                <th scope="col"><?= __('Category Logo') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($mainCategory->sub_categories as $subCategories): ?>
            <tr>
               
                <td><?= h($subCategories->categoryname) ?></td>
                <td>   <?=  $this->Html->image('../files/SubCategories/category_logo/thumbnail-'.$subCategories->category_logo,['class'=>'img img-responsive'])?></td>
              
             
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'SubCategories', 'action' => 'view', $subCategories->id],['class'=>'btn btn-success']) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'SubCategories', 'action' => 'edit', $subCategories->id],['class'=>'btn btn-primary']) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'SubCategories', 'action' => 'delete', $subCategories->id],['class'=>'btn btn-danger'], ['confirm' => __('Are you sure you want to delete # {0}?', $subCategories->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>


              

            </div>
        </div>
    </div>
</div>





 
  
