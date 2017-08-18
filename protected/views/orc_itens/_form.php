<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'orc-itens-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'orcamentosId'); ?>
		<?php echo $form->textField($model,'orcamentosId'); ?>
		<?php echo $form->error($model,'orcamentosId'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'materiaisId'); ?>
		<?php echo $form->textField($model,'materiaisId'); ?>
		<?php echo $form->error($model,'materiaisId'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'quantidade'); ?>
		<?php echo $form->textField($model,'quantidade',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'quantidade'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'valorUnitario'); ?>
		<?php echo $form->textField($model,'valorUnitario'); ?>
		<?php echo $form->error($model,'valorUnitario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'valorTotal'); ?>
		<?php echo $form->textField($model,'valorTotal'); ?>
		<?php echo $form->error($model,'valorTotal'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->