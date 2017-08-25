<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'clientes-form',
	'enableAjaxValidation'=>false,
)); ?>

	<?php echo $form->errorSummary($model); ?>

	<div class="form-group row">
		<?php echo $form->labelEx($model,'nome', array('class'=>'control-label col-md-2 col-sm-2 col-xs-12')); ?>
            <div class="col-md-10 col-sm-10 col-xs-12">
		<?php echo $form->textField($model,'nome',array('size'=>60,'maxlength'=>80)); ?>
		<?php echo $form->error($model,'nome'); ?>
            </div>
	</div>

	<div class="form-group row">
		<?php echo $form->labelEx($model,'endereco', array('class'=>'control-label col-md-2 col-sm-2 col-xs-12')); ?>
            <div class="col-md-10 col-sm-10 col-xs-12">
		<?php echo $form->textField($model,'endereco',array('size'=>60,'maxlength'=>80)); ?>
		<?php echo $form->error($model,'endereco'); ?>
            </div>
	</div>

	<div class="form-group row">
		<?php echo $form->labelEx($model,'cidade', array('class'=>'control-label col-md-2 col-sm-2 col-xs-12')); ?>
            <div class="col-md-10 col-sm-10 col-xs-12">
		<?php echo $form->textField($model,'cidade',array('size'=>60,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'cidade'); ?>
            </div>
	</div>

	<div class="form-group row">
		<?php echo $form->labelEx($model,'estado', array('class'=>'control-label col-md-2 col-sm-2 col-xs-12')); ?>
            <div class="col-md-10 col-sm-10 col-xs-12">
		<?php echo $form->dropdownList($model, 'estado', CHtml::listData(estados::model()->findAll(), 'estado_sigla', 'estado_nome'), array('empty'=>'')); ?>
		<?php echo $form->error($model,'estado'); ?>
            </div>
	</div>

	<div class="form-group row">
		<?php echo $form->labelEx($model,'email', array('class'=>'control-label col-md-2 col-sm-2 col-xs-12')); ?>
            <div class="col-md-10 col-sm-10 col-xs-12">
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>40)); ?>
		<?php echo $form->error($model,'email'); ?>
            </div>
	</div>

	<div class="form-group row">
		<?php echo $form->labelEx($model,'telefone', array('class'=>'control-label col-md-2 col-sm-2 col-xs-12')); ?>
            <div class="col-md-10 col-sm-10 col-xs-12">
		<?php echo $form->textField($model,'telefone'); ?>
		<?php echo $form->error($model,'telefone'); ?>
            </div>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Salvar', array('class'=>'btn btn-default')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->

<script type="text/javascript">
    function loading() {
        document.getElementById('loading').style.display = 'block';
    }    
          
});
</script>