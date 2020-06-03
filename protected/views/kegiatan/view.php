<?php
/* @var $this KegiatanController */
/* @var $model Kegiatan */

$this->breadcrumbs=array(
	'Kegiatans'=>array('index'),
	$model->idkegiatan,
);

$this->menu=array(
	array('label'=>'List Kegiatan', 'url'=>array('index')),
	array('label'=>'Create Kegiatan', 'url'=>array('create')),
	array('label'=>'Update Kegiatan', 'url'=>array('update', 'id'=>$model->idkegiatan)),
	array('label'=>'Delete Kegiatan', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idkegiatan),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Kegiatan', 'url'=>array('admin')),
);
?>
<div class="row">
    <div class="col-md-12">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">View <small>Kegiatan #<?php echo $model->idkegiatan; ?></small></h3>
            </div>
			<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idkegiatan',
		'idjeniskegiatan',
		'namakegiatan',
		'poinkegiatan',
		'statuskegiatan',
		'satuanpoin',
	),
)); ?>     
		</div>
	</div>
</div>