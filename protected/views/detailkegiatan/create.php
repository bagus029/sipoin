<?php
/* @var $this DetailkegiatanController */
/* @var $model Detailkegiatan */

$this->breadcrumbs=array(
	'Detailkegiatans'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Detailkegiatan', 'url'=>array('index')),
	array('label'=>'Manage Detailkegiatan', 'url'=>array('admin')),
);
?>
<div class="row">
    <div class="col-md-12">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Create <small>Detailkegiatan</small></h3>
            </div>
        <?php $this->renderPartial('_form', array('model'=>$model)); ?>        </div>
    </div>
</div>
