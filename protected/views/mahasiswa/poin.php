<?php
/* @var $this MahasiswaController */
/* @var $model Mahasiswa */

$this->breadcrumbs=array(
  'Mahasiswas'=>array('index'),
  'Manage',
);

?>
<div class="row">
  <div class="col-md-12">
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Poin <small>Per Mahasiswa</small></h3>
      </div>

      <?php $this->widget('zii.widgets.grid.CGridView', array(
        'id'=>'mahasiswa-grid',
        'dataProvider'=>$model->search(),
        'filter'=>$model,
        'itemsCssClass'=>'table table-striped table-bordered table-hover',
        'columns'=>array(
          'NIM',
          'NAMA',
          'IDPRODI',
          'TAHUNANGKATAN',

          array(
            'class'=>'CButtonColumn',
          ),
        ),
      )); ?>
    </div>
  </div>
</div>
