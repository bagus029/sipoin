<?php
/* @var $this GroupdetailkegiatanController */
/* @var $model Groupdetailkegiatan */

$this->breadcrumbs=array(
	'Groupdetailkegiatans'=>array('index'),
	$model->idgroupdetailkegiatan,
);

$this->menu=array(
	array('label'=>'List Groupdetailkegiatan', 'url'=>array('index')),
	array('label'=>'Create Groupdetailkegiatan', 'url'=>array('create')),
	array('label'=>'Update Groupdetailkegiatan', 'url'=>array('update', 'id'=>$model->idgroupdetailkegiatan)),
	array('label'=>'Delete Groupdetailkegiatan', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idgroupdetailkegiatan),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Groupdetailkegiatan', 'url'=>array('admin')),
);
?>
<div class="row">
    <div class="col-md-12">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">View <small>Groupdetailkegiatan #<?php echo $model->idgroupdetailkegiatan; ?></small></h3>
            </div>
			<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idgroupdetailkegiatan',
		'iddetailkegiatan',
		'nim',
		'status',
		'validasi',
		'poin',
	),
)); ?>     
		</div>
	</div>
</div>