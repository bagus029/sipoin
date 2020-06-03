<?php
/* @var $this PenggunaController */
/* @var $model Pengguna */

$this->breadcrumbs=array(
	'Penggunas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Pengguna', 'url'=>array('index')),
	array('label'=>'Manage Pengguna', 'url'=>array('admin')),
);
?>
<div class="row">
    <div class="col-md-12">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Create <small>Pengguna</small></h3>
            </div>
        <?php $this->renderPartial('_form', array('model'=>$model)); ?>        </div>
    </div>
</div>
