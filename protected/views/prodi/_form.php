<?php
/* @var $this ProdiController */
/* @var $model Prodi */
/* @var $form CActiveForm */
?>

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'prodi-form',
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
		<label><?php echo $form->labelEx($model,'IDPRODI'); ?>
</label>
                <?php echo $form->textField($model,'IDPRODI',array('class'=>'form-control'),array('size'=>4,'maxlength'=>4)); ?>
  	               
	</div>

	<div class="form-group">
		<label><?php echo $form->labelEx($model,'KODEPRODI'); ?>
</label>
                <?php echo $form->textField($model,'KODEPRODI',array('class'=>'form-control')); ?>
  	               
	</div>

	<div class="form-group">
		<label><?php echo $form->labelEx($model,'KODEPRODIUNSOED'); ?>
</label>
                <?php echo $form->textField($model,'KODEPRODIUNSOED',array('class'=>'form-control')); ?>
  	               
	</div>

	<div class="form-group">
		<label><?php echo $form->labelEx($model,'IDJENJANG'); ?>
</label>
                <?php echo $form->textField($model,'IDJENJANG',array('class'=>'form-control')); ?>
  	               
	</div>

	<div class="form-group">
		<label><?php echo $form->labelEx($model,'IDFAKULTAS'); ?>
</label>
                <?php echo $form->textField($model,'IDFAKULTAS',array('class'=>'form-control')); ?>
  	               
	</div>

	<div class="form-group">
		<label><?php echo $form->labelEx($model,'NAMAPRODI'); ?>
</label>
                <?php echo $form->textField($model,'NAMAPRODI',array('class'=>'form-control'),array('size'=>60,'maxlength'=>80)); ?>
  	               
	</div>

	<div class="form-group">
		<label><?php echo $form->labelEx($model,'ISAKTIF'); ?>
</label>
                <?php echo $form->textField($model,'ISAKTIF',array('class'=>'form-control'),array('size'=>1,'maxlength'=>1)); ?>
  	               
	</div>

	<div class="form-group">
		<label><?php echo $form->labelEx($model,'KODEPRODILAMA'); ?>
</label>
                <?php echo $form->textField($model,'KODEPRODILAMA',array('class'=>'form-control'),array('size'=>4,'maxlength'=>4)); ?>
  	               
	</div>

        <div class="card-footer">
			<?php echo CHtml::submitButton($model->isNewRecord ? 'Simpan' : 'Update', array('class'=>'btn btn-primary pull-right')); ?>
       
        </div>	
</div>
<?php $this->endWidget(); ?>
