<?php
/* @var $this ValidasiController */
/* @var $model Validasi */

$this->breadcrumbs=array(
	'Validasis'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Validasi', 'url'=>array('index')),
	array('label'=>'Manage Validasi', 'url'=>array('admin')),
);
?>
<div class="row">
    <div class="col-md-12">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Create <small>Validasi</small></h3>
            </div>
        <?php $this->renderPartial('_form', array('model'=>$model)); ?>        </div>
    </div>
</div>
