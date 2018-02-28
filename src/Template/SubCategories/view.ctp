
<div class="row">
        <div class="col-md-12">
            <div class="box shadow-2dp">
                <header>
                    <h2><?= h($subCategory->categoryname) ?></h2>
                  
                </header>
                <div class="box-body collapse in">
                <table class="table">
         
            <tr>
                
                <td> <?= $this->Html->image('../files/SubCategories/category_logo/'.$subCategory->category_logo,['class'=>'img img-responsive']) ?></td>
            </tr>
            <tr>
                    <th scope="row"><?= __('Main Category') ?> <?= $subCategory->has('main_category') ? $this->Html->link($subCategory->main_category->categoryname, ['controller' => 'MainCategories', 'action' => 'view', $subCategory->main_category->id]) : '' ?></th>
                   
                </tr>
          
            <tr>
                <th scope="row"><?= __('Created') ?>    <?= h($subCategory->created) ?> </th>
                
            </tr>
            <tr>
                <th scope="row"><?= __('Modified') ?> <?= h($subCategory->modified) ?></th>
                
            </tr>
        </table>
    
        <hr>
    
        <div class="related">
            <h2><?= __('Related Products') ?></h2>
            <?php if (!empty($subCategory->products)): ?>
            <table  class="table">
                    <tr>
                        
                        <th scope="col"><?= __('Name') ?></th>
                        <th scope="col"><?= __('Price') ?></th>
                        <th scope="col"><?= __('Quantity') ?></th>
                        <th scope="col"><?= __('Rating') ?></th>
                        <th scope="col" class="actions"><?= __('Actions') ?></th>
                    </tr>
                    <?php foreach ($subCategory->products as $products): ?>
                    <tr>
                       
                        <td><?= h($products->name) ?></td>
                        <td><?= h($products->price) ?></td>
                        <td><?= h($products->quantity) ?></td>
                        <td><?= h($products->rating) ?></td>
                        <td class="actions">
                            <?= $this->Html->link(__('View'), ['controller' => 'Products', 'action' => 'view', $products->id],['class'=>'btn btn-success']) ?>
                            <?= $this->Html->link(__('Edit'), ['controller' => 'Products', 'action' => 'edit', $products->id],['class'=>'btn btn-primary']) ?>
                            <?= $this->Form->postLink(__('Delete'), ['controller' => 'Products', 'action' => 'delete', $products->id],['class'=>'btn btn-danger'], ['confirm' => __('Are you sure you want to delete # {0}?', $products->id)]) ?>
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
    
    
    
    
    
     
      
    