<?php
/* @var $this JurusanController */
/* @var $model Jurusan */

$this->breadcrumbs=array(
	'Jurusans'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Jurusan', 'url'=>array('index')),
	array('label'=>'Manage Jurusan', 'url'=>array('admin')),
);
?>
<div class="row">
    <div class="col-md-12">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Create <small>Jurusan</small></h3>
            </div>
        <?php $this->renderPartial('_form', array('model'=>$model)); ?>        </div>
    </div>
</div>
