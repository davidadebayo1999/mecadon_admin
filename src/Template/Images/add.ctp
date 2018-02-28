

<div class="row">
    <div class="col-md-12">

 
    
    <?= $this->Form->create($image, ['type' => 'file']) ?>
    <fieldset>
        <legend><?= __('Add Image') ?></legend>
        <?php
            echo $this->Form->input('name', ['type' => 'file']);
            echo $this->Form->input('products._ids',['class'=>'form-control'], ['options' => $products]);
        ?>
    </fieldset>
    <br>
    <?= $this->Form->button(__('Submit'),['class'=>'btn btn-success']) ?>
    <br>
    <?= $this->Form->end() ?>

</div>
</div>
