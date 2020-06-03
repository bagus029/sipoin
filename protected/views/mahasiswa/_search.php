<?php
/* @var $this MahasiswaController */
/* @var $model Mahasiswa */
/* @var $form CActiveForm */
?>

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>
<div class="card-body">
	<div class="row">
		<?php echo $form->label($model,'NIM'); ?>
		<?php echo $form->textField($model,'NIM',array('class'=>'form-control'),array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NAMA'); ?>
		<?php echo $form->textField($model,'NAMA',array('class'=>'form-control'),array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TEMPATLAHIR'); ?>
		<?php echo $form->textField($model,'TEMPATLAHIR',array('class'=>'form-control'),array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TGLLAHIR'); ?>
		<?php echo $form->textField($model,'TGLLAHIR',array('class'=>'form-control'),array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NOHP'); ?>
		<?php echo $form->textField($model,'NOHP',array('class'=>'form-control'),array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'EMAIL'); ?>
		<?php echo $form->textField($model,'EMAIL',array('class'=>'form-control'),array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ALAMATASAL'); ?>
		<?php echo $form->textArea($model,'ALAMATASAL',array('class'=>'textarea'),array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NAMAAYAH'); ?>
		<?php echo $form->textField($model,'NAMAAYAH',array('class'=>'form-control'),array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NAMAIBU'); ?>
		<?php echo $form->textField($model,'NAMAIBU',array('class'=>'form-control'),array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PENGHASILANAYAH'); ?>
		<?php echo $form->textField($model,'PENGHASILANAYAH',array('class'=>'form-control'),array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PENGHASILANIBU'); ?>
		<?php echo $form->textField($model,'PENGHASILANIBU',array('class'=>'form-control'),array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'JMLTANGGUNGAN'); ?>
		<?php echo $form->textField($model,'JMLTANGGUNGAN',array('class'=>'form-control'),array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NAMAKABUPATEN'); ?>
		<?php echo $form->textField($model,'NAMAKABUPATEN',array('class'=>'form-control'),array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NAMAPROPINSI'); ?>
		<?php echo $form->textField($model,'NAMAPROPINSI',array('class'=>'form-control'),array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TAHUNANGKATAN'); ?>
		<?php echo $form->textField($model,'TAHUNANGKATAN',array('class'=>'form-control'),array('size'=>4,'maxlength'=>4)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'IDAGAMA'); ?>
		<?php echo $form->textField($model,'IDAGAMA',array('class'=>'form-control')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'IDPRODI'); ?>
		<?php echo $form->textField($model,'IDPRODI',array('class'=>'form-control'),array('size'=>4,'maxlength'=>4)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'IDGOLDAR'); ?>
		<?php echo $form->textField($model,'IDGOLDAR',array('class'=>'form-control')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'IDJENDER'); ?>
		<?php echo $form->textField($model,'IDJENDER',array('class'=>'form-control'),array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>
	</div><!-- search-form -->
<?php $this->endWidget(); ?>

