

<div class="row">
    <div class="col-md-12">

   

    <?= $this->Form->create($product) ?>
    <fieldset>
        <legend><?= __('Edit Product') ?></legend>
        <?php
            echo $this->Form->input('name',['class'=>'form-control']);
            echo $this->Form->input('price',['class'=>'form-control']);
            echo $this->Form->input('quantity',['class'=>'form-control']);
            echo $this->Form->input('sub_category_id',['class'=>'form-control'], ['options' => $subCategories]);
            echo $this->Form->input('rating',['class'=>'form-control']);
            echo $this->Form->input('brands._ids',['class'=>'form-control'], ['options' => $brands]);
            echo $this->Form->input('colors._ids',['class'=>'form-control'], ['options' => $colors]);
            echo $this->Form->input('hands._ids',['class'=>'form-control'], ['options' => $hands]);
            echo $this->Form->input('lengths._ids',['class'=>'form-control'], ['options' => $lengths]);
            echo $this->Form->input('sizes._ids',['class'=>'form-control'], ['options' => $sizes]);
            echo $this->Form->input('images._ids',['class'=>'form-control'], ['options' => $images]);
        ?>
    </fieldset>
    <br>
    <?= $this->Form->button(__('Update'),['class'=>'btn btn-primary']) ?>
    <br><br>
    <?= $this->Form->end() ?>


</div>
</div>