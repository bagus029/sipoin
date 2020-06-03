<?php
/* @var $this GroupdetailkegiatanController */
/* @var $model Groupdetailkegiatan */

$this->breadcrumbs=array(
	'Groupdetailkegiatans'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Groupdetailkegiatan', 'url'=>array('index')),
	array('label'=>'Manage Groupdetailkegiatan', 'url'=>array('admin')),
);
?>
<div class="row">
    <div class="col-md-12">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Create <small>Groupdetailkegiatan</small></h3>
            </div>
        <?php $this->renderPartial('_form', array('model'=>$model)); ?>        </div>
    </div>
</div>
