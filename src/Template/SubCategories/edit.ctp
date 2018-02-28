



<div class="row">
        <div class="col-md-12">
         
     
                <?= $this->Form->create($subCategory,['type' => 'file']) ?>
         <fieldset>
                <legend><?= __('Edit Sub Category') ?></legend>
             <?=  $this->Html->image('../files/SubCategories/category_logo/'.$subCategory->category_logo,['class'=>'img img-responsive'])?>
             <?php
                    echo '<br><br>';
             
                    echo $this->Form->input('main_category_id',['class'=>'form-control'], ['options' => $mainCategories]);
                 echo '<br>';
                 echo $this->Form->input('categoryname',['class'=>'form-control']);
                 echo '<br>';
                 echo $this->Form->input('category_logo',['type' => 'file'],['class'=>'form-control']);
                 echo '<br>';
             ?>
         </fieldset>
         <?= $this->Form->button(__('Submit'),['class'=>'btn btn-success btn-lg']) ?>
         <?= $this->Form->end() ?>
     
     
        </div>
     </div>


     