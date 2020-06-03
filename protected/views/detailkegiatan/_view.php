<?php
/* @var $this DetailkegiatanController */
/* @var $data Detailkegiatan */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('iddetailkeg')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->iddetailkeg), array('view', 'id'=>$data->iddetailkeg)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idkegiatan')); ?>:</b>
	<?php echo CHtml::encode($data->idkegiatan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nim')); ?>:</b>
	<?php echo CHtml::encode($data->nim); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('detailkegiatan')); ?>:</b>
	<?php echo CHtml::encode($data->detailkegiatan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('statusdetailkeg')); ?>:</b>
	<?php echo CHtml::encode($data->statusdetailkeg); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tglkegiatan')); ?>:</b>
	<?php echo CHtml::encode($data->tglkegiatan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tempatkegiatan')); ?>:</b>
	<?php echo CHtml::encode($data->tempatkegiatan); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('penyelenggara')); ?>:</b>
	<?php echo CHtml::encode($data->penyelenggara); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('validasi')); ?>:</b>
	<?php echo CHtml::encode($data->validasi); ?>
	<br />

	*/ ?>

</div>