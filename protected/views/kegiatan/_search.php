<?php
/* @var $this KegiatanController */
/* @var $model Kegiatan */
/* @var $form CActiveForm */
?>

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>
<div class="card-body">
	<div class="row">
		<?php echo $form->label($model,'idkegiatan'); ?>
		<?php echo $form->textField($model,'idkegiatan',array('class'=>'form-control'),array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idjeniskegiatan'); ?>
		<?php echo $form->textField($model,'idjeniskegiatan',array('class'=>'form-control')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'namakegiatan'); ?>
		<?php echo $form->textArea($model,'namakegiatan',array('class'=>'textarea'),array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'poinkegiatan'); ?>
		<?php echo $form->textField($model,'poinkegiatan',array('class'=>'form-control')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'statuskegiatan'); ?>
		<?php echo $form->textField($model,'statuskegiatan',array('class'=>'form-control')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'satuanpoin'); ?>
		<?php echo $form->textField($model,'satuanpoin',array('class'=>'form-control'),array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>
	</div><!-- search-form -->
<?php $this->endWidget(); ?>

