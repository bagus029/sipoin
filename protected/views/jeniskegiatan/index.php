<?php
/* @var $this JeniskegiatanController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Jeniskegiatans',
);

$this->menu=array(
	array('label'=>'Create Jeniskegiatan', 'url'=>array('create')),
	array('label'=>'Manage Jeniskegiatan', 'url'=>array('admin')),
);
?>

<h1>Jeniskegiatans</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
