<?php
/* @var $this DetailkegiatanController */
/* @var $model Detailkegiatan */

$this->breadcrumbs=array(
	'Detailkegiatans'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Detailkegiatan', 'url'=>array('index')),
	array('label'=>'Create Detailkegiatan', 'url'=>array('create')),
);
?>
<div class="row">
	<div class="col-md-12">
		<div class="card card-primary">
			<div class="card-header">
				<h3 class="card-title">Kelola <small>Detail Kegiatan</small></h3>
			</div>
			<div class="card-body">
			<?php $this->widget('zii.widgets.grid.CGridView', array(
				'id'=>'detailkegiatan-grid',
				'dataProvider'=>$model->search(),
				'filter'=>$model,
				'itemsCssClass'=>'table table-striped table-bordered table-hover',
				'columns'=>array(
					'iddetailkeg',
					array(
                    'name'=>'idkegiatan',
										'header'=>'Jenis Kegiatan',
                    'type'=>'html',
                    'value'=>'$data->idkegiatan0->idjeniskegiatan0->jeniskegiatan','sortable'=>true,
										'htmlOptions'=>array(
													 'style'=>'width:15%;'
											 )
                  //  'filter'=>Chtml::listdata(Jeniskegiatan::model()->findAll(),'idjeniskegiatan','jeniskegiatan')
									),
					array(
                    'name'=>'idkegiatan',
										'header'=>'Nama Kegiatan',
                    'type'=>'html',
                    'value'=>'$data->idkegiatan0->namakegiatan','sortable'=>true,
                  //  'filter'=>Chtml::listdata(Jeniskegiatan::model()->findAll(),'idjeniskegiatan','jeniskegiatan')
									),
					'detailkegiatan',
					'tglkegiatan',
					'tempatkegiatan',
					'penyelenggara',
					array(
						'header' => 'Validasi',
						'type' => 'raw',
						'value' => 'Chtml::link("Validasi", array("detailkegiatan/view&id=$data->iddetailkeg"),array("class"=>"btn btn-warning", "target"=>"_blank"))',
					),
				),
			)); ?>
		</div>
		</div>
	</div>
</div>
