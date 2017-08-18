<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'orcamentosId'); ?>
		<?php echo $form->textField($model,'orcamentosId'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'clientesId'); ?>
		<?php echo $form->textField($model,'clientesId'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nomeCliente'); ?>
		<?php echo $form->textField($model,'nomeCliente',array('size'=>60,'maxlength'=>80)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'telefoneCliente'); ?>
		<?php echo $form->textField($model,'telefoneCliente',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'validade'); ?>
		<?php echo $form->textField($model,'validade'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'valorMaterial'); ?>
		<?php echo $form->textField($model,'valorMaterial'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'valorMO'); ?>
		<?php echo $form->textField($model,'valorMO'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'valorTotal'); ?>
		<?php echo $form->textField($model,'valorTotal'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->