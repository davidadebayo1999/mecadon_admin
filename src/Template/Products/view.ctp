
<div class="row">
        <div class="col-md-12">
            <div class="box shadow-2dp">
                <header>
                    <h2><?= h($product->name) ?></h2>
                  
                </header>
                <div class="box-body collapse in">
               
                <table class="table">
         
            <tr>
                <th scope="row"><?= __('Sub Category') ?>  <?= $product->has('sub_category') ? $this->Html->link($product->sub_category->categoryname, ['controller' => 'SubCategories', 'action' => 'view', $product->sub_category->id]) : '' ?></th>
            </tr>

            <tr>
                    <th scope="row"><?= __('Price') ?>  <?= $this->Number->format($product->price) ?></th>
                </tr>
                <tr>
                    <th scope="row"><?= __('Quantity') ?>  <?= $this->Number->format($product->quantity) ?></th>
                </tr>
                <tr>
                    <th scope="row"><?= __('Rating') ?>  <?= $this->Number->format($product->rating) ?></th>
                </tr>
          
       
        </table>
    
        <hr>
    
        <div class="related">

            <h2><?= __('Images') ?></h2>
            <?php if (!empty($product->images)): ?>        
            <table cellpadding="0" cellspacing="0" class="table">   
                    <tr>
                    <?php foreach ($product->images as $images): ?>
                        <td><?=  $this->Html->image('../files/Images/name/'.$images->name,['class'=>'img img-responsive']) ?></td>
                        <?php endforeach; ?>
                    </tr>             
                </table>            
            <?php endif; ?>

        </div>

        <hr>
        <div class="related">
            <h4><?= __('Related Order Items') ?></h4>
            <?php if (!empty($product->order_items)): ?>
            <table cellpadding="0" cellspacing="0" class="table">
                <tr>
                    <th scope="col"><?= __('Id') ?></th>
                    <th scope="col"><?= __('Product Id') ?></th>
                    <th scope="col"><?= __('Order Id') ?></th>
                    <th scope="col"><?= __('Quantity') ?></th>
                    <th scope="col" class="actions"><?= __('Actions') ?></th>
                </tr>
                <?php foreach ($product->order_items as $orderItems): ?>
                <tr>
                    <td><?= h($orderItems->id) ?></td>
                    <td><?= h($orderItems->product_id) ?></td>
                    <td><?= h($orderItems->order_id) ?></td>
                    <td><?= h($orderItems->quantity) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['controller' => 'OrderItems', 'action' => 'view', $orderItems->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['controller' => 'OrderItems', 'action' => 'edit', $orderItems->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['controller' => 'OrderItems', 'action' => 'delete', $orderItems->id], ['confirm' => __('Are you sure you want to delete # {0}?', $orderItems->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
            <?php endif; ?>
        </div>
        <div class="related">
            <h4><?= __(' Brands') ?></h4>
            <?php if (!empty($product->brands)): ?>
            <table cellpadding="0" cellspacing="0" class="table">
                <tr>
                    <th scope="col"><?= __('Id') ?></th>
                    <th scope="col"><?= __('Name') ?></th>
                </tr>
                <?php foreach ($product->brands as $brands): ?>
                <tr>
                    <td><?= h($brands->id) ?></td>
                    <td><?= h($brands->name) ?></td>
                  
                </tr>
                <?php endforeach; ?>
            </table>
            <?php endif; ?>
        </div>
        <div class="related">
            <h4><?= __(' Colors') ?></h4>
            <?php if (!empty($product->colors)): ?>
            <table cellpadding="0" cellspacing="0" class="table">
                <tr>
                    <th scope="col"><?= __('Id') ?></th>
                    <th scope="col"><?= __('Name') ?></th>
                </tr>
                <?php foreach ($product->colors as $colors): ?>
                <tr>
                    <td><?= h($colors->id) ?></td>
                    <td><?= h($colors->name) ?></td>
                
                </tr>
                <?php endforeach; ?>
            </table>
            <?php endif; ?>
        </div>
        <div class="related">
            <h4><?= __(' Hands') ?></h4>
            <?php if (!empty($product->hands)): ?>
            <table cellpadding="0" cellspacing="0" class="table">
                <tr>
                    <th scope="col"><?= __('Id') ?></th>
                    <th scope="col"><?= __('Name') ?></th>
                </tr>
                <?php foreach ($product->hands as $hands): ?>
                <tr>
                    <td><?= h($hands->id) ?></td>
                    <td><?= h($hands->name) ?></td>
               
                </tr>
                <?php endforeach; ?>
            </table>
            <?php endif; ?>
        </div>
    
        <div class="related">
            <h4><?= __('Lengths') ?></h4>
            <?php if (!empty($product->lengths)): ?>
            <table cellpadding="0" cellspacing="0" class="table">
                <tr>
                    <th scope="col"><?= __('Id') ?></th>
                    <th scope="col"><?= __('Name') ?></th>
                </tr>
                <?php foreach ($product->lengths as $lengths): ?>
                <tr>
                    <td><?= h($lengths->id) ?></td>
                    <td><?= h($lengths->name) ?></td>
                  
                </tr>
                <?php endforeach; ?>
            </table>
            <?php endif; ?>
        </div>
        <div class="related">
            <h4><?= __('Sizes') ?></h4>
            <?php if (!empty($product->sizes)): ?>
            <table cellpadding="0" cellspacing="0" class="table">
                <tr>
                    <th scope="col"><?= __('Id') ?></th>
                    <th scope="col"><?= __('Name') ?></th>
                </tr>
                <?php foreach ($product->sizes as $sizes): ?>
                <tr>
                    <td><?= h($sizes->id) ?></td>
                    <td><?= h($sizes->name) ?></td>
                 
                </tr>
                <?php endforeach; ?>
            </table>
            <?php endif; ?>
        </div>
    
    
    
                  
    
                </div>
            </div>
        </div>
    </div>
    
    
    
    
    
     
      
    