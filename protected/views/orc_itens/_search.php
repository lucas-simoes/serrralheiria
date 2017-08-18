<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'itensId'); ?>
		<?php echo $form->textField($model,'itensId'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'orcamentosId'); ?>
		<?php echo $form->textField($model,'orcamentosId'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'materiaisId'); ?>
		<?php echo $form->textField($model,'materiaisId'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'quantidade'); ?>
		<?php echo $form->textField($model,'quantidade',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'valorUnitario'); ?>
		<?php echo $form->textField($model,'valorUnitario'); ?>
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