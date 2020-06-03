<?php
/* @var $this GroupdetailkegiatanController */
/* @var $model Groupdetailkegiatan */
/* @var $form CActiveForm */
?>

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'groupdetailkegiatan-form',
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
		<label><?php echo $form->labelEx($model,'iddetailkegiatan'); ?>
</label>
                <?php echo $form->textField($model,'iddetailkegiatan',array('class'=>'form-control')); ?>
  	               
	</div>

	<div class="form-group">
		<label><?php echo $form->labelEx($model,'nim'); ?>
</label>
                <?php echo $form->textField($model,'nim',array('class'=>'form-control'),array('size'=>25,'maxlength'=>25)); ?>
  	               
	</div>

	<div class="form-group">
		<label><?php echo $form->labelEx($model,'status'); ?>
</label>
                <?php echo $form->textField($model,'status',array('class'=>'form-control')); ?>
  	               
	</div>

	<div class="form-group">
		<label><?php echo $form->labelEx($model,'validasi'); ?>
</label>
                <?php echo $form->textField($model,'validasi',array('class'=>'form-control')); ?>
  	               
	</div>

	<div class="form-group">
		<label><?php echo $form->labelEx($model,'poin'); ?>
</label>
                <?php echo $form->textField($model,'poin',array('class'=>'form-control')); ?>
  	               
	</div>

        <div class="card-footer">
			<?php echo CHtml::submitButton($model->isNewRecord ? 'Simpan' : 'Update', array('class'=>'btn btn-primary pull-right')); ?>
       
        </div>	
</div>
<?php $this->endWidget(); ?>
