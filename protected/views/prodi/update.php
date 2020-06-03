<?php
/* @var $this ProdiController */
/* @var $model Prodi */

$this->breadcrumbs=array(
	'Prodis'=>array('index'),
	$model->IDPRODI=>array('view','id'=>$model->IDPRODI),
	'Update',
);

$this->menu=array(
	array('label'=>'List Prodi', 'url'=>array('index')),
	array('label'=>'Create Prodi', 'url'=>array('create')),
	array('label'=>'View Prodi', 'url'=>array('view', 'id'=>$model->IDPRODI)),
	array('label'=>'Manage Prodi', 'url'=>array('admin')),
);
?>
<div class="row">
    <div class="col-md-12">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Update <small>Prodi <?php echo $model->IDPRODI; ?></small></h3>
            </div>
        <?php $this->renderPartial('_form', array('model'=>$model)); ?>        </div>
    </div>
</div>