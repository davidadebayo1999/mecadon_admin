

<div class="row">
    <div class="col-md-12">



<?=  $this->Html->image('../files/Images/name/'.$image->name,['class'=>'img img-responsive'])?>

<br>       
<div class="related">
        <h4><?= __('Related Products') ?></h4>
        <?php if (!empty($image->products)): ?>
        <table cellpadding="0" cellspacing="0" class="table">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Price') ?></th>
                <th scope="col"><?= __('Quantity') ?></th>
                <th scope="col"><?= __('Rating') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($image->products as $products): ?>
            <tr>
                <td><?= h($products->id) ?></td>
                <td><?= h($products->name) ?></td>
                <td><?= h($products->price) ?></td>
                <td><?= h($products->quantity) ?></td>
                <td><?= h($products->rating) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Products', 'action' => 'view', $products->id],['class'=>'btn btn-success']) ?>
                     </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>


</div>
</div>