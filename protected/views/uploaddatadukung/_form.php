<?php
/* @var $this UploaddatadukungController */
/* @var $model Uploaddatadukung */
/* @var $form CActiveForm */
?>

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'uploaddatadukung-form',
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
		<label><?php echo $form->labelEx($model,'iddatadukung'); ?>
</label>
                <?php echo $form->textField($model,'iddatadukung',array('class'=>'form-control')); ?>
  	               
	</div>

	<div class="form-group">
		<label><?php echo $form->labelEx($model,'iddetailkeg'); ?>
</label>
                <?php echo $form->textField($model,'iddetailkeg',array('class'=>'form-control')); ?>
  	               
	</div>

	<div class="form-group">
		<label><?php echo $form->labelEx($model,'namadatadukung'); ?>
</label>
                <?php echo $form->textField($model,'namadatadukung',array('class'=>'form-control'),array('size'=>50,'maxlength'=>50)); ?>
  	               
	</div>

	<div class="form-group">
		<label><?php echo $form->labelEx($model,'filedatadukung'); ?>
</label>
                <?php echo $form->textField($model,'filedatadukung',array('class'=>'form-control'),array('size'=>60,'maxlength'=>100)); ?>
  	               
	</div>

	<div class="form-group">
		<label><?php echo $form->labelEx($model,'tanggalupload'); ?>
</label>
                <?php echo $form->textField($model,'tanggalupload',array('class'=>'form-control')); ?>
  	               
	</div>

	<div class="form-group">
		<label><?php echo $form->labelEx($model,'tanggalupdate'); ?>
</label>
                <?php echo $form->textField($model,'tanggalupdate',array('class'=>'form-control')); ?>
  	               
	</div>

	<div class="form-group">
		<label><?php echo $form->labelEx($model,'statusdatadukung'); ?>
</label>
                <?php echo $form->textField($model,'statusdatadukung',array('class'=>'form-control')); ?>
  	               
	</div>

        <div class="card-footer">
			<?php echo CHtml::submitButton($model->isNewRecord ? 'Simpan' : 'Update', array('class'=>'btn btn-primary pull-right')); ?>
       
        </div>	
</div>
<?php $this->endWidget(); ?>
