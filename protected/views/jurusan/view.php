<?php
/* @var $this JurusanController */
/* @var $model Jurusan */

$this->breadcrumbs=array(
	'Jurusans'=>array('index'),
	$model->IDJURUSAN,
);

$this->menu=array(
	array('label'=>'List Jurusan', 'url'=>array('index')),
	array('label'=>'Create Jurusan', 'url'=>array('create')),
	array('label'=>'Update Jurusan', 'url'=>array('update', 'id'=>$model->IDJURUSAN)),
	array('label'=>'Delete Jurusan', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->IDJURUSAN),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Jurusan', 'url'=>array('admin')),
);
?>
<div class="row">
    <div class="col-md-12">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">View <small>Jurusan #<?php echo $model->IDJURUSAN; ?></small></h3>
            </div>
			<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'IDJURUSAN',
		'NAMAJURUSAN',
	),
)); ?>     
		</div>
	</div>
</div>