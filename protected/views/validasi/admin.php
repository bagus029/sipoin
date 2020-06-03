<?php
/* @var $this ValidasiController */
/* @var $model Validasi */

$this->breadcrumbs=array(
	'Validasis'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Validasi', 'url'=>array('index')),
	array('label'=>'Create Validasi', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#validasi-grid').yiiGridView('update', {
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
                <h3 class="card-title">Kelola <small>Validasis</small></h3>
            </div>

                                <?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'validasi-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'itemsCssClass'=>'table table-striped table-bordered table-hover',
	'columns'=>array(
		'idvalidasi',
		'iddetailkeg',
		'validasibem',
		'validasiwd',
		'tglvalidasibem',
		'tglvalidasiwd',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
                            </div>
                        </div>
                    </div>