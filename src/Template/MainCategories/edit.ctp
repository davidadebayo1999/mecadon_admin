
<div class="row">
   <div class="col-md-12">
    

    <?= $this->Form->create($mainCategory, ['type' => 'file']) ?>
    <fieldset>
        <legend><?= __('Edit Main Category') ?></legend>
        <?=  $this->Html->image('../files/MainCategories/category_logo/'.$mainCategory->category_logo,['class'=>'img img-responsive'])?>
        <?php
               echo '<br><br>';
        
            echo $this->Form->input('categoryname',['class'=>'form-control']);
            echo '<br>';
            echo $this->Form->input('category_logo', ['type' => 'file'],['class'=>'form-control']);
            echo '<br>';
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit'),['class'=>'btn btn-success btn-lg']) ?>
    <?= $this->Form->end() ?>


   </div>
</div>
