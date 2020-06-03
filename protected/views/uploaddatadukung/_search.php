<?php
/* @var $this UploaddatadukungController */
/* @var $model Uploaddatadukung */
/* @var $form CActiveForm */
?>

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>
<div class="card-body">
	<div class="row">
		<?php echo $form->label($model,'iddatadukung'); ?>
		<?php echo $form->textField($model,'iddatadukung',array('class'=>'form-control')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'iddetailkeg'); ?>
		<?php echo $form->textField($model,'iddetailkeg',array('class'=>'form-control')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'namadatadukung'); ?>
		<?php echo $form->textField($model,'namadatadukung',array('class'=>'form-control'),array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'filedatadukung'); ?>
		<?php echo $form->textField($model,'filedatadukung',array('class'=>'form-control'),array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tanggalupload'); ?>
		<?php echo $form->textField($model,'tanggalupload',array('class'=>'form-control')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tanggalupdate'); ?>
		<?php echo $form->textField($model,'tanggalupdate',array('class'=>'form-control')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'statusdatadukung'); ?>
		<?php echo $form->textField($model,'statusdatadukung',array('class'=>'form-control')); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>
	</div><!-- search-form -->
<?php $this->endWidget(); ?>

