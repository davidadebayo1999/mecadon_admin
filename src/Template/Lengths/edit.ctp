
<div class="row">
     <div class="col-md-12">

     <?= $this->Form->create($length) ?>
    <fieldset>
        <legend><?= __('Edit Length') ?></legend>
        <?php
            echo $this->Form->input('name',['class'=>'form-control']);
        ?>
    </fieldset>
    <br>
    <?= $this->Form->button(__('Submit'),['class'=>'btn btn-primary']) ?>
    <br>
    <?= $this->Form->end() ?>
     
     </div>
</div>


  

