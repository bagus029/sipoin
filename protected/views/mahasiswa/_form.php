<?php
/* @var $this MahasiswaController */
/* @var $model Mahasiswa */
/* @var $form CActiveForm */
?>

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'mahasiswa-form',
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
		<label><?php echo $form->labelEx($model,'NIM'); ?>
</label>
                <?php echo $form->textField($model,'NIM',array('class'=>'form-control'),array('size'=>10,'maxlength'=>10)); ?>
  	               
	</div>

	<div class="form-group">
		<label><?php echo $form->labelEx($model,'NAMA'); ?>
</label>
                <?php echo $form->textField($model,'NAMA',array('class'=>'form-control'),array('size'=>60,'maxlength'=>100)); ?>
  	               
	</div>

	<div class="form-group">
		<label><?php echo $form->labelEx($model,'TEMPATLAHIR'); ?>
</label>
                <?php echo $form->textField($model,'TEMPATLAHIR',array('class'=>'form-control'),array('size'=>60,'maxlength'=>100)); ?>
  	               
	</div>

	<div class="form-group">
		<label><?php echo $form->labelEx($model,'TGLLAHIR'); ?>
</label>
                <?php echo $form->textField($model,'TGLLAHIR',array('class'=>'form-control'),array('size'=>50,'maxlength'=>50)); ?>
  	               
	</div>

	<div class="form-group">
		<label><?php echo $form->labelEx($model,'NOHP'); ?>
</label>
                <?php echo $form->textField($model,'NOHP',array('class'=>'form-control'),array('size'=>50,'maxlength'=>50)); ?>
  	               
	</div>

	<div class="form-group">
		<label><?php echo $form->labelEx($model,'EMAIL'); ?>
</label>
                <?php echo $form->textField($model,'EMAIL',array('class'=>'form-control'),array('size'=>60,'maxlength'=>100)); ?>
  	               
	</div>

	<div class="form-group">
		<label><?php echo $form->labelEx($model,'ALAMATASAL'); ?>
</label>
                <?php echo $form->textArea($model,'ALAMATASAL',array('class'=>'textarea'),array('rows'=>6, 'cols'=>50)); ?>
  	               
	</div>

	<div class="form-group">
		<label><?php echo $form->labelEx($model,'NAMAAYAH'); ?>
</label>
                <?php echo $form->textField($model,'NAMAAYAH',array('class'=>'form-control'),array('size'=>50,'maxlength'=>50)); ?>
  	               
	</div>

	<div class="form-group">
		<label><?php echo $form->labelEx($model,'NAMAIBU'); ?>
</label>
                <?php echo $form->textField($model,'NAMAIBU',array('class'=>'form-control'),array('size'=>50,'maxlength'=>50)); ?>
  	               
	</div>

	<div class="form-group">
		<label><?php echo $form->labelEx($model,'PENGHASILANAYAH'); ?>
</label>
                <?php echo $form->textField($model,'PENGHASILANAYAH',array('class'=>'form-control'),array('size'=>15,'maxlength'=>15)); ?>
  	               
	</div>

	<div class="form-group">
		<label><?php echo $form->labelEx($model,'PENGHASILANIBU'); ?>
</label>
                <?php echo $form->textField($model,'PENGHASILANIBU',array('class'=>'form-control'),array('size'=>15,'maxlength'=>15)); ?>
  	               
	</div>

	<div class="form-group">
		<label><?php echo $form->labelEx($model,'JMLTANGGUNGAN'); ?>
</label>
                <?php echo $form->textField($model,'JMLTANGGUNGAN',array('class'=>'form-control'),array('size'=>15,'maxlength'=>15)); ?>
  	               
	</div>

	<div class="form-group">
		<label><?php echo $form->labelEx($model,'NAMAKABUPATEN'); ?>
</label>
                <?php echo $form->textField($model,'NAMAKABUPATEN',array('class'=>'form-control'),array('size'=>30,'maxlength'=>30)); ?>
  	               
	</div>

	<div class="form-group">
		<label><?php echo $form->labelEx($model,'NAMAPROPINSI'); ?>
</label>
                <?php echo $form->textField($model,'NAMAPROPINSI',array('class'=>'form-control'),array('size'=>30,'maxlength'=>30)); ?>
  	               
	</div>

	<div class="form-group">
		<label><?php echo $form->labelEx($model,'TAHUNANGKATAN'); ?>
</label>
                <?php echo $form->textField($model,'TAHUNANGKATAN',array('class'=>'form-control'),array('size'=>4,'maxlength'=>4)); ?>
  	               
	</div>

	<div class="form-group">
		<label><?php echo $form->labelEx($model,'IDAGAMA'); ?>
</label>
                <?php echo $form->textField($model,'IDAGAMA',array('class'=>'form-control')); ?>
  	               
	</div>

	<div class="form-group">
		<label><?php echo $form->labelEx($model,'IDPRODI'); ?>
</label>
                <?php echo $form->textField($model,'IDPRODI',array('class'=>'form-control'),array('size'=>4,'maxlength'=>4)); ?>
  	               
	</div>

	<div class="form-group">
		<label><?php echo $form->labelEx($model,'IDGOLDAR'); ?>
</label>
                <?php echo $form->textField($model,'IDGOLDAR',array('class'=>'form-control')); ?>
  	               
	</div>

	<div class="form-group">
		<label><?php echo $form->labelEx($model,'IDJENDER'); ?>
</label>
                <?php echo $form->textField($model,'IDJENDER',array('class'=>'form-control'),array('size'=>1,'maxlength'=>1)); ?>
  	               
	</div>

        <div class="card-footer">
			<?php echo CHtml::submitButton($model->isNewRecord ? 'Simpan' : 'Update', array('class'=>'btn btn-primary pull-right')); ?>
       
        </div>	
</div>
<?php $this->endWidget(); ?>
