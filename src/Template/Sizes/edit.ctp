


<div class="row">
    <div class="col-md-12">
        <div class="box shadow-2dp">
            <header>
                <h2><?= h($size->name) ?></h2>
              
            </header>
            <div class="box-body collapse in">


    <?= $this->Form->create($size) ?>
    <fieldset>
        <legend><?= __('Edit Size') ?></legend>
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
    </div>
</div>