
<div class="row">
    <div class="col-md-12">

    <h2>Images</h2>
    <a href="Images/add/" class="btn btn-primary"> <i class="fa fa-plus fa-lg"></i> Upload Picture</a>
    <br><br>



              <div class="row" data-plugin="lightgallery" data-selector=".thumbnail" data-thumbnail=true>

              <?php foreach ($images as $image): ?>
          
<a href="/images/view/<?= $image->id ?>">
              <div class="col-sm-6 col-md-3">
                  <div class="thumbnail" data-src="../assets/img/p1.svg" data-sub-html="<h4>Leanne Graham</h4><p>Multi-layered client-server neural-net</p>">
                  <?= $this->Html->image('../files/Images/name/thumbnail-'.$image->name,['class'=>'img img-responsive']) ?>
                    <div class="caption">
                      <h3><?= h($image->size) ?>kb</h3>
                      <p><?= h($image->type) ?></p>
                    </div>
                  </div>
                </div>

</a>
             
            <?php endforeach; ?>



             

              </div>
            




            </div>
</div>
















