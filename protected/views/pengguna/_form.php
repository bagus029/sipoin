<?php
/* @var $this PenggunaController */
/* @var $model Pengguna */
/* @var $form CActiveForm */
?>

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'pengguna-form',
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
		<label><?php echo $form->labelEx($model,'idpengguna'); ?>
</label>
                <?php echo $form->textField($model,'idpengguna',array('class'=>'form-control')); ?>
  	               
	</div>

	<div class="form-group">
		<label><?php echo $form->labelEx($model,'username'); ?>
</label>
                <?php echo $form->textField($model,'username',array('class'=>'form-control'),array('size'=>35,'maxlength'=>35)); ?>
  	               
	</div>

	<div class="form-group">
		<label><?php echo $form->labelEx($model,'password'); ?>
</label>
                <?php echo $form->passwordField($model,'password',array('class'=>'form-control'),array('size'=>60,'maxlength'=>200)); ?>
  	               
	</div>

	<div class="form-group">
		<label><?php echo $form->labelEx($model,'namapengguna'); ?>
</label>
                <?php echo $form->textField($model,'namapengguna',array('class'=>'form-control'),array('size'=>60,'maxlength'=>85)); ?>
  	               
	</div>

	<div class="form-group">
		<label><?php echo $form->labelEx($model,'jabatan'); ?>
</label>
                <?php echo $form->textField($model,'jabatan',array('class'=>'form-control'),array('size'=>60,'maxlength'=>85)); ?>
  	               
	</div>

	<div class="form-group">
		<label><?php echo $form->labelEx($model,'level'); ?>
</label>
                <?php echo $form->textField($model,'level',array('class'=>'form-control')); ?>
  	               
	</div>

	<div class="form-group">
		<label><?php echo $form->labelEx($model,'status'); ?>
</label>
                <?php echo $form->textField($model,'status',array('class'=>'form-control')); ?>
  	               
	</div>

        <div class="card-footer">
			<?php echo CHtml::submitButton($model->isNewRecord ? 'Simpan' : 'Update', array('class'=>'btn btn-primary pull-right')); ?>
       
        </div>	
</div>
<?php $this->endWidget(); ?>
