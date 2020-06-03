<?php
/* @var $this ValidasiController */
/* @var $model Validasi */

$this->breadcrumbs=array(
	'Validasis'=>array('index'),
	$model->idvalidasi,
);

$this->menu=array(
	array('label'=>'List Validasi', 'url'=>array('index')),
	array('label'=>'Create Validasi', 'url'=>array('create')),
	array('label'=>'Update Validasi', 'url'=>array('update', 'id'=>$model->idvalidasi)),
	array('label'=>'Delete Validasi', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idvalidasi),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Validasi', 'url'=>array('admin')),
);
?>
<div class="row">
    <div class="col-md-12">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">View <small>Validasi #<?php echo $model->idvalidasi; ?></small></h3>
            </div>
			<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idvalidasi',
		'iddetailkeg',
		'validasibem',
		'validasiwd',
		'tglvalidasibem',
		'tglvalidasiwd',
	),
)); ?>     
		</div>
	</div>
</div>