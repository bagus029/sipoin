<?php
/* @var $this KegiatanController */
/* @var $model Kegiatan */
/* @var $form CActiveForm */
?>

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'kegiatan-form',
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
		<label><?php echo $form->labelEx($model,'idkegiatan'); ?>
</label>
                <?php echo $form->textField($model,'idkegiatan',array('class'=>'form-control'),array('size'=>5,'maxlength'=>5)); ?>
  	               
	</div>

	<div class="form-group">
		<label><?php echo $form->labelEx($model,'idjeniskegiatan'); ?>
</label>
                <?php echo $form->textField($model,'idjeniskegiatan',array('class'=>'form-control')); ?>
  	               
	</div>

	<div class="form-group">
		<label><?php echo $form->labelEx($model,'namakegiatan'); ?>
</label>
                <?php echo $form->textArea($model,'namakegiatan',array('class'=>'textarea'),array('rows'=>6, 'cols'=>50)); ?>
  	               
	</div>

	<div class="form-group">
		<label><?php echo $form->labelEx($model,'poinkegiatan'); ?>
</label>
                <?php echo $form->textField($model,'poinkegiatan',array('class'=>'form-control')); ?>
  	               
	</div>

	<div class="form-group">
		<label><?php echo $form->labelEx($model,'statuskegiatan'); ?>
</label>
                <?php echo $form->textField($model,'statuskegiatan',array('class'=>'form-control')); ?>
  	               
	</div>

	<div class="form-group">
		<label><?php echo $form->labelEx($model,'satuanpoin'); ?>
</label>
                <?php echo $form->textField($model,'satuanpoin',array('class'=>'form-control'),array('size'=>50,'maxlength'=>50)); ?>
  	               
	</div>

        <div class="card-footer">
			<?php echo CHtml::submitButton($model->isNewRecord ? 'Simpan' : 'Update', array('class'=>'btn btn-primary pull-right')); ?>
       
        </div>	
</div>
<?php $this->endWidget(); ?>
