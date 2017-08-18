<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'orcamentos-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'clientesId'); ?>
		<?php echo $form->textField($model,'clientesId'); ?>
		<?php echo $form->error($model,'clientesId'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nomeCliente'); ?>
		<?php echo $form->textField($model,'nomeCliente',array('size'=>60,'maxlength'=>80)); ?>
		<?php echo $form->error($model,'nomeCliente'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telefoneCliente'); ?>
		<?php echo $form->textField($model,'telefoneCliente',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'telefoneCliente'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'validade'); ?>
		<?php echo $form->textField($model,'validade'); ?>
		<?php echo $form->error($model,'validade'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'valorMaterial'); ?>
		<?php echo $form->textField($model,'valorMaterial'); ?>
		<?php echo $form->error($model,'valorMaterial'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'valorMO'); ?>
		<?php echo $form->textField($model,'valorMO'); ?>
		<?php echo $form->error($model,'valorMO'); ?>
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