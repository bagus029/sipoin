<?php
/* @var $this PenggunaController */
/* @var $model Pengguna */

$this->breadcrumbs=array(
	'Penggunas'=>array('index'),
	$model->idpengguna=>array('view','id'=>$model->idpengguna),
	'Update',
);

$this->menu=array(
	array('label'=>'List Pengguna', 'url'=>array('index')),
	array('label'=>'Create Pengguna', 'url'=>array('create')),
	array('label'=>'View Pengguna', 'url'=>array('view', 'id'=>$model->idpengguna)),
	array('label'=>'Manage Pengguna', 'url'=>array('admin')),
);
?>
<div class="row">
    <div class="col-md-12">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Update <small>Pengguna <?php echo $model->idpengguna; ?></small></h3>
            </div>
        <?php $this->renderPartial('_form', array('model'=>$model)); ?>        </div>
    </div>
</div>