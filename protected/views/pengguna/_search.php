<?php
/* @var $this PenggunaController */
/* @var $model Pengguna */
/* @var $form CActiveForm */
?>

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>
<div class="card-body">
	<div class="row">
		<?php echo $form->label($model,'idpengguna'); ?>
		<?php echo $form->textField($model,'idpengguna',array('class'=>'form-control')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'username'); ?>
		<?php echo $form->textField($model,'username',array('class'=>'form-control'),array('size'=>35,'maxlength'=>35)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'namapengguna'); ?>
		<?php echo $form->textField($model,'namapengguna',array('class'=>'form-control'),array('size'=>60,'maxlength'=>85)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jabatan'); ?>
		<?php echo $form->textField($model,'jabatan',array('class'=>'form-control'),array('size'=>60,'maxlength'=>85)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'level'); ?>
		<?php echo $form->textField($model,'level',array('class'=>'form-control')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'status'); ?>
		<?php echo $form->textField($model,'status',array('class'=>'form-control')); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>
	</div><!-- search-form -->
<?php $this->endWidget(); ?>

