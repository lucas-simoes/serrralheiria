<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'materiais-form',
	'enableAjaxValidation'=>false,
)); 
    $unidade

?>

	<?php echo $form->errorSummary($model); ?>

	<div class="form-group row">
            <div class="col-md-6">
		<?php echo $form->labelEx($model,'nome'); ?>
		<?php echo $form->textField($model,'nome',array('size'=>60,'maxlength'=>40, 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'nome'); ?>
            </div>
	
            <div class="col-md-3">
		<?php echo $form->labelEx($model,'unidade'); ?>
		<?php echo $form->dropdownList($model,'unidade', $this->_unidades, array('empty'=>'', 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'unidade'); ?>
            </div>
	
            <div class="col-md-3">
		<?php echo $form->labelEx($model,'valor'); ?>
		<?php echo $form->textField($model,'valor',array('size'=>60,'maxlength'=>20, 'class'=>'money form-control')); ?>
		<?php echo $form->error($model,'valor'); ?>
            </div>
	</div>

	<div class="row buttons">
            <div class="col-md-12">
		<?php echo CHtml::submitButton('Salvar', array('class'=>'btn btn-lg btn-primary')); ?>
            </div>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->