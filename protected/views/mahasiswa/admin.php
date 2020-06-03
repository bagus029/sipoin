<?php
/* @var $this MahasiswaController */
/* @var $model Mahasiswa */

$this->breadcrumbs=array(
	'Mahasiswas'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Mahasiswa', 'url'=>array('index')),
	array('label'=>'Create Mahasiswa', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#mahasiswa-grid').yiiGridView('update', {
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
                <h3 class="card-title">Kelola <small>Mahasiswas</small></h3>
            </div>

                                <?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'mahasiswa-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'itemsCssClass'=>'table table-striped table-bordered table-hover',
	'columns'=>array(
		'NIM',
		'NAMA',
		'TEMPATLAHIR',
		'TGLLAHIR',
		'NOHP',
		'EMAIL',
		/*
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
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
                            </div>
                        </div>
                    </div>