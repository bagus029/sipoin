<?php
/* @var $this SiteController */
/* @var $error array */

$this->pageTitle=Yii::app()->name . ' - Error';
$this->breadcrumbs=array(
	'Error',
);
?>

<h4 class="page-head-line">Error <?php echo $code; ?></h4>

<div class="alert alert-danger">
<?php echo CHtml::encode($message); ?>
</div>