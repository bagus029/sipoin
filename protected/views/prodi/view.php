<?php
/* @var $this ProdiController */
/* @var $model Prodi */

$this->breadcrumbs=array(
	'Prodis'=>array('index'),
	$model->IDPRODI,
);

$this->menu=array(
	array('label'=>'List Prodi', 'url'=>array('index')),
	array('label'=>'Create Prodi', 'url'=>array('create')),
	array('label'=>'Update Prodi', 'url'=>array('update', 'id'=>$model->IDPRODI)),
	array('label'=>'Delete Prodi', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->IDPRODI),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Prodi', 'url'=>array('admin')),
);
?>
<div class="row">
    <div class="col-md-12">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">View <small>Prodi #<?php echo $model->IDPRODI; ?></small></h3>
            </div>
			<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'IDPRODI',
		'KODEPRODI',
		'KODEPRODIUNSOED',
		'IDJENJANG',
		'IDFAKULTAS',
		'NAMAPRODI',
		'ISAKTIF',
		'KODEPRODILAMA',
	),
)); ?>     
		</div>
	</div>
</div>