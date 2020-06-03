<?php
/* @var $this KegiatanController */
/* @var $model Kegiatan */

$this->breadcrumbs=array(
	'Kegiatans'=>array('index'),
	$model->idkegiatan=>array('view','id'=>$model->idkegiatan),
	'Update',
);

$this->menu=array(
	array('label'=>'List Kegiatan', 'url'=>array('index')),
	array('label'=>'Create Kegiatan', 'url'=>array('create')),
	array('label'=>'View Kegiatan', 'url'=>array('view', 'id'=>$model->idkegiatan)),
	array('label'=>'Manage Kegiatan', 'url'=>array('admin')),
);
?>
<div class="row">
    <div class="col-md-12">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Update <small>Kegiatan <?php echo $model->idkegiatan; ?></small></h3>
            </div>
        <?php $this->renderPartial('_form', array('model'=>$model)); ?>        </div>
    </div>
</div>