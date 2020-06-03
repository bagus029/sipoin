<?php
/* @var $this JeniskegiatanController */
/* @var $data Jeniskegiatan */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idjeniskegiatan')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idjeniskegiatan), array('view', 'id'=>$data->idjeniskegiatan)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jeniskegiatan')); ?>:</b>
	<?php echo CHtml::encode($data->jeniskegiatan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('statusjeniskegiatan')); ?>:</b>
	<?php echo CHtml::encode($data->statusjeniskegiatan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jumlahpoin')); ?>:</b>
	<?php echo CHtml::encode($data->jumlahpoin); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('satuanpoin')); ?>:</b>
	<?php echo CHtml::encode($data->satuanpoin); ?>
	<br />


</div>