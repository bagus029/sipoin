<?php
/* @var $this DetailkegiatanController */
/* @var $model Detailkegiatan */

$this->breadcrumbs=array(
	'Detailkegiatans'=>array('index'),
	$model->iddetailkeg,
);
?>
<div class="row">
	<div class="col-md-12">
		<div class="card card-primary">
			<div class="card-header">
				<h3 class="card-title">View <small>Detailkegiatan #<?php echo $model->iddetailkeg; ?></small></h3>
			</div>
			<div class="card-body">
				<?php $this->widget('zii.widgets.CDetailView', array(
					'data'=>$model,
					'htmlOptions' => array('class'=> 'table table-bordered table-striped table-advance table-hover'),
					'attributes'=>array(
						//'iddetailkeg',
						'idkegiatan0.namakegiatan',
						'idkegiatan0.poinkegiatan',
						//'nim',
						'detailkegiatan',
						//'statusdetailkeg',
						'tglkegiatan',
						'tempatkegiatan',
						'penyelenggara',
						//'validasi',
					),
				)); ?>
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-6">
	</div>
</div>

<div class="row">
	<div class="col-md-6">
		<div class="card">
			<div class="card-header">
				<h3 class="card-title">Anggota</h3>
				<div class="card-tools">
					<ul class="nav nav-pills ml-auto">
						<li class="nav-item">
							<?php //echo CHtml::link('<i class="fa fa-plus"></i> Tambah',array('groupdetailkegiatan/create','id'=>$model->iddetailkeg),array('class'=>'btn btn-info float-right'));?>
							<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-lg">
								Tambah Anggota
							</button>
						</li>
					</ul>
				</div>
			</div>
			<div class="card-body">
				<?php $this->widget('zii.widgets.grid.CGridView', array(
					'id'=>'groupdetailkegiatan-grid',
					'dataProvider'=>$viewgroup,
					'itemsCssClass'=>'table table-striped table-bordered table-hover',
					//	'filter'=>$model,
					'columns'=>array(
						//	'idgroupdetailkegiatan',
						//	'iddetailkegiatan',
						'nim',
						//	'nim0.namamahasiswa',
						//		'status',
						//'validasi',
						'poin',
					),
				)); ?>
			</div>
		</div>
	</div>


	<div class="col-md-6">
		<div class="card">
			<div class="card-header">
				<h3 class="card-title">Data Dukung</h3>
				<div class="card-tools">
					<ul class="nav nav-pills ml-auto">
						<li class="nav-item">
							<?php //echo CHtml::link('<i class="fa fa-plus"></i> Tambah',array('uploaddatadukung/create','id'=>$model->iddetailkeg),array('class'=>'btn btn-info float-right'));?>
							<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-lg1">
								Upload Data Dukung
							</button>
						</li>
					</ul>
				</div>
			</div>
			<div class="card-body">
				<?php $this->widget('zii.widgets.grid.CGridView', array(
					'id'=>'uploaddatadukung-grid',
					'dataProvider'=>$datadukung,
					'itemsCssClass'=>'table table-striped table-bordered table-hover',
					//'filter'=>$model,
					'columns'=>array(
						//	'iddatadukung',
						//	'iddetailkeg',
						'namadatadukung',
						'filedatadukung',
						'tanggalupload',
						//	'tanggalupdate',
					),
				)); ?>
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-md-12">
		<div class="card card-primary">
			<div class="card-header">
				<h3 class="card-title">Validasi</h3>
			</div>
			<div class="card-body">
				<div class="row">
					<!-- accepted payments column -->
					<div class="col-6">
						<p class="lead">Validasi BEM</p>
						<div class="table-responsive">
							<table class="table">
								<tr>
									<th style="width:50%">Keterangan:</th>
									<td>
										<span class="info-box-icon bg-success"><i class="fas fa-check"></i></span>
									</td>
								</tr>
								<th style="width:50%">Tanggal Validasi :</th>
								<td></td>
								<tr>
								</tr>
							</table>
						</div>
					</div>
					<!-- /.col -->
					<div class="col-6">
						<p class="lead">Validasi Wakil Dekan III</p>

						<div class="table-responsive">
							<table class="table">
								<tr>
									<th style="width:50%">Ketrangan:</th>
									<td>
										<span class="info-box-icon bg-success"><i class="fas fa-check"></i></span>
									</td>
								</tr>
								<th style="width:50%">Tanggal Validasi :</th>
								<td></td>
								<tr>
								</tr>
							</table>
						</div>
					</div>
					<!-- /.col -->
				</div>
				<div class="row no-print">
					<div class="col-6">
						<a href="" class="btn btn-default"><i class="fas fa-check"></i> Validasi BEM</a>
						<a href="" class="btn btn-danger"><i class="fas fa-trash"></i> Tolak</a>
					</div>
					<div class="col-6">
						<a href="" class="btn btn-default"><i class="fas fa-check"></i> Validasi WD III</a>
						<a href="" class="btn btn-danger"><i class="fas fa-trash"></i> Tolak</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!--modal tambah mahasiswa-->
