<?php
/* @var $this JeniskegiatanController */
/* @var $model Jeniskegiatan */

$this->breadcrumbs=array(
	'Jeniskegiatans'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Jeniskegiatan', 'url'=>array('index')),
	array('label'=>'Create Jeniskegiatan', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#jeniskegiatan-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->



<div class="row">
    <div class="col-md-12">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Kelola <small>Jeniskegiatans</small></h3>
            </div>

                                <?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'jeniskegiatan-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'itemsCssClass'=>'table table-striped table-bordered table-hover',
	'columns'=>array(
		'idjeniskegiatan',
		'jeniskegiatan',
		'statusjeniskegiatan',
		'jumlahpoin',
		'satuanpoin',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
                            </div>
                        </div>
                    </div>