<?php
/* @var $this ProdiController */
/* @var $model Prodi */

$this->breadcrumbs=array(
	'Prodis'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Prodi', 'url'=>array('index')),
	array('label'=>'Create Prodi', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#prodi-grid').yiiGridView('update', {
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
                <h3 class="card-title">Kelola <small>Prodis</small></h3>
            </div>

                                <?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'prodi-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'itemsCssClass'=>'table table-striped table-bordered table-hover',
	'columns'=>array(
		'IDPRODI',
		'KODEPRODI',
		'KODEPRODIUNSOED',
		'IDJENJANG',
		'IDFAKULTAS',
		'NAMAPRODI',
		/*
		'ISAKTIF',
		'KODEPRODILAMA',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
                            </div>
                        </div>
                    </div>