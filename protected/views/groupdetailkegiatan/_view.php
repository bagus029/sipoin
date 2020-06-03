<?php
/* @var $this GroupdetailkegiatanController */
/* @var $data Groupdetailkegiatan */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idgroupdetailkegiatan')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idgroupdetailkegiatan), array('view', 'id'=>$data->idgroupdetailkegiatan)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('iddetailkegiatan')); ?>:</b>
	<?php echo CHtml::encode($data->iddetailkegiatan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nim')); ?>:</b>
	<?php echo CHtml::encode($data->nim); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('validasi')); ?>:</b>
	<?php echo CHtml::encode($data->validasi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('poin')); ?>:</b>
	<?php echo CHtml::encode($data->poin); ?>
	<br />


</div>