<?php
/* @var $this ValidasiController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Validasis',
);

$this->menu=array(
	array('label'=>'Create Validasi', 'url'=>array('create')),
	array('label'=>'Manage Validasi', 'url'=>array('admin')),
);
?>

<h1>Validasis</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
