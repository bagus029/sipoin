<?php
/* @var $this JeniskegiatanController */
/* @var $model Jeniskegiatan */
/* @var $form CActiveForm */
?>

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>
<div class="card-body">
	<div class="row">
		<?php echo $form->label($model,'idjeniskegiatan'); ?>
		<?php echo $form->textField($model,'idjeniskegiatan',array('class'=>'form-control')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jeniskegiatan'); ?>
		<?php echo $form->textField($model,'jeniskegiatan',array('class'=>'form-control'),array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'statusjeniskegiatan'); ?>
		<?php echo $form->textField($model,'statusjeniskegiatan',array('class'=>'form-control')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jumlahpoin'); ?>
		<?php echo $form->textField($model,'jumlahpoin',array('class'=>'form-control')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'satuanpoin'); ?>
		<?php echo $form->textField($model,'satuanpoin',array('class'=>'form-control'),array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>
	</div><!-- search-form -->
<?php $this->endWidget(); ?>

