<?php
/* @var $this MahasiswaController */
/* @var $model Mahasiswa */

$this->breadcrumbs=array(
	'Mahasiswas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Mahasiswa', 'url'=>array('index')),
	array('label'=>'Manage Mahasiswa', 'url'=>array('admin')),
);
?>
<div class="row">
    <div class="col-md-12">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Create <small>Mahasiswa</small></h3>
            </div>
        <?php $this->renderPartial('_form', array('model'=>$model)); ?>        </div>
    </div>
</div>
