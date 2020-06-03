<?php
/* @var $this JeniskegiatanController */
/* @var $model Jeniskegiatan */

$this->breadcrumbs=array(
	'Jeniskegiatans'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Jeniskegiatan', 'url'=>array('index')),
	array('label'=>'Manage Jeniskegiatan', 'url'=>array('admin')),
);
?>
<div class="row">
    <div class="col-md-12">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Create <small>Jeniskegiatan</small></h3>
            </div>
        <?php $this->renderPartial('_form', array('model'=>$model)); ?>        </div>
    </div>
</div>
