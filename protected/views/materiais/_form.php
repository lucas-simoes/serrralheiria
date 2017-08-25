<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'materiais-form',
	'enableAjaxValidation'=>false,
)); 
    $unidade

?>

	<?php echo $form->errorSummary($model); ?>

	<div class="form-group row">
		<?php echo $form->labelEx($model,'nome', array('class'=>'control-label col-md-2 col-sm-2 col-xs-12')); ?>
            <div class="col-md-10 col-sm-10 col-xs-12">
		<?php echo $form->textField($model,'nome',array('size'=>60,'maxlength'=>40)); ?>
		<?php echo $form->error($model,'nome'); ?>
            </div>
	</div>

	<div class="form-group row">
		<?php echo $form->labelEx($model,'unidade', array('class'=>'control-label col-md-2 col-sm-2 col-xs-12')); ?>
            <div class="col-md-10 col-sm-10 col-xs-12">
		<?php echo $form->dropdownList($model,'unidade', $this->_unidades, array('empty'=>'')); ?>
		<?php echo $form->error($model,'unidade'); ?>
            </div>
	</div>

	<div class="form-group row">
		<?php echo $form->labelEx($model,'valor', array('class'=>'control-label col-md-2 col-sm-2 col-xs-12')); ?>
            <div class="col-md-10 col-sm-10 col-xs-12">
		<?php echo $form->textField($model,'valor',array('size'=>60,'maxlength'=>20, 'class'=>'money')); ?>
		<?php echo $form->error($model,'valor'); ?>
            </div>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Salvar', array('class'=>'btn btn-default')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->