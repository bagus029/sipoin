<?php
/* @var $this ValidasiController */
/* @var $model Validasi */
/* @var $form CActiveForm */
?>

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>
<div class="card-body">
	<div class="row">
		<?php echo $form->label($model,'idvalidasi'); ?>
		<?php echo $form->textField($model,'idvalidasi',array('class'=>'form-control')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'iddetailkeg'); ?>
		<?php echo $form->textField($model,'iddetailkeg',array('class'=>'form-control')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'validasibem'); ?>
		<?php echo $form->textField($model,'validasibem',array('class'=>'form-control')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'validasiwd'); ?>
		<?php echo $form->textField($model,'validasiwd',array('class'=>'form-control')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tglvalidasibem'); ?>
		<?php echo $form->textField($model,'tglvalidasibem',array('class'=>'form-control')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tglvalidasiwd'); ?>
		<?php echo $form->textField($model,'tglvalidasiwd',array('class'=>'form-control')); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>
	</div><!-- search-form -->
<?php $this->endWidget(); ?>

