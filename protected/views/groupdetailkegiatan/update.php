<?php
/* @var $this GroupdetailkegiatanController */
/* @var $model Groupdetailkegiatan */

$this->breadcrumbs=array(
	'Groupdetailkegiatans'=>array('index'),
	$model->idgroupdetailkegiatan=>array('view','id'=>$model->idgroupdetailkegiatan),
	'Update',
);

$this->menu=array(
	array('label'=>'List Groupdetailkegiatan', 'url'=>array('index')),
	array('label'=>'Create Groupdetailkegiatan', 'url'=>array('create')),
	array('label'=>'View Groupdetailkegiatan', 'url'=>array('view', 'id'=>$model->idgroupdetailkegiatan)),
	array('label'=>'Manage Groupdetailkegiatan', 'url'=>array('admin')),
);
?>
<div class="row">
    <div class="col-md-12">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Update <small>Groupdetailkegiatan <?php echo $model->idgroupdetailkegiatan; ?></small></h3>
            </div>
        <?php $this->renderPartial('_form', array('model'=>$model)); ?>        </div>
    </div>
</div>