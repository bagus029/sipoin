<?php
/* @var $this DetailkegiatanController */
/* @var $model Detailkegiatan */
/* @var $form CActiveForm */
?>

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>
<div class="card-body">
	<div class="row">
		<?php echo $form->label($model,'iddetailkeg'); ?>
		<?php echo $form->textField($model,'iddetailkeg',array('class'=>'form-control')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idkegiatan'); ?>
		<?php echo $form->textField($model,'idkegiatan',array('class'=>'form-control'),array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nim'); ?>
		<?php echo $form->textField($model,'nim',array('class'=>'form-control'),array('size'=>18,'maxlength'=>18)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'detailkegiatan'); ?>
		<?php echo $form->textArea($model,'detailkegiatan',array('class'=>'textarea'),array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'statusdetailkeg'); ?>
		<?php echo $form->textField($model,'statusdetailkeg',array('class'=>'form-control')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tglkegiatan'); ?>
		<?php echo $form->textField($model,'tglkegiatan',array('class'=>'form-control'),array('size'=>35,'maxlength'=>35)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tempatkegiatan'); ?>
		<?php echo $form->textArea($model,'tempatkegiatan',array('class'=>'textarea'),array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'penyelenggara'); ?>
		<?php echo $form->textField($model,'penyelenggara',array('class'=>'form-control'),array('size'=>60,'maxlength'=>85)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'validasi'); ?>
		<?php echo $form->textField($model,'validasi',array('class'=>'form-control')); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>
	</div><!-- search-form -->
<?php $this->endWidget(); ?>

