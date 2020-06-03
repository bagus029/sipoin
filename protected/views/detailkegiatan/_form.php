<?php
/* @var $this DetailkegiatanController */
/* @var $model Detailkegiatan */
/* @var $form CActiveForm */
?>

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'detailkegiatan-form',
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
                <?php //echo $form->textField($model,'idkegiatan',array('class'=>'form-control'),array('size'=>5,'maxlength'=>5)); ?>
				<?php echo $form->dropDownList($model,'idkegiatan',CHtml::listData(Kegiatan::model()->findAll(array('order'=>'idkegiatan')), 'idkegiatan','namakegiatan'),array('class'=>'form-control','disabled'=>true)); ?>   
	</div>

	<div class="form-group">
		<label><?php echo $form->labelEx($model,'detailkegiatan'); ?>
</label>
                <?php echo $form->textArea($model,'detailkegiatan',array('class'=>'textarea'),array('rows'=>6, 'cols'=>50)); ?>
  	               
	</div>

	<div class="form-group">
		<label><?php echo $form->labelEx($model,'tglkegiatan'); ?>
</label>
                <?php echo $form->textField($model,'tglkegiatan',array('class'=>'form-control'),array('size'=>35,'maxlength'=>35)); ?>
  	               
	</div>

	<div class="form-group">
		<label><?php echo $form->labelEx($model,'tempatkegiatan'); ?>
</label>
                <?php echo $form->textArea($model,'tempatkegiatan',array('class'=>'textarea'),array('rows'=>6, 'cols'=>50)); ?>
  	               
	</div>

	<div class="form-group">
		<label><?php echo $form->labelEx($model,'penyelenggara'); ?>
</label>
                <?php echo $form->textField($model,'penyelenggara',array('class'=>'form-control'),array('size'=>60,'maxlength'=>85)); ?>
  	               
	</div>

        <div class="card-footer">
			<?php echo CHtml::submitButton($model->isNewRecord ? 'Simpan' : 'Update', array('class'=>'btn btn-primary pull-right')); ?>
       
        </div>	
</div>
<?php $this->endWidget(); ?>
