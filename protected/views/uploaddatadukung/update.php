<?php
/* @var $this UploaddatadukungController */
/* @var $model Uploaddatadukung */

$this->breadcrumbs=array(
	'Uploaddatadukungs'=>array('index'),
	$model->iddatadukung=>array('view','id'=>$model->iddatadukung),
	'Update',
);

$this->menu=array(
	array('label'=>'List Uploaddatadukung', 'url'=>array('index')),
	array('label'=>'Create Uploaddatadukung', 'url'=>array('create')),
	array('label'=>'View Uploaddatadukung', 'url'=>array('view', 'id'=>$model->iddatadukung)),
	array('label'=>'Manage Uploaddatadukung', 'url'=>array('admin')),
);
?>
<div class="row">
    <div class="col-md-12">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Update <small>Uploaddatadukung <?php echo $model->iddatadukung; ?></small></h3>
            </div>
        <?php $this->renderPartial('_form', array('model'=>$model)); ?>        </div>
    </div>
</div>