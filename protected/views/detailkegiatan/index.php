<?php
/* @var $this DetailkegiatanController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Detailkegiatans',
);

$this->menu=array(
	array('label'=>'Create Detailkegiatan', 'url'=>array('create')),
	array('label'=>'Manage Detailkegiatan', 'url'=>array('admin')),
);
?>

<h1>Detailkegiatans</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
