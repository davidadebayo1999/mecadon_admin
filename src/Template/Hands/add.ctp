


<div class="row">
    <div class="col-md-12">


    <?= $this->Form->create($hand) ?>
    <fieldset>
        <legend><?= __('Add Hand') ?></legend>
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