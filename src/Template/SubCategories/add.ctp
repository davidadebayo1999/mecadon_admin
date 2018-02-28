

<div class="row">
    <div class="col-lg-12">

    <?= $this->Form->create($subCategory, ['type' => 'file']) ?>
    <fieldset>
        <legend><?= __('Add Sub Category') ?></legend>
        <?php
         echo $this->Form->input('main_category_id',['class'=>'form-control'], ['options' => $mainCategories]);
         echo '<br>';
            echo $this->Form->input('categoryname',['class'=>'form-control']);
            echo '<br>';
            echo $this->Form->input('category_logo', ['type' => 'file']);
            echo '<br>';
           
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit'),['class'=>'btn btn-success']) ?>
    <?= $this->Form->end() ?>
    </div>
</div>
