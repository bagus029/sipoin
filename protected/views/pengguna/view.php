<?php
/* @var $this PenggunaController */
/* @var $model Pengguna */

$this->breadcrumbs=array(
	'Penggunas'=>array('index'),
	$model->idpengguna,
);

$this->menu=array(
	array('label'=>'List Pengguna', 'url'=>array('index')),
	array('label'=>'Create Pengguna', 'url'=>array('create')),
	array('label'=>'Update Pengguna', 'url'=>array('update', 'id'=>$model->idpengguna)),
	array('label'=>'Delete Pengguna', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idpengguna),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Pengguna', 'url'=>array('admin')),
);
?>
<div class="row">
    <div class="col-md-12">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">View <small>Pengguna #<?php echo $model->idpengguna; ?></small></h3>
            </div>
			<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idpengguna',
		'username',
		'password',
		'namapengguna',
		'jabatan',
		'level',
		'status',
	),
)); ?>     
		</div>
	</div>
</div>