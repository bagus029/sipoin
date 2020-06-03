<?php
/* @var $this JeniskegiatanController */
/* @var $model Jeniskegiatan */

$this->breadcrumbs=array(
	'Jeniskegiatans'=>array('index'),
	$model->idjeniskegiatan,
);

$this->menu=array(
	array('label'=>'List Jeniskegiatan', 'url'=>array('index')),
	array('label'=>'Create Jeniskegiatan', 'url'=>array('create')),
	array('label'=>'Update Jeniskegiatan', 'url'=>array('update', 'id'=>$model->idjeniskegiatan)),
	array('label'=>'Delete Jeniskegiatan', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idjeniskegiatan),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Jeniskegiatan', 'url'=>array('admin')),
);
?>
<div class="row">
    <div class="col-md-12">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">View <small>Jeniskegiatan #<?php echo $model->idjeniskegiatan; ?></small></h3>
            </div>
			<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idjeniskegiatan',
		'jeniskegiatan',
		'statusjeniskegiatan',
		'jumlahpoin',
		'satuanpoin',
	),
)); ?>     
		</div>
	</div>
</div>