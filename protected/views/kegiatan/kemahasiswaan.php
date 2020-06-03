<?php
/* @var $this KegiatanController */
/* @var $model Kegiatan */

$this->breadcrumbs=array(
	'Kegiatans'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Kegiatan', 'url'=>array('index')),
	array('label'=>'Create Kegiatan', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#kegiatan-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>
<div class="row">
	<div class="col-md-12">
		<div class="card card-primary">
			<div class="card-header">
				<h3 class="card-title">Kelola <small>Kegiatans</small></h3>
			</div>
			<div class="card-body">
			<?php $this->widget('zii.widgets.grid.CGridView', array(
				'id'=>'kegiatan-grid',
				'dataProvider'=>$model->search(),
				'filter'=>$model,
				'itemsCssClass'=>'table table-striped table-bordered table-hover',
				'columns'=>array(
					'idkegiatan',
					'idjeniskegiatan0.jeniskegiatan',
					'namakegiatan',
					'poinkegiatan',
					//'statuskegiatan',
					'satuanpoin',
					array(
						'header' => 'Create Poin',
						'type' => 'raw',
						'value' => 'Chtml::link("Create", array("detailkegiatan/create&id=$data->idkegiatan"),array("class"=>"btn btn-warning", "target"=>"_blank"))',
					),
				),
			)); ?>
		</div>
		</div>
	</div>
</div>
