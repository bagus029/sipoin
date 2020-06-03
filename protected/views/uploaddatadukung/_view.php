<?php
/* @var $this UploaddatadukungController */
/* @var $data Uploaddatadukung */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('iddatadukung')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->iddatadukung), array('view', 'id'=>$data->iddatadukung)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('iddetailkeg')); ?>:</b>
	<?php echo CHtml::encode($data->iddetailkeg); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('namadatadukung')); ?>:</b>
	<?php echo CHtml::encode($data->namadatadukung); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('filedatadukung')); ?>:</b>
	<?php echo CHtml::encode($data->filedatadukung); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tanggalupload')); ?>:</b>
	<?php echo CHtml::encode($data->tanggalupload); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tanggalupdate')); ?>:</b>
	<?php echo CHtml::encode($data->tanggalupdate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('statusdatadukung')); ?>:</b>
	<?php echo CHtml::encode($data->statusdatadukung); ?>
	<br />


</div>