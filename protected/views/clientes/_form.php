<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'clientes-form',
	'enableAjaxValidation'=>false,
)); ?>

	<?php echo $form->errorSummary($model); ?>

	<div class="form-group row">
            <div class="col-md-4">
		<?php echo $form->labelEx($model,'nome'); ?>
		<?php echo $form->textField($model,'nome',array('size'=>60,'maxlength'=>80, 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'nome'); ?>
            </div>
            
            <div class="col-md-4">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>40, 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'email'); ?>
            </div>
            
            <div class="col-md-4">
		<?php echo $form->labelEx($model,'telefone'); ?>
		<?php echo $form->textField($model,'telefone', array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'telefone'); ?>
            </div>
        </div>
	
        <div class="form-group row">
            <div class="col-md-4">
		<?php echo $form->labelEx($model,'endereco'); ?>
		<?php echo $form->textField($model,'endereco',array('size'=>60,'maxlength'=>80, 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'endereco'); ?>
            </div>
	
            <div class="col-md-4">
		<?php echo $form->labelEx($model,'cidade'); ?>
		<?php echo $form->textField($model,'cidade',array('size'=>60,'maxlength'=>30, 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'cidade'); ?>
            </div>
	
            <div class="col-md-4">
		<?php echo $form->labelEx($model,'estado'); ?>
		<?php echo $form->dropdownList($model, 'estado', array()/*CHtml::listData(estados::model()->findAll(), 'estado_sigla', 'estado_nome')*/, array('class'=>'form-control', 'empty'=>'')); ?>
		<?php echo $form->error($model,'estado'); ?>
            </div>
	</div>

	<div class="row buttons">
            <div class="col-md-12">
		<?php echo CHtml::submitButton('Salvar', array('class'=>'btn btn-lg btn-primary')); ?>
            </div>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->

<script type="text/javascript">
    function loading() {
        document.getElementById('loading').style.display = 'block';
    }    
          
});
</script>