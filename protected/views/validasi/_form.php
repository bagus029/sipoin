<?php
/* @var $this ValidasiController */
/* @var $model Validasi */
/* @var $form CActiveForm */
?>

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'validasi-form',
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
		<label><?php echo $form->labelEx($model,'idvalidasi'); ?>
</label>
                <?php echo $form->textField($model,'idvalidasi',array('class'=>'form-control')); ?>
  	               
	</div>

	<div class="form-group">
		<label><?php echo $form->labelEx($model,'iddetailkeg'); ?>
</label>
                <?php echo $form->textField($model,'iddetailkeg',array('class'=>'form-control')); ?>
  	               
	</div>

	<div class="form-group">
		<label><?php echo $form->labelEx($model,'validasibem'); ?>
</label>
                <?php echo $form->textField($model,'validasibem',array('class'=>'form-control')); ?>
  	               
	</div>

	<div class="form-group">
		<label><?php echo $form->labelEx($model,'validasiwd'); ?>
</label>
                <?php echo $form->textField($model,'validasiwd',array('class'=>'form-control')); ?>
  	               
	</div>

	<div class="form-group">
		<label><?php echo $form->labelEx($model,'tglvalidasibem'); ?>
</label>
                <?php echo $form->textField($model,'tglvalidasibem',array('class'=>'form-control')); ?>
  	               
	</div>

	<div class="form-group">
		<label><?php echo $form->labelEx($model,'tglvalidasiwd'); ?>
</label>
                <?php echo $form->textField($model,'tglvalidasiwd',array('class'=>'form-control')); ?>
  	               
	</div>

        <div class="card-footer">
			<?php echo CHtml::submitButton($model->isNewRecord ? 'Simpan' : 'Update', array('class'=>'btn btn-primary pull-right')); ?>
       
        </div>	
</div>
<?php $this->endWidget(); ?>
