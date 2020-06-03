<?php
/* @var $this ValidasiController */
/* @var $data Validasi */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idvalidasi')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idvalidasi), array('view', 'id'=>$data->idvalidasi)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('iddetailkeg')); ?>:</b>
	<?php echo CHtml::encode($data->iddetailkeg); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('validasibem')); ?>:</b>
	<?php echo CHtml::encode($data->validasibem); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('validasiwd')); ?>:</b>
	<?php echo CHtml::encode($data->validasiwd); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tglvalidasibem')); ?>:</b>
	<?php echo CHtml::encode($data->tglvalidasibem); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tglvalidasiwd')); ?>:</b>
	<?php echo CHtml::encode($data->tglvalidasiwd); ?>
	<br />


</div>