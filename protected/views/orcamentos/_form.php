<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'orcamentos-form',
	'enableAjaxValidation'=>false,
)); ?>

	<?php echo $form->errorSummary($model); ?>

	<div class="form-group row">
		<?php echo $form->labelEx($model,'clientesId', array('class'=>'control-label col-md-2 col-sm-2 col-xs-12')); ?>
            <div class="col-md-10 col-sm-10 col-xs-12">
		<?php echo $form->dropdownList($model,'clientesId', CHtml::listData(clientes::model()->findAll(), 'clientesId', 'nome'), array('empty'=>'')); ?>
		<?php echo $form->error($model,'clientesId'); ?>
            </div>
	</div>

	<div class="form-group row">
                <?php echo $form->labelEx($model,'telefoneCliente', array('class'=>'control-label col-md-2 col-sm-2 col-xs-12')); ?>
            <div class="col-md-10 col-sm-10 col-xs-12">
                <?php echo $form->textField($model,'telefoneCliente',array('size'=>20,'maxlength'=>20)); ?>
                <?php echo $form->error($model,'telefoneCliente'); ?>
            </div>
	</div>
    
        <div class="form-group row">
                <?php echo $form->labelEx($model,'validade', array('class'=>'control-label col-md-2 col-sm-2 col-xs-12')); ?>
            <div class="col-md-10 col-sm-10 col-xs-12">
                <?php echo $form->dateField($model,'validade'); ?>
                <?php echo $form->error($model,'validade'); ?>
            </div>
        </div>

	<div class="form-group row">
		<?php echo $form->labelEx($model,'valorMO', array('class'=>'control-label col-md-2 col-sm-2 col-xs-12')); ?>
            <div class="col-md-10 col-sm-10 col-xs-12">
		<?php echo $form->textField($model,'valorMO', array('class'=>'money')); ?>
		<?php echo $form->error($model,'valorMO'); ?>
            </div>
	</div>

	<div class="form-group row">
		<?php echo $form->labelEx($model,'valorTotal', array('class'=>'control-label col-md-2 col-sm-2 col-xs-12')); ?>
            <div class="col-md-10 col-sm-10 col-xs-12">
		<?php echo $form->textField($model,'valorTotal', array('class'=>'money')); ?>
		<?php echo $form->error($model,'valorTotal'); ?>
            </div>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Salvar', array('class'=>'btn btn-default')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->