<div class="modal fade" id="modal-lg">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Tambah Anggota</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="form">
					<div class="card-body">
						<?php echo CHtml::beginForm(Yii::app()->controller->createUrl('Groupdetailkegiatan/tambah'), 'POST', array('class' => 'form-horizontal')); ?>

						<div class="form-group">
							<?php //echo CHtml::label('Kegiatan', '');?>
							<?php echo CHtml::textField('iddetailkegiatan', $model->iddetailkeg,array('hidden' => true));?>
							<?php //echo CHtml::dropDownList('iddetailkegiatan',CHtml::listData(Kegiatan::model()->findAll(), 'idkegiatan','namakegiatan'),array('class'=>'form-control','disabled'=>true)); ?>
						</div>

						<div class="form-group">
							<?php echo CHtml::label('Nama Kegiatan :','');?>
							<?php echo CHtml::label($model->idkegiatan0->namakegiatan,'');?>
						</div>

						<div class="form-group">
							<label><?php echo CHtml::label('Nim', ''); ?></label>
							<?php echo CHtml::textField('nim', '', array('class'=>'form-control')); ?>

						</div>
						<div class="form-group">
							<label><?php echo CHtml::label('Jumlah Poin', ''); ?></label>
							<?php echo CHtml::textField('poin', $model->idkegiatan0->poinkegiatan,array('class'=>'form-control','readOnly'=>true)); ?>
						</div>
					</div>
				</div>
				<div class="modal-footer justify-content-between">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<?php echo CHtml::submitButton('Simpan', array('class' => 'btn btn-primary')); ?>
				</div>
				<?php echo CHtml::endForm(); ?>
			</div>
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>



<!--modal-->
<div class="modal fade" id="modal-lg1">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Upload Data Dukung</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="card-body">
					<div class="form">
						<?php echo CHtml::beginForm(Yii::app()->controller->createUrl('Uploaddatadukung/tambah'), 'POST', array('id'=>'Uploaddatadukung-form','class' => 'form-horizontal','enctype' => 'multipart/form-data')); ?>

						<div class="form-group">
							<?php echo CHtml::label('Nama Kegiatan :','');?>
							<?php echo CHtml::label($model->idkegiatan0->namakegiatan,'');?>
						</div>

						<div class="form-group">
							<?php //echo CHtml::label('Buku Harian', '');?>
							<?php echo CHtml::textField('iddetailkeg', $model->iddetailkeg,array('hidden' => true));?>
							<?php //echo CHtml::dropDownList('iddetailkegiatan',CHtml::listData(Kegiatan::model()->findAll(), 'idkegiatan','namakegiatan'),array('class'=>'form-control','disabled'=>true)); ?>
						</div>

						<div class="form-group">
							<?php echo CHtml::label('No SK', ''); ?>
							<?php echo CHtml::textField('namadatadukung', '',array('class'=>'form-control')); ?>
						</div>

						<div class="form-group">
							<?php echo CHtml::label('File', ''); ?>
							<?php echo CHtml::fileField('filedatadukung'); ?>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer justify-content-between">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<?php echo CHtml::submitButton('Proses', array('class' => 'btn btn-primary')); ?>
			</div>
			<?php echo CHtml::endForm(); ?>
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>
