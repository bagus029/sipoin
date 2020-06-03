<?php
/* @var $this ValidasiController */
/* @var $model Validasi */

$this->breadcrumbs=array(
	'Validasis'=>array('index'),
	$model->idvalidasi=>array('view','id'=>$model->idvalidasi),
	'Update',
);

$this->menu=array(
	array('label'=>'List Validasi', 'url'=>array('index')),
	array('label'=>'Create Validasi', 'url'=>array('create')),
	array('label'=>'View Validasi', 'url'=>array('view', 'id'=>$model->idvalidasi)),
	array('label'=>'Manage Validasi', 'url'=>array('admin')),
);
?>
<div class="row">
    <div class="col-md-12">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Update <small>Validasi <?php echo $model->idvalidasi; ?></small></h3>
            </div>
        <?php $this->renderPartial('_form', array('model'=>$model)); ?>        </div>
    </div>
</div>