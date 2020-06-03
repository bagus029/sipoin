<?php
/* @var $this PenggunaController */
/* @var $data Pengguna */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idpengguna')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idpengguna), array('view', 'id'=>$data->idpengguna)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('username')); ?>:</b>
	<?php echo CHtml::encode($data->username); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('password')); ?>:</b>
	<?php echo CHtml::encode($data->password); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('namapengguna')); ?>:</b>
	<?php echo CHtml::encode($data->namapengguna); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jabatan')); ?>:</b>
	<?php echo CHtml::encode($data->jabatan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('level')); ?>:</b>
	<?php echo CHtml::encode($data->level); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />


</div>