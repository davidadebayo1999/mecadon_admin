
<div class="row">
    <div class="col-md-12">
        <div class="box shadow-2dp">
            <header>
            <h2><?= h($order->id) ?></h2>       
             </header>
            <div class="box-body collapse in">




    <table class="table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $order->has('user') ? $this->Html->link($order->user->id, ['controller' => 'Users', 'action' => 'view', $order->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= h($order->status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($order->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Transaction Date') ?></th>
            <td><?= h($order->transaction_date) ?></td>
        </tr>
    </table>
    <br>
    <div class="related">
        <h2><?= __('Order Items') ?></h2>
        <?php if (!empty($order->order_items)): ?>
        <table cellpadding="0" cellspacing="0"  class="table">
            <tr>
                <th scope="col"></th>
                <th scope="col"><?= __('Product Id') ?></th>
                <th scope="col"><?= __('Order Id') ?></th>
                <th scope="col"><?= __('Quantity') ?></th>
            
            </tr>
            <?php foreach ($order->order_items as $orderItems):
            
            $orderItem200 =  Cake\ORM\TableRegistry::get('OrderItems');
            

$orderItem = $orderItem200->get($orderItems->id, [
    'contain' => ['Products', 'Orders']
]);
                
                ?>
            <tr>
            <?php
                  $products =  Cake\ORM\TableRegistry::get('Products');
                  $product = $products->get($orderItem->product->id, [
                    'contain' => ['Images']
                ]);

                ?>

                <td>
                
                <?= $this->Html->image('../files/Images/name/thumbnail-'.$product->images[0]->name,['style'=>'width:50px']) ?>
                </td>
            

                <td><?= h($orderItem->product->name) ?></td>
                <td><?= h($orderItems->order_id) ?></td>
                <td><?= h($orderItems->quantity) ?></td>
            
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>


    </div>
        </div>
    </div>
</div>

