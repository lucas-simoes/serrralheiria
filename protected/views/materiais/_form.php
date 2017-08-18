<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'materiais-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nome'); ?>
		<?php echo $form->textField($model,'nome',array('size'=>40,'maxlength'=>40)); ?>
		<?php echo $form->error($model,'nome'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'unidade'); ?>
		<?php echo $form->textField($model,'unidade',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'unidade'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'valor'); ?>
		<?php echo $form->textField($model,'valor'); ?>
		<?php echo $form->error($model,'valor'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->