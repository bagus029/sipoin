<?php
/* @var $this UploaddatadukungController */
/* @var $model Uploaddatadukung */

$this->breadcrumbs=array(
	'Uploaddatadukungs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Uploaddatadukung', 'url'=>array('index')),
	array('label'=>'Manage Uploaddatadukung', 'url'=>array('admin')),
);
?>
<div class="row">
    <div class="col-md-12">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Create <small>Uploaddatadukung</small></h3>
            </div>
        <?php $this->renderPartial('_form', array('model'=>$model)); ?>        </div>
    </div>
</div>
