<?php
/* @var $this DetailkegiatanController */
/* @var $model Detailkegiatan */

$this->breadcrumbs=array(
	'Detailkegiatans'=>array('index'),
	$model->iddetailkeg=>array('view','id'=>$model->iddetailkeg),
	'Update',
);

$this->menu=array(
	array('label'=>'List Detailkegiatan', 'url'=>array('index')),
	array('label'=>'Create Detailkegiatan', 'url'=>array('create')),
	array('label'=>'View Detailkegiatan', 'url'=>array('view', 'id'=>$model->iddetailkeg)),
	array('label'=>'Manage Detailkegiatan', 'url'=>array('admin')),
);
?>
<div class="row">
    <div class="col-md-12">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Update <small>Detailkegiatan <?php echo $model->iddetailkeg; ?></small></h3>
            </div>
        <?php $this->renderPartial('_form', array('model'=>$model)); ?>        </div>
    </div>
</div>