<?php
/* @var $this JurusanController */
/* @var $model Jurusan */
/* @var $form CActiveForm */
?>

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>
<div class="card-body">
	<div class="row">
		<?php echo $form->label($model,'IDJURUSAN'); ?>
		<?php echo $form->textField($model,'IDJURUSAN',array('class'=>'form-control')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NAMAJURUSAN'); ?>
		<?php echo $form->textField($model,'NAMAJURUSAN',array('class'=>'form-control'),array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>
	</div><!-- search-form -->
<?php $this->endWidget(); ?>

