<?php
/* @var $this GroupdetailkegiatanController */
/* @var $model Groupdetailkegiatan */
/* @var $form CActiveForm */
?>

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>
<div class="card-body">
	<div class="row">
		<?php echo $form->label($model,'idgroupdetailkegiatan'); ?>
		<?php echo $form->textField($model,'idgroupdetailkegiatan',array('class'=>'form-control')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'iddetailkegiatan'); ?>
		<?php echo $form->textField($model,'iddetailkegiatan',array('class'=>'form-control')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nim'); ?>
		<?php echo $form->textField($model,'nim',array('class'=>'form-control'),array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'status'); ?>
		<?php echo $form->textField($model,'status',array('class'=>'form-control')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'validasi'); ?>
		<?php echo $form->textField($model,'validasi',array('class'=>'form-control')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'poin'); ?>
		<?php echo $form->textField($model,'poin',array('class'=>'form-control')); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>
	</div><!-- search-form -->
<?php $this->endWidget(); ?>

