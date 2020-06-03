<?php
/* @var $this JeniskegiatanController */
/* @var $model Jeniskegiatan */
/* @var $form CActiveForm */
?>

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'jeniskegiatan-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
        'htmlOptions'=>array('class'=>'form-horizontal','role'=>'form','novalidate'=>'novalidate'),
)); ?>
<div class="card-body">    
    <div class="form-group">
        <div class="col-md-6">                
                <?php echo $form->errorSummary($model, '', '', array('class'=>'alert alert-danger')); ?>
        </div>
    </div>        

	<div class="form-group">
		<label><?php echo $form->labelEx($model,'idjeniskegiatan'); ?>
</label>
                <?php echo $form->textField($model,'idjeniskegiatan',array('class'=>'form-control')); ?>
  	               
	</div>

	<div class="form-group">
		<label><?php echo $form->labelEx($model,'jeniskegiatan'); ?>
</label>
                <?php echo $form->textField($model,'jeniskegiatan',array('class'=>'form-control'),array('size'=>25,'maxlength'=>25)); ?>
  	               
	</div>

	<div class="form-group">
		<label><?php echo $form->labelEx($model,'statusjeniskegiatan'); ?>
</label>
                <?php echo $form->textField($model,'statusjeniskegiatan',array('class'=>'form-control')); ?>
  	               
	</div>

	<div class="form-group">
		<label><?php echo $form->labelEx($model,'jumlahpoin'); ?>
</label>
                <?php echo $form->textField($model,'jumlahpoin',array('class'=>'form-control')); ?>
  	               
	</div>

	<div class="form-group">
		<label><?php echo $form->labelEx($model,'satuanpoin'); ?>
</label>
                <?php echo $form->textField($model,'satuanpoin',array('class'=>'form-control'),array('size'=>45,'maxlength'=>45)); ?>
  	               
	</div>

        <div class="card-footer">
			<?php echo CHtml::submitButton($model->isNewRecord ? 'Simpan' : 'Update', array('class'=>'btn btn-primary pull-right')); ?>
       
        </div>	
</div>
<?php $this->endWidget(); ?>
