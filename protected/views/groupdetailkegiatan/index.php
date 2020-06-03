<?php
/* @var $this GroupdetailkegiatanController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Groupdetailkegiatans',
);

$this->menu=array(
	array('label'=>'Create Groupdetailkegiatan', 'url'=>array('create')),
	array('label'=>'Manage Groupdetailkegiatan', 'url'=>array('admin')),
);
?>

<h1>Groupdetailkegiatans</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
