<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
);
?>
    <?php $form=$this->beginWidget('CActiveForm', array(
            'id'=>'login-form',
            'enableClientValidation'=>true,
            'clientOptions'=>array(
                    'validateOnSubmit'=>true,
            ),
            'htmlOptions'=>array(
                'class'=>'form-signin',
            ),
    )); ?>
            <h2 class="form-signin-heading"><a href="http://solucoesquefacilitam.com.br" >Serralheria Almeida</a></h2>
            <div class="col-lg-12 col-md-12">
                <?php echo $form->labelEx($model,'username'); ?>
                <?php echo $form->textField($model,'username',array('class'=>'form-control')); ?>
                <?php echo $form->error($model,'username'); ?>
            </div>

            <div class="col-lg-12 col-md-12">
                    <?php echo $form->labelEx($model,'password'); ?>
                    <?php echo $form->passwordField($model,'password',array('class'=>'form-control')); ?>
                    <?php echo $form->error($model,'password'); ?>

            </div>

            <div class="col-lg-12 col-md-12 rememberMe">
                    <?php echo $form->checkBox($model,'rememberMe'); ?>
                    <?php echo $form->label($model,'rememberMe'); ?>
                    <?php echo $form->error($model,'rememberMe'); ?>
            </div>

            <div class="col-lg-12 buttons">
                    <?php echo CHtml::submitButton('Login', array('class'=>'btn btn-lg btn-primary btn-block')); ?>
            </div>

    <?php $this->endWidget(); ?>
