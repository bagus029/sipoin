<?php
/* @var $this ProdiController */
/* @var $model Prodi */
/* @var $form CActiveForm */
?>

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>
<div class="card-body">
	<div class="row">
		<?php echo $form->label($model,'IDPRODI'); ?>
		<?php echo $form->textField($model,'IDPRODI',array('class'=>'form-control'),array('size'=>4,'maxlength'=>4)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'KODEPRODI'); ?>
		<?php echo $form->textField($model,'KODEPRODI',array('class'=>'form-control')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'KODEPRODIUNSOED'); ?>
		<?php echo $form->textField($model,'KODEPRODIUNSOED',array('class'=>'form-control')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'IDJENJANG'); ?>
		<?php echo $form->textField($model,'IDJENJANG',array('class'=>'form-control')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'IDFAKULTAS'); ?>
		<?php echo $form->textField($model,'IDFAKULTAS',array('class'=>'form-control')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NAMAPRODI'); ?>
		<?php echo $form->textField($model,'NAMAPRODI',array('class'=>'form-control'),array('size'=>60,'maxlength'=>80)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ISAKTIF'); ?>
		<?php echo $form->textField($model,'ISAKTIF',array('class'=>'form-control'),array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'KODEPRODILAMA'); ?>
		<?php echo $form->textField($model,'KODEPRODILAMA',array('class'=>'form-control'),array('size'=>4,'maxlength'=>4)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>
	</div><!-- search-form -->
<?php $this->endWidget(); ?>

