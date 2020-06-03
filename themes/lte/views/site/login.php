<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle = Yii::app()->name . ' - Login';
$this->breadcrumbs = array(
    'Login',
);
?>
﻿<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <!--[if IE]>
            <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
            <![endif]-->
        <title>Swimming</title>
        <!-- BOOTSTRAP CORE STYLE  -->
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/css/bootstrap.css" rel="stylesheet" />
        <!-- FONT AWESOME ICONS  -->
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLE  -->
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/css/style.css" rel="stylesheet" />
        <!-- HTML5 Shiv and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>       
        <!-- MENU SECTION END-->
        <div class="content-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h4 class="page-head-line">Please Login To Enter </h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">                        
                        <?php
                        $form = $this->beginWidget('CActiveForm', array(
                            'id' => 'login-form',
                            'enableClientValidation' => true,
                            'clientOptions' => array(
                                'validateOnSubmit' => true,
                            ),
                                ));
                        ?>
                        <?php echo $form->errorSummary($model, '', '', array('class' => 'alert alert-danger')); ?>
                        <label>Enter Username : </label>                        
                        <?php echo $form->textField($model, 'username', array('class' => 'form-control')); ?>                        
                        <label>Enter Password :  </label>                        
                        <?php echo $form->passwordField($model, 'password', array('class' => 'form-control')); ?>                        
                        <hr />                        
                        <?php //echo CHtml::link('Daftar', Yii::app()->createUrl('site/create'), array('class' => 'btn btn-warning')); ?>
                       &nbsp;
                        <?php echo CHtml::submitButton('Login', array('class' => 'btn btn-info')); ?>                        
                        <?php $this->endWidget(); ?>
                    </div>
                    <div class="col-md-6">
                        <img width="100%" src="<?php echo Yii::app()->theme->baseUrl; ?>/images/sca9.jpg"></img>
                    </div>

                </div>
            </div>
        </div>                
        <!-- FOOTER SECTION END-->
        <!-- JAVASCRIPT AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
        <!-- CORE JQUERY SCRIPTS -->
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/jquery-1.11.1.js"></script>
        <!-- BOOTSTRAP SCRIPTS  -->
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/bootstrap.js"></script>
    </body>
</html>
