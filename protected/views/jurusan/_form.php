<?php
/* @var $this JurusanController */
/* @var $model Jurusan */
/* @var $form CActiveForm */
?>

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'jurusan-form',
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
		<label><?php echo $form->labelEx($model,'NAMAJURUSAN'); ?>
</label>
                <?php echo $form->textField($model,'NAMAJURUSAN',array('class'=>'form-control'),array('size'=>60,'maxlength'=>100)); ?>
  	               
	</div>

        <div class="card-footer">
			<?php echo CHtml::submitButton($model->isNewRecord ? 'Simpan' : 'Update', array('class'=>'btn btn-primary pull-right')); ?>
       
        </div>	
</div>
<?php $this->endWidget(); ?>
