<?php
/* @var $this MahasiswaController */
/* @var $model Mahasiswa */

$this->breadcrumbs=array(
	'Mahasiswas'=>array('index'),
	$model->NIM,
);

$this->menu=array(
	array('label'=>'List Mahasiswa', 'url'=>array('index')),
	array('label'=>'Create Mahasiswa', 'url'=>array('create')),
	array('label'=>'Update Mahasiswa', 'url'=>array('update', 'id'=>$model->NIM)),
	array('label'=>'Delete Mahasiswa', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->NIM),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Mahasiswa', 'url'=>array('admin')),
);
?>
<div class="row">
    <div class="col-md-12">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">View <small>Mahasiswa #<?php echo $model->NIM; ?></small></h3>
            </div>
			<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'NIM',
		'NAMA',
		'TEMPATLAHIR',
		'TGLLAHIR',
		'NOHP',
		'EMAIL',
		'ALAMATASAL',
		'NAMAAYAH',
		'NAMAIBU',
		'PENGHASILANAYAH',
		'PENGHASILANIBU',
		'JMLTANGGUNGAN',
		'NAMAKABUPATEN',
		'NAMAPROPINSI',
		'TAHUNANGKATAN',
		'IDAGAMA',
		'IDPRODI',
		'IDGOLDAR',
		'IDJENDER',
	),
)); ?>     
		</div>
	</div>
</div>