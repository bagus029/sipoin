<?php
/* @var $this JeniskegiatanController */
/* @var $model Jeniskegiatan */

$this->breadcrumbs=array(
	'Jeniskegiatans'=>array('index'),
	$model->idjeniskegiatan=>array('view','id'=>$model->idjeniskegiatan),
	'Update',
);

$this->menu=array(
	array('label'=>'List Jeniskegiatan', 'url'=>array('index')),
	array('label'=>'Create Jeniskegiatan', 'url'=>array('create')),
	array('label'=>'View Jeniskegiatan', 'url'=>array('view', 'id'=>$model->idjeniskegiatan)),
	array('label'=>'Manage Jeniskegiatan', 'url'=>array('admin')),
);
?>
<div class="row">
    <div class="col-md-12">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Update <small>Jeniskegiatan <?php echo $model->idjeniskegiatan; ?></small></h3>
            </div>
        <?php $this->renderPartial('_form', array('model'=>$model)); ?>        </div>
    </div>
</div>