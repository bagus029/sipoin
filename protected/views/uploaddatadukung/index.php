<?php
/* @var $this UploaddatadukungController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Uploaddatadukungs',
);

$this->menu=array(
	array('label'=>'Create Uploaddatadukung', 'url'=>array('create')),
	array('label'=>'Manage Uploaddatadukung', 'url'=>array('admin')),
);
?>

<h1>Uploaddatadukungs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
