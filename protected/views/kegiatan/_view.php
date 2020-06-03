<?php
/* @var $this KegiatanController */
/* @var $data Kegiatan */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idkegiatan')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idkegiatan), array('view', 'id'=>$data->idkegiatan)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idjeniskegiatan')); ?>:</b>
	<?php echo CHtml::encode($data->idjeniskegiatan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('namakegiatan')); ?>:</b>
	<?php echo CHtml::encode($data->namakegiatan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('poinkegiatan')); ?>:</b>
	<?php echo CHtml::encode($data->poinkegiatan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('statuskegiatan')); ?>:</b>
	<?php echo CHtml::encode($data->statuskegiatan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('satuanpoin')); ?>:</b>
	<?php echo CHtml::encode($data->satuanpoin); ?>
	<br />


</div>