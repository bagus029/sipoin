<?php
/* @var $this UploaddatadukungController */
/* @var $model Uploaddatadukung */

$this->breadcrumbs=array(
	'Uploaddatadukungs'=>array('index'),
	$model->iddatadukung,
);

$this->menu=array(
	array('label'=>'List Uploaddatadukung', 'url'=>array('index')),
	array('label'=>'Create Uploaddatadukung', 'url'=>array('create')),
	array('label'=>'Update Uploaddatadukung', 'url'=>array('update', 'id'=>$model->iddatadukung)),
	array('label'=>'Delete Uploaddatadukung', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->iddatadukung),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Uploaddatadukung', 'url'=>array('admin')),
);
?>
<div class="row">
    <div class="col-md-12">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">View <small>Uploaddatadukung #<?php echo $model->iddatadukung; ?></small></h3>
            </div>
			<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'iddatadukung',
		'iddetailkeg',
		'namadatadukung',
		'filedatadukung',
		'tanggalupload',
		'tanggalupdate',
		'statusdatadukung',
	),
)); ?>     
		</div>
	</div>
</div>